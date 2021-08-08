<?php

include("conecta.php");
$elabor = $client->$bd->labor;
$id = $_GET['id'];
$resultado = $elabor->deleteOne(
  // El criterio, algo así como where
  ["_id" => new MongoDB\BSON\ObjectId($id)]
  );         
   header("Location: admateriales.php");

?>