<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profil</title>
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
	color: blue;
}
#c,#m{
	color: blue;
}



/* Set a style for the submit/register button */
.modificationbtn {
  background-color: blue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.modificationbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign up" section */
.signup {
  background-color: #f1f1f1;
  text-align: center;
}
	</style>
</head>
<body>
<div class="container">
    <h1>Profil</h1>
    <p>Please modify your details.</p>
    <hr>

		<form method="post">
			<label for="first_name"><b>First Name</b></label><br>
		    <input type="text" value="<?php echo $_SESSION['First_name']; ?>" name="first_name" id="first_name" required><br>

			<label for="last_name"><b>Last Name</b></label><br>
		    <input type="text" value="<?php echo $_SESSION['Last_name']; ?>" name="last_name" id="last_name" required><br>

		    <label for="email"><b>Email</b></label><br>
		    <input type="text" value="<?php echo $_SESSION['Mail']; ?>" name="email" id="email" required><br>

		    <label for="password"><b>Password</b></label><br>
		    <input type="password" placeholder="Enter Password" name="password" id="password" required><br>

		    <label for="cpassword"><b>Repeat Password</b></label><br>
		    <input type="password" placeholder="Repeat Password" name="cpassword" id="cpassword" required><br>

				<?php if ($_SESSION['Type'] == 'customer') {
				?>
					<input type="radio" name="type" value="customer" id="customer" required checked>
					<label for="customer" id="c">Customer</label>
					<input type="radio" name="type" value="manager" id="manager">
					<label for="manager" id="m">Manager</label><br/>
				<?php
				} else {
				?>
					<input type="radio" name="type" value="customer" id="customer" required>
					<label for="customer" id="c">Customer</label>
					<input type="radio" name="type" value="manager" id="manager" checked>
					<label for="manager" id="m">Manager</label><br/>
				<?php
				}
				?>

		    <hr>

				<input type="submit" name="formsend_modification" class="modificationbtn" id="formsend_modification" value="Confirm">
		</form>
  </div>

  <?php
    require_once 'profil.php'
  ?>

</body>
</html>

<?php
	require_once 'footer.php';
	?>
