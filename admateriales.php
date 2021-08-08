<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Administrar</title>
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
                        <li class="nav-item"><a class="nav-link" href="inicioadmin.php"><b>Volver</b></a></li>
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

                <h1 class="title-blue">Tabla de Materiales</h1>
            </div>
            <br>
          
            <div class="container">
                <div class="row">
                    
                    
          
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                       
                        <th>ID</th>
                        <th>Nombre del Material</th>
                        <th>Descripcion</th>
                        <th>Eliminar</th>            
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        include("conecta.php");
                         $collection = $client->$bd->materials;
                        if ($collection->count()>0)
                    {
                            $documentos = $collection->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                    <tr>
                        
                        <td><?php echo $documento["_id"]; ?></td>
                        <td><?php echo $documento["matnombre"]; ?></td>
                        <td><?php echo $documento["matdescription"]; ?></td>
                        <td><a href="eliminamate.php?id=<?php echo $documento['_id'] ?>" class="danger"><b> Eliminar</b></a></td>

                    </tr>
                    <?php
                        }
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
               
                <h1 class="title-blue">Tabla de Maquinaria</h1>
            </div>
            <div class="container">
                <div class="row">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                       
                        <th>ID</th>
                        <th>Nombre de la Maquinaria</th>
                        <th>Descripcion</th>
                        <th>Eliminar</th>
                       
                       
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        include("conecta.php");
                         $collection = $client->$bd->trucking;
                        if ($collection->count()>0)
                    {
                            $documentos = $collection->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                    <tr>
                        
                        <td><?php echo $documento["_id"]; ?></td>
                        <td><?php echo $documento["trunombre"]; ?></td>
                        <td><?php echo $documento["trudescription"]; ?></td>
                        <td><a href="eliminatru.php?id=<?php echo $documento['_id'] ?>" class="danger"><b> Eliminar</b></a></td>

                    </tr>
                    <?php
                        }
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
               
                <h1 class="title-blue">Tabla de Mano de Obra</h1>
            </div>
            <div class="container">
                <div class="row">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                       
                        <th>ID</th>
                        <th>Nombre de Ocupacion</th>
                        <th>Descripcion</th>
                        <th>Eliminar</th>
                       
                       
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        include("conecta.php");
                         $collection = $client->$bd->manobra;
                        if ($collection->count()>0)
                    {
                            $documentos = $collection->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                    <tr>
                        
                        <td><?php echo $documento["_id"]; ?></td>
                        <td><?php echo $documento["mobranombre"]; ?></td>
                        <td><?php echo $documento["mobradescription"]; ?></td>
                        <td><a href="eliminamano.php?id=<?php echo $documento['_id'] ?>" class="danger"><b> Eliminar</b></a></td>

                    </tr>
                    <?php
                        }
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
            <div class="title text-center">
               
                <h1 class="title-blue">Tabla de Labores</h1>
            </div>
            <div class="container">
                <div class="row">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="tr-head">
                       
                        <th>ID</th>
                        <th>Nombre de la Labor</th>
                        <th>Descripcion</th>
                        <th>Eliminar</th>
                       
                       
                        </tr>
                    </thead>
                <tbody>
                    <?php
                         include("conecta.php");
                         $collection = $client->$bd->labor;
                        if ($collection->count()>0)
                    {
                            $documentos = $collection->find();
                            foreach ($documentos as $documento) {                        
                    ?>
                    <tr>
                        
                        <td><?php echo $documento["_id"]; ?></td>
                        <td><?php echo $documento["labnombre"]; ?></td>
                        <td><?php echo $documento["labdesc"]; ?></td>
                        <td><a href="eliminalab.php?id=<?php echo $documento['_id'] ?>" class="danger"><b> Eliminar</b></a></td>

                    </tr>
                    <?php
                        }
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
            
            
        </div>
        <br>
        <br>
        <div class="title text-center">
        <div class="container">
            
            <a href="nuevomaterial.php" class="btn btn-primary">Agregar uno Nuevo</a>
		</div>
      
     		    
    </section>

      <!-- Services End -->
    <!-- Featured Start -->
    
    <!-- Featured End -->
    <!-- Pricing Start -->
    



    <!-- Pricing End -->
    
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