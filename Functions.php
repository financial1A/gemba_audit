<? //php include 'session.php' ?>

<script>
setInterval(function() {
    var setTime = localStorage.getItem('setTime');
    if (new Date().getTime() - setTime > 2*60*60*1000) {
        // If two hours have passed, clear the randomId from localStorage
        localStorage.removeItem('randomId');
        localStorage.removeItem('setTime');
	alert('Navigating to login page. session has expaired!!');
	window.location.replace('https://10.88.12.76/');

    }else{
	console.log('Available..');
	if (new Date().getTime() - setTime > 2*55*60*1000){
	alert('session will has been expaired in 10 minutes!!');
	console.log('Session expaired soon..');
    }
	console.log('script added.!..');
	}
}, 60*1000);



</script>

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

// Get the IP address of the user


// Insert the IP address into the database
$sql = "INSERT INTO arrival (arrival_time) VALUES (NOW())";

if ($conn->query($sql) === TRUE) {



} else {

}



$conn->close();




?>


<head><title>genba</title></head>
<body>
<h1 >DAILY GENBA</h1>


<div class="content"><br><br><br>
<a href="http://10.88.16.76:500/1.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;"> Surprise Job Verification</h3></div></button></a>
 <a href="http://10.88.16.76:500/2.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;"> Validation of physical Cash verification reports received from Dealer</h3></div></button></a>

<a href="http://10.88.16.76:500/3.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;"> Cheque Payment Validation (05 Payment vouchers minimum)</h3></div></button></a>
 <a href="http://10.88.16.76:500/4.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;">Petty Cash Payment Validation (05  Advance vouchers)</h3></div></button></a>

<a href="http://10.88.16.76:500/5.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;">Petty Cash Advance Validation (05 payment vouchers minimum) </h3></div></button></a>
 <a href="http://10.88.16.76:500/6.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;">Sales Validation - Cash Sales (10 invoices) -Cash paid or Tempory credit</h3></div></button></a>

<a href="http://10.88.16.76:500/7.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;">Delay in System Updating ( 10 Credit Sales and 05 Sales Return)- Base on Purchase Order ( Physical Movement of the good sold based on the Security log book. ) </h3></div></button></a>
 <a href="http://10.88.16.76:500/8.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;"> Invoice Generation - PR, Printed </h3></div></button></a>

<a href="http://10.88.16.76:500/9.php"><button style="border-radius:10px;background-color:#ff4000;color:white;border-color:white;"><div> <h3 style="color:white;">Purchase orders- 10 purchases for Accurance & Compliance  </h3></div></button></a>

<br>
<a href="http://10.88.16.76:500/logout.php"><button style="margin-top:50px;border-radius:10px;background-color:yellow;color:red;border-color:white;"><div> <h3 style="color:red;">LOGOUT </h3></div></button></a>


 </div></body>

<style>
h1 {
    color: #4a4a4a; /* dark gray */
    text-align: center;
    font-family: 'Arial', sans-serif;
    font-size: 2.5em; /* 40px/16=2.5em */
    font-weight: bold;
    text-shadow: 2px 2px 4px #999999; /* light gray */
    padding: 20px;
    background-color: rgb(128, 255, 212,0.5); /* light gray */
    border-radius: 10px;
    box-shadow: 5px 10px #888888; /* gray */
}

body {
 
  background-color: #B4CFEC;
  animation: color-change 5s infinite;
}

@keyframes color-change {
  0% { background-color: #ADDFFF; }
  25% { background-color: #C2DFFF; }
  50% { background-color: #C6DEFF; }
  75% { background-color: #93FFE8; }
  100% { background-color: #93FFE8; }
}
a {padding:10px;}
div {padding:5px;}
button {padding:5px;}
h3 {padding:5px;}
</style>