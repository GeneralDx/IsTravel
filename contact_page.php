<?php
	require_once 'header.php';
	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact us</title>
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
  .contactbtn {
		background-color: #0148ba;
	  color: white;
	  padding: 16px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 50%;
	  opacity: 0.9;
  }

  .contactbtn:hover {
    opacity:1;
  }

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .formsend_contact {
    background-color: #0148ba;
    text-align: center;
  }
  	</style>
  </head>
  <body>
    <div class="container">
        <h1>Contact us</h1>
        <p>Please fill this form to contact us.</p>
        <hr>

    		<form method="post">
    			<label for="first_name"><b>First Name</b></label><br>
    		    <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" required><br>

    			<label for="last_name"><b>Last Name</b></label><br>
    		    <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required><br>

    		  <label for="email"><b>Email</b></label><br>
    		    <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

    		  <label for="message"><b>Message</b></label><br>
            <textarea placeholder="Enter Message" name="message" id="message" cols="40" rows="5" required></textarea>
        <hr>

    				<input type="submit" name="formsend_contact" class="contactbtn" id="formsend_contact" value="Send">
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
