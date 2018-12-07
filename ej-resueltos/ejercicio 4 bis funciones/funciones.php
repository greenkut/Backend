<?php
function factorial($num1){
	$acum=1; 
	for ($i=$num1; $i >0 ; $i--) 
		$acum*=$i;
	return $acum;
}
function media ($num1,$num2,$num3){
	return ($num1+$num2+$num3)/3;
}


function campo($nom) {
echo "	$nom <input type='text' name='$nom' > <br>";
}

function formulario ($ir,$nboton){
	echo "<form action='$ir' method='post'> ";
	campo('num1');
	campo('num2');
	campo('num3');
	echo "	<input type='submit' name='$nboton'><br>";
	echo "</form>";
}