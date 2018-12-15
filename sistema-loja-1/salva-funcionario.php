<?php 
require "includes/connection.php";

$id 			= $_POST['id'];
$nome 			= $_POST['nome'];
$id_cargo	 	= $_POST['id_cargo'];
$cpf 			= $_POST['cpf'];
$matricula	 	= $_POST['matricula'];
$dt_nacimento	= $_POST['dt_nacimento'];
$telefone		= $_POST['telefone'];
$email		 	= $_POST['email'];
$sexo			= $_POST['sexo'];
$dt_admissao	= $_POST['dt_admissao'];

if($id != '') {
	$sql_funcionarios = "UPDATE funcionarios SET nome = '{$nome}', id_cargo = '{$id_cargo}', cpf = '{$cpf}', matricula = '{$matricula}', dt_nacimento = '{$dt_nacimento}', telefone = '{$telefone}', email = '{$email}', sexo = '{$sexo}', dt_admissao = '{$dt_admissao}' WHERE id = {$id};";
	$msg = "Produto alterado com sucesso!";
} else {
	$sql_funcionarios = "INSERT INTO funcionarios (nome, id_cargo, cpf, matricula, dt_nacimento, telefone, email, sexo, dt_admissao)
						VALUES ('{$nome}', '{$id_cargo}', '{$cpf}', '{$matricula}', '{$dt_nacimento}', '{$telefone}', '{$email}', '{$sexo}', '{$dt_admissao}');";
	$msg = "Produto salvo com sucesso!";
}

if($conexao->query($sql_funcionarios)) {
	$tipo_msg = "success";
} else {
	$msg = "Não foi possível salvar o produto!";
	$tipo_msg = "danger";
}

header("Location: funcionario.php?msg=$msg&tipo_msg=$tipo_msg")
?>