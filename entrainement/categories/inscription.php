<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css  ">
</head>
<body>

	<?php
		include '../recurrent/header.php';
		include '../recurrent/menu.php';
	?>
	<h2>Inscription</h2>
	<form method="post">
		<input type="text" name="nom" id="nom" placeholder="Votre nom" required><br/>
		<input type="text" name="prenom" id="prenom" placeholder="Votre prenom" required><br/>
		<input type="text" name="age" id="age" placeholder="Votre age" required><br/>
		<input type="email" name="email" id="email" placeholder="Votre email" required><br/>
		<input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
		<input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre mot de passe" required><br/>
		<input type="submit" name="formsend" id="formsend" value="Inscription">
	</form>
	<?php

		include 'database.php';
		global $db;
		$k = $db->prepare("INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email,:password)");
		$k->execute([
			'pseudo' => "Saroush",
			'email' => "saroush@mimoun.org",
			'password' => "r6er959re5c6we5"
		]);

		$q = $db->query("Select * FROM users LIMIT 2");
		$q = $db->query("Select * FROM users WHERE pseudo = 'Sarah'");
		$q = $db->query("Select * FROM users ORDER BY id DESC");
		$q = $db->query("Select * FROM users ORDER BY id");
		while($user = $q->fetch())
		{
			echo "id : ".$user['id'];
			echo " pseudo : ".$user['pseudo'];
			?>
			<li>
				<a href="profil.php?q=<?= $user['id']; ?>"><?= $user['email'];?>
				</a>
			</li>
			<?php
		}

		if(isset($_POST['formsend']))
		{
			extract($_POST);
			if(!empty($pseudo) && !empty($email) && !empty($age) && !empty($password) && !empty($cpassword))
			{
				// echo "Votre pseudo : ".$pseudo."<br/>";
				// echo "Votre email : ".$email."<br/>";
				// echo "Votre age : ".$age."<br/>";
				// echo "Votre mot de passe : ".$password."<br/>";

				if($password == $cpassword)
				{
					$options = ['cost' => 12];
					$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

					$c = $db->prepare("SELECT email FROM users WHERE email = :email");
					$c->execute([ 'email' => $email ]);
					$result = $c->rowCount(); // compter le nombre de fois

					if($result == 0)
					{
						$q = $db->prepare("INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email,:password)");
						$q->execute([
							'pseudo' => $pseudo,
							'email' => $email,
							'password' => $hashpass
						]);
						echo "Le compte a ete cree avec succes !";
					}
					else
					{
						echo "Un compte existe deja avec cette addresse mail";
					}
				}
				else
				{
					echo "Le mot de passe et la confirmation de mot de passe sont differents, veuillez reparer cela";
				}

				// $options = ['cost' => 12];
				// $hashpass = password_hash($password, PASSWORD_BCRYPT, $options); // hacher mot de passe

				// include 'database.php'; // inclure base de donnees
				// global $db; // recuperer la variable a partir de la data base
				// $k = $db->prepare("INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email,:password)");
				// $k->execute([
				// 	'pseudo' => "Talouche",
				// 	'email' => "talouche@mimoun.org",
				// 	'password' => $hashpass
				// ]);

				// if(password_verify($password, $hashpass))
				// {
				// 	echo "si le mot de passe est le meme";
				// }
				// else
				// {
				// 	echo "le mot de passe n'est pas correct";
				// }
			}
			else
			{
				echo "Les champs ne sont pas tous remplis";
			}
		}

	?>
	<div id="non">
		<br>Vous etes deja inscrit ? <a href="connexion.php">Connectez-vous !</a>
	</div>
	<?php
		include '../recurrent/footer.php';
	?>

</body>
</html>
