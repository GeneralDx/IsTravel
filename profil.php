<?php
	namespace profil_test;

	class profil {
		function prof($first_name, $last_name, $email, $password, $cpassword, $type, $db) {
			if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($cpassword)) {
				if($password == $cpassword) {
					$options = ['cost' => 12];
					$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

					$c = $db->prepare("SELECT Id FROM user WHERE email = :email");
					$c->execute([ 'email' => $email ]);
					$result = $c->fetch();

					$q = $db->prepare("UPDATE user SET first_name='".$first_name."',last_name='".$last_name."',email='".$email."',password='".$hashpass."',type='".$type."' WHERE Id = :Id");
					$q->execute([
						'Id' => $result['Id']
					]);
					$_SESSION['First_name'] = $first_name;
					$_SESSION['Last_name'] = $last_name;
					$_SESSION['Mail'] = $email;
					$_SESSION['Type'] = $type;

					echo "Your account was successfully updated !";
					?>
						<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
					<?php
					return true;
				} else {
					echo "The password and the confirm password are not the same";
					return false;
				}
			} else {
				echo "All the fields are not filled";
				return false;
			}
		}
	}

	if(isset($_POST['formsend_modification'])) {
		extract($_POST);

		$profil = new profil();
		$profil->prof($first_name, $last_name, $email, $password, $cpassword, $type, $db);
	}

?>
