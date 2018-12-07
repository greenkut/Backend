<?php
	if (isset($_COOKIE['usuario'])){ 
		setcookie('usuario','',time()-360);
		echo "Hasta la próxima";
		echo "<a href='inicio.html'> Volver a entrar </a>";
	}else{
		echo "Es necesario estar validado";
		echo "<a href='inicio.html'> validar </a>";
	}