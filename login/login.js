const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');
const loginBtn = document.getElementById('loginBtn');

loginBtn.addEventListener('click', () => {
    const username = usernameInput.value;
    const password = passwordInput.value;

    const login = {
        username: username,
        password: password,
    };

    if (login.username === 'admin' && login.password === '123') {
        showMessage('Welcome');
    } else {
        showMessage('Not registered');
    }
});

function showMessage(message) {
    const messageDiv = document.createElement('div');
    messageDiv.textContent = message;
    if (message === 'Welcome') {
        messageDiv.style.backgroundColor = '#4CAF50';
    }else{
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
