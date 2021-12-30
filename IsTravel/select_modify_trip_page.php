<!DOCTYPE html>

<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Modify trip</title>
		<style>
			table{
				margin-top:30px;
				margin-left:10%;
				margin-right:10%;
				margin-bottom: 30px;
				padding:10px;
				width:80%;
				text-align:center;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				height: fit-content;
				overflow:hidden;
				border-radius: 4px;
				line-height: 130%;
			}
			th{
				font-family:'sporo';
				font-size :20px;
				margin:15px;
			}
			td{
				color:black;
				font-size :15px;
			}

			table td {
			   overflow: hidden;
			   text-overflow: ellipsis;
			   white-space: nowrap;
			}

			#trip_name{
				max-width: 200px;
			}
			#trip_city{
				min-width: 80px;
				max-width: 80px;
			}
			#trip_description{
				max-width: 420px;
			}
			#trip_modify{
				min-width: 30px;
				max-width: 30px;
			}
		</style>
	</head>

	<body>
		<header>
			<?php require_once 'header.php'; ?><!--ethan-->
		</header>
		<main>
			<content>
        <table>
          <th>Name</th>
          <th>City</th>
          <th>Description</th>
					<th>Modify activity</th>

        <?php
					$q = $db->prepare("SELECT * FROM trips ORDER BY Id DESC LIMIT 50");
					$q->execute();
					$result = $q->fetchall();

					foreach ($result as $res) {
							?>
								<tr id="trip_table" class="trip_table" style="background-color:rgb(187, 187, 187)">
									<td id="trip_name">	<?php echo $res['title'];	?>	</td>
									<td id="trip_city">	<?php echo $res['place'];	?>	</td>
									<td id="trip_description">	<?php echo $res['description'];	?>	</td>
									<td id="trip_modify">
										<form method="post" action="/IsTravel/modify_trip_page.php">
											<input type="text" name="trip_id" id="trip_id" value="<?php echo $res['Id']; ?>" style="display:none" required>
											<input type="submit" name="formsend_to_modify_trip" class="formsend_to_modify_trip" id="formsend_to_modify_trip" value="Modify this trip" style="background-color:rgb(211, 211, 211); border-color:rgb(211, 211, 211); ">
										</form>
									</td>
								</tr>
							<?php

					}
        ?>
        </table>
      </content>
    </main>
    <footer>
      <?php require_once 'footer.php'; ?>
    </footer>
  </body>
</html>
