<!DOCTYPE html>

<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			table{
				margin-top:30px;
				margin-left:280px;
				margin-right:30px;
				padding:10px;
				text-align:center;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				width:1000px;
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

			#activity_name{
				max-width: 200px;
			}
			#activity_city{
				max-width: 140px;
			}
			#activity_description{
				max-width: 420px;
			}
			#activity_status{
				max-width: 190px;
			}
			#activity_modify{
				max-width: 50px;
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
          <th>Status</th>
					<th>Modify activity</th>

        <?php
					$q = $db->prepare("SELECT * FROM activities WHERE email=:email ORDER BY Id DESC LIMIT 50");
					$q->execute([
						'email' => $_SESSION['Mail']
					]);
					$result = $q->fetchall();

					foreach ($result as $res) {
						if ($res['status'] == 'In progress') {
							?>
								<tr id="activtiy_table" class="activtiy_table" style="background-color:rgb(187, 187, 187)">
									<td id="activity_name">	<?php echo $res['activity_name'];	?>	</td>
									<td id="activity_city">	<?php echo $res['city'];	?>	</td>
									<td id="activity_description">	<?php echo $res['description'];	?>	</td>
									<td id="activity_status">	<?php echo $res['status'];	?>	</td>
									<td id="activity_modify">
										<form method="post" action="/IsTravel/modify_activity_page.php">
											<input type="text" name="activity_id" id="activity_id" value="<?php echo $res['Id']; ?>" style="display:none" required>
											<input type="submit" name="formsend_to_modify_activty" class="formsend_to_modify_activty" id="formsend_to_modify_activty" value="Modify this activity" style="background-color:rgb(211, 211, 211); border-color:rgb(211, 211, 211); ">
										</form>
									</td>
								</tr>
							<?php
						} else if ($res['status'] == 'Accepted') {
							?>
								<tr id="activtiy_table" class="activtiy_table" style="background-color:rgb(51, 255, 95)">
									<td id="activity_name">	<?php echo $res['activity_name'];	?>	</td>
									<td id="activity_city">	<?php echo $res['city'];	?>	</td>
									<td id="activity_description">	<?php echo $res['description'];	?>	</td>
									<td id="activity_status">	<?php echo $res['status'];	?>	</td>
									<td id="activity_modify">
										<form method="post" action="/IsTravel/modify_activity_page.php">
											<input type="text" name="activity_id" id="activity_id" value="<?php echo $res['Id']; ?>" style="display:none" required>
											<input type="submit" name="formsend_to_modify_activty" class="formsend_to_modify_activty" id="formsend_to_modify_activty" value="Modify this activity" style="background-color:rgb(160, 255, 171); border-color:rgb(160, 255, 171); ">
										</form>
									</td>
								</tr>
							<?php
						} else if ($res['status'] == 'Denied') {
							?>
								<tr id="activtiy_table" class="activtiy_table" style="background-color:rgb(255, 51, 51)">
									<td id="activity_name">	<?php echo $res['activity_name'];	?>	</td>
									<td id="activity_city">	<?php echo $res['city'];	?>	</td>
									<td id="activity_description">	<?php echo $res['description'];	?>	</td>
									<td id="activity_status">	<?php echo $res['status'];	?>	</td>
									<td id="activity_modify">
										<form method="post" action="/IsTravel/modify_activity_page.php">
											<input type="text" name="activity_id" id="activity_id" value="<?php echo $res['Id']; ?>" style="display:none" required>
											<input type="submit" name="formsend_to_modify_activty" class="formsend_to_modify_activty" id="formsend_to_modify_activty" value="Modify this activity" style="background-color:rgb(255, 90, 90); border-color:rgb(255, 90, 90); ">
										</form>
									</td>
								</tr>
							<?php
						}

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
