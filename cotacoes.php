<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? $id_tipo = trim(@$_GET['id_tipo']); ?>
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
		<TD CLASS="pg"><IFRAME SRC="cotacao_todas.php?id_tipo=<?=$id_tipo;?>" NAME="cotacoes" ID="cotacoes" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
		<TD CLASS="tbl_menu">
			<TABLE>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('cotacao_editar.php?id_cotacao=','cotacoes');">
					<TD CLASS="menu_dir">Cadastrar</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/bloco_notas.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('cotacao_todas.php','cotacoes');">
					<TD CLASS="menu_dir">Todas</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/caderneta.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('cotacao_todas.php?pendente=Sim','cotacoes');">
					<TD CLASS="menu_dir">Pendentes</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/bola_cortada.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('cotacao_todas.php?aceita=Sim','cotacoes');">
					<TD CLASS="menu_dir">Aceitas</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/estrela.gif"></TD>
				</TR>
				<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('cotacao_todas.php?aceita=Não','cotacoes');">
					<TD CLASS="menu_dir">Descartadas</TD>
					<TD CLASS="img_menu"><IMG SRC="imagens/x.gif"></TD>
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
