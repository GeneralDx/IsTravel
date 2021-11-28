<?php
	if(isset($_POST['formsend_connection'])) {
		extract($_POST);
		if(!empty($email) && !empty($password)) {
			$q = $db->prepare("SELECT * FROM user WHERE email = :email");
			$q->execute(['email'=>$email]);
			$result = $q->fetch();
			if($result == true)	{
				$hashpassword = $result['password'];
				if(password_verify($password, $hashpassword)) {
					echo "Current connection...";
				}	else {
					echo "Incorrect password";
				}
			} else {
				echo "The account with email  ".$email." doesn't exist, please sign up";
			}

		}	else {
			echo "Please complete all fields";
		}
	}
?>
