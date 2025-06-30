<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_fornecedor = trim(@$_GET['id_fornecedor']);

$sql_fornecedor = "SELECT * FROM FORNECEDORES WHERE ID=$id_fornecedor";
$fornecedor = mysql_query($sql_fornecedor,$conexao);
$nome_fornecedor = mysql_result($fornecedor,0,'NOME');

@mysql_free_result($fornecedor);

$sql_delete = "DELETE FROM FORNECEDORES WHERE ID=$id_fornecedor";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Fornecedor $nome_fornecedor excluído com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir o fornecedor $nome_fornecedor.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: fornecedor_todos.php?msg=" . urlencode($msg));
?>
