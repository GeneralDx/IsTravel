<?php
namespace delete_cart_test;

	class delete_cart {
		function del_cart($db) {
      $a = $db->prepare("SELECT * FROM user WHERE email = :email");
      $a->execute([
        'email' => $_SESSION['Mail']
      ]);

      $result = $a->fetch();

      $q= $db->prepare("DELETE FROM cart WHERE Id_user = :Id_user");
      $q->execute([
        'Id_user' => $result['Id']
      ]);
			echo "Your payment was done !";
			?>
				<meta http-equiv="refresh" content="0.0001;URL=/IsTravel/payment.php">
			<?php
			return true;
		}
	}

	if(isset($_POST['formsend_pay'])) {
		extract($_POST);

		$add_trip = new delete_cart();
		$add_trip->del_cart($db);
	}
?>
