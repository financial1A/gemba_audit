


<?php

    // Database connection
  $servername = "127.0.0.1:3000";
$username = "root";
$password = "";
$dbname = "genba";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


$a1 = str_replace(array("'", "\""), "", $_POST['1']);
$a2 = str_replace(array("'", "\""), "", $_POST['2']);
$a3 = str_replace(array("'", "\""), "", $_POST['3']);
$a4 = str_replace(array("'", "\""), "", $_POST['4']);
$a5 = str_replace(array("'", "\""), "", $_POST['5']);
$a6 = str_replace(array("'", "\""), "", $_POST['6']);
$a7 = str_replace(array("'", "\""), "", $_POST['7']);
$a8 = str_replace(array("'", "\""), "", $_POST['8']);
$a9 = str_replace(array("'", "\""), "", $_POST['9']);
$a10 = str_replace(array("'", "\""), "", $_POST['10']);
$a11 = str_replace(array("'", "\""), "", $_POST['11']);
$a12 = str_replace(array("'", "\""), "", $_POST['12']);
$a13 = str_replace(array("'", "\""), "", $_POST['13']);
$a14 = str_replace(array("'", "\""), "", $_POST['14']);
$a15 = str_replace(array("'", "\""), "", $_POST['15']);
$a16 = str_replace(array("'", "\""), "", $_POST['16']);
$a17 = str_replace(array("'", "\""), "", $_POST['17']);
$a18 = str_replace(array("'", "\""), "", $_POST['18']);
$a19 = str_replace(array("'", "\""), "", $_POST['19']);
$a20 = str_replace(array("'", "\""), "", $_POST['20']);
$a21 = str_replace(array("'", "\""), "", $_POST['21']);
$a22 = str_replace(array("'", "\""), "", $_POST['22']);
$a23 = str_replace(array("'", "\""), "", $_POST['23']);
$a24 = str_replace(array("'", "\""), "", $_POST['24']);
$a25 = str_replace(array("'", "\""), "", $_POST['25']);
$a26 = str_replace(array("'", "\""), "", $_POST['26']);
$a27 = str_replace(array("'", "\""), "", $_POST['27']);
$a28 = str_replace(array("'", "\""), "", $_POST['28']);
$a29 = str_replace(array("'", "\""), "", $_POST['29']);
$a30 = str_replace(array("'", "\""), "", $_POST['30']);
$a31 = str_replace(array("'", "\""), "", $_POST['31']);
$a32 = str_replace(array("'", "\""), "", $_POST['32']);
$a33 = str_replace(array("'", "\""), "", $_POST['33']);
$a34 = str_replace(array("'", "\""), "", $_POST['34']);
$a35 = str_replace(array("'", "\""), "", $_POST['35']);
$a36 = str_replace(array("'", "\""), "", $_POST['36']);
$a37 = str_replace(array("'", "\""), "", $_POST['37']);
$a38 = str_replace(array("'", "\""), "", $_POST['38']);
$a39 = str_replace(array("'", "\""), "", $_POST['39']);
$a40 = str_replace(array("'", "\""), "", $_POST['40']);
$a41 = str_replace(array("'", "\""), "", $_POST['41']);
$a42 = str_replace(array("'", "\""), "", $_POST['42']);
$a43 = str_replace(array("'", "\""), "", $_POST['43']);
$a44 = str_replace(array("'", "\""), "", $_POST['44']);
$a45 = str_replace(array("'", "\""), "", $_POST['45']);
$a46 = str_replace(array("'", "\""), "", $_POST['46']);
$a47 = str_replace(array("'", "\""), "", $_POST['47']);
$a48 = str_replace(array("'", "\""), "", $_POST['48']);
$a49 = str_replace(array("'", "\""), "", $_POST['49']);
$a50 = str_replace(array("'", "\""), "", $_POST['50']);
$a51 = str_replace(array("'", "\""), "", $_POST['51']);
$a52 = str_replace(array("'", "\""), "", $_POST['52']);
$a53 = str_replace(array("'", "\""), "", $_POST['53']);
$a54 = str_replace(array("'", "\""), "", $_POST['54']);
$a55 = str_replace(array("'", "\""), "", $_POST['55']);
$a56 = str_replace(array("'", "\""), "", $_POST['56']);
$a57 = str_replace(array("'", "\""), "", $_POST['57']);
$a58 = str_replace(array("'", "\""), "", $_POST['58']);
$a59 = str_replace(array("'", "\""), "", $_POST['59']);
$a60 = str_replace(array("'", "\""), "", $_POST['60']);
$a61 = str_replace(array("'", "\""), "", $_POST['61']);
$a62 = str_replace(array("'", "\""), "", $_POST['62']);
$a63 = str_replace(array("'", "\""), "", $_POST['63']);
$a64 = str_replace(array("'", "\""), "", $_POST['64']);
$a65 = str_replace(array("'", "\""), "", $_POST['65']);
$a66 = str_replace(array("'", "\""), "", $_POST['66']);
$a67 = str_replace(array("'", "\""), "", $_POST['67']);
$a68 = str_replace(array("'", "\""), "", $_POST['68']);
$a69 = str_replace(array("'", "\""), "", $_POST['69']);
$a70 = str_replace(array("'", "\""), "", $_POST['70']);
$a71 = str_replace(array("'", "\""), "", $_POST['71']);
$a72 = str_replace(array("'", "\""), "", $_POST['72']);
$a73 = str_replace(array("'", "\""), "", $_POST['73']);
$a74 = str_replace(array("'", "\""), "", $_POST['74']);
$a75 = str_replace(array("'", "\""), "", $_POST['75']);
$a76 = str_replace(array("'", "\""), "", $_POST['76']);
$a77 = str_replace(array("'", "\""), "", $_POST['77']);
$a78 = str_replace(array("'", "\""), "", $_POST['78']);
$a79 = str_replace(array("'", "\""), "", $_POST['79']);
$a80 = str_replace(array("'", "\""), "", $_POST['80']);

$site = str_replace(array("'", "\""), "", $_POST['site']);
$a441 = str_replace(array("'", "\""), "", $_POST['date']);

    // Prepare and bind
   $sql="INSERT INTO vehiclemaintenance (VehicleRegNo, Site, WorkOrderNo, Status, PlannedStartDate, FinishedDate, InvoiceNo, InvoiceDate,date,outlet)
	 VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a441','$site'),
('$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a441','$site'),
('$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a441','$site'),
('$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a441','$site'),
('$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a441','$site'),
('$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a441','$site'),
('$a49','$a50','$a51','$a52','$a53','$a54','$a55','$a56','$a441','$site'),
('$a57','$a58','$a59','$a60','$a61','$a62','$a63','$a64','$a441','$site'),
('$a65','$a66','$a67','$a68','$a69','$a70','$a71','$a72','$a441','$site'),
('$a73','$a74','$a75','$a76','$a77','$a78','$a79','$a80','$a441','$site')";
 



if ($conn->query($sql) === TRUE) {
    echo('<html><head><script>setTimeout(function(){ location.href="http://10.88.16.76:500/Functions.php";},1000)</script><style>body{background-color:green;padding: 300px;color:white;}</style></head><body><h1>CREATED SUCCESSFULL</h1> </body></html>');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
