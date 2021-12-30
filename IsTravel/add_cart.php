<?php
namespace add_cart_test;

class add_cart {
	function add_crt($mail, $id, $quantity, $db) {
    $a = $db->prepare("SELECT * FROM user WHERE email = :email");
    $a->execute([
      'email' => $mail
    ]);

    $result = $a->fetch();

		$q = $db->prepare("INSERT INTO cart(Id_user, Id_trip, quantity) VALUES(:Id_user, :Id_trip, :quantity)");
		$q->execute([
			'Id_user' => $result['Id'],
			'Id_trip' => $id,
			'quantity' => $quantity
		]);
		echo "The trip was added to the cart !";
		?>
			<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/homepage.php">
		<?php
		return true;
	}
}

	if(isset($_POST['formsend_add_cart'])) {
		extract($_POST);

		$add_cart = new add_cart();
		$add_cart->add_crt($_SESSION['Mail'], $id, $quantity, $db);
	}
?>
