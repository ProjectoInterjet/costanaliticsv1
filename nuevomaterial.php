<!DOCTYPE html>
<html>
<head>
	<title>Agregar Material</title>
	<meta charset="UTF-8">
	

<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Agrega un nuevo Material
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="agregarmaterial.php" method="POST">

					<div class="wrap-input100 validate-input" data-validate = "Ingresa un nombre del Proyecto">
						<input class="input100" type="text" name="nommat" placeholder="Nombre del Material"
						required="">
						
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Ingresa la fecha de inicio">
						<input class="input100" type="text" name="desc" placeholder="Descripcion"
						required="">
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingresa el nombre del encargado">
						
					<select name="opmaterial" class="input100"  required="">
                           
					<option  value="materials">Material</option>
					<option  value="trucking">Maquinaria</option>
					<option  value="manobra">Mano de Obra</option>
					<option  value="labor">Labor</option>
                           
                    </select>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn" name='login'>
							Registrar
						</button>
					</div>
				</form>
				<form action="admateriales.php" >
				    <div class="container-login100-form-btn m-t-32">
					    <button class="login100-form-btn">
						   Volver
					    </button>
				    </div>
			    </form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>