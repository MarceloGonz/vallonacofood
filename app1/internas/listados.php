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
        <div class="BoxCentrado">
        <h2 class="h2Home">Lista de usuarios</h2>
        <?php
        include("../dll/config.php");
        include("../dll/class_mysqli.php");
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
        $sql="select id,nombres,apellidos,correo,tipoUser from usuarios";
        $miconexion->consulta($sql);
        $miconexion->verconsulta();
        ?>

        </div>
		
		
	</main>
	<footer class="piePagina"><h6>Derechos Reservados 2022</h6></footer>
</body>
</html>