<?php
    // Check if request is a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get latitude and longitude from POST request
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        // Create a new mysqli object
        $servername = "127.0.0.1:3000";
$username = "root";
$password = "";
$dbname = "financia_Mileage";


$mysqli = new mysqli($servername, $username, $password, $dbname);

        // Check for any connection errors
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        // Prepare an SQL statement
        $stmt = $mysqli->prepare("INSERT INTO locations (latitude, longitude) VALUES (?, ?)");

        // Bind parameters to the SQL statement
        $stmt->bind_param('dd', $latitude, $longitude);

        // Execute the SQL statement
        $stmt->execute();

        // Close the statement and the connection
        $stmt->close();
        $mysqli->close();

        echo "Location received: Latitude - " . $latitude . ", Longitude - " . $longitude;
    } else {
        echo "Error: Request should be POST";
    }
?>
