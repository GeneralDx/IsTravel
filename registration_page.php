<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
	<style>
		* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1,p,b{
	color: blue;
}
#c,#m{
	color: blue;
}



/* Set a style for the submit/register button */
.registerbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
	</style>
</head>
<body>
<div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" id="fname" required>

	<label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" id="lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
	<input type="radio" name="type" value="customer" id="customer" required>
		<label for="customer" id="c">Customer</label>
		<input type="radio" name="type" value="manager" id="manager">
		<label for="manager" id="m">Manager</label><br/>
		
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  
</form>

	<!-- <form method="post">
		<input type="text" name="first_name" id="first_name" placeholder="First name" required><br/>
    <input type="text" name="last_name" id="last_name" placeholder="Last name" required><br/>
    <input type="email" name="email" id="email" placeholder="E-mail" required><br/>
		<input type="password" name="password" id="password" placeholder="Password" required><br/>
		<input type="password" name="cpassword" id="cpassword" placeholder="Confirm password" required><br/>
		<input type="radio" name="type" value="customer" id="customer" required>
		<label for="customer">Customer</label>
		<input type="radio" name="type" value="manager" id="manager">
		<label for="manager">Manager</label><br/>
		<input type="submit" name="formsend_registration" id="formsend_registration" value="Sign in">
	</form> -->

  <?php
    include 'registration.php'
  ?>

	

</body>
</html>

<?php
	require_once 'footer.php';
	?>
