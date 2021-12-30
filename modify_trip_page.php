<?php
	require_once 'header.php';
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Modify a trip</title>
  <style>

    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], [type=date] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-family: Arial;
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
.formsend_modify_trip {
  background-color: #0148ba;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.formsend_modify_trip:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.formsend_modify_trip {
  background-color: #0148ba;
  text-align: center;
}
  </style>
</head>
<body>
<div class="container">
    <h1>Trip</h1>
    <p>Please modify the details</p>
    <hr>

		<form method="post">
      <?php
        if(isset($_POST['formsend_to_modify_trip'])) {
          extract($_POST);

          $q = $db->prepare("SELECT * FROM trips WHERE Id=:Id");
					$q->execute([
						'Id' => $trip_id
					]);
					$result = $q->fetch();
      ?>
      <input type="text" name="trip_id" id="trip_id" value="<?php echo $trip_id; ?>" style="display:none" required>

      <?php
        }
      ?>

      <label for="title"><b>Trip Name</b></label><br>
        <input type="text" value="<?php echo $result['title']; ?>" name="title" id="title" required><br>
        <label for="start_date"><b>Start Date</b></label><br>
          <input type="date" name="start_date" id="start_date" value="<?php echo $result['start_date'] ?>" required><br>
        <label for="end_date"><b>End Date</b></label><br>
          <input type="date" name="end_date" id="end_date" value="<?php echo $result['end_date'] ?>" required><br>
        <label for="place"><b>Place</b></label><br>
          <select name="place"><br>
            <option value="<?php echo $result['place']; ?>"><?php echo $result['place']; ?></option>
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
          <label for="price"><b>Price</b></label><br>
            <input type="text" placeholder="Enter Trip Price" name="price" id="price" value="<?php echo $result['price'] ?>" required>
            <span>  <?php echo "₪" ?></span><br>
      <label for="description"><b>Message</b></label><br>
        <textarea name="description" id="description" cols="40" rows="5" required><?php echo $result['description']; ?></textarea>
    <hr>

        <input type="submit" name="formsend_modify_trip" class="formsend_modify_trip" id="formsend_modify_trip" value="Modify">
		</form>
  </div>

  <?php
    require_once 'modify_trip.php';
  ?>

</body>
</html>

<?php
	require_once 'footer.php';
	?>
