<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_tipo = trim(@$_GET['id_tipo']);

$id_cotacao = trim(@$_GET['id_cotacao']);

$sql_cotacao = "SELECT * FROM COTACOES WHERE ID=$id_cotacao";
$cotacao = mysql_query($sql_cotacao,$conexao);
$nome_cliente = mysql_result($cotacao,0,'CLI_NOME');
@mysql_free_result($cotacao);

$sql_delete = "DELETE FROM COTACOES WHERE ID=$id_cotacao";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Cota��o do cliente $nome_cliente exclu�da com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a cota��o do cliente $nome_cliente.";
}

$sql_itens = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo AND ID_TABELA=$id_cotacao";
$itens = mysql_query($sql_itens,$conexao);
if (@mysql_num_rows($itens) > 0) {
	@mysql_free_result($itens);
	$sql_delete = "DELETE FROM ITENS WHERE ID_TIPO=$id_tipo AND ID_TABELA=$id_cotacao";
	if (mysql_query($sql_delete,$conexao)) {
		$msg = $msg . " �tens da cota��o do cliente $nome_cliente exclu�dos com sucesso.";
	} else {
		$msg = $msg . " Ocorreu um problema ao excluir �tens da cota��o do cliente $nome_cliente.";
	}
} else {
	$msg = $msg . ' N�o havia item nesta esta cota��o.';
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: cotacao_todas.php?id_tipo=$id_tipo&msg=" . urlencode($msg));
?>
