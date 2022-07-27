/* <?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}
 
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?> */

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Ridz Login</title>
</head>

    <body>
		<div class="container">
		    <p class="login-text">Login with Social Media</p>
			    <div class="login-social">
				    <a herf="#" class="facebook"><i class="fab fa-facebook"></i></a>
				    <a herf="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
				    <a herf="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
				    <a herf="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
                </div>
		    <form action="" method="POST" class="login-email">
			    <p class="login-text" style="font-size: 2rem; font-weight: 600;">Login  with Email</p>
			        <div class="input-group">
				        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			        </div>
			        <div class="input-group">
				        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			        </div>					
			        <div class="input-group">
				     <button name="submit" class="btn">Login</button>
			        </div>
			    <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
			    <p class="forgot-password"; style="color: orange; font-size: 15px;"><a href="register.php">Forgot Password?</a></p>

		    </form>
        </div>


		<script>
			
		</script>

    </body>
</html>