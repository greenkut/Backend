<?php
include ('bd.php');
include ('funciones.php');
lista ('clientes','dniCliente','nombre','55555555');
lista ('productos','idProducto','nombre',7);
lista ('pedidos','idPedido','fecha','2');
mysqli_close($link);
