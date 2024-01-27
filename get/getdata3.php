<?php
// getdata.php
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

$date = $_GET['date'];
$site = $_GET['site'];
$sql = "SELECT Location, VoucherNo, Description, Amount, VoucherApproved, AdvanceVoucherApproved, AdvanceVoucherSettled, ExpenseRelevance, BillCertified, AdvanceVoucherUpdated, AdvanceVoucherIssueDate, Issue FROM (SELECT * FROM PettyCash WHERE date = ? AND site= ? ORDER BY id DESC LIMIT 5) sub ORDER BY id ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $date,$site);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_all(MYSQLI_NUM);

// Get the first 21 rows
$selected_data = array_slice($data, 0, 5);

echo json_encode($selected_data);

?>
