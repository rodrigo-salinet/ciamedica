<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY SCROLL="NO">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<TABLE CLASS="tbl_pag">
	<TR>
		<TD CLASS="pg"><IFRAME SRC="banco_todos.php" NAME="bancos" ID="bancos" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
		<TD CLASS="tbl_menu">
			<TABLE>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('banco_editar.php','bancos');">
					<TD CLASS="menu_dir">Cadastrar</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/bloco_notas.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('banco_todos.php','bancos');">
					<TD CLASS="menu_dir">Todos</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/cifrao.gif"></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
