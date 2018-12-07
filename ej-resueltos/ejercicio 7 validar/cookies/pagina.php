<?php
	if (isset($_COOKIE['usuario'])){ 
		echo "bienvenido ".$_COOKIE['usuario'];
		echo "<a href='borrar.php'> Salir </a>";
	}else{
		echo "Es necesario estar validado";
		echo "<a href='inicio.html'> validar </a>";
	}