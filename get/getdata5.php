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

$date = $_GET['date'];$site = $_GET['site'];

$sql = "SELECT Location, CashInvoiceNo, CustomerId, SettlementOfCashInvoice, TemporaryCreditSale, CreditApplicationFormAttached, GatePassIssued, ItemsDelivered, CalculationAccuracy FROM (SELECT * FROM CashInvoice WHERE date = ? AND site = ? ORDER BY id DESC LIMIT 10) sub ORDER BY id ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $date,$site);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_all(MYSQLI_NUM);

// Get the first 21 rows
$selected_data = array_slice($data, 0, 10);

echo json_encode($selected_data);

?>
