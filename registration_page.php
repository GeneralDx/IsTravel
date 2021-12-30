<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<style>
		* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
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
	color: #0148ba;
}
#c,#m{
	color: #0148ba;
}



/* Set a style for the submit/register button */
.registerbtn {
  background-color: #0148ba;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

	</style>
</head>
<body>
<div class="container">
    <h1>Register</h1>
    <p>Please fill this form to create an account.</p>
    <hr>

		<form method="post">
			<label for="first_name"><b>First Name</b></label><br>
		    <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" required><br>

			<label for="last_name"><b>Last Name</b></label><br>
		    <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required><br>

		    <label for="email"><b>Email</b></label><br>
		    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

		    <label for="password"><b>Password</b></label><br>
		    <input type="password" placeholder="Enter Password" name="password" id="password" required><br>

		    <label for="cpassword"><b>Repeat Password</b></label><br>
		    <input type="password" placeholder="Repeat Password" name="cpassword" id="cpassword" required><br>

			<input type="radio" name="type" value="customer" id="customer" required>
				<label for="customer" id="c">Customer</label>
				<input type="radio" name="type" value="manager" id="manager">
				<label for="manager" id="m">Manager</label><br/>

		    <hr>

		    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
				<input type="submit" name="formsend_registration" class="registerbtn" id="formsend_registration" value="Sign in">
		</form>
  </div>


    <p>Already have an account? <a href="#">Sign in</a>.</p>

</form>

  <?php
    include 'registration.php'
  ?>



</body>
</html>

<?php
	require_once 'footer.php';
	?>
