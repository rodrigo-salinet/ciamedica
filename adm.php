<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<? @session_destroy(); ?>
<BR>
<? 
$pag = trim(@$_GET['pag']);
if ($pag == '') {
	$pag = 'clientes.php';
}
$pag = urlencode($pag);
?>
<FORM ACTION="conectar.php?pag=<?=$pag;?>" ID="frm_login" METHOD="POST" NAME="frm_login">
<TABLE ALIGN="CENTER">
	<TR>
		<TD STYLE="text-align: right;">Usuário:</TD>
		<TD><INPUT NAME="txt_usuario" TYPE="TEXT" CLASS="txt" ID="txt_usuario"></TD>
	</TR>
	<TR>
		<TD STYLE="text-align: right;">Senha:</TD>
		<TD><INPUT ID="txt_senha" NAME="txt_senha" CLASS="txt" TYPE="PASSWORD"></TD>
	</TR>
	<TR>
		<TD COLSPAN="2" ALIGN="CENTER"><INPUT TYPE="SUBMIT" VALUE="Ok"><INPUT TYPE="RESET" VALUE="Cancelar"></TD>
	</TR>
</TABLE>
</FORM>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_usuario').focus();</SCRIPT>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
