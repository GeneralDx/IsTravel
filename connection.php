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

<div id="yes">
	<?php
		if(isset($_POST['formsend_connection']))
		{
			extract($_POST);
			if(!empty($cemail) && !empty($cpassword))
			{
				$q = $db->prepare("SELECT * FROM users WHERE email = :email");
				$q->execute(['email'=>$cemail]);
				$result = $q->fetch();
				if($result == true)
				{
					$hashpassword = $result['password'];
					if(password_verify($cpassword,$hasspassword))
					{
						echo "Current connection...";
					}
					else
					{
						echo "Incorrect password";
					}
				}
				else
				{
					echo "The account with email  ".$email." doesn't exist, please sign up";
				}

				}
			else
			{
				echo "Please complete all fields";
			}
		}
	?>
	</div>
	<div id="no">
		<br><p>You don't have an account ?  <a href="registration.php">Sign up !</a></p>
	</div>
	</div>

</body>
</html>

<?php include 'footer.php'; ?>
