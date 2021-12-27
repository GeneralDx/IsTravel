<?php
namespace activity_proposition_test;

class activity_proposition {
	function prop_activity($email, $activity_name, $city, $description, $image, $db) {
		$q = $db->prepare("INSERT INTO activities(email, activity_name, city, description, image, status) VALUES(:email, :activity_name, :city, :description, :image, :status)");
		$q->execute([
			'email' => $email,
			'activity_name' => $activity_name,
			'city' => $city,
			'description' => $description,
			'image' => $image,
			'status' => 'In progress'
		]);
		echo "Your proposition was sent !";
		?>
			<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
		<?php
		return true;
	}
}

	if(isset($_POST['formsend_activity_proposition'])) {
		extract($_POST);
		
		if(isset($_FILES['image'])){
		    $tmpName = $_FILES['image']['tmp_name'];
		    $image = $_FILES['image']['name'];
		    $size = $_FILES['image']['size'];
		    $error = $_FILES['image']['error'];
				move_uploaded_file($tmpName, './img/'.$image);
		}
    $email = $_SESSION['Mail'];

		$prop_act = new activity_proposition();
		$prop_act->prop_activity($_SESSION['Mail'], $activity_name, $city, $description, $image, $db);
	}
?>
