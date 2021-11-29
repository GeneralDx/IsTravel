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
  background-color: blue;
  outline: none;
}
#formsend_connection{
	background-color: blue;
	color: white;
	width: 100px;
	length: 50px;
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
#si{
	font-size: 30px;

}
#su{
	text-decoration: none;
	color: blue;
}



/* Set a style for the submit/register button */
.registerbtn {
  background-color: blue;
  color: blue;
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
.formsend_connection {
  background-color: blue;
  text-align: center;
}
	</style>
</head>
<body>

  <div id="connection">
	<p id="si">Sign in</p>
	<form method="post">
  	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
	<input type="submit" name="formsend_connection" id="formsend_connection" value="Sign in">
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
