<?php
	require_once 'header.php';
	?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activity</title>
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

      .trip img{
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

    </style>
  </head>

  <body>
		<div class="activities">

    <?php
		if(isset($_POST['formsend_city'])) {
			extract($_POST);

	    $q = $db->prepare("SELECT * FROM activities WHERE city = :city AND status = :status");
			$q->execute([
				'city' => $city,
        'status' => 'Accepted'
			]);

	    $result = $q->fetchall();

	    foreach($result as $res){
	      ?>
	      <div class="activity">
          <div class="img">
						<img src="/IsTravel/img/<?php echo $res['image']; ?>" style="text-align:center">
	        </div>
	        <h1> <?php echo $res['activity_name']; ?> </h1>
	        <h2> Place: <?php echo $res['city']; ?> </h2>
	        <h2> Description: <?php echo $res['description']; ?></h2>
	      </div>
	      <?php
	    }
		}
    ?>
		</div>

  </body>
</html>
<?php
	require_once 'footer.php';
	?>
