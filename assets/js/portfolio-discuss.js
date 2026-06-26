(function () {
    'use strict';

    var form = document.getElementById('portfolio-discuss-form');
    var modalEl = document.getElementById('portfolioDiscussModal');
    var alertEl = document.getElementById('portfolio-discuss-alert');
    var successEl = document.getElementById('portfolio-discuss-success');
    var successTextEl = document.getElementById('portfolio-discuss-success-text');
    var submitBtn = document.getElementById('portfolio-discuss-submit');

    if (!form || !modalEl) {
        return;
    }

    function showAlert(message, type) {
        if (!alertEl) {
            return;
        }
        alertEl.textContent = message;
        alertEl.className = 'alert mb-3 alert-' + (type === 'error' ? 'danger' : 'success');
        alertEl.classList.remove('d-none');
    }

    function hideAlert() {
        if (alertEl) {
            alertEl.classList.add('d-none');
        }
    }

    function setSubmitting(isSubmitting) {
        if (!submitBtn) {
            return;
        }
        submitBtn.disabled = isSubmitting;
        if (isSubmitting) {
            submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin me-2"></i><span>Sending inquiry…</span>';
        } else {
            submitBtn.innerHTML = '<span>Send project inquiry</span><i class="fa-solid fa-paper-plane"></i>';
        }
    }

    function resetFormState() {
        form.reset();
        form.classList.remove('d-none');
        hideAlert();
        if (successEl) {
            successEl.classList.add('d-none');
        }
        setSubmitting(false);
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        hideAlert();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        setSubmitting(true);

        fetch('handlers/portfolio-inquiry.php', {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
            .then(function (response) {
                return response.json().then(function (data) {
                    return { ok: response.ok, data: data };
                });
            })
            .then(function (result) {
                if (!result.ok || !result.data.success) {
                    throw new Error(result.data.message || 'Unable to send inquiry.');
                }

                form.classList.add('d-none');
                if (successTextEl) {
                    successTextEl.textContent = result.data.message;
                }
                if (successEl) {
                    successEl.classList.remove('d-none');
                }
            })
            .catch(function (error) {
                showAlert(error.message || 'Something went wrong. Please try again or email Info@deweboo.com.', 'error');
            })
            .finally(function () {
                setSubmitting(false);
            });
    });

    modalEl.addEventListener('hidden.bs.modal', resetFormState);
})();
