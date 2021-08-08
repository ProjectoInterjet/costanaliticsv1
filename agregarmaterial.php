<?php

    $mnom= $_POST["nommat"];
    $mdesc= $_POST["desc"];
    $mop= $_POST["opmaterial"];
    include("conecta.php");
$collection = $client->$bd->$mop;

           if($mop == materials)
                    {   
                        $insertOneResult = $collection->insertOne([
                            'matnombre' => $mnom,
                            'matdescription' => $mdesc
                            
                        ]);          
                         header("Location: admateriales.php");
    
                
                    }else if ($mop == trucking)
                                   {
                                    $insertOneResult = $collection->insertOne([
                                        'trunombre' => $mnom,
                                        'trudescription' => $mdesc
                                        
                                    ]);          
                                     header("Location: admateriales.php");
                                      
                                    }else if ($mop == manobra)
                                    {
                                     $insertOneResult = $collection->insertOne([
                                         'mobranombre' => $mnom,
                                         'mobradescription' => $mdesc
                                         
                                     ]);          
                                      header("Location: admateriales.php");
                                       
                                     }else if ($mop == labor)
                                     {
                                      $insertOneResult = $collection->insertOne([
                                          'labnombre' => $mnom,
                                          'labdesc' => $mdesc
                                          
                                      ]);          
                                       header("Location: admateriales.php");
                                        
                                      }
	



?>