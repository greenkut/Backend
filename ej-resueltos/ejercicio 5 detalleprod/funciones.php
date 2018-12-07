<?php


function ver ($reg){
	echo "<tr>";
	foreach ($reg as $valor) {
		echo "<td> ".$valor."</td>";
	}
	echo "<td><a href='detalle.php?cod=".$reg['idProducto']."'> + </a></td>";
	echo "</tr>";
	}
?>