<?php

include("conecta.php");
$maquinaria = $client->$bd->trucking;
$id = $_GET['id'];
$resultado = $maquinaria->deleteOne(
  // El criterio, algo así como where
  ["_id" => new MongoDB\BSON\ObjectId($id)]
  );         
   header("Location: admateriales.php");

?>