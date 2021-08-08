<?php

include("conecta.php");
$collection = $client->$bd->users;

	$usuario= $_POST["nameEst"];
    $pass= $_POST["ApeEst"];
	$usu= $_POST["optipousu"];
	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'username' => $usuario,
		'password' => $pass,
		'tipousu' => $usu
		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=musuarios.php")

?>