const inputs = document.querySelectorAll("input.code-input"),
    button = document.querySelector("button"),
    hiddenInput = document.getElementById("code");
var localizedSeconds = window.localizedSeconds || "seconds"; // fallback to 'seconds'

// Handle keyup events for each input
inputs.forEach((input, index1) => {
    input.addEventListener("keyup", (e) => {
        const currentInput = input,
            nextInput = input.nextElementSibling,
            prevInput = input.previousElementSibling;

        // Clear input if the value has more than one character or is empty
        if (currentInput.value.length > 1 || currentInput.value.length < 1) {
            currentInput.value = "";
            return;
        }

        // Enable the next input and focus on it if the current value is not empty
        if (
            nextInput &&
            nextInput.hasAttribute("disabled") &&
            currentInput.value !== ""
        ) {
            nextInput.removeAttribute("disabled");
            nextInput.focus();
        }

        // Handle Backspace key event
        if (e.key === "Backspace") {
            if (prevInput) {
                currentInput.value = "";
                prevInput.focus();
            }

            inputs.forEach((input, index2) => {
                if (index2 > index1) {
                    input.setAttribute("disabled", true);
                    input.value = "";
                }
            });
        }

        // Update the hidden input with the combined code
        let combinedValue = "";
        inputs.forEach((input) => (combinedValue += input.value));
        hiddenInput.value = combinedValue;

        // Activate the button if all inputs are filled
        if (inputs[inputs.length - 1].value !== "") {
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });
});

// Focus the first input on window load
window.addEventListener("load", () => inputs[0].focus());

// Ensure the hidden input contains the correct combined value before form submission
button.addEventListener("click", () => {
    let combinedValue = "";
    inputs.forEach((input) => (combinedValue += input.value));
    hiddenInput.value = combinedValue;
});

document.addEventListener("DOMContentLoaded", function () {
    var countdownElement = document.getElementById("countdown");
    var timeLeft = 40; // Starting from 40 seconds

    var timer = setInterval(function () {
        timeLeft--;

        if (timeLeft >= 0) {
            countdownElement.textContent = timeLeft + " " + localizedSeconds;
        }

        if (timeLeft === 0) {
            countdownElement.style.color = "red"; // Change color to red
            clearInterval(timer); // Stop the countdown
        }
    }, 1000);
});
