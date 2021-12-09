<?php

	if(isset($_POST['formsend_trip'])) {
		extract($_POST);
		class Add_Trip {
			function add_tr($title, $image, $start_date, $end_date, $place, $price, $description, $db) {
        $q = $db->prepare("INSERT INTO trips(title, image, start_date, end_date, place, price, description) VALUES(:title, :image, :start_date, :end_date, :place, :price, :description)");
        $q->execute([
          'title' => $title,
          'image' => $image,
          'start_date' => $start_date,
          'end_date' => $end_date,
          'place' => $place,
          'price' => $price,
          'description' => $description
        ]);
        echo "Your proposition was sent !";
        ?>
          <meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
        <?php
        return true;
			}
		}

		$add_trip = new Add_Trip();
		$add_trip->add_tr($title, $image, $start_date, $end_date, $place, $price, $description, $db);
	}
?>
