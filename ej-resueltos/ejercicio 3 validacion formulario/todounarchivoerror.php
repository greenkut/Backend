<?php
if (isset($_POST['enviar'])){
	$op=$_POST['operacion'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$num3=$_POST['num3'];
	if (empty($num1)||empty($num2)||empty($num3)) {
		$error=True;
		echo "No te puedes dejar un numero en blanco";
	}
	else{ 
		$error=False;
		switch ($op) {
			case '1':
				$texto="la Suma";
				$res=$num1+$num2+$num3;
				break;
			case '2':
				$texto="El Maximo";
				$res=$num1;
				if ($num2>$res) $res=$num2;
				if ($num3>$res) $res=$num3;
				break;
			case '3':
				$texto="El Minimo";
				$res=$num1;
				if ($num2<$res) $res=$num2;
				if ($num3<$res) $res=$num3;
				break;
		
		}
		echo "$texto es $res";
	}

}if (!isset($_POST['enviar'])|| $error)
{
	echo "<form action='' method='post'> ";
	echo "	Numero 1 <input type='text' name='num1'><br>";
	echo "	Numero 2 <input type='text' name='num2'><br>";
	echo "	Numero 3 <input type='text' name='num3'><br>";
	echo "Operacion <select name='operacion'>";
	echo "<option value='1'>Suma</option>";
	echo "<option value='2'>Maximo</option>";
	echo "<option value='3'>Minimo</option>";
	echo "</select>";
	echo "	<input type='submit' name='enviar'><br>";
	echo "</form>";
}
?>