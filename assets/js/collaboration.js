(function () {
    'use strict';

    function calculateRFPScore() {
        var reqDrafting = document.getElementById('req-drafting');
        var reqLogistics = document.getElementById('req-logistics');
        var reqMedical = document.getElementById('req-medical');
        var reqCompliance = document.getElementById('req-compliance');
        var textScore = document.getElementById('alignment-percentage');
        var progressBar = document.getElementById('alignment-progress-bar');
        var feedbackText = document.getElementById('alignment-feedback');

        if (!reqDrafting || !textScore || !progressBar || !feedbackText) {
            return;
        }

        var score = 50;

        if (reqDrafting.checked) {
            score += 15;
        }
        if (reqLogistics.checked) {
            score += 15;
        }
        if (reqMedical.checked) {
            score += 10;
        }
        if (reqCompliance.checked) {
            score += 10;
        }

        score = Math.min(score, 100);
        textScore.textContent = score + '%';
        progressBar.style.width = score + '%';

        if (score === 100) {
            feedbackText.textContent = 'We have fully active, proven past performances mapped across all divisions.';
            progressBar.style.background = 'linear-gradient(90deg, #10b981, #22c55e)';
            textScore.style.color = '#059669';
        } else if (score >= 75) {
            feedbackText.textContent = 'Highly aligned capability profile. Teaming documentation is ready.';
            progressBar.style.background = 'linear-gradient(90deg, #5135ff, var(--p1-clr))';
            textScore.style.color = 'var(--p1-clr)';
        } else {
            feedbackText.textContent = 'Teaming capabilities threshold met. Specific support tracks available.';
            progressBar.style.background = 'linear-gradient(90deg, #f59e0b, #eab308)';
            textScore.style.color = '#d97706';
        }
    }

    function handleFormSubmit(event) {
        event.preventDefault();

        var submitBtn = document.getElementById('collab-submit-btn');
        var modal = document.getElementById('collab-success-modal');

        if (!submitBtn || !modal) {
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin me-2"></i><span>Submitting request...</span>';

        window.setTimeout(function () {
            modal.classList.add('is-visible');
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span>Submit Group Capabilities Request</span><i class="fas fa-paper-plane ms-2"></i>';
        }, 1200);
    }

    function resetIntakeForm() {
        var form = document.getElementById('collab-intake-form');
        var modal = document.getElementById('collab-success-modal');

        if (form) {
            form.reset();
        }
        if (modal) {
            modal.classList.remove('is-visible');
        }
        calculateRFPScore();
    }

    window.calculateRFPScore = calculateRFPScore;
    window.handleCollabFormSubmit = handleFormSubmit;
    window.resetCollabIntakeForm = resetIntakeForm;

    document.addEventListener('DOMContentLoaded', calculateRFPScore);
})();
