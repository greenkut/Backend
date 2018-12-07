<?php
include('funciones.php');
$link = mysqli_connect("localhost", "root", "root","virtualmarket");
if (isset($_POST['enviaid'])) {
	if (!$f=existe($_POST['id'])) {
		echo "Error: El producto no existe";
		echo "<a href='inicio.html'>Volver</a>";
	}else {
	$cod= $_POST['id'];
	formodi($cod,$f);
	}
}else if(isset($_POST['envimod'])){
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
	$consul="UPDATE productos SET  nombre='$nombre', origen='$origen', foto='$foto', marca='$marca', categoria='$categoria', peso='$peso', unidades='$unidades', volumen='$volumen', precio='$precio' WHERE idProducto='$cod'";
	mysqli_query($link,$consul);
	echo "Yasta niquelao";
	echo "<a href='inicio.html'>Volver</a>";
	}


 // Liberamos los registros
mysqli_close($link); // Cerramos la conexion con la base de datos
?>