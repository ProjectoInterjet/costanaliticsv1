<?php
include("conecta.php");
$collection = $client->$bd->users;

$id = $_GET['id'];

$resultado = $collection->deleteOne(
// El criterio, algo así como where
["_id" => new MongoDB\BSON\ObjectId($id)]
);

header("Refresh: 0;url=musuarios.php")

?>