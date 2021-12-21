<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profil</title>
  <style>

    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

select{
	width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
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

input[type=text]:focus {
  outline: none;
}
textarea:focus{
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1,p,b{
  color: #0148ba;
}
#c,#m{
  color: #0148ba;
}
#si{
  font-size: 30px;

}
#su{
  text-decoration: none;
  color: #0148ba;
}



/* Set a style for the submit/register button */
.formsend_modify_activty {
  background-color: #0148ba;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.formsend_modify_activty:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.formsend_modify_activty {
  background-color: #0148ba;
  text-align: center;
}
  </style>
</head>
<body>
<div class="container">
    <h1>Activity</h1>
    <p>Please modify your details.</p>
    <hr>

		<form method="post">
      <?php
        if(isset($_POST['formsend_to_modify_activty'])) {
          extract($_POST);

          $q = $db->prepare("SELECT * FROM activities WHERE Id=:Id");
					$q->execute([
						'Id' => $activity_id
					]);
					$result = $q->fetch();
      ?>
      <input type="text" name="activity_id" id="activity_id" value="<?php echo $activity_id; ?>" style="display:none" required>

      <?php
        }
      ?>

      <label for="activity_name"><b>Activity Name</b></label><br>
        <input type="text" value="<?php echo $result['activity_name']; ?>" name="activity_name" id="activity_name" required><br>

        <label for="city"><b>Place</b></label><br>
          <select name="city"><br>
            <option value="<?php echo $result['city']; ?>"><?php echo $result['city']; ?></option>
            <option value="Ashdod">Ashdod</option>
            <option value="Beer Sheva">Beer Sheva</option>
            <option value="Dead Sea">Dead Sea</option>
            <option value="Eilat">Eilat</option>
            <option value="Haifa">Haifa</option>
            <option value="Jerusalem">Jerusalem</option>
            <option value="Mitspe Ramon">Mitspe Ramon</option>
            <option value="Netanya">Netanya</option>
            <option value="Tel Aviv">Tel Aviv</option>
            <option value="Tiberias">Tiberias</option>
          </select><br><br>

      <label for="description"><b>Message</b></label><br>
        <textarea name="description" id="description" cols="40" rows="5" required><?php echo $result['description']; ?></textarea>
    <hr>

        <input type="submit" name="formsend_modify_activty" class="formsend_modify_activty" id="formsend_modify_activty" value="Modify">
		</form>
  </div>

  <?php
    require_once 'modify_activity.php'
  ?>

</body>
</html>

<?php
	require_once 'footer.php';
	?>
