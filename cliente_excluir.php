<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_cliente = trim(@$_GET['id_cliente']);

$sql_cliente = "SELECT * FROM CLIENTES WHERE ID=$id_cliente";
$cliente = mysql_query($sql_cliente,$conexao);
$nome_cliente = mysql_result($cliente,0,'NOME');

@mysql_free_result($cliente);

$sql_delete = "DELETE FROM CLIENTES WHERE ID=$id_cliente";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Cliente $nome_cliente excluído com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir o cliente $nome_cliente.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: cliente_todos.php?msg=" . urlencode($msg));
?>
