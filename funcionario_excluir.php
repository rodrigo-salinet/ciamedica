<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_funcionario = trim(@$_GET['id_funcionario']);

$sql_funcionario = "SELECT * FROM FUNCIONARIOS WHERE ID=$id_funcionario";
$funcionario = mysql_query($sql_funcionario,$conexao);
$nome_funcionario = mysql_result($funcionario,0,'NOME');

@mysql_free_result($funcionario);

$sql_delete = "DELETE FROM FUNCIONARIOS WHERE ID=$id_funcionario";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Funcionario $nome_funcionario excluído com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir o funcionario $nome_funcionario.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: funcionario_todos.php?msg=" . urlencode($msg));
?>
