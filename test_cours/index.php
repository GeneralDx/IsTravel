<?php echo "<h1>Gros titre !</h1>"; ?>

<?= "Bienvenue sur ma page php !"; ?>

<!-- <?php
	$pseudo = "Sarah";
	$age = 19;
	$email = "sarah@mimoun.org";
?> -->

<?php 
	session_start(); // demarrer une session
	// $_SESSION['pseudo']="Sarah";
	// $_SESSION['age']=19;
	// $_SESSION['email']="sarah@mimoun.org";
	// echo $_SESSION['pseudo'];
	// echo $_SESSION['age'];
	// echo $_SESSION['email'];

	// // Pour deconnecter par exemple
	// session_unset(); // vider la session
	// session_destroy(); // deruire la session

	// ajouter cookie
	setcookie('pseudo', 'Sarah', time()+(30*24*60*60));

	if(isset($_COOKIE['pseudo']))
	{
		echo "l'element existe bien".$_COOKIE['pseudo'];
	}
	else
	{
		echo "l'element n'existe pas";
	}
	// supprimer cookie
	// setcookie('pseudo','',time());
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titre</title>
</head>
<body>
		<h3>Bienvenue sur votre profil</h3>
	<?php
		if(isset($_SESSION['pseudo']) && isset($_SESSION['age']) && isset($_SESSION['email']))
		{
			?>
			<p>Votre pseudo : <?php echo $_SESSION['pseudo'];?></p>
			<p>Votre age : <?php echo $_SESSION['age'];?></p>
			<p>Votre email : <?php echo $_SESSION['email'];?></p>
		<?php
		}
		else
		{
			echo "Veuillez vous connecter a votre compte :";
		}
	?>
	
	<!-- Menu de navigation -->
	<?php include 'menunavigation.php';
	include 'includes/database.php';
	global $db;?>

	<!-- <p>Nom : <?= $pseudo; ?></p>
	<p>Email : <?= $email; ?></p>
	<p>Age : <?= $age; ?></p> -->
	
	<h2>Connexion</h2>
	<form method="post">
		<input type="email" name="cemail" id="cemail" placeholder="Votre email" required><br/>
		<input type="password" name="cpassword" id="cpassword" placeholder="Votre mot de passe" required><br/>
		<input type="submit" name="cformsend" id="cformsend" value="Connexion"> 
	</form>

	<?php
		if(isset($_POST['formsend']))
		{
			extract($_POST);
			if(!empty($cemail) && !empty($cpassword))
			{
				$q = $db->prepare("SELECT * FROM users WHERE email = :email");
				$q->execute(['email'=>$cemail]);
				$result = $q->fetch();
				if($result == true)
				{
					// le compte existe
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

	<h2>Inscription</h2>
	<form method="post">
		<input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required><br/>     
		<input type="text" name="age" id="age" placeholder="Votre age" required><br/>
		<input type="email" name="email" id="email" placeholder="Votre email" required><br/>
		<input type="password" name="password" id="password" placeholder="Votre mot de passe" required><br/>
		<input type="password" name="cpassword" id="cpassword" placeholder="Confirmez votre mot de passe" required><br/>
		<input type="submit" name="formsend" id="formsend" value="Inscription"> <!-- value par defaut est Envoyer -->
	</form>
	<?php

		/*include 'database.php'; // inclure base de donnees
		global $db; // recuperer la variable a partir de la data base
		$k = $db->prepare("INSERT INTO users(pseudo, email, password) VALUES(:pseudo,:email,:password)");
		$k->execute([
			'pseudo' => "Saroush",
			'email' => "saroush@mimoun.org",
			'password' => "r6er959re5c6we5"
		]);*/

		/*$q = $db->query("Select * FROM users LIMIT 2");*/ // avec limite de 2 users
		/*$q = $db->query("Select * FROM users WHERE pseudo = 'Sarah'");*/ // afficher que Sarah
		/*$q = $db->query("Select * FROM users ORDER BY id DESC");*/ // affichage decroissant
		/* $q = $db->query("Select * FROM users ORDER BY id"); // affichage croissant
		while($user = $q->fetch()) // fetch : recuperer sous forme de tableau, 0=id, 1=pseudo, 2=email, 3=password, 4=date
		{
			// echo "id : ".$user['id'];
			// echo " pseudo : ".$user['pseudo'];
			?>
			<li>
				<a href="profil.php?q=<?= $user['id']; ?>"><?= $user['email'];?>	
				</a>
			</li>
			<?php 
		}*/

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
</body>
</html>