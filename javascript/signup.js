const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");
const passwordMatchMessage = document.getElementById("passwordMatchMessage");

function matchPassword() {
    if (password.value === confirmPassword.value && password.value !== '' && confirmPassword.value !== '') {
        passwordMatchMessage.textContent = 'Passwords match';
        passwordMatchMessage.style.color = 'green';
    } else {
        passwordMatchMessage.textContent = 'Passwords do not match';
        passwordMatchMessage.style.color = 'red';
    }
}

// Attach event listeners
confirmPassword.addEventListener('input', matchPassword);
password.addEventListener('input', matchPassword);


/*
function validateEmail() {
    // Regular expression for validating email addresses
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(email.value)) {
        // Display error message in the HTML instead of using an alert
        document.getElementById("emailError").textContent = 'Invalid Email format';
    } else {
        // Clear the error message if the email format is valid
        document.getElementById("emailError").textContent = '';
    }
}
*/

/*
document.getElementById("email").addEventListener('input', validateEmail);
*/