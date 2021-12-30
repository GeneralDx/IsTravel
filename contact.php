<?php
	namespace contact_test;

	class contact {
		function cont($first_name, $last_name, $email, $message, $db) {
			$q = $db->prepare("INSERT INTO contact(first_name, last_name, email, message) VALUES(:first_name, :last_name, :email, :message)");
			$q->execute([
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'message' => $message
			]);
			echo "Your message was sent !";
			?>
				<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
			<?php
			return true;
		}
	}

	if(isset($_POST['formsend_contact'])) {
		extract($_POST);

		$contact = new contact();
		$contact->cont($first_name, $last_name, $email, $message, $db);
	}
?>
