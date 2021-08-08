<?php
include("conecta.php");
$material = $client->$bd->materials;

$id = $_GET['id'];

$resultado = $material->deleteOne(
  // El criterio, algo así como where
  ["_id" => new MongoDB\BSON\ObjectId($id)]
  );         
   header("Location: admateriales.php");

?>