<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi primera app</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
	<header class="cabeceraPrincipal">
		<h1>Vilonaco Food</h1>
	</header>
	<nav class="menuPrincipal">
		<a href="../">Inicio</a>
		<a href="../prueba.php">Quines somos</a>
		<a href="">Empresa</a>
		<a href="">Reeservas</a>
		<a href="contactos.php">Contactos</a>
		<a href="listados.php">Listados</a>
        <a href="login.php">Ingresar</a>
	</nav>
	
	<main>
		<h2 class="h2Home">Ingreso al sistema</h2>
		<form method="post" action="../dll/validar.php">
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="pass">Clave</label>
				<input type="password" name="pass" id="pass" placeholder="Ingrese su clave">
			</div>
			</div>
			<div class="grupoInput">
			 <button type="submit" value="login">Ingresar</button>
			</div>
		</form>
	</main>
	<footer class="piePagina"><h6>Derechos Reservados 2022</h6></footer>
</body>
</html>