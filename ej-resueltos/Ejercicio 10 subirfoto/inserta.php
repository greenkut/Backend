<html><body><?php
require ("conec.db");
echo "El nombre del archivo es:".$_FILES['imagen']['name']."\n";
echo "Nombre temporal:".$_FILES['imagen']['tmp_name']."\n";
if (is_uploaded_file ($_FILES['imagen']['tmp_name'] )){
	$nombreDirectorio = "img/";
	
	if (is_dir($nombreDirectorio)){ // es un directorio existente
		$nombreFichero = $_FILES['imagen']['name'];
		$idUnico = time();
		$nombrepartido=explode('.', $nombreFichero);
		$nombreFichero =$nombrepartido[0].$idUnico.".".$nombrepartido[1];
		$nombreCompleto = $nombreDirectorio.$nombreFichero;
		move_uploaded_file ($_FILES['imagen']['tmp_name'],$nombreCompleto);
		echo "Fichero subido con el nombre: $nombreFichero<br>";
		$consulta="insert into productos (foto)  values ('$nombreCompleto')";
		$result = mysqli_query($link,$consulta);
	}
	else echo "Directorio definitivo inválido";
}
else
print ("No se ha podido subir el fichero\n");


mysqli_close($link); ?>
</body>
</html>





