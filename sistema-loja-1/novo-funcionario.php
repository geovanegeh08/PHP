<?php 
	include 'layout/header.php';
	include 'layout/menu.php';

	require "includes/connection.php";

	$title = "Novo funcionário";

	if(isset($_GET['id']) && $_GET['id'] != '') {

		$id = $_GET['id'];
		$sql_funcionario = "SELECT * FROM funcionarios WHERE id = {$id};";
		$funcionario = $conexao->query($sql_funcionario);
		$dados_funcionario = $funcionario->fetch_assoc();
		$title = "Editar funcionário";
	}

	$sql_cargo = "SELECT * FROM cargo";
	$cargo = $conexao->query($sql_cargo);
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

		<form method="post" action="salva-funcionario.php">
			<div class="row">
				<div class="col-9">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome do funcionário" required
						value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['nome'] : ''); ?>">

						<input type="hidden" name="id" value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['id'] : ''); ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="sexo">Sexo:</label>
						<select name="sexo" class="form-control" required>
							<option value="">Escolha o sexo</option>
							<option value="masculino">Masculino</option>
							<option value="feminino">Feminino</option>
							<option value="outros">Outros</option>
						</select>
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="dt_nacimento">Data de Nascimento:</label>
						<input type="date" name="dt_nacimento" id="dt_nacimento" class="form-control date" placeholder="Informe a data de nascimento" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['dt_nacimento'] : '') ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="telefone">Telefone:</label>
						<input type="phone_with_ddd" name="telefone" id="telefone" class="form-control phone_with_ddd" placeholder="Informe o telefone" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['telefone'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="cpf">CPF:</label>
						<input type="text" name="cpf" id="cpf" class="form-control cpf" placeholder="Informe o CPF" required
						value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['cpf'] : ''); ?>">
					</div>
				</div>
				<div class="col-3">
					<div class="form-group">
						<label for="id_cargo">Cargo:</label>
						
						<select name="id_cargo" class="form-control" required>
							<option value="">Escolha o cargo</option>
							<?php while($carg = $cargo->fetch_array(MYSQLI_ASSOC)) { ?>
								<option value="<?php echo $carg['id'] ?>"
									<?php 
										if(isset($dados_funcionario) && $dados_funcionario['id_cargo'] == $carg['id']) { echo 'selected="selected"'; }
									 ?>

									>
									<?php echo $carg['descricao'] ?>
										
									</option>
							<?php } ?>

						</select>


					</div>
				</div>
				
				<div class="col-3">
					<div class="form-group">
						<label for="matricula">Matrícula:</label>
						<input type="matricula" name="matricula" id="matricula" class="form-control matricula" placeholder="Informe a matricula" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['matricula'] : '') ?>">
					</div>
				</div>
				
				
				
				<div class="col-3">
					<div class="form-group">
						<label for="dt_admissao">Data de Admissão:</label>
						<input type="date" name="dt_admissao" id="dt_admissao" class="form-control date" placeholder="Informe a data de admissão" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['dt_admissao'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" class="form-control email" placeholder="Informe o email" required value="<?php echo (isset($dados_funcionario) ? $dados_funcionario['email'] : '') ?>">
					</div>
				</div>
				<div class="col-6">
				</div>
					<button type="submit" class="btn btn-primary float-rigth">Salvar</button>
				</div>
			</div>
		</form>




</div>

<?php 
	include 'layout/footer.php';
?>