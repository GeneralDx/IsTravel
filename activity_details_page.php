<?php
	require_once 'header.php';
	?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Activity</title>
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

			.formsend_activity_comment{
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

			.formsend_activity_comment:hover{
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
		<div class="activity">
    <?php
		$id_save = 0;

		if(isset($_POST['formsend_select_activity'])) {
			extract($_POST);
			$id_save = $id;

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

	<h1>Comments</h1>
			<?php
				if (isset($_SESSION['Type'])) {
			?>
	      <div class="add_comment">
		      <form method="post">
						<input type="text" name="Id_activity" value="<?php echo $id_save; ?>" style="display:none" >
						<label for="comment"><b>Comment</b></label><br>
						<textarea placeholder="Write your comment about this activity" name="comment" id="comment" cols="40" rows="5" required></textarea><br>
		        <input type="text" name="date" value="<?php echo time(); ?>" style="display:none" >
		        <input type="submit" name="formsend_activity_comment" id="formsend_activity_comment" class="formsend_activity_comment" value="Send">
		      </form>
				<hr>

		<?php
			}
			require_once 'add_comment.php';
		?>

			</div>
		<div class="coms">
      <?php
      $q= $db->prepare("SELECT * FROM activity_comment WHERE Id_activity = :Id_activity");
      $q->execute([
				'Id_activity' => $id_save
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
