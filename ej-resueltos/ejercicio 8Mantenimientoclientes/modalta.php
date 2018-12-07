<?php
include('funciones.php');
include('bd.php');
session_start();
if (isset($_SESSION['usuario'])) {

if (!isset($_POST['enviar'])) {


	$op=$_GET['op'];
	if ($op=='mod'){		
			$cod= $_GET['dni'];
			formulario($op,existe($cod));
		
	}else{
		$f['dniCliente']='';
		$f['nombre']='';
		$f['direccion']='';
		$f['email']='';
		$f['pwd']='';
	 	formulario($op,$f);
	}

}
else {
	$op=$_POST['op'];
	$dniCliente=$_POST['dniCliente'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	
	if ($op=='mod'){
		$consul="UPDATE clientes SET  nombre='$nombre', direccion='$direccion', email='$email', pwd='$pwd' WHERE dniCliente='$dniCliente'";
		mysqli_query($link,$consul);
		echo "Yasta niquelao";
		echo "<a href='clientes.php'>Volver</a>";}
	else {
		if (!existe($dniCliente)){
			$consul="INSERT into clientes values('$dniCliente','$nombre','$direccion','$email','$pwd')";
			mysqli_query($link,$consul);
			echo "Yasta niquelao";
			echo "<a href='clientes.php'>Volver</a>";}
		else{
			echo "El dni ya existe";
			$f['dniCliente']='';
			$f['nombre']=$nombre;
			$f['direccion']=$direccion;
			$f['email']=$email;
			$f['pwd']=$pwd;
	 		formulario($op,$f);
		}
	}
}

 // Liberamos los registros
mysqli_close($link); // Cerramos la conexion con la base de datos
}else
{
	echo "es necesario estar registrado";
	echo "<a href='index.php'>login</a>";
}
?>