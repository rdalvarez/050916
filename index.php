<html>
<head>
	<title></title>
</head>
<body> 
	<form action="Destino.php">
		<label> Nombre </label>
		<input type="text" name="nombre" placeholder="Ingrese su nombre">

		<input type="text" name="numeroUno" placeholder="Ingrese un numero"> 
		<input type="submit">
	</form>
</body>
</html>

<?php
	//var_dump($_GET);//variable global
	//echo $_GET['nombre'];

	//condicion 
	if (isset($_GET['nombre'])) {
		echo $_GET['nombre'];
	} else
	{
		echo "Primero ingrese";
	}

?>