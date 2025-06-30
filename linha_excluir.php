<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_linha = trim(@$_GET['id_linha']);

$sql_linha = "SELECT * FROM LINHAS WHERE ID=$id_linha";
$linha = mysql_query($sql_linha,$conexao);
$nome_linha = mysql_result($linha,0,'NOME');

@mysql_free_result($linha);

$sql_delete = "DELETE FROM LINHAS WHERE ID=$id_linha";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Linha $nome_linha excluída com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a linha $nome_linha.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: linha_todas.php?msg=" . urlencode($msg));
?>
