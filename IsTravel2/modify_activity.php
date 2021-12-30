<?php

	if(isset($_POST['formsend_modify_activty'])) {
		extract($_POST);
    $email = $_SESSION['Mail'];

		class Modify_Activity {
			function modify_act($activity_id, $email, $activity_name, $city, $description, $db) {
        $status = "In progress";

        $q = $db->prepare("UPDATE activities SET activity_name='".$activity_name."',city='".$city."',description='".$description."',status='".$status."' WHERE Id = :Id");
        $q->execute([
          'Id' => $activity_id
        ]);
        echo "Your activity was modify !";
        ?>
          <meta http-equiv="refresh" content="0.0001;URL=/IsTravel/my_activities_page.php">
        <?php
        return true;
			}
		}

		$modify_activity = new Modify_Activity();
		$modify_activity->modify_act($activity_id, $_SESSION['Mail'], $activity_name, $city, $description, $db);
	}
?>
