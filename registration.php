<?php
namespace regist_test;

class Registration {
	function register($first_name, $last_name, $email, $password, $cpassword, $type, $db) {
		if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($cpassword)) {
			if($password == $cpassword) {
				$options = ['cost' => 12];
				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

				$c = $db->prepare("SELECT email FROM user WHERE email = :email");
				$c->execute([ 'email' => $email ]);
				$result = $c->rowCount();
				if($result == 0) {
					$q = $db->prepare("INSERT INTO user(first_name, last_name, email, password, type) VALUES(:first_name, :last_name, :email, :password, :type)");
					$q->execute([
						'first_name' => $first_name,
						'last_name' => $last_name,
						'email' => $email,
						'password' => $hashpass,
						'type' => $type
					]);
					$_SESSION['First_name'] = $first_name;
					$_SESSION['Last_name'] = $last_name;
					$_SESSION['Mail'] = $email;
					$_SESSION['Type'] = $type;
					echo "Your account was successfully created !";
					?>
						<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
					<?php
					return true;
				} else {
					echo "An account already exists with this email";
					return false;
				}
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

	if(isset($_POST['formsend_registration'])) {
		extract($_POST);

		$registration = new Registration();
		$registration->register($first_name, $last_name, $email, $password, $cpassword, $type, $db);
	}

?>
