<?php
 $codigo=$_GET['cod'];
 $link = mysqli_connect("localhost", "root", "root","virtualmarket");
 $result = mysqli_query($link,"SELECT * FROM productos WHERE idProducto=$codigo");
 $row = mysqli_fetch_assoc($result);
 foreach ($row	 as $campo => $valor) echo "$campo : $valor <br>";
 echo "<img src='fotos/".$row['foto']."'>";	
 mysqli_free_result($result); // Liberamos los registros
 mysqli_close($link);