
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