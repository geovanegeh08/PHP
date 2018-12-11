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
function calc2($tipo, $num1, $num2){
	if($tipo== "soma"){
			$resultado = "A $tipo é igual a ".($num1 + $num2);
			}
	else if($tipo== "subtração"){
			$resultado = "A $tipo é igual a ".($num1 - $num2);
			}
	else if($tipo== "multiplicação"){
			$resultado = "A $tipo é igual a ".($num1 * $num2);
			}
	else if($tipo== "divisão"){
			$resultado = "A $tipo é igual a ".($num1 / $num2);
			}
	else {
			$resultado = 'Tipo passado ñ é válido. Informe soma, subtração, multiplicação e divisão!';
	}
	return $resultado;
}

echo calc('multiplicaçãu', 45, 5);
echo "<br>";
echo "<br>";
echo calc2('texto', 45, 5);

 ?>