function validatePasswords() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById(
        "password_confirmation"
    ).value;
    var passwordError = document.getElementById("passwordError");

    if (password !== confirmPassword) {
        document.getElementById("password").classList.add("is-invalid");
        document
            .getElementById("password_confirmation")
            .classList.add("is-invalid");
        passwordError.classList.remove("d-none");
        return false; // Prevent form submission
    } else {
        document.getElementById("password").classList.remove("is-invalid");
        document
            .getElementById("password_confirmation")
            .classList.remove("is-invalid");
        passwordError.classList.add("d-none");
    }
    return true;
}
