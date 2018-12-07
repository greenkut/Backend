<?php
function formalta ($cod){
echo "<form action='' method ='post'>";
echo  "Codigo: $cod <br>";
echo "<input type='hidden' name='cod' value='$cod'>";
echo "nombre: <input type='text' name='nombre'><br>";
echo "origen: <input type='text' name='origen'><br>";
echo "foto: <input type='text' name='foto'><br>";
echo "marca: <input type='text' name='marca' ><br>";
echo "categoria: <input type='text' name='categoria'><br>";
echo "peso: <input type='text' name='peso'><br>";
echo "unidades: <input type='text' name='unidades'><br>";
echo "volumen: <input type='text' name='volumen' ><br>";
echo "precio: <input type='text' name='precio'><br>";
echo "<input type='submit' name='envialta' value='enviar'></form>";
}

function existe ($cod){
	global $link;
	$consul="SELECT * FROM productos where idProducto='$cod'";
	$result = mysqli_query($link,$consul);
	$datos=mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $datos;
}
?>