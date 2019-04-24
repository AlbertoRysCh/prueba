<?php
$servidor="mysql:dbname=empresa;host=127.0.0.1";
$usuario="root";
$password="";

try{
	$pdo=new PDO($servidor,$usuario,$password);
	echo "conectado..";

}catch(PDOException $e){
	echo "Conexion Erronea".$e->getMessage();

}


?>