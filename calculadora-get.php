<?php
$tipo = $_GET['tipo'] ?? 'soma';
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 	<title></title>
 </head>
 <body>
 <div class="container">
 	<h1>Calculadora online</h1>
 	<div class="row">
 	<form class="form" action="parametros-url-exercicio.php" target="_blank">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo</label>
  <select name="tipo" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Selecione Tipo</option>
    <option value="Soma">Soma</option>
    <option value="subtração">Subtração</option>
    <option value="multiplicação">Multiplicação</option>
    <option value="divisão">Divisão</option>
  </select>
	<div class="form-group">
    <label for="formGroupExampleInput2">Número 1:</label>
    <input type="text" name="num1" class="form-control" id="formGroupExampleInput2" placeholder="Insira primeiro número">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Número 2:</label>
    <input type="text" name="num2" class="form-control" id="formGroupExampleInput2" placeholder="Insira segundo número">
  </div>
<button type="submit" class="btn btn-info my-1">Calcular</button>
</form>
</div>
</div>







 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
 </body>
 </html>