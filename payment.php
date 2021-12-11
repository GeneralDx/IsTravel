<?php
;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart-IsTravel </title>

	<style>
		.Payment{
			text-align: center;
		}
		.col_1{
			font-weight: bold;
		}
		.client{
			font-weight: bold;
		}
		.condition{
			/*<a href="https://.../www.termsfeed.com/blog/sample-terms-and-conditions-template/"></a>*/
		}
	</style>


</head>
<body>
	<!--PAGE-Header-->
		<section class="section-payement">
			<h2 class="Payment">Payment</h2>
		</section>
		<form name="checkout" method="post"class="checkout_form" action="">
			
			<div class="col2_set" id="customer_details">
			
				<div class="col_1">
			
					<h3>Reservation Details</h3>
			
				</div>
			

				<h3 class="client">Customer</h3>
			
				<fieldset class="customer">
			
					<label class="name"> Last Name:</label>
					<input type="text" name="last-name"/><br />
			
					<label class="name"> First Name:</label>
					<input type="text" name="first-name"/><br />
			
					<label class="age">Age:</label>
					<input type="date" ><br />
		
					<label class="city">City:</label>
					<input type="text" name="city"/><br />
					<label class="postal">Postal Code</label>
					<input type="number"><br />
			
					<label class="email">E-mail</label>
					<input type="email" name="email"/><br />
			
					<label class="phone">Phone Number</label>
			
					<select name="phone-num">
			
						<option value="french">+33</option>
						<option value="israel">+972</option>
			
					</select>
					<input type="tel" name="phone">
			
					</fieldset>
				
				<h3 class="client">Traveler</h3>
				
				<fieldset class="passenger">
					
					<p class="traveler">Number of Traveler</p>
					<input type="number"name="number_traveler"/>

				</fieldset>

				<? php
				$travel=1
				while($travel<=number){


				<fieldset class="travel">	
					
					<label class="name">Last Name</label>
					<input type="text" name="last-name"/><br />

					<label class="name">First Name</label>
					<input type="text" name="first-name"/><br />

					<label class="date"> Date of Birth</label>
					<input type="date" name="birthday"/><br />

				</fieldset>
				$travel++;
			}

			?>

			<input type="checkbox"/>
			<p class="term"> I agree to the <span class="condition"> term & condition</span></p>

			</div>
	</body>
</html>