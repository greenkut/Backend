<?php
include "bd.php";
session_start();
if (isset($_SESSION['usuario'])) {
		echo " Bienvenido ".$_SESSION['usuario']."<BR><BR>";
		echo "<a href='clientes.php'>IR A CLIENTES</a>";


	}else{

		if (isset($_POST['enviar'])){
			$dni=$_POST['dni'];
			$consul="SELECT * FROM clientes WHERE dniCliente='$dni' and pwd='".$_POST['con']."'";
			$result=mysqli_query($link,$consul);
			if ($fila=mysqli_fetch_assoc($result)){
				$_SESSION['usuario']=$fila['nombre'];
				echo " Bienvenido ".$_SESSION['usuario']."<BR><BR>";
				echo "<a href='clientes.php'>IR A CLIENTES</a>";

			}else
			{
				echo "Usuario y/o contraseña incorrectos";
				echo "<a href='index.php'> Volver </a>";
			}mysqli_free_result($result);
		}else{
			echo "<form action='' method ='post'>";
			echo "dni: <input type='text' name='dni'><br>";
			echo "Contraseña: <input type='text'name='con'><br>";
			echo "<input type='submit' value='enviar' name='enviar'></form>";
		
		}

		
		
	}

mysqli_close($link);