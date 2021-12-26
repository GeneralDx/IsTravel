<?php
	require_once 'header.php';
	?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trip</title>
    <style>

		div.trips{
			width: 100%;
			display: flex;
			align-items: flex-start;
		}

      h1, h2, p{
        color:#0148ba;
      }
      img{
        width: 90px;
        height: 90px;
      }
      .trip{
        float: left;
        width: 33%;
      }
    </style>
  </head>

  <body>
		<div class="trips">

    <?php
		if(isset($_POST['formsend_place'])) {
			extract($_POST);

	    $q = $db->prepare("SELECT * FROM trips WHERE place = :place");
			$q->execute([
				'place' => $place
			]);

	    $result = $q->fetchall();

	    foreach($result as $res){
	      ?>
	      <div class="trip">
	        <div class="img">
	            <?php
	            echo '<img src="/IsTravel/img/'.$res['image'].'" style="width:200px;height:200px">';
	            ?>
	        </div>
	        <h1> <?php echo $res['title']; ?> </h1>
	        <h2> Place: <?php echo $res['place']; ?> </h2>
	        <h2> Price: <?php echo $res['price']; ?>₪ </h2>
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
