<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>

        .trips{
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

    			.trip:hover {
    					 transform: scale(1.04);
    			}

    			.trip h1 {
    					padding: 5px;
    					text-align: center;
    					font-weight: bold;
    					text-decoration: underline #0148ba;
    			}

    			.formsend_select_trip{
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

    			.formsend_select_trip:hover{
    				transform: scale(1.08);
    			}

          .trip{
    				background: #91D7FF;
    			}

    </style>
</head>
<body>
    <?php
      require_once 'header.php';
      ?>

    <h1>Last added trip</h1>

    <div class="trips">

      <?php
  	    $q = $db->prepare("SELECT * FROM trips ORDER BY Id DESC LIMIT 3");
  			$q->execute();

  	    $result = $q->fetchall();

  	    foreach($result as $res){
  	      ?>
  	      <div class="trip">
  	        <div class="img">
  						<img src="/IsTravel/img/<?php echo $res['image']; ?>" style="text-align:center">
  	        </div>
  	        <h1> <?php echo $res['title']; ?> </h1>
  	        <h2> Place: <?php echo $res['place']; ?> </h2>
  	        <h2> Price: <?php echo $res['price']; ?>₪ </h2>
  					<form class="trip_details" method="post" action="trip_details_page.php">
  						<input type="text" name="id" value="<?php echo $res['Id']; ?>" style="display:none">
  						<input type="submit" name="formsend_select_trip" id="formsend_select_trip" class="formsend_select_trip" value="View more">
  					</form>
  	      </div>
  	      <?php
  	    }
      ?>
		</div>
    <?php
      require_once 'footer.php';
      ?>
</body>
</html>
