<?php
$num1="";
$num2="";
$txterror1="";
$txterror2="";
if (isset($_POST['enviar'])){
	$error=False;
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	if (empty($num1)) {
		$error=True;
		$txterror1="No te puedes dejar el numero en blanco";
	}
	if ($num2=="") {
		$error=True;
		$txterror2="No te puedes dejar el numero en blanco";
	}elseif ($num2==0) {
		$error=True;
		$txterror2="No se puede dividir por 0";
	}
	
	if(!$error){		
		
		echo "El resultado es ".$num1/$num2;
	}

}if (!isset($_POST['enviar'])|| $error)
{
	echo "<form action='' method='post'> ";
	echo "	Numero 1 <input type='text' name='num1' value='$num1'> $txterror1<br>";
	echo "	Numero 2 <input type='text' name='num2'value='$num2'> $txterror2<br>";
	echo "	<input type='submit' name='enviar'><br>";
	echo "</form>";
}
?>