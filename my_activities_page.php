<!DOCTYPE html>

<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			table{
				margin-top:30px;
				margin-left:360px;
				margin-right:30px;
				padding:10px;
				text-align:center;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				width:900px;
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
									<td>	<?php echo $res['activity_name'];	?>	</td>
									<td>	<?php echo $res['city'];	?>	</td>
									<td>	<?php echo $res['description'];	?>	</td>
									<td>	<?php echo $res['status'];	?>	</td>
								</tr>
							<?php
						} else if ($res['status'] == 'Accepted') {
							?>
								<tr id="activtiy_table" class="activtiy_table" style="background-color:rgb(51, 255, 95)">
									<td>	<?php echo $res['activity_name'];	?>	</td>
									<td>	<?php echo $res['city'];	?>	</td>
									<td>	<?php echo $res['description'];	?>	</td>
									<td>	<?php echo $res['status'];	?>	</td>
								</tr>
							<?php
						} else if ($res['status'] == 'Denied') {
							?>
								<tr id="activtiy_table" class="activtiy_table" style="background-color:rgb(255, 51, 51)">
									<td>	<?php echo $res['activity_name'];	?>	</td>
									<td>	<?php echo $res['city'];	?>	</td>
									<td>	<?php echo $res['description'];	?>	</td>
									<td>	<?php echo $res['status'];	?>	</td>
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
