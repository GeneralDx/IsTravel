<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
</head>
<body>

  <div id="connection">

		<h2>Sign up</h2>

		<form method="post">
			<input type="email" name="email" id="email" placeholder="E-mail" required><br/>
			<input type="password" name="password" id="password" placeholder="Password" required><br/>
			<input type="submit" name="formsend_connection" id="formsend_connection" value="Sign up">
		</form>

    <?php
      include 'connection.php'
    ?>

	<div id="no">
		<br><p>You don't have an account ?  <a href="registration.php">Sign in !</a></p>
	</div>
	</div>

</body>
</html>

<?php include 'footer.php'; ?>
