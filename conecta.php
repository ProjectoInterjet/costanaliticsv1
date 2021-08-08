<?php

require 'vendor/autoload.php' ;

$uri="mongodb://localhost:27017/costbd?ssl=false";
$bd="costbd";
$client=new MongoDB\Client($uri);
/*
$collection = $client->$bd->users;

$result = $collection->insertOne( [ 'item' => 'producto1', 'cantidad' => '200' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";
*/

?>