<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_transportadora = trim(@$_GET['id_transportadora']);

$sql_transportadora = "SELECT * FROM TRANSPORTADORAS WHERE ID=$id_transportadora";
$transportadora = mysql_query($sql_transportadora,$conexao);
$nome_transportadora = mysql_result($transportadora,0,'NOME');

@mysql_free_result($transportadora);

$sql_delete = "DELETE FROM TRANSPORTADORAS WHERE ID=$id_transportadora";
if (mysql_query($sql_delete,$conexao)) {
	$msg = "Transportadora $nome_transportadora excluída com sucesso.";
} else {
	$msg = "Ocorreu um problema ao excluir a transportadora $nome_transportadora.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

header("Location: transportadora_todas.php?msg=" . urlencode($msg));
?>
