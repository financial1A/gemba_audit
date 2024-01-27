
  <span style="padding-left:200px;"><label for="site">SITE:</label>
  <?php
// Replace with your database connection details
$servername = "127.0.0.1:3000";
$username = "root";
$password = "";
$dbname = "financia_Mileage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from site table
$sql = "SELECT sitename FROM site";
$result = $conn->query($sql);
?>

<select id="site" size="3" onchange="showCapital(),loadData()" required>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["sitename"] . '">' . $row["sitename"] . '</option>';
        }
    }
    ?>
</select>

<input id="sitename" name="site" readonly required onchange="">

<?php
$conn->close();
?>

<script>
        function showCapital() {
            var site = document.getElementById("site");
            var sitename = document.getElementById("sitename");
            
            sitename.value = site.value;
        }
    </script>
</span>


