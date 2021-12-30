<?php
	require_once 'header.php';
	?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trip</title>
    <style>

		.trip{
			width: 100%;
			display: flex;
			align-items: flex-start;
    	justify-content: space-between;
		}

		.image{
			float: left;
			width: 40%;
			height: 200px;
			margin-left: 10px;
			margin-right: 10px;
		}

		.image img{
			width: 100%;
		}

		.details{
			float: right;
			width: 60%;
			background: #91D7FF;
			margin-left: 10px;
			margin-right: 10px;
		}

      h1, h2, p{
        color:#0148ba;
				margin-left: 5px;
				margin-right: 5px;
      }

			p{
				text-align: justify;
			}

			.details h1 {
					text-align: center;
					font-weight: bold;
					text-decoration: underline #0148ba;
			}

			.to_cart{
				display: flex;
			}

			.formsend_add_cart{
				width: 20%;
				margin-right: 30%;
				padding: 5px 30px;
				border: none;
				outline: none;
				background-color: #0148ba;
				color: white;
				cursor: pointer;
				border-radius: 4px;
				font-size: 20px;
				display: block;
				transition: 0.2s all;
				margin-bottom: 10px;
			}

			select{
				width: 13%;
				margin-left: 30%;
				margin-right: 5%;
				padding: 5px 30px;
				border: none;
				outline: none;
				background-color: #0148ba;
				color: white;
				border-radius: 4px;
				font-size: 20px;
				display: block;
				transition: 0.2s all;
				margin-bottom: 10px;
				display: inline-block;
				FONT-FAMILY: Arial;
			}

			.formsend_add_cart:hover{
				transform: scale(1.08);
			}

    </style>
  </head>

  <body>
		<div class="trip">
    <?php
		if(isset($_POST['formsend_select_trip'])) {
			extract($_POST);

	    $q = $db->prepare("SELECT * FROM trips WHERE Id = :Id");
			$q->execute([
        'Id' => $id
			]);

	    $result = $q->fetchall();

	    foreach($result as $res){
	      ?>
				<div class="image">
					<img src="/IsTravel/img/<?php echo $res['image']; ?>">
				</div>
	      <div class="details">
	        <h1> <?php echo $res['title']; ?> </h1>
	        <h2> Place: <?php echo $res['place']; ?> </h2>
	        <h2> Price: <?php echo $res['price']; ?>₪ </h2>
					<p> <?php echo nl2br($res['description']); ?> </p>
					<form method="post" class="to_cart">
						<input type="text" name="id" value="<?php echo $res['Id']; ?>" style="display:none">
						<select name="quantity">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
						<input type="submit" name="formsend_add_cart" id="formsend_add_cart" class="formsend_add_cart" value="Add to cart">
					</form>
	      </div>
	      <?php
	    }
		}

		require_once 'add_cart.php';
    ?>
	</div>
  </body>
</html>
<?php
	require_once 'footer.php';
	?>
