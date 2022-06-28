<?php
include("seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenidos al sistema</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesDash.css">

</head>

<body>
	<header>
		<div class="containerLogo">
			<img src="../images/Logo.png" alt="Logo" id="logo">
			<h1>Cultura bursatil, financiera y tributaria</h1>
		</div>
		<div class="containerIconos">
			<img src="../images/economia.png" alt="Estadisticas" id="estadisticas">
			<img src="https://cdn-icons-png.flaticon.com/512/1827/1827392.png" alt="Notificacion" id="notificacion">
		</div>
		<div class="usuario">
			<span><?php echo $_SESSION['username']; ?></span>
			<img src="https://cdn-icons-png.flaticon.com/512/64/64572.png" alt="user" id="userIcon">
		</div>
	</header>
	<nav>
		<div class="containerMenu">
			<div class="grupoMenu">
				<a href="dashboard.php"><img src="https://cdn-icons-png.flaticon.com/512/1946/1946488.png" alt="home"><span>Dashboard</span> </a>
			</div>
			<div class="grupoMenu">

				<a href=""><span>Encuesta</span></a>
			</div>
			<div class="grupoMenu">

				<a><span>Resultados</span></a>
			</div>
			<div class="grupoMenu">
				<a><span>Recomendaciones</span></a>
			</div>
			<div class="grupoMenu">

				<a><span>Mi perfil</span></a>
			</div>
		</div>
	</nav>
	<section>
		<div class="nombreEmpresa">
			<h2>Nombre de la empresa</h2>
			<img src="../images/estadisct.PNG" alt="estadisct" id="imgVerde">
			<div class="resultadosEnc">
				<h3>Resultados estadisticos de la empresa</h3>
				<img src="../images/pastel.png" alt="pastel">
			</div>
		</div>
		<div class="containerBurPro">
			<div class="culturaBursatil">
				<h3 id="cultura">Cultura bursatil</h3>
				<div class="tarjetaBursatil">
					<div class="containerIcono">
						<img src="../images/persona.png" alt="persona">
					</div>
					<h3>450</h3>
					<h3>Vinculacion</h3>
				</div>
				<div class="tarjetaBursatil">
					<div class="containerIcono">
						<img src="../images/persona.png" alt="persona">
					</div>
					<h3>450</h3>
					<h3>Vinculacion</h3>
				</div>
				<div class="tarjetaBursatil">
					<div class="containerIcono">
						<img src="../images/persona.png" alt="persona">
					</div>
					<h3>450</h3>
					<h3>Vinculacion</h3>
				</div>
				<div class="tarjetaBursatil">
					<div class="containerIcono">
						<img src="../images/persona.png" alt="persona">
					</div>
					<h3>450</h3>
					<h3>Vinculacion</h3>
				</div>
				<div class="tarjetaBursatil">
					<div class="containerIcono">
						<img src="../images/persona.png" alt="persona">
					</div>
					<h3>450</h3>
					<h3>Vinculacion</h3>
				</div>
			</div>
			<div class="proyectos">
				<h3 id="proyectos">Proyectos</h3>
				<table>
					<?php
					$miconexion = new clase_mysqli;
					$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

					$miconexion->consulta("select id 'CODIGO', nombres 'NOMBRES', apellidos 'APELLIDOS', correo 'CORREO' from usuarios");
					$miconexion->verconsulta();
					?>
				</table>
			</div>
		</div>
		<div class="extra">
			<h2>
				<a href="seguridad/exit.php?salir=true">Cerrar sesion</a>
			</h2>
		</div>
	</section>
	<footer>
		<div class="containerLogo">
			<img src="../images/Logo.png" alt="Logo">
			<h1>Cultura bursatil, financiera y tributaria</h1>
		</div>
		<img src="../images/utpl.PNG" alt="logo">
		<div><span>Derechos reservados</span></div>

	</footer>


</body>

</html>