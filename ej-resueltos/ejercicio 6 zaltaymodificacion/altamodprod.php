<?php
include('funciones.php');
$link = mysqli_connect("localhost", "root", "root","virtualmarket");
if (isset($_POST['enviaid'])) {
	$op=$_POST['operacion'];
	if ($op=='modi'){
		if (!$f=existe($_POST['id'])) {
			echo "Error: El producto no existe";
			echo "<a href='inicio.html'>Volver</a>";
		}else {
			$cod= $_POST['id'];
			formulario($cod,$f,$op);
		}
	}else{
		if ($f=existe($_POST['id'])) {
			echo "Error: El producto ya existe";
			echo "<a href='inicio.html'>Volver</a>";
		}else formulario($_POST['id'],$f,$op);
	}


}else if(isset($_POST['envimod'])){
	$op=$_POST['op'];
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
	if ($op=='modi')
		$consul="UPDATE productos SET  nombre='$nombre', origen='$origen', foto='$foto', marca='$marca', categoria='$categoria', peso='$peso', unidades='$unidades', volumen='$volumen', precio='$precio' WHERE idProducto='$cod'";
	else 
	$consul="INSERT into productos values('$cod','$nombre','$origen','$foto','$marca','$categoria','$peso','$unidades','$volumen','$precio')";
	mysqli_query($link,$consul);
	echo "Yasta niquelao";
	echo "<a href='inicio.html'>Volver</a>";
	}


 // Liberamos los registros
mysqli_close($link); // Cerramos la conexion con la base de datos
?>