<?php 
	include 'layout/header.php';
	include 'layout/menu.php';

	require "includes/connection.php";

	$title = "Novo serviço";

	if(isset($_GET['id']) && $_GET['id'] != '') {

		$id = $_GET['id'];
		$sql_servico = "SELECT * FROM servicos WHERE id = {$id};";
		$servico = $conexao->query($sql_servico);
		$dados_servico = $servico->fetch_assoc();
		$title = "Editar serviço";
	}

	$sql_categoria = "SELECT * FROM categoria";
	$categoria = $conexao->query($sql_categoria);

	$sql_funcionario = "SELECT * FROM funcionarios";
	$funcionario = $conexao->query($sql_funcionario);
?>

<div class="container">
	<p>&nbsp;</p>
	<h1><?php echo $title; ?></h1>
	
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item"><a href="funcionario.php">Funcionários</a></li>
			    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
			  </ol>
			</nav>
		</div>
	</div>

		<form method="post" action="salva-servico.php">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<label for="descricao">Descrição:</label>
						<input type="text" name="descricao" id="descricao" class="form-control" placeholder="Digite o serviço" required
						value="<?php echo (isset($dados_servico) ? $dados_servico['descricao'] : ''); ?>">

						<input type="hidden" name="id" value="<?php echo (isset($dados_servico) ? $dados_servico['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="valor">Valor:</label>
						<input type="number" name="valor" id="valor" class="form-control price" placeholder="Informe o valor" required value="<?php echo (isset($dados_servico) ? $dados_servico['valor'] : '') ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="dt_inicio">Data de Início:</label>
						<input type="date" name="dt_inicio" id="dt_inicio" class="form-control" placeholder="Informe a data de início" required value="<?php echo (isset($dados_servico) ? $dados_servico['dt_inicio'] : '') ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="dt_fim">Data do Fim:</label>
						<input type="date" name="dt_fim" id="dt_fim" class="form-control" placeholder="Informe a data do fim" required value="<?php echo (isset($dados_servico) ? $dados_servico['dt_fim'] : '') ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="status">Status:</label>
						<input type="text" name="status" id="status" class="form-control" placeholder="Informe o status do serviço" required value="<?php echo (isset($dados_servico) ? $dados_servico['status'] : '') ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="id_categoria">Categoria:</label>
						
						<select name="id_categoria" class="form-control" required>
							<option value="">Escolha o categoria</option>
							<?php while($categ = $categoria->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $categ['id'] ?>"
									<?php 
										if(isset($dados_servico) && $dados_servico['id_categoria'] == $categ['id']) { echo 'selected="selected"'; }
									 ?>

									>
									<?php echo $categ['descricao'] ?>
										
								</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-9">
					<div class="form-group">
						<label for=""></label>
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="id_funcionario">Funcionário:</label>
						
						<select name="id_funcionario" class="form-control" required>
							<option value="">Escolha o funcionário</option>
							<?php while($func = $funcionario->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $func['id'] ?>"
									<?php 
										if(isset($dados_servico) && $dados_servico['id_funcionario'] == $func['id']) { echo 'selected="selected"'; }
									 ?>

									>
									<?php echo $func['nome'] ?>
										
								</option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="col-9">
					<div class="form-group">
						<label for=""></label>
					</div>
				</div>
				
					<button type="submit" class="btn btn-primary float-rigth">Salvar</button>
				</div>
			</div>
		</form>




</div>

<?php 
	include 'layout/footer.php';
?>