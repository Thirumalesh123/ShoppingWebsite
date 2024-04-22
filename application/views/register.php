<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
 
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
	margin-left:18%;
  padding: 0px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password], [type=number] {
  width: 80%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,{
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align:center;
  margin-left:1%;
}
</style>
</head>
<body>

<form action="./register" method="POST">
  <div class="container">
    <p align="">Please fill in this form to create an account.</p>
    <hr>
 <label for="username"><b>usernmae</b></label><br>
    <input type="text" placeholder="Your Name" name="username" required><br>
    <?php echo "<div style='color:red; margin-left:100px;'>".$this->session->flashdata("username")."</div>"; ?>
      
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>

    <label for="psw-repeat"><b>Repeat Password</b></label><br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
     
    <label for="email"><b>Email-id</b></label><br>
    <input type="text" placeholder="Email Id" name="mail" required><br>
    <?php echo "<div style='color:red; margin-left:100px;'>".$this->session->flashdata("mail")."</div>"; ?>
    <label for="gender"><b>Gender</b></label><br>
    <input type="radio" name="type" value="male"> Male
  <input type="radio" name="type" value="female"> Female
  <input type="radio" name="type" value="other"> Other<br><br>

    <label for="contact"><b>contact</b></label><br>
    <input type="number" placeholder="Your Phone Number" name="contact" required><br>
    <?php echo "<div style='color:red; margin-left:100px;'>".$this->session->flashdata("contact")."</div>"; ?>
     
    <label for="address"><b>Address</b></label><br>
    <input type="text" placeholder="Your Address" name="address" required><br>
     
    <label for="pincode"><b>pincode</b></label><br>
    <input type="number" placeholder="Pincode of your area" name="pincode" required><br>
  
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
<button type="submit" class="registerbtn">Register</button>
  </div>
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
