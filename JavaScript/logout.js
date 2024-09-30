function logout() {
    // Here you would typically clear any authentication tokens or session data
    // For this example, we'll just redirect to the login page
    window.location.href = 'login.html';
}

function showConfirmation() {
    document.getElementById('confirmation-popup').style.display = 'flex';
}

document.getElementById('confirm-logout').addEventListener('click', function() {
    // Clear authentication tokens or session data here if needed
    window.location.href = 'login.html';
});

document.getElementById('cancel-logout').addEventListener('click', function() {
    document.getElementById('confirmation-popup').style.display = 'none';
});
