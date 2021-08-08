<?php

include("conecta.php");
$manobra = $client->$bd->manobra;
$id = $_GET['id'];
$resultado = $manobra->deleteOne(
  // El criterio, algo así como where
  ["_id" => new MongoDB\BSON\ObjectId($id)]
  );         
   header("Location: admateriales.php");

?>