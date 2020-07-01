<?php
$dsn = "mysql:dbname=projeto1;host=localhost";
$dbuser= "root";
$dbpass = "";

try {
   
    $pdo = new PDO ($dsn, $dbuser, $dbpass);


} catch (PDOException $e){
	echo "falhou a conexão: ".$e->getMessage();

}

