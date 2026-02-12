const btn = document.querySelector('.password-toggle');
const passwordEl = document.querySelector('.pass');
const eyeIcon = document.querySelector('#eye-icon');

btn.addEventListener('click', () => {
    // We use the current src to figure out the base folder path
    const currentSrc = eyeIcon.src;
    const folderPath = currentSrc.substring(0, currentSrc.lastIndexOf("/") + 1);

    if (passwordEl.type === "password") {
        passwordEl.type = "text";
        eyeIcon.src = folderPath + 'eye-slash.svg';
    } else {
        passwordEl.type = "password";
        eyeIcon.src = folderPath + 'eye-open.svg';
    }
});