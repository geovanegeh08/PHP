<?php 
	$tipo = 'subtração';
	$num1 = rand(500, 600);
	$num2 = 500;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Link function - <?php echo $tipo; ?></title>
</head>
<body>
	<p>
		<a href="parametros-url-exercicio.php?tipo=<?php echo $tipo; ?>&num1=<?php echo $num1; ?>&num2=<?php echo $num2; ?>" target=_blank>
			Clique para calcular a <?php echo $tipo; ?> de <?php echo $num1; ?> e <?php echo $num2; ?>.
		</a>
	</p>

</body>
</html>