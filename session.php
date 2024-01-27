<?php

$servername = "127.0.0.1:3000";
$username = "root";
$password = "";
$dbname = "financia_Mileage";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_ip = $_SERVER['REMOTE_ADDR'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM control WHERE username IN (
  SELECT IFNULL(
    (SELECT username FROM newlogin WHERE ip_address = ? AND TIMESTAMPDIFF(MINUTE, login_time, NOW()) < 30 LIMIT 1),
    '123456'
  )
)");
$stmt->bind_param("s", $user_ip);

// Execute the statement
$stmt->execute();

// Store the result
$stmt->store_result();

// Check if the user exists
if ($stmt->num_rows > 0) {

    
    echo'<script>console.log("session php added.");</script>';
} else {
    header('location: http://10.88.16.76/');
}

// Close the statement
$stmt->close();
$conn->close();

?>
