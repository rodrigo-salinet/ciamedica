<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_produto = trim(@$_GET['id_produto']);

$sql_produto = "SELECT * FROM ESTOQUE WHERE ID=$id_produto";
$produto = mysql_query($sql_produto,$conexao);
$nome_produto = mysql_result($produto,0,'NOME');

@mysql_free_result($produto);

$sql_delete = "DELETE FROM ESTOQUE WHERE ID=$id_produto";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Produto $nome_produto excluído com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir o produto $nome_produto.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: estoque_todos.php?msg=" . urlencode($msg));
?>
