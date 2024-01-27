


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

$a61 = str_replace(array("'", "\""), "", $_POST['date']);
$site = str_replace(array("'", "\""), "", $_POST['site']);



// Prepare and bind
$sql = "INSERT INTO AdvanceVoucher (Location, AdvanceVoucherNo, ReasonForAdvance, VoucherApproved, ERPUpdated, AdvanceIssueDate,subsequent,delay,date,site)
 VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a61','$site'),
('$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a61','$site'),
('$a17','$a18','$a19','$a20','$a21','$a22','$a23','$a24','$a61','$site'),
('$a25','$a26','$a27','$a28','$a29','$a30','$a31','$a32','$a61','$site'),
('$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40','$a61','$site')";


if ($conn->query($sql) === TRUE) {
    echo('<html><head><script>setTimeout(function(){ location.href="http://10.88.16.76:500/Functions.php";},1000)</script><style>body{background-color:green;padding: 300px;color:white;}</style></head><body><h1>CREATED SUCCESSFULL</h1> </body></html>');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>