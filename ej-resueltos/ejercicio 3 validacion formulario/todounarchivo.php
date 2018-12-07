<?php
if (isset($_POST['enviar'])){
	$op=$_POST['operacion'];
	switch ($op) {
		case '1':
			$texto="la Suma";
			$res=$_POST['num1']+$_POST['num2']+$_POST['num3'];
			break;
		case '2':
			$texto="El Maximo";
			$res=$_POST['num1'];
			if ($_POST['num2']>$res) $res=$_POST['num2'];
			if ($_POST['num3']>$res) $res=$_POST['num3'];
			break;
		case '3':
			$texto="El Minimo";
			$res=$_POST['num1'];
			if ($_POST['num2']<$res) $res=$_POST['num2'];
			if ($_POST['num3']<$res) $res=$_POST['num3'];
			break;
		
	}
	echo "$texto es $res";

}else{
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