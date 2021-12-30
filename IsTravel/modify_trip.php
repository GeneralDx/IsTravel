<?php

	namespace modify_trip_test;

	class modify_trip {
    function modify_tr($trip_id, $title, $start_date, $end_date, $place, $price, $description, $db) {

			$q = $db->prepare("UPDATE trips SET title='".$title."',start_date='".$start_date."',end_date='".$end_date."',place='".$place."',price='".$price."',description='".$description."' WHERE Id = :Id");
			$q->execute([
				'Id' => $trip_id
			]);
			echo "Your trip was modify !";
			?>
				<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/select_modify_trip_page.php">
			<?php
			return true;
		}
	}

	if(isset($_POST['formsend_modify_trip'])) {
		extract($_POST);

		$modify_trip = new modify_trip();
		$modify_trip->modify_tr($trip_id, $title, $start_date, $end_date, $place, $price, $description, $db);
	}
?>
