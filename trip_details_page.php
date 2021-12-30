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

      h1, h2, p, b{
        color:#0148ba;
				margin-left: 5px;
				margin-right: 5px;
      }

			span{
				color:#0148ba;
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


			input#name{
				width: 50%;
				margin: 5px 0 22px 0;
				padding: 15px;
				border: none;
				border-radius:0;
				display: inline-block;
				text-align: left;
				background: #f1f1f1;
			}

			input[type=text]:hover{
			outline: none;
			}

			textarea{
				width: 50%;
			  padding: 15px;
				margin: 5px 0 22px 0;
				display: inline-block;
				border: none;
				resize: none;
				FONT-FAMILY: Arial;
				background: #f1f1f1;s
			}

			textarea:focus{
			  outline: none;
			}

			.formsend_trip_comment{
				background-color: #0148ba;
				color: white;
				padding: 16px 20px;
				margin: 8px 0;
				border: none;
				cursor: pointer;
				width: 54%;
				opacity: 0.9;
				text-align: center;
			}

			hr {
				border: 1px
				solid #f1f1f1;
				margin-bottom: 25px;
			}

			.formsend_trip_comment:hover{
				opacity:1;
			}

			.add_comment{
				width:50%;
				float: left;
				margin-bottom: 10px;
			}

			.coms{
				width: 100%;
				display: flex;
				align-items: flex-start;
				justify-content: space-between;

				display: grid;
				grid-template-columns: repeat(3, 1fr);
				padding: 30px 20px;
				grid-column-gap: 20px;
				grid-row-gap: 30px;
			}

			.com{
				width: 100%;
				background: #91D7FF;
			}


    </style>
  </head>

  <body>
		<div class="trip">
    <?php
		$id_save = 0;
		if(isset($_POST['formsend_select_trip'])) {
			extract($_POST);
			$id_save = $id;

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

	<h1>Comments</h1>
			<?php
				if (isset($_SESSION['Type'])) {
			?>
	      <div class="add_comment">
		      <form method="post">
						<input type="text" name="Id_trip" value="<?php echo $id_save; ?>" style="display:none" >
						<label for="comment"><b>Comment</b></label><br>
						<textarea placeholder="Write your comment about this trip" name="comment" id="comment" cols="40" rows="5" required></textarea><br>
		        <input type="text" name="date" value="<?php echo time(); ?>" style="display:none" >
		        <input type="submit" name="formsend_trip_comment" id="formsend_trip_comment" class="formsend_trip_comment" value="Send">
		      </form>
				<hr>

		<?php
			}
			require_once 'add_comment.php';
		?>

			</div>
		<div class="coms">
      <?php
      $q= $db->prepare("SELECT * FROM trip_comment WHERE Id_trip = :Id_trip");
      $q->execute([
				'Id_trip' => $id_save
			]);
      $result=$q->fetchall();

      date_default_timezone_set('Asia/Jerusalem');

      foreach ($result as $res) {
        ?>
					<div class="com">
						<h3><b><?php echo $res['name']; ?></b></h3>
	          <p><?php echo $res['comment']; ?></p><br>
	          <span><?php echo date('d/m/Y H:i', $res['date']); ?></span>
					</div>

				<?php
			}
				 ?>
			 </div>

  </body>
</html>
<?php
	require_once 'footer.php';
	?>
