<?php
include 'funciones.php';
$num1="";
$num2="";
$num3="";
$txterror1="";
$txterror2="";
$txterror3="";
if (isset($_POST['enviar'])){
	$error=False;
	$op=$_POST['operacion'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$num3=$_POST['num3'];
	if (empty($num1)) {
		$error=True;
		$txterror1="No te puedes dejar el numero en blanco";
	}
	if (empty($num2)) {
		$error=True;
		$txterror2="No te puedes dejar el numero en blanco";
	}
	if (empty($num3)) {
		$error=True;
		$txterror3="No te puedes dejar el numero en blanco";
	}
	if(!$error){		
		switch ($op) {
			case '1':
				$texto="la Suma";
				$res=suma($num1,$num2,$num3);
				break;
			case '2':
				$texto="El Maximo";
				$res=maximo($num1,$num2,$num3);
				break;
			case '3':
				$texto="El Minimo";
				$res=minimo($num1,$num2,$num3);
				break;
		
		}
		echo "$texto es $res";
	}

}if (!isset($_POST['enviar'])|| $error)
{
	formulario();
}
?>