<input type="color" id="color" style="margin-left:700px;position:fixed;margin-top:50px;" onchange="changeBackgroundColor(this.value)">
<script>
function changeBackgroundColor(color) {
   document.body.style.backgroundColor = color;
   localStorage.setItem('bgColor', color);
}

function loadBackgroundColor() {
   var storedColor = localStorage.getItem('bgColor');
   if (storedColor) {
      document.body.style.backgroundColor = storedColor;
      document.getElementById('color').value = storedColor;
   }
}
</script>

<h1>CHEQUE PAYMENT VALIDATION</h1>
<br><br>
<style>
input[type="submit"] {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

</style>





<!DOCTYPE html>
<html>
<body onload="loadBackgroundColor()">

<form action="uploads/3u.php" method="post">
<input type="date" name="date" id="date" oninput="loadData()"><br><br>
<input type="text" name="displayDate" id="displayDate"  hidden>

<?php include 'site1.php' ?>
<script>
document.getElementById("date").addEventListener('change', function() {
  let date5 = document.getElementById("date").value;
  document.getElementById("displayDate").value = date5;
});
</script>
<table id="myTable" border="1">

</table>
<br><br>
<input type="submit" value="Save">
</form>

<script>
// Headers
var headers = ["Cheque Payment Voucher no.", "Description", "Availability of Purchase Order", "Has purchase order been approved by an authorized party","Availability of 03 quotations (If applicable)","Availability of a Supplier Invoice address to TLPL","Availability of Security certification on the Invoice","Delay in days when compared the date as per the Security cerfication with the GRN","Has GRN been raised & approved","Gap in Item description, UoM & Price when compared the Supplier invoice with the approved Purchase order & GRN","Is the purchase item relevant for the business operation","Is the purchase price in line with the current market price"];

// Get the table element
var table = document.getElementById("myTable");

// Create the header row
var headerRow = document.createElement("tr");
for (var i = 0; i < headers.length; i++) {
  var th = document.createElement("th");
  th.innerHTML = headers[i];
  headerRow.appendChild(th);
}
table.appendChild(headerRow);

// Create 5 rows
var idCounter = 1;
for (var i = 0; i < 5; i++) {
  var tr = document.createElement("tr");
  for (var j = 0; j < headers.length; j++) {
    var td = document.createElement("td");
    
    // Create a textarea and add it to the table cell
    var textarea = document.createElement("textarea");
    textarea.innerHTML = "Row " + (i+1) + ", Column " + (j+1);
    
    // Add a unique name and id to the textarea
    textarea.name = idCounter;
    textarea.id = idCounter;
    idCounter++;
    
    td.appendChild(textarea);
    
    tr.appendChild(td);
  }
  table.appendChild(tr);
}
</script>
<script>
function loadData() {
  var site = document.getElementById("date").value;
  var site1 = document.getElementById("sitename").value;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var data = JSON.parse(this.responseText);console.log(data);
     for (let i = 0; i < 5; i++) {
  for (let j = 0; j < 12; j++) {
    document.getElementById((i * 12) + j + 1).value = data[i][j];
  }
}

    }
  };
  xhr.open("GET", "get/getdata2.php?date=" + site+"&site="+site1, true);
  xhr.send();
}
</script>

</body>
</html>







