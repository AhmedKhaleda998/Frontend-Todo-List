const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const loginBtn = document.getElementById('loginBtn');

loginBtn.addEventListener('click', () => {
    const username = usernameInput.value;
    const password = passwordInput.value;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
    if (username.trim() === '' || password.trim() === '') {
        showMessage('Please fill in both username and password fields.');
    } else if (!passwordRegex.test(password)) {
        showMessage('Password must contain at least one lowercase letter, one uppercase letter, one digit, and be at least 8 characters long.');
    } else {
        showMessage('Welcome');
    }
});

function showMessage(message) {
    const messageDiv = document.createElement('div');
    messageDiv.textContent = message;
    if (message === 'Welcome') {
        messageDiv.style.backgroundColor = '#4CAF50';
    } else {
        messageDiv.style.backgroundColor = '#DC3545';
    }
    messageDiv.style.color = '#fff';
    messageDiv.style.padding = '10px';
    messageDiv.style.borderRadius = '3px';
    messageDiv.style.marginTop = '10px';

    const oldMessage = document.querySelector('.message');
    if (oldMessage) {
        oldMessage.remove();
    }

    const loginContainer = document.querySelector('.login-container');
    loginContainer.appendChild(messageDiv);
    messageDiv.classList.add('message');
}
