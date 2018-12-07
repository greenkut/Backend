<?php
session_start();
if (isset($_SESSION['usuario'])) {
 $codigo=$_GET['dni'];
 include"bd.php";

 mysqli_query($link,"DELETE FROM clientes WHERE dniCliente='$codigo'");

 echo "SE HA BORRADO EL CLIENTE CON DNI $codigo";
 echo "<a href='clientes.php'>volver</a>";
 // Liberamos los registros
 mysqli_close($link);
 }else
{
	echo "es necesario estar registrado";
	echo "<a href='index.php'>login</a>";
}
