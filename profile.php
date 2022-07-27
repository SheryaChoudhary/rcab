<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Profile</title>
</head>
<body>

<div class="navbar">
  <a href="welcome.php">Home</a>
  <a href="profile.php">My Profile</a>
  <a href="rides.php">My Rides</a>
  <a href="contactus.php">Contact Us</a>
  <a href="logout.php">Logout</a>	
</div>
 
<?php 

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<div class="container" style="align-items: center">
<div class="row gutters" style="align-items: center">
<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="image of account holder">
				</div>

				<?php 
                 echo "<h3>User's Name " . $_SESSION['username'] . "</h3>"; 
				 echo "<h5>Email " . $_SESSION['username'] . "</h5>"; 
				 ?>
                
			</div>
			<div class="about">
				<h5>INFO</h5>
				<p style="font-height: 15px;"> 
				<?php echo "<p>Full Name: " . $_SESSION['username'] ."</p>";  
				     echo "<p>Contact No.: " . $_SESSION['username'] ."</p>";  
					 echo "<p>Alternate No.: " . $_SESSION['username'] ."</p>"; 
					 echo "<p>Registered Email: " . $_SESSION['username'] ."</p>"; 
					 echo "<p>Date of Birth: " . $_SESSION['username'] ."</p>"; 
					 echo "<p>Gender: " . $_SESSION['username'] ."</p>"; 
				?>
				</p>
			</div>
		</div>
	</div>
</div>
</div>

<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h3 class="mb-2" style="color: grey">Update Your Personal Details</h3>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="fullName" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Alternate Number</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter alternate phone number">
				</div>
			</div>

	<div class="testbox">
      <form action="/">
        <div class="item status">
          <p>Gender:</p>
          <div class="status-item">
            <label><input type="checkbox" name="name"> <span>Male</span></label>
            <label><input type="checkbox" name="name"> <span>Female</span></label>
            <label><input type="checkbox" name="name"> <span>Other</span></label>
          </div>
        </div>
        <div class="item">
          <p>Date of Birth</p>
          <input type="date" name="name" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button type="button" id="submit" name="submit" class="btn">Cancel</button>
					<button type="button" id="submit" name="submit" class="btn btn-success">Update</button>
				</div>
			</div>
		</div>
    </div>
</form>

<div>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="travel-guide"
      agent-id="49c69daa-d666-422e-bf9f-9af6da9277f0"
      language-code="en"
    ></df-messenger>
</div>

		<!--
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h3 class="mb-2" style="color: grey">Address</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Street</label>
					<input type="name" class="form-control" id="Street" placeholder="Enter Street">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">City</label>
					<input type="name" class="form-control" id="ciTy" placeholder="Enter City">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="sTate">State</label>
					<input type="text" class="form-control" id="sTate" placeholder="Enter State">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="zIp">Zip Code</label>
					<input type="text" class="form-control" id="zIp" placeholder="Zip Code">
				</div>
			</div>
		</div> 
	</div> -->
</div>
</div>
</div>

</body>
</html> 