<?php

                if(isset($_POST['login']))
                   {
                        $postedUsername = $_POST['uusername']; //Gets the posted username, put's it into a variable.
                        $postedPassword = $_POST['upassword']; //Gets the posted password, put's it into a variable.
                        $setipo = $_POST['setipousu'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->users;
                        // $userDatabaseSelect = $m->thundergallery->users; //Selects the user collection
                        $userDatabaseFind = $userDatabaseSelect->find(array('username' => $postedUsername,
                        'password' => $postedPassword, 'tipousu' => $setipo)); //Does a search for Usernames with the posted Username Variable

                        //Iterates through the found results
                        foreach($userDatabaseFind as $userFind) 
                            {
                               $storedUsername = $userFind['username'];
                               $storedPassword = $userFind['password'];
                               $storedUsu = $userFind['tipousu'];
                            } 

                            if($postedUsername == $storedUsername && $postedPassword == $storedPassword)
                              {   
                                 if($setipo == Administrador)
                                    {   
                                       header("Location: inicioadmin.php");
      
                                    }else 
                                        {   
                                         header("Location: inicioclie.php");
      
                                        }
                                

                              }else 
                                    {

                                       header("Location: login.php");
                                    }


                           
                    }else
                       {
                        header("Location: login.php");
                       }
          
?>