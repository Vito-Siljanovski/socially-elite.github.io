// Select the form element and related elements
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.form-state');
    const formBox = document.querySelector('.box-form');
    const tryAgainBtn = document.querySelector('.box-form__error .btn');

    // Initialize Parsley for the form using jQuery ($)
    const parsleyForm = $(form).parsley();

    // Event listener for form submission
    form.addEventListener('submit', event => {
        event.preventDefault(); // Prevent the form from submitting normally

        // Validate the form using Parsley
        parsleyForm.validate();

        // Check if the form is valid according to Parsley
        if (parsleyForm.isValid()) {
            // Form is valid
            formBox.classList.add('form-success'); // Apply success style to the form container
            formBox.classList.remove('form-error'); // Remove error style from the form container
        } else {
            // Form is invalid
            formBox.classList.add('form-error'); // Apply error style to the form container
            formBox.classList.remove('form-success'); // Remove success style from the form container
        }
    });

    // Event listener for the "Try Again" button
    tryAgainBtn.addEventListener('click', event => {
        event.preventDefault(); // Prevent the default action of the link/button

        // Reset form state to the regular input state
        formBox.classList.remove('form-error'); // Remove error style from the form container

        // Optionally, you can reset the form fields as well
        parsleyForm.reset();
    });
});