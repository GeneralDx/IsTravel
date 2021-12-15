<?php
	require_once 'header.php';
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add a trip</title>
    <style>

  		* {box-sizing: border-box}

  /* Add padding to containers */
  .container {
    padding: 16px;
  }

  /* Full-width input fields */
  input[type=text], [type=file], [type=date]{
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    FONT-FAMILY: Arial;
  }

  input[type=text], [type=file], [type=date]:focus{
    outline: none;
  }

	select{
		width: 50%;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #f1f1f1;
		FONT-FAMILY: Arial;
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

  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  h1,p,b{
  	color: blue;
  }
  #c,#m{
  	color: blue;
  }
  #si{
  	font-size: 30px;

  }
  #su{
  	text-decoration: none;
  	color: blue;
  }
  span{
    color: blue;
  }

  /* Set a style for the submit/register button */
  .tripbtn {
		background-color: blue;
	  color: white;
	  padding: 16px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 50%;
	  opacity: 0.9;
  }

  .tripbtn:hover {
    opacity:1;
  }

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .formsend_trip {
    background-color: blue;
    text-align: center;
  }
  	</style>
  </head>
  <body>
    <div class="container">
        <h1>Add a trip</h1>
        <p>Please fill this form to add a trip.</p>
        <hr>

    		<form method="post" enctype="multipart/form-data">
    			<label for="title"><b>Title</b></label><br>
    		    <input type="text" placeholder="Enter Trip Title" name="title" id="title" required><br>
          <label for="image"><b>Image</b></label><br>
      		  <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" required><br>
          <label for="start_date"><b>Start Date</b></label><br>
      		  <input type="date" name="start_date" id="start_date" required><br>
          <label for="end_date"><b>End Date</b></label><br>
        	  <input type="date" name="end_date" id="end_date" required><br>
    			<label for="place"><b>Place</b></label><br>
          <select name="place"><br>
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
          <label for="price"><b>Price</b></label><br>
    		    <input type="text" placeholder="Enter Trip Price" name="price" id="price" required>
          <span>  <?php echo "₪" ?></span><br>
          <label for="description"><b>Description</b></label><br>
            <textarea placeholder="Enter a description of your trip" name="description" id="description" cols="40" rows="5" required></textarea>
        <hr>

    				<input type="submit" name="formsend_trip" class="tripbtn" id="formsend_trip" value="Send">
    		</form>
      </div>
			<?php require_once 'add_trip.php'; ?>
  </body>
</html>


<?php
	require_once 'footer.php';
	?>
