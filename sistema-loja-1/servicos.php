<?php 
	//$mysqli = new mysqli("localhost", "usuario", "senha", "database");
	//nesta linha realizo a conexão
	require "includes/connection.php";
	//nesta linha, monto a consulta a ser realizada
	$sql_servicos = "SELECT s.*, c.descricao, f.nome FROM servicos s
					LEFT JOIN  categoria c ON c.id = s.id_categoria
					LEFT JOIN  funcionarios f ON c.id = s.id_funcionario
					ORDER BY f.id ASC";

	//nesta linha, executo a consulta montada
	$servico = $conexao->query($sql_servicos);
?>

<?php include "layout/header.php"; ?>
<?php include "layout/menu.php"; ?>
<div class="container">
	<p>&nbsp;</p>
	<h1>Serviços</h1>
	<?php if(isset($_GET['msg']) && isset($_GET['tipo_msg'])) { ?>
		<div class="alert alert-<?php echo $_GET['tipo_msg']; ?> esconde">
			<?php echo $_GET['msg']; ?>
		</div>
	<?php } ?>
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="principal.php">Principal</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Serviços</li>
			  </ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<a href="novo-servico.php" class="btn btn-primary mb-2 float-right">Novo serviço</a>
		</div>
	</div>
	<div class="row">
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>#</th>
				<th>Descrição</th>
				<th>Valor</th>
				<th>Data de Início</th>
				<th>Data do Fim</th>
				<th>Status</th>
				<th>Tipo</th>
				<th>Funcionário</th>
				<th>Ações</th>
			</tr>
			<?php while($dados = $servico->fetch_array(MYSQLI_ASSOC)) { ?>
				<tr>
					<td><?php echo $dados['id']; ?></td>
					<td><?php echo $dados['descricao']; ?></td>
					<td><?php echo $dados['valor']; ?></td>
					<td><?php echo $dados['dt_inicio']; ?></td>
					<td><?php echo $dados['dt_fim']; ?></td>
					<td><?php echo $dados['status']; ?></td>
					<td><?php echo $dados['descricao']; ?></td>
					<td><?php echo $dados['nome']; ?></td>
					<td>
						<a href="novo-servico.php?id=<?php echo $dados['id']; ?>" class="btn btn-success">
							<i class="fas fa-edit"></i>
						</a>
						<a href="exclui-servico.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir?')">
							<i class="fas fa-trash"></i>
						</a>
					</td>
				</tr>
		<?php } ?>
		</table>
		

	</div>

</div>

<?php include "layout/footer.php"; ?>