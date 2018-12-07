<?php
	if (isset($_COOKIE['usuario'])) {
		echo " Bienvenido $nombre";
		echo "<a href='pagina.php'> Ir a la página </a>";
	}else{
		$link = mysqli_connect("localhost", "root", "root","virtualmarket");
		$nombre=$_POST['nom'];
		$consul="SELECT * FROM clientes WHERE nombre='$nombre' and pwd='".$_POST['con']."'";
		$result=mysqli_query($link,$consul);
		if (mysqli_fetch_assoc($result)){
			setcookie('usuario',$nombre,time()+36000);
			echo " Bienvenido $nombre";
			echo "<a href='pagina.php'> Ir a la página </a>";
		}else
		{
			echo "Usuario y/o contraseña incorrectos";
			echo "<a href='inicio.html'> Volver </a>";
		}
		mysqli_close($link);
		mysqli_free_result($result);
	}