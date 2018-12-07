<?php

function lista ($tabla, $nomid, $mostrar,$valact){
	global $link;
	$consulta="SELECT $nomid, $mostrar FROM $tabla";
	$result=mysqli_query($link,$consulta);
	echo "$tabla: <select name='$tabla'>";
	while($fila=mysqli_fetch_assoc($result)){
		echo "<option value='".$fila[$nomid]."'";
		if ($fila[$nomid]==$valact) echo " selected ";
		echo ">".$fila[$mostrar]."</option>";
	}
	echo "</select>";
	mysqli_free_result($result);
}



?>