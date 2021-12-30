<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="../css/connexion.css  ">
</head>
<body>
	
	<?php
		include '../recurrent/header.php';
		include '../recurrent/menu.php';
	?>

	<div id="connexion">
		<h2>Connexion</h2>
		<form method="post">
			<input type="email" name="cemail" id="cemail" placeholder="Votre email" required><br/>
			<input type="password" name="cpassword" id="cpassword" placeholder="Votre mot de passe" required><br/>
			<input type="submit" name="fcormsend" id="formsend" value="Connexion" style=" color: #FE00B2; border: 1px #FE00B2;">
		</form>
<div id="oui">
	<?php
		if(isset($_POST['cformsend']))
		{
			extract($_POST);
			if(!empty($cemail) && !empty($cpassword))
			{
				$q = $db->prepare("SELECT * FROM users WHERE email = :email");
				$q->execute(['email'=>$cemail]);
				$result = $q->fetch();
				if($result == true)
				{
					$hashpassword = $result['password'];
					if(password_verify($cpassword,$hasspassword))
					{
						echo "Connexion en cours";
					}
					else
					{
						echo "Mot de passe incorrect";
					}
				}
				else
				{
					echo "Le compte portant l'email ".$email." n'existe pas, veuillez vous inscrire";
				}
				
				}
			else
			{
				echo "Veuillez completer l'ensemble des champs";
			}
		}
	?>
	</div>	
	<div id="non">
		<br><p>Vous n'etes pas inscrit ? <a href="inscription.php">Inscrivez-vous !</a></p>
	</div>
	</div>
	<?php
		include '../recurrent/footer.php';
	?>
	
</body>
</html>