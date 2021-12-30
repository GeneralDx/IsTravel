<?php
	// on cree des constantes
	define('HOST', 'localhost'); // vu qu on est tjs sur le meme ordi
	define('DB_NAME', 'siteweb'); // nom de data base
	define('USER', 'root'); // username
	define('PASS', ''); // pas de mot de passe

	try
	{
		$db = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// echo "Connection > OK !</br></br>";
	}
	catch(PDOException $e) // voir si erreur de connexion
	{
		echo $e;
	}