<?php
	require_once 'header.php';
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Propose an activity</title>
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
    background-color: blue;
    outline: none;
  }
  textarea:focus{
    background-color: blue;
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



  /* Set a style for the submit/register button */
  .activitybtn {
		background-color: blue;
	  color: white;
	  padding: 16px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 50%;
	  opacity: 0.9;
  }

  .activitybtn:hover {
    opacity:1;
  }

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .formsend_activity {
    background-color: blue;
    text-align: center;
  }
  	</style>
  </head>
  <body>
    <div class="container">
        <h1>Propose an activity</h1>
        <p>Please fill this form to propose an activity.</p>
        <hr>

    		<form method="post">
    			<label for="activity_name"><b>Activity Activity Name</b></label><br>
    		    <input type="text" placeholder="Enter Activity Name" name="activity_name" id="activity_name" required><br>

						<label for="place"><b>Place</b></label><br>
							<select name="city"><br>
								<option value="ashdod">Ashdod</option>
								<option value="beer-sheva">Beer Sheva</option>
								<option value="dead-sea">Dead Sea</option>
								<option value="eilat">Eilat</option>
								<option value="haifa">Haifa</option>
								<option value="jerusalem">Jerusalem</option>
								<option value="mitspe-ramon">Mitspe Ramon</option>
								<option value="netanya">Netanya</option>
								<option value="tel-aviv">Tel Aviv</option>
								<option value="tiberiade">Tiberiade</option>
							</select><br><br>

    		  <label for="message"><b>Message</b></label><br>
            <textarea placeholder="Enter a description of your activity (exact address, price range, age range, opening hours...)" name="message" id="message" cols="40" rows="5" required></textarea>
        <hr>

    				<input type="submit" name="formsend_activity" class="activitybtn" id="formsend_activity" value="Send">
    		</form>
      </div>

			<?php
				require_once 'contact.php';
			?>

  </body>
</html>


<?php
	require_once 'footer.php';
	?>
