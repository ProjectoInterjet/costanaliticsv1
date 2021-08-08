<?php
if(isset($_POST['submit']))
{

    $postedNompro = $_POST['nompro']; 
    $postedNomen = $_POST['nomen']; 
    $postedNomclie = $_POST['nomclie'];
    $postedFhini = $_POST['fhini'];
    $postedFhte = $_POST['fhte'];
   
   
    ////labor//////////////////////////////////////////

    if (!empty($_POST['labor']))
            {
                $elabor=$_POST['labor']; 
               
            }
    if (!empty($_POST['lphrs']))
            {
                $elphrs=$_POST['lphrs']; 
                
            }
    if (!empty($_POST['lchrs']))
            {
                $elchrs=$_POST['lchrs'];   
            }

///////////materiales/////////////////////////////////////

    if (!empty($_POST['1mate']))
            {
                $el1mate=$_POST['1mate']; 
             
            }
    if (!empty($_POST['m1hrs'] && $_POST['m2hrs']))
            {
                $elm1hrs=$_POST['m1hrs'];
                $elm2hrs=$_POST['m2hrs']; 
                
            }else{
                $elm1hrs=0;
                $elm2hrs=0; 
            }

    if (!empty($_POST['2mate']))
            {
                $el2mate=$_POST['2mate']; 
            
            }

    if (!empty($_POST['m3hrs'] && $_POST['m4hrs']))
            {
                $elm3hrs=$_POST['m3hrs'];
                $elm4hrs=$_POST['m4hrs'];
                
            }else{
                $elm3hrs=0;
                $elm4hrs=0; 
            }

    if (!empty($_POST['3mate']))
            {
                $el3mate=$_POST['3mate']; 
            }

    if (!empty($_POST['m5hrs'] && $_POST['m6hrs']))
            {
                $elm5hrs=$_POST['m5hrs'];
                $elm6hrs=$_POST['m6hrs'];  
 
            }else{
                $elm5hrs=0;
                $elm6hrs=0; 
            }

       ///////////maquinaria/////////////////////////////////////
       if (!empty($_POST['1tru']))
            {
                $el1tru=$_POST['1tru']; 
          
            }
    if (!empty($_POST['t1hrs'] && $_POST['t2hrs']))
            {
                $elt1hrs=$_POST['t1hrs'];
                $elt2hrs=$_POST['t2hrs'];  
 
            }else{
                $elt1hrs=0;
                $elt2hrs=0; 
            }

    if (!empty($_POST['2tru']))
            {
                $el2tru=$_POST['2tru']; 
             
            }

    if (!empty($_POST['t3hrs'] && $_POST['t4hrs']))
            {
                $elt3hrs=$_POST['t3hrs'];
                $elt4hrs=$_POST['t4hrs'];  
  
            }else{
                $elt3hrs=0;
                $elt4hrs=0; 
            }

    if (!empty($_POST['3tru']))
            {
                $el3tru=$_POST['3tru']; 
         
            }

    if (!empty($_POST['t5hrs'] && $_POST['t6hrs']))
            {
                $elt5hrs=$_POST['t5hrs'];
                $elt6hrs=$_POST['t6hrs'];  
                
            }else{
                $elt5hrs=0;
                $elt6hrs=0; 
            }

     ///////////mano de obra/////////////////////////////////////
       if (!empty($_POST['1manobra']))
       {
           $el1manobra=$_POST['1manobra']; 
         
       }
if (!empty($_POST['mo1hrs'] && $_POST['mo2hrs']))
       {
           $elmo1hrs=$_POST['mo1hrs'];
           $elmo2hrs=$_POST['mo2hrs'];  
  
       }else{
           $elmo1hrs=0;
           $elmo2hrs=0; 
       }

if (!empty($_POST['2manobra']))
       {
           $el2manobra=$_POST['2manobra']; 
       
       }

if (!empty($_POST['mo3hrs'] && $_POST['mo4hrs']))
       {
           $elmo3hrs=$_POST['mo3hrs'];
           $elmo4hrs=$_POST['mo4hrs'];  
   
       }else{
           $elmo3hrs=0;
           $elmo4hrs=0; 
       }

if (!empty($_POST['3manobra']))
       {
           $el3manobra=$_POST['3manobra']; 
       
       }

if (!empty($_POST['mo5hrs'] && $_POST['mo6hrs']))
       {
           $elmo5hrs=$_POST['mo5hrs'];
           $elmo6hrs=$_POST['mo6hrs'];  
  
       }else{
           $elmo5hrs=0;
           $elmo6hrs=0; 
       }

          // resultado labor///////////////////////////     
           $mlabor= ($elphrs*$elchrs);
           // resultado materiales/////////////////////
           $mmaterial= ($elm1hrs* $elm2hrs);
           $mmateria2= ($elm3hrs* $elm4hrs);
           $mmateria3= ($elm5hrs* $elm6hrs);
           // resultado maquinaria////////////////////
           $mtru1= ($elt1hrs* $elt2hrs);
           $mtru2= ($elt3hrs* $elt4hrs);
           $mtru3= ($elt5hrs* $elt6hrs);
           // resultado mano de obra//////////////////
           $mmanobra1= ($elmo1hrs* $elmo2hrs);
           $mmanobra2= ($elmo3hrs* $elmo4hrs);
           $mmanobra3= ($elmo5hrs* $elmo6hrs);
           // suma resultado de cada apartado//////////////
           $sumamat=($mmaterial+ $mmateria2+ $mmateria3);
           $sutru=($mtru1+$mtru2+$mtru3);
           $sumanobra=($mmanobra1+$mmanobra2+$mmanobra3);
           // suma resultado de cada apartado//////////////
           $sumacompleta=($sumamat+$sutru+$sumanobra);
        
}else{
  header("Location: index.php");  
}

?>