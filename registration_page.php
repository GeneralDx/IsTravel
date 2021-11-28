<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign in</title>
</head>
<body>

  <h2>Sign in</h2>

	<form method="post">
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
	</form>

  <?php
    include 'registration.php'
  ?>

	<div id="no">
		<br>Are you already registered ? <a href="connection.php">Sign up !</a>
	</div>

</body>
</html>

<?php
	require_once 'footer.php';
	?>
