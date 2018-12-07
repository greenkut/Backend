<?php

function existe ($cod){
	global $link;
	$consul="SELECT * FROM clientes where dniCliente='$cod'";
	$result = mysqli_query($link,$consul);
	$datos=mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $datos;
}

function linea($f){
echo "<tr>";
foreach ($f as $value) 	echo "<td>$value</td>";
echo "<td><a href='modalta.php?op=mod&dni=".$f['dniCliente']."'>modificar</a></td>";
echo "<td><a href='borrar.php?dni=".$f['dniCliente']."'>borrar</a></td>";
echo "<td><a href='detalle.php?dni=".$f['dniCliente']."'>detalle</a></td>";
echo "</tr>";
}
function titulo($f){
echo "<tr>";
foreach ($f as $nom=>$value) 	echo "<td>$nom</td>";
echo "<td><a href='modalta.php?op=alta'>alta</a></td>";
echo "<td></td>";
echo "<td><a href='salir.php'>salir</a></td>";
echo "</tr>";
}

function formulario($op,$f){
echo "<form action='' method ='post'>";
if ($op=='alta'){
	echo "Dni: <input type='text' name='dniCliente'><br>";
}else {
	echo  "Codigo: ".$f['dniCliente']." <br>";
	echo "<input type='hidden' name='dniCliente' value='".$f['dniCliente']."'>";
}
echo "<input type='hidden' name='op' value='$op'>";
echo "nombre: <input type='text' name='nombre' value='".$f['nombre']."'><br>";
echo "direccion: <input type='text' name='direccion' value='".$f['direccion']."'><br>";
echo "email: <input type='text' name='email' value='".$f['email']."'><br>";
echo "pwd: <input type='text' name='pwd' value='".$f['pwd']."'><br>";
echo "<input type='submit' name='enviar' value='enviar'></form>";
}


?>