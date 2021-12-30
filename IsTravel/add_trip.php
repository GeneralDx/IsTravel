<?php
namespace add_trip_test;

	class add_trip {
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

	if(isset($_POST['formsend_trip'])) {
		extract($_POST);

		if(isset($_FILES['image'])){
		    $tmpName = $_FILES['image']['tmp_name'];
		    $image = $_FILES['image']['name'];
		    $size = $_FILES['image']['size'];
		    $error = $_FILES['image']['error'];
				move_uploaded_file($tmpName, './img/'.$image);
		}

		$add_trip = new add_trip();
		$add_trip->add_tr($title, $image, $start_date, $end_date, $place, $price, $description, $db);
	}
?>
