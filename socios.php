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
	<link rel="stylesheet" href="css/iniciar-sesion_estilos.css">

	<title>Iniciar Sesión | Pedidos Food | Comida a Domicilio | Ecuador</title>
</head>
<body class="body-iniciar-sesion">

	<?php include "cosas-generales/preloader.php"; ?>

	<div class="contenedor-pagina">
		<div class="contenedor-iniciar-sesion">
			<form action="validar_login/index.php" method="post" class="formulario-iniciar-sesion">
				<h3 class="titulo-iniciar-sesion">Iniciar Sesión</h3>
				<div class="input-field contenedor-input-iniciar-sesion">
					<i class="material-icons prefix">account_circle</i>
			        <input id="usuario" type="text" name="usuario">
			        <label for="usuario">Usuario: </label>
				</div>
				<div class="input-field contenedor-input-iniciar-sesion">
			        <i class="material-icons prefix">vpn_key</i>
			        <input id="contraseña" type="password" name="password">
			        <label for="contraseña">Contraseña: </label>
				</div>
				
				<button type="submit" class="btn waves-effect waves-perzonalizado #ffc400 amber accent-3">Iniciar Sesion <i class="material-icons right">send</i></button>

				<?php if(!empty($errores)): ?>
					<div class="error">
						<ul>
							<?php echo $errores; ?>
						</ul>
					</div>
				<?php endif; ?>
			</form>

		    <div class="contenedor-mensaje-login">
		    	<p class="mensaje-login">Este contenido es solo para socios que cuenten con un local y ya esten registrados.</p>
		    	<p class="mensaje-login">Si quiere ser socio, pongase en contacto con nosotros <a href="contacto-pedidos-food">aquí</a>.</p>
		    	<p class="mensaje-login">Regresa a la página de inicio <a href="inicio-pedidos-food">aquí</a>.</p>
		    </div>
		</div>
	</div>

  	<?php include "cosas-generales/scripts-generales.php"; ?>
	
</body>
</html>