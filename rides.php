<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>My Rides</title>
</head>
<body>

<div class="navbar">
  <a href="welcome.php">Home</a>
  <a href="profile.php">My Profile</a>
  <a href="rides.php">My Rides</a>
  <a href="contactus.php">Contact Us</a>
  <a href="logout.php">Logout</a>	
</div>

    <div class="container" style="padding-left: 300px;">
      <h3>Looking for a booking?</h3> <br>
      <h4>Find all Your Previous booking history here</h4>         	    
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