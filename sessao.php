<?
$sql_usuarios = "SELECT * FROM USUARIOS WHERE LOGIN='" . @$_SESSION['usuario'] . "' AND SENHA='" . @$_SESSION['senha'] . "'";
$usuarios = @mysql_query($sql_usuarios,$conexao);
$id_usuario = @mysql_result($usuarios,0,'ID');
if (@mysql_num_rows($usuarios) == 0) {
	@session_destroy();
	header("Location: adm.php?msg=" . urlencode('Sess�o Finalizada. Usu�rio e/ou Senha Sem Permiss�o.') . '&pag=' . urlencode(basename($_SERVER['PHP_SELF'])));
}
?>
