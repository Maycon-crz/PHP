<?php

	define('DRIVER', 'mysql');
	define('DATABASE', 'recicladartedb');
	define('DATABASE_USER', 'root');
	define('DATABASE_PASS', '');

	function getConnection(){
		return DRIVER.", ".DATABASE.", ".DATABASE_USER.", ".DATABASE_PASS;
	}
?>