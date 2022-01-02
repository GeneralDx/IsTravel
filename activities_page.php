<?php
	require_once 'header.php';
	?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activities</title>
    <style>
		
		.activities{
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			padding: 30px 20px;
			grid-column-gap: 20px;
			grid-row-gap: 30px;
		}

      h1, h2, p{
        color:#0148ba;
      }

      .activity img{
				width: 100%;
				height: 200px;
				object-fit: cover;
				cursor: pointer;
				transition: 0.2s ease;

      }

			.activity:hover {
					 transform: scale(1.04);
			}

			.activity h1 {
					padding: 5px;
					text-align: center;
					font-weight: bold;
					text-decoration: underline #0148ba;
			}

			.formsend_select_activity{
				padding: 5px 30px;
				border: none;
				outline: none;
				background-color: #0148ba;
				color: white;
				cursor: pointer;
				border-radius: 4px;
				font-size: 20px;
				display: block;
				margin: auto;
				transition: 0.2s all;
				margin-bottom: 10px;
			}

			.formsend_select_activity:hover{
				transform: scale(1.08);
			}

      .activity{
				background: #91D7FF;
			}

			#no_activity{
				color: #0148ba;
				font-size: 30px;
			}

			.no_activity{
				text-align: center;
			}

    </style>
  </head>

  <body>
    <?php
		if(isset($_POST['formsend_city'])) {
			extract($_POST);

	    $q = $db->prepare("SELECT * FROM activities WHERE city = :city AND status = :status");
			$q->execute([
				'city' => $city,
        'status' => 'Accepted'
			]);

	    $result = $q->fetchall();
			$row_count = $q->rowCount();

			if ($row_count > 0) {
		    foreach($result as $res){
		      ?>
					<div class="activities">
			      <div class="activity">
		          <div class="img">
								<img src="/IsTravel/img/<?php echo $res['image']; ?>" style="text-align:center">
			        </div>
			        <h1> <?php echo $res['activity_name']; ?> </h1>
			        <h2> Place: <?php echo $res['city']; ?> </h2>
							<form class="trip_details" method="post" action="activity_details_page.php">
								<input type="text" name="id" value="<?php echo $res['Id']; ?>" style="display:none">
								<input type="submit" name="formsend_select_activity" id="formsend_select_activity" class="formsend_select_activity" value="View more">
							</form>
			      </div>
					</div>
		      <?php
		    }
			} else {
				?>
				<div class="no_activity">
					<span id="no_activity">There is no activities available at this city for the moment</span>
				</div>

</div>
				<?php
			}
		}
    ?>

  </body>
</html>
<?php
	require_once 'footer.php';
	?>
