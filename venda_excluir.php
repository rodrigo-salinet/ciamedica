<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_venda = trim(@$_GET['id_venda']);

$sql_venda = "SELECT * FROM VENDAS WHERE ID=$id_venda";
$venda = mysql_query($sql_venda,$conexao);
$nome_cliente = mysql_result($venda,0,'CLI_NOME');
@mysql_free_result($venda);

$sql_delete = "DELETE FROM VENDAS WHERE ID=$id_venda";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Venda do cliente $nome_cliente excluída com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a venda do cliente $nome_cliente.";
}

$sql_itens_venda = "SELECT * FROM ITENS_VENDA WHERE ID_VENDA=$id_venda";
$itens_venda = mysql_query($sql_itens_venda,$conexao);
if (@mysql_num_rows($itens_venda) > 0) {
	@mysql_free_result($itens_venda);
	$sql_delete = "DELETE FROM ITENS_VENDA WHERE ID_VENDA=$id_venda";
	if (mysql_query($sql_delete,$conexao)) {
		$msg = $msg . " Ítem(s) da venda do cliente $nome_cliente excluído(s) com sucesso.";
	} else {
		$msg = $msg . " Ocorreu um problema ao excluir ítem(s) da venda do cliente $nome_cliente.";
	}
} else {
	$msg = $msg . ' Não havia item nesta esta venda.';
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: venda_todas.php?msg=" . urlencode($msg));
?>
