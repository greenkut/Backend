<?php
function formodi($cod,$f){
echo "<form action='' method ='post'>";
echo  "Codigo: $cod <br>";
echo "<input type='hidden' name='cod' value='$cod'>";
echo "nombre: <input type='text' name='nombre' value='".$f['nombre']."'><br>";
echo "origen: <input type='text' name='origen' value='".$f['origen']."'><br>";
echo "foto: <input type='text' name='foto' value='".$f['foto']."'><br>";
echo "marca: <input type='text' name='marca' value='".$f['marca']."'><br>";
echo "categoria: <input type='text' name='categoria' value='".$f['categoria']."'><br>";
echo "peso: <input type='text' name='peso' value='".$f['peso']."'><br>";
echo "unidades: <input type='text' name='unidades' value='".$f['unidades']."'><br>";
echo "volumen: <input type='text' name='volumen' value='".$f['volumen']."'><br>";
echo "precio: <input type='text' name='precio' value='".$f['precio']."'><br>";
echo "<input type='submit' name='envimod' value='enviar'></form>";
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