(function () {
    'use strict';

    var form = document.getElementById('consultation-form');
    var modalEl = document.getElementById('consultationModal');
    var alertEl = document.getElementById('consultation-alert');
    var successEl = document.getElementById('consultation-success');
    var successTextEl = document.getElementById('consultation-success-text');
    var submitBtn = document.getElementById('consultation-submit');
    var serviceHidden = document.getElementById('consultation_service');
    var interestSelect = document.getElementById('consultation_interest');
    var contextEl = document.getElementById('consultation-modal-context');

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
            submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin me-2"></i><span>Sending request…</span>';
        } else {
            submitBtn.innerHTML = '<span>Send consultation request</span><i class="fa-solid fa-paper-plane"></i>';
        }
    }

    function resetFormState() {
        form.reset();
        form.classList.remove('d-none');
        hideAlert();
        if (successEl) {
            successEl.classList.add('d-none');
        }
        if (serviceHidden) {
            serviceHidden.value = '';
        }
        if (contextEl) {
            contextEl.textContent = 'Tell us about your project—we respond within 1–2 business days.';
        }
        pendingService = '';
        setSubmitting(false);
    }

    function syncNiceSelect(selectEl) {
        if (!selectEl || !window.jQuery || !jQuery.fn.niceSelect) {
            return;
        }

        if (jQuery(selectEl).next('.nice-select').length) {
            jQuery(selectEl).niceSelect('update');
        }
    }

    function applyServiceContext(service) {
        if (!service) {
            return;
        }

        if (serviceHidden) {
            serviceHidden.value = service;
        }

        if (interestSelect) {
            var matched = false;
            Array.prototype.forEach.call(interestSelect.options, function (opt) {
                if (opt.value === service) {
                    interestSelect.value = service;
                    matched = true;
                }
            });
            if (!matched) {
                interestSelect.value = '';
            }
            syncNiceSelect(interestSelect);
        }

        if (contextEl) {
            contextEl.textContent = 'Consultation for ' + service + ' — share your goals and we will respond within 1–2 business days.';
        }
    }

    var pendingService = '';

    document.querySelectorAll('.consultation-modal-trigger').forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            pendingService = trigger.getAttribute('data-consultation-service') || '';
            applyServiceContext(pendingService);
        });
    });

    modalEl.addEventListener('show.bs.modal', function (event) {
        var trigger = event.relatedTarget;
        if (trigger && trigger.classList.contains('consultation-modal-trigger')) {
            pendingService = trigger.getAttribute('data-consultation-service') || '';
        }
        applyServiceContext(pendingService);
    });

    modalEl.addEventListener('shown.bs.modal', function () {
        applyServiceContext(pendingService);
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        hideAlert();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        setSubmitting(true);

        fetch('handlers/consultation-inquiry.php', {
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
                    throw new Error(result.data.message || 'Unable to send request.');
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
