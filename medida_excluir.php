<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_medida = trim(@$_GET['id_medida']);

$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=$id_medida";
$medida = mysql_query($sql_medida,$conexao);
$nome_medida = mysql_result($medida,0,'NOME');

@mysql_free_result($medida);

$sql_delete = "DELETE FROM MEDIDAS WHERE ID=$id_medida";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Medida $nome_medida excluída com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a medida $nome_medida.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: medida_todas.php?msg=" . urlencode($msg));
?>
