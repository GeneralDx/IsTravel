<?php

	if(isset($_POST['formsend_connection'])) {
		extract($_POST);
		class Connection {
			function connec($email, $password, $db) {
				if(!empty($email) && !empty($password)) {
					$q = $db->prepare("SELECT * FROM user WHERE email = :email");
					$q->execute(['email'=>$email]);
					$result = $q->fetch();
					if($result == true)	{
						$hashpassword = $result['password'];
						if(password_verify($password, $hashpassword)) {
							$_SESSION['Mail'] = $result['email'];
							$_SESSION['Type'] = $result['type'];
							?>
							<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
							<?php
							return true;
						}	else {
							echo "Incorrect password";
							return false;
						}
					} else {
						echo "The account with email  ".$email." doesn't exist, please sign up";
						return false;
					}

				}	else {
					echo "Please complete all fields";
					return false;
				}
			}
		}
	}
?>
