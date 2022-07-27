<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Contact Us</title>
    <style>
* {
  box-sizing: border-box;
}

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a href="welcome.php">Home</a>
  <a href="profile.php">My Profile</a>
  <a href="rides.php">My Rides</a>
  <a href="contactus.php">Contact Us</a>
  <a href="logout.php">Logout</a>	
</div>

    <div class="container" style="padding-left: 200px; padding-right: 200px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" placeholder="Your first name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="email" id="email" name="email" placeholder="Leave an email here to Contact You">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phone">Phone No</label>
    </div>
    <div class="col-75">
      <input type="number" id="phone" name="phone" placeholder="Leave a number here...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="state">State</label>
    </div>
    <div class="col-75">
      <select id="state" name="state">
      <option value="Jaipur">Jaipur</option>
      <option value="New Delhi">New Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Banglore">Banglore</option>
      <option value="Kochi">Kochi</option>
      <option value="Dehradun">Dehradun</option>
      <option value="Indore">Indore</option>
      <option value="Bhopal">Bhopal</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Concern</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
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