<?php

if(isset($_GET["nome"])){
	$parametro = $_GET['nome'];
}
else {
	$parametro = '';
}

$parametro2 = $_GET['sobrenome'] ?? '';
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

echo ucfirst($parametro).' '.strtoupper($parametro2);
 ?>