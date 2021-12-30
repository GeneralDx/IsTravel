<?php
	namespace suggested_activity_test;

	class suggested_activity {
		function change_stat($activity_id, $status, $db) {
			if(!empty($status)) {
					$q = $db->prepare("UPDATE activities SET status='".$status."' WHERE Id = :Id");
					$q->execute([
						'Id' => $activity_id
					]);

					echo "The account was successfully updated !";
					?>
						<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/suggested_activity_page.php">
					<?php
					return true;
			} else {
				echo "The field are not filled";
				return false;
			}
		}
	}

	if(isset($_POST['formsend_change_status_activty'])) {
		extract($_POST);

		$change_status = new suggested_activity();
		$change_status->change_stat($activity_id, $status, $db);
	}

?>
