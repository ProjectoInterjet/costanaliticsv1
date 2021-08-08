<?php
 include("insertpro.php");
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Presupuesto</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    
    <!-- Loader Start -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <header class="position-absolute w-100">
        <div class="container">
            
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logoinicio.png" width="200" height="100" alt="Multipurpose"></a>
                <div class="group d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <a class="login-icon d-sm-none" href="#"><i class="fa fa-user"></i></a>
                    
                </div>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="gestiona.php"><b>Gestionar otro Proyecto</b></a></li>
                        <li class="btn-danger"><a  href="index.php" class="nav-link" ><i aria-hidden="true"><b><u>Cerrar Sesion</u></b></i></a> </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Start -->
    
    <!-- Hero End -->
    <br>
    <br>
    <br>
    <br>

    <!-- Services Start -->
    <section class="services">
        <div class="container">
      
            <div class="title text-center">
                <h6>Cost AnaliTic's</h6>
                <h1 class="title-blue">Tu presupuesto es el siguiente</h1>
            </div>
            <br>
          
            <div class="container">
                <div class="row">
                    
                    
          
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                       
                        <th>Proyecto</th>
                        <th>Encargado</th>
                        <th>Cliente</th>
                        <th>Fcha Inicio</th>
                        <th>Fcha Termino</th>
                        <th>labor</th> 
                        <th>Presupuesto ($)</th>
                    
                       
                        </tr>
                    </thead>
                <tbody>
                    <?php
                     
                       if(include("valoresdelpre.php"))
                       {

                        $postedNompro; 
                        $postedNomen;
                        $postedNomclie;
                        $postedFhini;
                        $postedFhte;
                        $elabor;
                        $sumacompleta;
          
                    ?>
                    <tr>
                        <td><?php echo ($postedNompro); ?></td>
                        <td><?php echo ($postedNomen); ?></td>
                        <td><?php echo ($postedNomclie); ?></td>
                        <td><?php echo ($postedFhini); ?></td>
                        <td><?php echo ($postedFhte); ?></td>
                        <td><?php echo ($elabor); ?></td>
                        <td><?php echo ($sumacompleta);?></td>
                 
                    </tr>
                    <?php
                        
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="title text-center">
               
                <h1 class="title-blue">Mas Detalles</h1>
            </div>
            <div class="container">
                <div class="row">
                    
                    
          
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                       
                        <th>Proyecto</th>
                        <th>Costo Materiales($)</th> 
                        <th>Costo Maquinaria($)</th> 
                        <th>Costo Mano de Obra($)</th> 
                        <th>Presupuesto($)</th>
                        <th>Ganancia($)</th>
                       
                       
                        </tr>
                    </thead>
                <tbody>
                    <?php
                      if(include("valoresdelpre.php"))
                      {
                       
                      $postedNompro; 
                      $sumamat;
                      $sutru;
                      $sumanobra;
                      $sumacompleta;
                      $mlabor;
                   
                      //echo($sumamat);
                      //echo($sutru);
                      //echo($sumanobra);
                      
                      // suma resultado de cada apartado//////////////
                

                                            
                    ?>
                    <tr>
                        <td><?php echo ($postedNompro); ?></td>
                        <td><?php echo ($sumamat); ?></td>
                        <td><?php echo ($sutru); ?></td>
                        <td><?php echo ($sumanobra); ?></td>
                        <td><?php echo ($sumacompleta); ?></td>
                        <td><?php echo ($mlabor); ?></td>
                       

                    </tr>
                    <?php
                        
                    }else{
                    ?>
                    <tr>
                        <td colspan="4"><h4><i class="icon-info-sign"></i> Sin registros en la Base de Datos</h4></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assets/js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>   
</body>

</html>