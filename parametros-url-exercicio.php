<?php
function calc($tipo, $num1, $num2){
	switch ($tipo) {
		case 'soma':
			$resultado = "A $tipo é igual a ".($num1 + $num2);
			break;
		case 'subtração':
			$resultado = "A $tipo é igual a ".($num1 - $num2);
			break;
		case 'multiplicação':
			$resultado = "A $tipo é igual a ".($num1 * $num2);
			break;
		case 'divisão':
			$resultado = "A $tipo é igual a ".($num1 / $num2);
			break;
		default:
			$resultado = 'Tipo passado ñ é válido. Informe soma, subtração, multiplicação, divisão!';
			break;
	}
	return $resultado;
}
$tipo = $_GET['tipo'] ?? 'soma';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
echo calc($tipo, $num1, $num2);
 ?>