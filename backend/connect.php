<?php
$user = "root";
$pass = "";
$host = "localhost";
$db = "porfolio";

try{
	$conn=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
	echo "Connected Successfully", PHP_EOL;
}catch(PDOException $e){
	echo "Connection Failed: " . $e->getMessage();
}

