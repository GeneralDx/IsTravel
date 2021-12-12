<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Credit</title>
	<style>
		* {box-sizing: border-box}

		input[type=text],input[type=number]{
			width: 50%;
  			padding: 15px;
  			margin: 5px 0 22px 0;
  			display: inline-block;
  			border: none;
  			background: #f1f1f1;
		}

		input[type=text]:focus, input[type=number]:focus {
 		 background-color: #ddd;
 		 outline: none;
		}

		hr {
 			border: 1px solid #f1f1f1;
  			margin-bottom: 25px;
		}
		
		h1,p,b,h2{
			color: blue;
		}
		.pay{
			background-color: blue;
	 		color: white;
	 		padding: 16px 20px;
	 		margin: 8px 0;
	  		border: none;
	  		cursor: pointer;
	 		width: 50%;
	  		opacity: 0.9;

		}
		


		a{
			color:dodgerblue;
		}


	</style>
</head>
<body>
	<div class="section-credit">
		<h1>Credit Cart</h1>

		<hr>

		<div class="credit_detail">

			<form method="post">
				<label class="credit"><b>Card Number</b></label><br>
				<input type="text" placeholder="0000 0000 0000 0000" name="card_number">
				<input type="text" placeholder="CVV" name="CVV"><br>

				<label class="credit"><b>Expiration Date</b></label><br>
				<input type="text" placeholder="MM/YYYY" name="Expiration_date"><br>
				
				<label class="credit"><b>Cardholder Name</b></label><br>
				<input type="text" placeholder="Cardholder Name/ T.Z." name="I.D."><br>
			</form>
		</div>

		<input type="submit" name="pay" class="pay" id="pay" value="PAY">

	</div>

</body>
</html>

<?php
	require_once 'footer.php';
	?>