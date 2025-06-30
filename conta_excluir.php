<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_conta = trim(@$_GET['id_conta']);

$sql_delete = "DELETE FROM CONTAS WHERE ID=$id_conta";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Conta nº $id_conta excluída com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a conta nº $id_conta.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: conta_todas.php?msg=" . urlencode($msg));
?>
