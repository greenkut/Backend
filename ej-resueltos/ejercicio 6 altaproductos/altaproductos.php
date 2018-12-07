<?php
include('funciones.php');
$link = mysqli_connect("localhost", "root", "root","virtualmarket");
if (isset($_POST['enviaid'])) {
	if (existe($_POST['id'])) {
		echo "Error: El producto ya existe";
		echo "<a href='inicio.html'>Volver</a>";
	}else formalta($_POST['id']);
}else if(isset($_POST['envialta'])){
	$cod=$_POST['cod'];
	$nombre=$_POST['nombre'];
	$origen=$_POST['origen'];
	$foto=$_POST['foto'];
	$marca=$_POST['marca'];
	$categoria=$_POST['categoria'];
	$peso=$_POST['peso'];
	$unidades=$_POST['unidades'];
	$volumen=$_POST['volumen'];
	$precio=$_POST['precio'];
	$consul="Insert into productos values('$cod','$nombre','$origen','$foto','$marca','$categoria','$peso','$unidades','$volumen','$precio')";
	mysqli_query($link,$consul);
	echo "Yasta niquelao";
	echo "<a href='inicio.html'>Volver</a>";
	}


 // Liberamos los registros
mysqli_close($link); // Cerramos la conexion con la base de datos
?>