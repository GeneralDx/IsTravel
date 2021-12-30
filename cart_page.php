<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<style>
		.resa{
			width: 100%;
			display: flex;
			align-items: flex-start;
    	justify-content: space-between;
		}

		.client{
			float: left;
			width: 48%;
			background: #91D7FF;
		}

		.order{
			float: right;
			width: 48%;
			background: #91D7FF;
		}

		input[type=text],[type=number], [type=file], [type=date], [type=tel]{
				width: 93%;
  			padding: 15px;
  			margin: 5px 0 22px 0;
  			display: block;
				margin-right: auto;
				margin-left: auto;
  			border: none;
  			background: #f1f1f1;
				FONT-FAMILY: Arial;
		}
		input[type=tel]{
			width: 80%;
  			padding: 15px;
  			margin: 5px 0 22px 0;
				display: inline-block;
				border: none;
  			background: #f1f1f1;
				FONT-FAMILY: Arial;
		}
		input[type=text]:focus, [type=number]:focus, [type=file]:focus, [type=date]:focus, [type=tel]:focus{
 		 background-color: #ddd;
 		 outline: none;
		}

		select{
				width: 12%;
  			padding: 15px;
  			margin: 5px 0 22px 0;
				display: inline-block;
				margin-left: 9px;
  			background: #f1f1f1;
				FONT-FAMILY: Arial;
		}

		hr {
 			border: 1px
			solid #f1f1f1;
  		margin-bottom: 25px;
		}

		h1, h2, b, p{
			color: #0148ba;
		}

		.paybtn {
			float:right;
			background-color: #0148ba;
		  color: white;
		  padding: 16px 20px;
		  margin-right: 8px;
		  border: none;
		  cursor: pointer;
		  width: 50%;
		  opacity: 0.9;

	  }

	  .paybtn:hover {
	    opacity:1;
	  }

		a{
			color:dodgerblue;
		}

	</style>
</head>
<body>

			<h1>Cart</h1>
			<p>Please fill this form to move to payment.</p>
			<hr>
				<h2>Reservation Details</h2>
				<div class="resa">
					<div class="client">

						<h2>Client</h2>

						<form method="post">

							<label class="first-name"><b>First Name</b></label><br>
							<input type="text" placeholder="Enter First Name" name="first-name" id="first-name" required><br>

							<label class="last-name"><b>Last Name</b></label><br>
							<input type="text" name="last-name" placeholder="Enter Last Name" id="last-name" required><br>

							<label class="birthdate"><b>Date of Birth</b></label><br>
							<input type="date" name="birthdate" id="birthdate" required><br>
							<!-- CHECK MAJOR -->

							<label class="address"><b>Address</b></label><br>
							<input type="text" placeholder="Enter Address" name="address" id="address" required><br>

							<label class="city"><b>City</b></label><br>
							<input type="text" placeholder="Enter City" name="city" id="city" required><br>

							<label class="postal-code"><b>Postal Code</b></label><br>
							<input type="number"placeholder="Enter Postal Code" name="postal-code" id="postal-code" required><br>

							<label class="email"><b>E-mail</b></label><br>
							<input type="text" placeholder="Enter Email" name="email" id="email" required><br>


							<label class="phone"><b>Phone Number</b></label><br>
							<select name="phone">
								<option value="french">+33</option>
								<option value="israel">+972</option>
							</select>
							<input type="tel"  placeholder="123456789" name="phone" id="phone" required minlength="9" maxlength="9"><br>
						</form>
						<h2>Traveler</h2>
						<form method="post">

						<label class="first-name"><b> First Name</b></label><br>
						<input type="text" placeholder="Enter First Name" name="first-name" id="first-name" required><br>

						<label class="last-name"><b>Last Name</b></label><br>
						<input type="text" name="last-name" placeholder="Enter Last Name" id="last-name" required><br>

						<label class="birthdate"><b>Date of Birth</b></label><br>
						<input type="date" name="birthdate" id="birthdate" required><br>

						<label class="passport"><b>Passport Number</b></label><br>
						<input type="text" placeholder="12AB34567" name="passport" id="passport" required minlength="9" maxlength="9"><br>

						<label class="email"><b>E-mail</b></label><br>
						<input type="text" placeholder="Enter Email" name="email" id="email" required><br>

						<label class="name"><b>Phone Number</b></label><br>
						<select name="phone-num">
							<option value="french">+33</option>
							<option value="israel">+972</option>
						</select>
						<input type="tel" placeholder="123456789" name="phone" id="phone" required minlength="9" maxlength="9"><br>
					</form>

					</div>
					<div class="order">
						<h2>Your Order</h2>

						<?php
							$sum = 0;
							$a = $db->prepare("SELECT * FROM user WHERE email = :email");
							$a->execute([
								'email' => $_SESSION['Mail']
							]);

							$answer = $a->fetch();

							$q = $db->prepare("SELECT * FROM cart WHERE Id_user = :Id_user");
							$q->execute([
								'Id_user' => $answer['Id']
							]);
							$result = $q->fetchall();

							foreach ($result as $res) {
								$que = $db->prepare("SELECT * FROM trips WHERE Id = :Id");
								$que->execute([
									'Id' => $res['Id_trip']
								]);

								$query = $que->fetch();

								$sum = $sum + $query['price'];
								?>
									<span><?php echo $query['title']; ?> - </span>
									<span><?php echo $query['price']; ?>₪</span><br>
		            <?php
							}
		        ?>
						<br>
						<hr>
						<br>
						<span>Sum of the order: <?php echo $sum; ?>₪</span>
						<br>
						<hr>
						<br>

						<form method="post">
							<input type="submit" name="formsend_pay" class="paybtn" id="formsend_pay" value="Move to Payment">
						</form>

						<?php
							require_once 'cart.php';
						?>

					</div>
				</div>
	</body>
</html>

<?php
	require_once 'footer.php';
	?>
