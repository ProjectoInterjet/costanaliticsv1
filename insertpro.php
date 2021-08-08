<?php
include("valoresdelpre.php");
include("conecta.php");
$collection = $client->$bd->proyectos;

//////////////////////////////////////
$insertOneResult = $collection->insertOne([
                 

 'nombreproyecto' => $postedNompro,
  'nombreencargado' => $postedNomen,
 'nombrecliente' => $postedNomclie,
  'fechinicio' => $postedFhini,
 'fechtermino' => $postedFhte,
 'labor' => $elabor,
 'costmate' => $sumamat,
 'costmaqui' => $sutru,
 'costmanobra' => $sumanobra,
 'costtotal' =>  $sumacompleta,
 'ganancia' =>   $mlabor



]);

?>