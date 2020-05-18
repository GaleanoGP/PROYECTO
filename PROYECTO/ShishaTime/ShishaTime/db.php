<?php
// Creamos la conexión a la base de datos para los productos.
$con = mysqli_connect("localhost","root","","ShishaTime");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>
