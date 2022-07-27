<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Welcome</title>
</head>
<body>

<div class="navbar">
  <a href="welcome.php">Home</a>
  <a href="profile.php">My Profile</a>
  <a href="rides.php">My Rides</a>
  <a href="contactus.php">Contact Us</a>
  <a href="logout.php" >Logout</a>	
</div>

    <div class="container" style="padding-left: 300px;">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
      <h3 style="color: rgb(88, 87, 87);"> Have a Plan?</h3>
      <h3 style="color: rgba(88, 87, 87, 0.938);">Book Your ride with us!<br>
        <a href="#" style="color: green;">Book Now</a> or <a href="#" style="color: green;">Schedule For Later</a></h3>
      <p style="color: rgb(83, 82, 82);">HOW IT WORKS?</p> 
      <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-style: normal; font-weight: 400; color: rgb(59, 59, 59);">
        <i class="fas fa-sign-in-alt"></i><small>SIGN IN/ SIGN UP</small><br>
        <i class="fas fa-chevron-down" style="color: green;"></i><br>
        <i class="fas fa-street-view"><br></i><small>CONFIRM YOUR PICK UP & DROP LOCATION</small><br>
        <i class="fas fa-chevron-down" style="color: green;"></i><br>
        <i class="fas fa-car"></i><small>CONFIRM YOUR BOOKING</small><br>
        <i class="fas fa-chevron-down" style="color: green;"></i><br>
        <i class="fas fa-location-arrow"></i><small>TRACK YOUR CAB</small><br>
        <i class="fas fa-chevron-down" style="color: green;"></i><br>
        <i class="fas fa-route"></i><small>TAKE YOUR CAB</small><br>
        <i class="fas fa-chevron-down" style="color: green;"></i><br>
        <i class="fas fa-road"></i><small>ENJOY YOUR SAFE AND SECURE RIDE WITH US!</small><br>
      </p>  
    </div>
     
    <div>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="travel-guide"
      agent-id="49c69daa-d666-422e-bf9f-9af6da9277f0"
      language-code="en"
    ></df-messenger>
    </div>
    
</body>
</html> 