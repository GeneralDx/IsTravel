<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>

	<style>
		* {box-sizing: border-box}
		
		.cart{
			padding: 16px;
		}
		
		.client{
			font-weight: bold;
		}
		.customer{

		}

		
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
		
		.box{
			color:white;
		}

		hr {
 			border: 1px solid #f1f1f1;
  			margin-bottom: 25px;
		}
		
		h1,p,b,h2{
			color: blue;
		}
		.pay{
			background: blue;
			color:white;

		}
		
		.box_order{
			float:center-right;
		}
		.break{
			margin-top: 10px;
		}


		a{
			color:dodgerblue;
		}
	</style>
</head>
<body>
	<!--PAGE-Header-->
	
		<div class="section-payement">
			
			<h1 class="cart">Cart</h1>
			<hr>
			
				<h2 class="cart">Reservation Details</h2>
				<div class="reservation_detail">
					<div class="box_detail">
						
						<h2 class="cart">Client</h2>
						
						<form method="post">
							
							<label class="name"><b> First Name:</b></label><br>
							<input type="text" placeholder="Enter First Name" name="first-name" ><br>
						

							<label class="name"><b>Last Name:</b></label><br>
							<input type="text" name="last-name"placeholder="Enter Last Name"><br>
							
							<label class="age"><b>Age:</b></label><br>
							<input type="date" ><br>
														
							<label class="name"><b>City:</b></label><br>
							<input type="text" placeholder="Enter City" name="city"/><br>
														
							<label class="name"><b>Postal Code</b></label><br>
							<input type="number"placeholder="Enter Postal Code"><br>
							
							<label class="name"><b>E-mail</b></label><br>
							<input type="email" placeholder="Enter Email" name="email"/><br>
							

							<label class="name"><b>Phone Number</b></label><br>
			
							<select name="phone-num">
			
								<option value="french">+33</option>
								<option value="israel">+972</option>
							</select>
		
							<input type="tel"  placeholder="123456789" name="phone"><br>
						</form>
						
						<hr>
						
						<h2 class="cart">Traveler</h2>
						<form method="post">

							<label class="name"><b> First Name:</b></label><br>
							<input type="text" placeholder="Enter First Name" name="first-name" ><br>
						

							<label class="name"><b>Last Name:</b></label><br>
							<input type="text" name="last-name"placeholder="Enter Last Name"><br>
							
							<label class="age"><b>Age:</b></label><br>
							<input type="date" ><br>
														
							<label class="name"><b>E-mail</b></label><br>
							<input type="email" placeholder="Enter Email" name="email"/><br>
							

							<label class="name"><b>Phone Number</b></label><br>
			
							<select name="phone-num">
			
								<option value="french">+33</option>
								<option value="israel">+972</option>
							</select>
		
							<input type="tel"  placeholder="123456789" name="phone"><br>
						</form>


						
					</div>
				</div >
				<div class="break"></div>
				
				<h2> Payment</h2>
				<table class="box_order">
					<thead>
						<h2 class="cart">Cart</h2>
					</thead>
					<tbody>
						<input type="text" placeholder="Card number" name="card"><br>
						<input type="text" placeholder="CVV"name="card"><br>

					<label class="expiration"><b>Expiration date</b></label><br>
					<input type="number" placeholder="MM/YYYY" name="card"><br>
			


				</table>
				
				<input type="submit" name="pay" class="pay" id="pay" value="PAY">
			</div>
	</body>
</html>

<?php
	require_once 'footer.php';
	?>