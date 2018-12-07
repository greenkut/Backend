<?php
session_start();
if (isset($_SESSION['usuario'])) {
	include "bd.php";
	echo " Bienvenido ".$_SESSION['usuario']."<BR><BR>";
	include "funciones.php";
	$consulta="SELECT * FROM clientes ";
	$result=mysqli_query($link,$consulta);
	$fila=mysqli_fetch_assoc($result);
	echo "<table>";
	titulo($fila);
	linea($fila);
	while ($fila=mysqli_fetch_assoc($result)) linea($fila);
	echo "</table>";
	mysqli_close($link);
}else{
	echo "Es necesario estar registrado";
	echo "<a href='index.php'> Login </a>";
}