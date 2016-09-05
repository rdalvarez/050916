<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<div class="CajaInicio">
	<form action="Destino.php" method="POST" id="FormIngreso">
		<label> Nombre </label>
		<input type="text" name="nombre" placeholder="Ingrese su nombre">

		<input type="text" name="numeroUno" placeholder="Ingrese un numero"> 
		<input type="submit">
	</form>
</div>
</body>
</html>

<?php
	//var_dump($_GET);//variable global
	//echo $_GET['nombre'];

	/*condicion 
	if (isset($_GET['nombre'])) { 
		echo $_GET['nombre'];
	} else
	{
		echo "Primero ingrese";
	}*/

?>