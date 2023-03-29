document.addEventListener('DOMContentLoaded', () => {
    // Get the new password input field and submit button
    const newPassword = document.getElementById('new_pass');
    const submitButton = document.getElementById('submit-btn');

    // Add an event listener to the new password input field
    newPassword.addEventListener('input', () => {
        // Enable the submit button if the new password is not empty
        if (newPassword.value !== '') {
            submitButton.removeAttribute('disabled');
        }
        // Disable the submit button if the new password is empty
        else {
            submitButton.setAttribute('disabled', 'disabled');
        }
    });
});