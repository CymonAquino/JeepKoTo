<?php
$servername = "localhost"; // Your database host
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "intelliride";      // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if latitude and longitude are set in the POST request
if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Prepare the SQL query to update the location
    $sql = "UPDATE bus_location SET latitude = ?, longitude = ?";  // Assuming you have only one bus to update at a time

    // Prepare and bind the parameters
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("dd", $latitude, $longitude);

        if ($stmt->execute()) {
            echo "Location updated successfully";
        } else {
            echo "Error updating location: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "SQL prepare error: " . $conn->error;
    }
} else {
    echo "Error: Latitude and Longitude not provided.";
}

$conn->close();
?>