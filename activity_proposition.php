<?php

	if(isset($_POST['formsend_activity_proposition'])) {
		extract($_POST);
    $email = $_SESSION['Mail'];
		class Propose_Activity {
			function prop_activity($email, $activity_name, $city, $description, $db) {
        $q = $db->prepare("INSERT INTO activities(email, activity_name, city, description, status) VALUES(:email, :activity_name, :city, :description, :status)");
        $q->execute([
          'email' => $email,
          'activity_name' => $activity_name,
          'city' => $city,
          'description' => $description,
          'status' => 'In progress'
        ]);
        echo "Your proposition was sent !";
        ?>
          <meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
        <?php
        return true;
			}
		}

		$prop_act = new Propose_Activity();
		$prop_act->prop_activity($_SESSION['Mail'], $activity_name, $city, $description, $db);
	}
?>
