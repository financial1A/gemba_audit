

<!DOCTYPE html>
<html>
<head>
<title>Dealer Audit Manual</title>
  <link rel="icon" type="image/ico" href="11.gif">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.js"></script>
<script src="bootstrap.min.js"></script>

<style>
  input{
    margin: 3.5px;
  }
  body {
      /* Linear gradient with two colors */
     /*  background: linear-gradient(to bottom, white, #e1e1e1);
      For full height */
   
    }

  input, textarea{
    background-color:#e3e3e3; 
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
.img2 {
  float: right;
}

</style>
</head>
<body class="container">
   <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <h2 id="dynamicDateTime" style="color:blue;padding-left:750px;"></h2><span>  <img class="img2" src="r2.gif" alt="Logo" width="100" height="80"></span>
    <script>
       //function updateDateTime() {
       //  var dateElement = document.getElementById("dynamicDateTime");
         // var now = new Date();
         //     dateElement.innerText = now.toLocaleString(); // Update the text with the new date and time
          //  }

            // Update the date and time every second (1000 ms)
            //   setInterval(updateDateTime, 1000);
    </script>

    <form style="padding: 50px" action="verify.php" method="POST">
        <input type="text"  name="login_user" placeholder="User" required>
        <input type="password" name="login" placeholder="Password" required>

	 <input type="hidden" id="randomIdInput" name="randomId">
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
<script>

// Generate a random ID
var randomId = Math.floor(Math.random() * 100000000) + 1;

// Convert the random ID to a string
var randomIdString = String(randomId);

// Set the random ID as localStorage
localStorage.setItem('randomId', randomIdString);

// Set the random ID as the value of the hidden input field
document.getElementById('randomIdInput').value = randomIdString;

// Log the random ID to the console
console.log(randomIdString);

// Set the current time as localStorage
var now = new Date().getTime();
localStorage.setItem('setTime', now);

// Check every minute if two hours have passed
setInterval(function() {
    var setTime = localStorage.getItem('setTime');
    if (new Date().getTime() - setTime > 2*60*60*1000) {
        // If two hours have passed, clear the randomId from localStorage
        localStorage.removeItem('randomId');
        localStorage.removeItem('setTime');
    }
}, 60*1000);


</script>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="action_page.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>UserName</b></label>
      <input type="text" placeholder="CASHIERWAT" name="emp" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="psw" required>

     
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

    

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(sendToServer);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function sendToServer(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            // Send latitude and longitude to PHP using fetch
            fetch('process_location.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'latitude=' + latitude + '&longitude=' + longitude
            })
            .then(response => {
                console.log('Location sent to server');
                // Handle response if needed
            })
            .catch(error => console.error('Error sending location:', error));
        }

//window.onload = function() {
  //  getLocation();
//}


document.addEventListener('DOMContentLoaded', (event) => {
    getLocation();
});

</script>
    <img src="11.gif" style="width: 600px;height:260px;" alt="">
    <div style="padding-top:20px;">

</span>
</div>

    <footer style="text-align:center;">
     
        <p></p>
    </footer>
</body>
</html>

