
<?php
	if (isset($_POST['nombre'])) {//isset pregunta si esta seteado
		echo $_POST['nombre'];
	} 
	else{
		echo "Primero ingrese";
	}
?>