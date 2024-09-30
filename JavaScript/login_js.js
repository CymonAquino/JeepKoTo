document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Replace these credentials with your own validation logic
    const adminUsername = 'admin';
    const adminPassword = 'password123';

    if (username === adminUsername && password === adminPassword) {
        // Redirect to the admin dashboard (replace 'dashboard.html' with your actual dashboard page)
        window.location.href = 'dashboard.html';
    } else {
        // Show error message
        document.getElementById('errorMessage').textContent = 'Invalid username or password';
        document.getElementById('username').value = '';
        document.getElementById('password').value = '';
    }
});
