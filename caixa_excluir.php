<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_caixa = trim(@$_GET['id_caixa']);

$sql_delete = "DELETE FROM CAIXA WHERE ID=$id_caixa";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Movimentação nº $id_caixa excluída com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a movimentação nº $id_caixa.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: caixa_todos.php?msg=" . urlencode($msg));
?>
