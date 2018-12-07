<?php
include 'funciones.php';

if (isset($_POST['paquito'])){
	
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$num3=$_POST['num3'];
	echo factorial($num1)." ".factorial($num2)." ". factorial($num3)."  <BR>";	
	echo media($num1,$num2,$num3). "<BR>";	
}else
{
	formulario('factmedia.php','paquito');
}
?>