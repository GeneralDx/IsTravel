<?php include 'header.php'; ?>

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
		<input type="submit" name="formsend_registration" id="formsend_registration" value="Sign in">
	</form>
	<?php

		include 'database.php';
		global $db;
		if(isset($_POST['formsend_registration']))
		{
			extract($_POST);
			if(!empty($rid) && !empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($cpassword))
			{
				if($password == $cpassword)
				{
					$options = ['cost' => 12];
					$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

					$a = $db->prepare("SELECT ID FROM users WHERE ID = :ID");
					$a->execute([ 'ID' => $ID ]);
					$answer = $a->rowCount();

					if($answer == 0)
					{
            $c = $db->prepare("SELECT email FROM users WHERE email = :email");
  					$c->execute([ 'email' => $email ]);
  					$result = $c->rowCount();
            if($result == 0)
            {
              $q = $db->prepare("INSERT INTO users(ID, first_name, last_name, email, password) VALUES(:ID, :first_name, :last_name, :email, :password)");
  						$q->execute([
                'ID' => $ID,
                'first_name' => $first_name,
                'last_name' => $last_name,
  							'email' => $email,
  							'password' => $hashpass
  						]);
  						echo "Your account was successfully created !";
            }
            else
  					{
  						echo "An account already exists with this email";
  					}
					}
					else
					{
						echo "An account already exist with this ID";
					}
				}
				else
				{
					echo "The password and the password confirmation are differents, please fix it.";
				}
			}
			else
			{
				echo "The fields are not all filled";
			}
		}

	?>
	<div id="no">
		<br>Are you already registered ? <a href="connection.php">Sign up !</a>
	</div>

</body>
</html>

<?php include 'footer.php'; ?>
