<?php
function suma($num1,$num2,$num3){
	return $num1+$num2+$num3;
}
function maximo($num1,$num2,$num3){
	$res=$num1;
	if ($num2>$res) $res=$num2;
	if ($num3>$res) $res=$num3;
	return $res;
}

function minimo($num1,$num2,$num3){
	$res=$num1;
	if ($num2<$res) $res=$num2;
	if ($num3<$res) $res=$num3;
	return $res;
}
function campo($nom, $val, $error) {
echo "	$nom <input type='text' name='$nom' value='$val'> $error <br>";
}

function formulario (){
	global $num1,$txterror1,$num2,$txterror2,$num3,$txterror3;  
	echo "<form action='' method='post'> ";
	campo('num1',$num1,$txterror1);
	campo('num2',$num2,$txterror2);
	campo('num3',$num3,$txterror3);
	echo "Operacion <select name='operacion'>";
	echo "<option value='1'>Suma</option>";
	echo "<option value='2'>Maximo</option>";
	echo "<option value='3'>Minimo</option>";
	echo "</select>";
	echo "	<input type='submit' name='enviar'><br>";
	echo "</form>";
}