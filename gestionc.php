<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Gestion</title>
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
                        <li class="nav-item"><a class="nav-link" href="inicioclie.php"><b>Volver</b></a></li>
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
                <h1 class="title-blue">Realizar Presupuesto</h1>
            </div>
            <br>
            <div class="container">
                 <div class="title text-center">
                            <h6>Registra tu Proyecto</h6>
                            <br>
                    <div class="form-group">
                        </div>
                        <form class="login100-form validate-form p-b-33 p-t-5" action="presupuestoc.php" method="POST">

					        <div class="wrap-input100 validate-input" data-validate = "Ingresa un nombre del Proyecto">
						        <input class="input100" type="text" name="nompro" placeholder="Nombre del Proyecto"
						           required="">
						
					        </div>

                              <br>

					        <div class="wrap-input100 validate-input" data-validate="Ingresa el nombre del encargado">
					        	<input class="input100" type="text" name="nomen" placeholder="Nombre del Encargado"
				            		required="">
						
					        </div>
                    
                              <br>

                            <div class="wrap-input100 validate-input" data-validate="Ingresa el nombre del cliente">
				         		<input class="input100" type="text" name="nomclie" placeholder="Nombre del cliente"
				            		required="">
						
					        </div>

                              <br>

                            <div class="wrap-input100 validate-input" data-validate="Ingresa la fecha de inicio">
						        <input class="input100" type="date" name="fhini" placeholder="Fecha de Inicio"
					            	required="">
					  	
				           	</div>

                              <br>

                            <div class="wrap-input100 validate-input" data-validate="Ingresa la fecha de Termino">
					        	<input class="input100" type="date" name="fhte" placeholder="Fecha de termino"
					            	required="">
						
					        </div>
                              <br>
                              <br>
                              <h6>Elige una labor a realizar</h6>
                              <br>
                            <div class="form-group">
                                
    
                                <div class="form-group">
    
                                    <label class="title text">Labores</label>

                                        <select name="labor" class="form-group" required="">
                           
                                         <?php
                                           include("conecta.php");
                                            $collection = $client->$bd->labor;

                                            if ($collection->count()>0)
                                               {
                                                 $documentos = $collection->find();
                                                 foreach ($documentos as $documento)  
                                                    
                                                      echo '<option  value="'.$documento["labnombre"].'">'.$documento["labnombre"].'</option>';
                                                    {  
                                         ?>
                           
                                        </select>
  
                                         <?php
                                                    }
                                                }else{
                                         ?>
                                                    <option>Sin registros</option>
                                          <?php } ?>
                                 </div>
                         
                                    <br>

                                    <div class="form-group col-md">
    
                                        <label class="title text">Selecciona el precio de cobro por Hora </label>
                                        <input type="number" minlength="1" class="form" name="lphrs" id="inputZip" placeholder="Cantidad en (Hrs)"
                                        required="">

                                    </div>
                                    <div class="form-group col-md">
    
                                        <label class="title text">Selecciona la cantidad en hrs de Renta </label>
                                        <input type="number" minlength="1" class="form" name="lchrs" id="inputZip" placeholder="Cantidad en (Hrs)"
                                        required="">

                                    </div>
                                </div>
                                <br>
                                <br>
                                <h6>Selecciona tus Materiales</h6>
                                <br>
     
                                <!-- ocultar contenido de materiales--><!-- ocultar contenido de materiales--><!-- ocultar contenido de materiales-->
                                <!-- ocultar contenido de materiales-->
                            
                                <dl>
                                <dt><label>Agregar Material</label></dt>
                                   <dd>
                                       <input  type="radio" name="tipo_attach" onclick="material(this)" value="a">si<br>
                                       <input type="radio"  name="tipo_attach" onclick="material(this)" value="b" >no<br>
              
                                    </dd>
                                </dl>
                                <?php include("opmateriales.php");?>

                                </div>

                                <dl>
                                <dt><label>Agregar Maquinaria</label></dt>
                                   <dd>
                                       <input  type="radio" name="tipo_attach" onclick="maquinaria(this)" value="a">si<br>
                                       <input type="radio"  name="tipo_attach" onclick="maquinaria(this)" value="b" >no<br>
              
                                    </dd>
                                </dl>
                                <?php include("opmaquinaria.php");?>

                                </div>

                                <dl>
                                <dt><label>Agregar Mano de Obra</label></dt>
                                   <dd>
                                       <input  type="radio" name="tipo_attach" onclick="manodeobra(this)" value="a">si<br>
                                       <input type="radio"  name="tipo_attach" onclick="manodeobra(this)" value="b" >no<br>
              
                                    </dd>
                                </dl>
                                <?php include("opmanobra.php");?>

                                </div>
                            <button name="submit" value="Enviar" class="btn btn-primary">Gestionar</button>
		        		</form>
                           <br>
                           <br>
                           <br>  
                    </div>
                </div>
            </div>
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

        <script type="text/javascript">
 
    function material(elemento) {
    
    if(elemento.value=="a"){
        document.getElementById("uno").style.display = "block";
       
    }else if(elemento.value=="b"){
        
             document.getElementById("uno").style.display = "none";     
     }else if(elemento.value=="c"){
        
            document.getElementById("dos").style.display = "block";     
         } else if(elemento.value=="d"){
        
              document.getElementById("dos").style.display = "none";     
            }else if(elemento.value=="e"){
        
                 document.getElementById("tres").style.display = "block";     
                } else if(elemento.value=="f"){
    
                  document.getElementById("tres").style.display = "none";     
                }
} 

function maquinaria(elemento) {
    
    if(elemento.value=="a"){
        document.getElementById("cuatro").style.display = "block";
       
    }else if(elemento.value=="b"){
        
             document.getElementById("cuatro").style.display = "none";     
     }else if(elemento.value=="c"){
        
            document.getElementById("cinco").style.display = "block";     
         } else if(elemento.value=="d"){
        
              document.getElementById("cinco").style.display = "none";     
            }else if(elemento.value=="e"){
        
                 document.getElementById("seis").style.display = "block";     
                } else if(elemento.value=="f"){
    
                  document.getElementById("seis").style.display = "none";     
                }
} 


function manodeobra(elemento) {
    
    if(elemento.value=="a"){
        document.getElementById("siete").style.display = "block";
       
    }else if(elemento.value=="b"){
        
             document.getElementById("siete").style.display = "none";     
     }else if(elemento.value=="c"){
        
            document.getElementById("ocho").style.display = "block";     
         } else if(elemento.value=="d"){
        
              document.getElementById("ocho").style.display = "none";     
            }else if(elemento.value=="e"){
        
                 document.getElementById("nueve").style.display = "block";     
                } else if(elemento.value=="f"){
    
                  document.getElementById("nueve").style.display = "none";     
                }
} 

 </script>
</body>

</html>