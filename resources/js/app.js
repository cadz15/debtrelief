import "./bootstrap";

AOS.init();

document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".step");
    const nextButtons = document.querySelectorAll(".next");
    const currentActiveStep = document.querySelector(".step.active");
    let currentStep = parseInt(currentActiveStep.dataset.step) - 1 || 0;

    function showStep(index) {
        steps.forEach((step, i) => {
            step.classList.toggle("active", i === index);
            step.style.display = i === index ? "block" : "none";

            // Remove previous validation messages
            const error = step.querySelector(".validation-error");
            if (error) error.remove();
        });
    }

    function validateStep(stepIndex) {
        const current = steps[stepIndex];
        let isValid = false;

        if (stepIndex === 0 || stepIndex === 1) {
            const checkboxes = current.querySelectorAll(
                'input[type="checkbox"]'
            );
            isValid = Array.from(checkboxes).some(
                (checkbox) => checkbox.checked
            );
        }

        if (stepIndex === 2) {
            const radios = current.querySelectorAll('input[type="radio"]');
            isValid = Array.from(radios).some((radio) => radio.checked);
        }

        // Show error if not valid
        let error = current.querySelector(".validation-error");
        if (!isValid) {
            if (!error) {
                error = document.createElement("p");
                error.className =
                    "validation-error text-red-500 text-sm mt-2 text-center";
                error.textContent =
                    "Please select at least one option to continue.";
                current.appendChild(error);
            }
        } else if (error) {
            error.remove();
        }

        return isValid;
    }

    nextButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
            if (validateStep(currentStep)) {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        });
    });

    showStep(currentStep);
});

document.addEventListener("DOMContentLoaded", function () {
    const rangeInput = document.getElementById("debtRange");
    const rangeDisplay = rangeInput.nextElementSibling;

    // Make span contenteditable
    rangeDisplay.setAttribute("contenteditable", "true");
    rangeDisplay.classList.add(
        "outline",
        "outline-1",
        "outline-gray-300",
        "focus:outline-blue-400"
    );

    const MIN = +rangeInput.min;
    const MAX = +rangeInput.max;

    function formatAsCurrency(value) {
        return `$${parseInt(value).toLocaleString()}`;
    }

    function parseCurrency(value) {
        return parseInt(value.replace(/[^\d]/g, "")) || 0;
    }

    function clampValue(val, min, max) {
        return Math.min(Math.max(val, min), max);
    }

    // Update span when range input changes
    rangeInput.addEventListener("input", function () {
        rangeDisplay.textContent = formatAsCurrency(this.value);
    });

    // Real-time update while typing in the span
    rangeDisplay.addEventListener("input", function () {
        let rawValue = parseCurrency(this.textContent);
        rawValue = clampValue(rawValue, MIN, MAX);
        rangeInput.value = rawValue;
        this.textContent = formatAsCurrency(rawValue);

        // Move caret to end after auto-formatting
        placeCaretAtEnd(this);
    });

    // Restrict to numeric typing only (and basic navigation)
    rangeDisplay.addEventListener("keydown", function (e) {
        const allowedKeys = [
            "Backspace",
            "ArrowLeft",
            "ArrowRight",
            "Delete",
            "Tab",
        ];
        if (!/\d/.test(e.key) && !allowedKeys.includes(e.key)) {
            e.preventDefault();
        }
    });

    // Ensure valid formatting on blur
    rangeDisplay.addEventListener("blur", function () {
        let rawValue = parseCurrency(this.textContent);
        rawValue = clampValue(rawValue, MIN, MAX);
        rangeInput.value = rawValue;
        this.textContent = formatAsCurrency(rawValue);
    });

    // Initialize on load
    rangeDisplay.textContent = formatAsCurrency(rangeInput.value);

    function placeCaretAtEnd(el) {
        const range = document.createRange();
        const sel = window.getSelection();
        range.selectNodeContents(el);
        range.collapse(false);
        sel.removeAllRanges();
        sel.addRange(range);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.getElementById("phoneNumber");

    phoneInput.addEventListener("input", function (e) {
        var x = e.target.value
            .replace(/\D/g, "")
            .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2]
            ? x[1]
            : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
    });
});
