<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_banco = trim(@$_GET['id_banco']);

$sql_banco = "SELECT * FROM BANCOS WHERE ID=$id_banco";
$banco = mysql_query($sql_banco,$conexao);
$nome_banco = mysql_result($banco,0,'NOME');

@mysql_free_result($banco);

$sql_delete = "DELETE FROM BANCOS WHERE ID=$id_banco";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Banco $nome_banco excluído com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir o banco $nome_banco.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: banco_todos.php?msg=" . urlencode($msg));
?>
