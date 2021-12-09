<!DOCTYPE html>

<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			table{
				margin-top:30px;
				margin-left:200px;
				margin-right:30px;
				padding:10px;
				text-align:center;
				background-color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				width:1200px;
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

      .activtiy_table{
        background-color:rgb(187, 187, 187);
      }

			#activity_name{
				max-width: 200px;
			}
			#activity_city{
				min-width: 80px;
				max-width: 80px;
			}
			#activity_description{
				max-width: 420px;
			}
			#change_status{
				min-width: 210px;
				max-width: 210px;
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
          <th>Change Status</th>

        <?php
					$q = $db->prepare("SELECT * FROM activities WHERE status=:status ORDER BY Id DESC LIMIT 50");
					$q->execute([
						'status' => 'In progress'
					]);
					$result = $q->fetchall();

					foreach ($result as $res) {
            ?>
              <tr id="activtiy_table" class="activtiy_table">
                <td id="activity_name">	<?php echo $res['activity_name'];	?>	</td>
                <td id="activity_city">	<?php echo $res['city'];	?>	</td>
                <td id="activity_description">	<?php echo $res['description'];	?>	</td>
                <td id="change_status">
                  <form method="post">
                    <input type="text" name="activity_id" id="activity_id" value="<?php echo $res['Id']; ?>" style="display:none" required>

                    <input type="radio" name="status" value="Accepted" id="Accepted" required>
            				<label for="Accepted" id="acc">Accept</label>
            				<input type="radio" name="status" value="Denied" id="Denied">
            				<label for="Denied" id="deny">Deny</label>

                    <input type="submit" name="formsend_change_status_activty" class="formsend_change_status_activty" id="formsend_change_status_activty" value="Change Status">
                  </form>

									<?php require_once 'suggested_activity.php'; ?>
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
