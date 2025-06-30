<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_item = trim(@$_GET['id_item']);
$id_cotacao = trim(@$_GET['id_cotacao']);
$num_item = trim(@$_GET['num_item']);

$sql_delete = "DELETE FROM ITENS WHERE ID=$id_item";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Ítem nº $num_item excluído com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir o ítem nº $num_item.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: cotacao_editar.php?id_tipo=$id_tipo&id_cotacao=$id_cotacao&msg=" . urlencode($msg));
?>
