<?php
	require_once 'header.php';
	?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trip</title>
    <style>

		.activity{
			width: 100%;
			display: flex;
			align-items: flex-start;
    	justify-content: space-between;
		}

		.img{
			float: left;
			width: 40%;
			margin-left: 10px;
			margin-right: 10px;
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

    </style>
  </head>

  <body>
		<div class="activity">
    <?php
		if(isset($_POST['formsend_select_activity'])) {
			extract($_POST);

	    $q = $db->prepare("SELECT * FROM activities WHERE Id = :Id");
			$q->execute([
        'Id' => $id
			]);

	    $result = $q->fetchall();

	    foreach($result as $res){
	      ?>
				<div class="img">
					<img src="/IsTravel/img/<?php echo $res['image']; ?>" style="text-align:center">
				</div>
	      <div class="details">
	        <h1> <?php echo $res['activity_name']; ?> </h1>
	        <h2> City: <?php echo $res['city']; ?> </h2>
					<p> <?php echo nl2br($res['description']); ?> </p>
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
