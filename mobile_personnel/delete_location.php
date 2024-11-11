<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Check if the request method is DELETE
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Parse the DELETE request data
    parse_str(file_get_contents("php://input"), $data);
    $busId = $data['bus_id'] ?? null; // Ensure `bus_id` is provided

    if ($busId) {
        // Prepare the SQL statement to delete the bus location by bus ID
        $stmt = $conn->prepare("DELETE FROM bus_location WHERE bus_id = ?");
        $stmt->bind_param("i", $busId);

        if ($stmt->execute()) {
            echo json_encode(["message" => "Location deleted successfully"]);
        } else {
            echo json_encode(["error" => "Failed to delete location"]);
        }

        $stmt->close();
    } else {
        // Missing bus ID
        echo json_encode(["error" => "Bus ID not provided"]);
    }
} else {
    // Invalid request method
    echo json_encode(["error" => "Invalid request method"]);
}

$conn->close();
?>