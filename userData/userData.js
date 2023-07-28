async function fetchUserData() {
    try {
        const response = await fetch('https://reqres.in/api/users?page=2');
        const data = await response.json();
        return data.data;
    } catch (error) {
        console.error('Error fetching user data:', error);
        return null;
    }
}

async function displayUserData() {
    const userContainer = document.getElementById('user-container');
    const usersData = await fetchUserData();
    if (usersData && usersData.length > 0) {
        usersData.forEach(user => {
            const userCard = document.createElement('div');
            userCard.classList.add('user-card');

            const userImage = document.createElement('img');
            userImage.src = user.avatar;
            userImage.alt = 'User Avatar';

            const userName = document.createElement('p');
            userName.textContent = `${user.first_name} ${user.last_name}`;

            const userEmail = document.createElement('p');
            userEmail.textContent = user.email;

            userCard.appendChild(userImage);
            userCard.appendChild(userName);
            userCard.appendChild(userEmail);

            userContainer.appendChild(userCard);
        });
    } else {
        userContainer.innerHTML = '<p>No user data available.</p>';
    }
}

window.addEventListener('load', displayUserData);