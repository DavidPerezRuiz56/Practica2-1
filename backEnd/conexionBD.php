<?php
	
	$host = "localhost";
	$db = 'hospital';
	$port = "3306";
	$usuario = "root";
	$pass = "";

	$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8;port=$port" , $usuario, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

?> 