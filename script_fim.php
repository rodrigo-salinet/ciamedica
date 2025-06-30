<?
// Fecha consulta do STATUS do banco de dados:
@mysql_free_result($tbl_status);

// Fecha conexao com o banco de dados:
@mysql_close($conexao);

if (trim(@$msg) != '') {
?>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">alert('<?=$msg;?>');</SCRIPT>
<?
}
//echo '<PRE>'; print_r($GLOBALS); echo '</PRE>'; exit();
?>
