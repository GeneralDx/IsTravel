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
#si{
	font-size: 30px;

}
#su{
	text-decoration: none;
	color: #0148ba;
}



/* Set a style for the submit/register button */
.formsend_connection {
    background-color: #0148ba;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

.formsend_connection:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

	</style>
</head>
<body>

  <div id="connection">
	<p id="si">Sign in</p>
	<form method="post">
  	<label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" id="password" required><br>
	<input type="submit" name="formsend_connection" class="formsend_connection" id="formsend_connection" value="Sign in">
	</form>

    <?php
      include 'connection.php'
    ?>

	<div id="no">
		<br><p>You don't have an account ?  <a id="su" href="registration_page.php">Sign up !</a></p>
	</div>
	</div>

</body>
</html>

<?php
	require_once 'footer.php';
	?>
