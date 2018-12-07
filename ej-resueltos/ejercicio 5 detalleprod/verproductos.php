<?php
include('funciones.php');
$link = mysqli_connect("localhost", "root", "root","virtualmarket");
$result = mysqli_query($link,"SELECT * FROM productos");
echo "<table>";
while($row = mysqli_fetch_assoc($result)) 
	ver($row); // fin del bucle de instrucciones
echo "</table>";
mysqli_free_result($result); // Liberamos los registros
mysqli_close($link); // Cerramos la conexion con la base de datos
?>