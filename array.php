<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$cor = [];
		$cor[2] = 'Laranjado';
		$cor[0] = 'Verde';
		$cor[1] = 'Vermelho';
	 ?>
	 <p><?php var_dump($cor); ?></p>
	 <p><?php print_r($cor); ?></p>
	 <p><?php echo $cor[1]; ?></p>

</body>
</html>