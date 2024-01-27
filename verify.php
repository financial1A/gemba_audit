<?php
    // Database connection
    $servername = "127.0.0.1:3000";
    $username = "root";
    $password = "";
    $dbname = "financia_Mileage";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // User input
    $login_user = $_POST['login_user'];
    $login = $_POST['login'];
	

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM control WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $login_user, $login);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    // Check if username exists
    if($result->num_rows > 0){
        // Get the randomId from the form submission
        $randomId = $_POST['randomId'];

        // Get the current time
        $time = date('Y-m-d H:i:s');

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO activeusers (randomId, time, username) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $randomId, $time, $login_user);

        // Execute the statement
        $stmt->execute();

     
      

        echo('<html><head><script>setTimeout(function(){ location.href="Functions.php";},1000)</script><style>body{background-color:green;padding: 300px;color:white;}</style></head><body><h1>LOGIN SUCCESSFULL</h1> </body></html>');
    } else {
        echo('<html><head><script>setTimeout(function(){ location.href="index.php";},1000)</script><style>body{background-color:red;padding: 300px;color:white;}</style></head><body><h1>INVALID LOGIN</h1> </body></html>');
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
?>




<!--all newlogin details record in newlogin table-->

<!-- CREATE TABLE newlogin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    login_time DATETIME NOT NULL,
    ip_address VARCHAR(45) NOT NULL
); -->

