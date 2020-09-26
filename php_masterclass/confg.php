<?php
		
	//PDO
		$host = 'localhost';
		$dbname = 'recicladartedb';
		$username = 'root';
		$password = '';
		$charset = 'utf8mb4';
		$collate = 'utf8mb4_unicode_ci';
		$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
		//Default(Padrao) para não precisar fazer na ora de executar
			$options = [
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,				
				PDO::ATTR_PERSISTENT => false,
				PDO::ATTR_EMULATE_PREPARES => true,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
			];			
		//----
		$pdo = new PDO($dsn, $username, $password, $options);
	//---------



	// define('DRIVER', 'mysql');
	// define('DATABASE', 'recicladartedb');
	// define('DATABASE_USER', 'root');
	// define('DATABASE_PASS', '');

	// function getConnection(){
	// 	return DRIVER.", ".DATABASE.", ".DATABASE_USER.", ".DATABASE_PASS;
	// }
?>