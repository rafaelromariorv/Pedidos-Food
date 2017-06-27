<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- Favicon -->
	<?php include "cosas-generales/favicon.php"; ?>

	<!-- Fuentes -->
	<?php include "cosas-generales/fuentes.php"; ?>

	<!-- Estilos -->
	<?php include "cosas-generales/links-generales.php"; ?>

	<title>Contacto | Pedidos Food | Comida a Domicilio | Ecuador</title>
</head>
<body>

	<?php include "cosas-generales/preloader.php"; ?>

	<?php include "cosas-generales/menu.php"; ?>

	<?php include "cosas-generales/slider.php"; ?>

	<div class="contenedor-pagina">
		<h2 class="center #009688 teal-text titulo-principal">Contacténos para resolver sus dudas</h2>

		<div class="container contenedor-contacto">
			<div class="row">
    			<form action="" method="post" class="col s12">
      				<div class="row">
        				<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="nombre" type="text" class="validate">
					        <label for="nombre" data-error="Incorrecto" data-success="Correcto">Nombre: </label>
        				</div>
        				<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="apellido" type="text" class="validate">
					        <label for="apellido" data-error="Incorrecto" data-success="Correcto">Apellido: </label>
        				</div>
        				<div class="input-field col s6">
					        <i class="material-icons prefix">phone</i>
					        <input id="telefono" type="tel" class="validate">
					        <label for="telefono" data-error="Incorrecto" data-success="Correcto">Teléfono: </label>
        				</div>
        				<div class="input-field col s6">
					        <i class="material-icons prefix">phone</i>
					        <input id="email" type="email" class="validate">
					        <label for="email" data-error="Incorrecto" data-success="Correcto">Email: </label>
        				</div>
        				<div class="input-field col s12">
				          	<i class="material-icons prefix">mode_edit</i>
				          	<textarea id="mensaje" class="materialize-textarea validate" data-error="Incorrecto" data-success="Correcto"></textarea>
				          	<label for="mensaje">Mensaje: </label>
				        </div>

				        <button type="submit" class="btn waves-effect waves-perzonalizado #ffc400 amber accent-3">Enviar <i class="material-icons right">send</i></button>
      				</div>
			    </form>
			</div>
		</div>
	</div>

  	<?php include "cosas-generales/footer.php"; ?>

  	<?php include "cosas-generales/scripts-generales.php"; ?>
	
</body>
</html>