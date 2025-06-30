<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY SCROLL="NO" onLoad="ver_hoje();">
<? require_once('frm_html.php'); ?>
<? require_once('msg.php'); ?>
<TABLE STYLE="position: absolute; top: 0px; width: 100%; z-index: 2;">
	<TR>
		<TD STYLE="text-align: right; height: 0.01%; font-weight: bold; line-height: 12px;"><A HREF="#" STYLE="cursor: hand; color: #000000;" onClick="self.close();">X</A></TD>
	</TR>
</TABLE>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="width: 100%; height: 0.01%;">
			<TABLE CLASS="topo">
				<TR>
					<TD STYLE="background-image: url(imagens/borda_superior.gif); background-repeat: repeat-x; width: 10px; background-position: top;">&nbsp;</TD>
				</TR>
				<TR>
					<TD>
						<TABLE STYLE="width: 100%;">
							<TR>
								<TD STYLE="width: 0.01%;"><IMG SRC="imagens/topo.gif"></TD>
								<TD CLASS="titulo_topo">PRODUTOS MÉDICOS<BR>
									HOSPITALARES<BR>
									E ODONTOLÓGICOS</TD>
								<TD CLASS="saudacao" ID="saudacao" TITLE="Saudação."></TD>
							</TR>
						</TABLE>
					</TD>
				</TR>
				<TR>
					<TD STYLE="background-image: url(imagens/borda_inferior.gif); background-repeat: repeat-x; width: 10px; background-position: bottom;">&nbsp;</TD>
				</TR>
				<TR>
				</TR>
			</TABLE>
		</TD>
	</TR>
	<TR>
		<TD STYLE="width: 100%; height: 100%;">
			<TABLE STYLE="width: 100%; height: 100%;">
				<TR>
					<TD CLASS="tbl_menu">
						<TABLE CLASS="tbl_menu">
<?
$sql_menu = "SELECT * FROM MENU_PRINCIPAL ORDER BY NOME";
$menu = mysql_query($sql_menu,$conexao);
for ($n = 0; $n < @mysql_num_rows($menu); $n++) {
?>
							<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="window.open('<?=@mysql_result($menu,$n,'PAGINA');?>','mainFrame');">
								<TD CLASS="img_menu" TITLE="<?=@mysql_result($menu,$n,'DESCRICAO');?>"><IMG SRC="imagens/<?=@mysql_result($menu,$n,'ICONE');?>"></TD>
								<TD CLASS="menu_esq" TITLE="<?=@mysql_result($menu,$n,'DESCRICAO');?>"><?=@mysql_result($menu,$n,'NOME');?></TD>
							</TR>
<? } ?>
							<TR>
								<TD COLSPAN="2">
									<? require_once('calendario.php'); ?>
								</TD>
							</TR>
							<TR>
								<TD COLSPAN="2" STYLE="cursor: hand; font-size: 9px; text-align: center;" onClick="alert('Suporte ligue: (43) 3268-22840\nE-Mail: rodrigosalinet@hotmail.com');" TITLE="Rodrigo Salinet da Silva">Suporte</TD>
							</TR>
						</TABLE>
					</TD>
					<TD STYLE="vertical-align: top; width: 100%; height: 100%;"><IFRAME SRC="adm.php" NAME="mainFrame" ID="mainFrame" STYLE="width: 100%; height: 100%;" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
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
