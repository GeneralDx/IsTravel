<?php

	define('HOST', 'mysql-istravel.alwaysdata.net');
	define('DB_NAME', 'istravel_db');
	define('USER', 'istravel');
	define('PASS', 'IsTravel.555');

	try{
		$db = new PDO("mysql:host=". HOST . ";dbname=" . DB_NAME, USER, PASS);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "Connect > OK <br>";
	} catch(PDOException $e){
		echo $e;
	}
?>
