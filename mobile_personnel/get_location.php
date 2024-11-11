<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelliride";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch bus locations from database
$sql = "SELECT latitude, longitude FROM bus_location";
$result = $conn->query($sql);

$busLocations = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $busLocations[] = ['lat' => $row['latitude'], 'lng' => $row['longitude']];
    }
}

echo json_encode($busLocations);
$conn->close();
?>