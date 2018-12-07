<?php
session_start();
if (isset($_SESSION['usuario'])) {
 $codigo=$_GET['dni'];
 include"bd.php";

 $result = mysqli_query($link,"SELECT * FROM clientes WHERE dniCliente='$codigo'");

 $row = mysqli_fetch_assoc($result);
 foreach ($row	 as $campo => $valor) echo "$campo : $valor <br>";
 echo "<a href='clientes.php'>volver</a>";
 mysqli_free_result($result); // Liberamos los registros
 mysqli_close($link);
}else
{
	echo "es necesario estar registrado";
	echo "<a href='index.php'>login</a>";
}