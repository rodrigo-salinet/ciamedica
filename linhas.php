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
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="pg"><IFRAME SRC="linha_todas.php" NAME="linhas" ID="linhas" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
		<TD CLASS="tbl_menu">
			<TABLE>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('linha_editar.php','linhas');">
					<TD CLASS="menu_dir">Cadastrar</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/bloco_notas.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('linha_todas.php','linhas');">
					<TD CLASS="menu_dir">Todas</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/mao_pasta.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('linha_todas.php?ativa=Sim','linhas');">
					<TD CLASS="menu_dir">Ativas</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/estrela.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('linha_todas.php?ativa=Não','linhas');">
					<TD CLASS="menu_dir">Não Ativas</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/bola_cortada.gif"></TD>
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
