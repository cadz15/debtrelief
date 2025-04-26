import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const steps = document.querySelectorAll(".step");
    let currentStep = 0;

    document.querySelectorAll(".next").forEach((button) => {
        button.addEventListener("click", () => {
            steps[currentStep].classList.remove("active");
            currentStep++;
            steps[currentStep].classList.add("active");
        });
    });

    document.querySelectorAll(".prev").forEach((button) => {
        button.addEventListener("click", () => {
            steps[currentStep].classList.remove("active");
            currentStep--;
            steps[currentStep].classList.add("active");
        });
    });

    document
        .getElementById("multiStepForm")
        .addEventListener("submit", function (e) {
            e.preventDefault();
            alert("Form submitted!");
        });
});
