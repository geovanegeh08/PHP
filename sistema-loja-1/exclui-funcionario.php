<?php
require "includes/connection.php" ;

$id = $_GET['id'];

$sql_deleta_func = "DELETE FROM funcionarios WHERE id = {$id}";

try {
	
	$conexao->query($sql_deleta_func);
	$msg = "Produto excluído com sucesso!";
	$tipo_msg = "success";

	header("Location: funcionario.php?msg={$msg}&tipo_msg={$tipo_msg}");

} catch (Exception $e) {
	$msg = "Não foi possível excluir! Erro: {$e->getMessage()}";
	$tipo_msg = "danger";

	header("Location: funcionario.php?msg={$msg}&tipo_msg={$tipo_msg}");
}

?>