// Script for Login Page

const btn = document.querySelector('.password-toggle');
const passwordEl = document.querySelector('.pass');
const eyeIcon = document.querySelector('#eye-icon'); // Target the object

btn.addEventListener('click', () => {
    if (passwordEl.type === "password") {
        passwordEl.type = "text";
        // Change the data attribute to the slash icon
        eyeIcon.setAttribute('data', '../icons/eye-slash.svg');
    } else {
        passwordEl.type = "password";
        // Change it back to the open eye
        eyeIcon.setAttribute('data', '../icons/eye-open.svg');
    }
});