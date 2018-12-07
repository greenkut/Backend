<?php
	session_start();
	if (isset($_SESSION['usuario'])){ 
		echo "bienvenido ".$_SESSION['usuario'];
		echo "<a href='borrar.php'> Salir </a>";
	}else{
		echo "Es necesario estar validado";
		echo "<a href='inicio.html'> validar </a>";
	}