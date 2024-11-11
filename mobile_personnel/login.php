<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password is empty for XAMPP
$dbname = "intelliRide"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture login data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get JSON input
    $input = json_decode(file_get_contents("php://input"), true);
    if (isset($input['username']) && isset($input['password'])) {
        $email = $input['username'];
        $password = $input['password'];

        // Call the logIn function
        $loginMessage = logIn($conn, $email, $password);
        echo $loginMessage;
    } else {
        echo "All fields are required";
    }
} else {
    echo "Invalid request method";
}

// Function for login
function logIn($conn, $email, $password)
{
    // Prepare the SQL statement to select the password based on the email
    $stmt = $conn->prepare("SELECT password FROM personneldata WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with that email exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


        // Check if 'password' key exists before accessing it
        if (isset($row['password'])) {
            $stored_password = $row['password']; // Get the stored password

            // Compare the entered password with the stored password
            if ($password === $stored_password) {
                return "Login successful!";
            } else {
                return "Incorrect password.";
            }
        } else {
            return "Unexpected error: Password key is missing.";
        }
    } else {
        return "No user found with that email.";
    }
}

// Close the connection
$conn->close();
?>