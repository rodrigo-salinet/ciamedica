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
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_medida = trim(@$_GET['id_medida']);
$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=$id_medida";
$medida = mysql_query($sql_medida,$conexao);
?>
<DIV CLASS="nome_pag">Informações Sobre Unidade de Medida</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Nome:</TD> 
					<TD CLASS="campo"><?=@mysql_result($medida,0,'NOME');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Abreviatura:</TD> 
					<TD CLASS="campo"><?=@mysql_result($medida,0,'ABREVIATURA');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Descrição:</TD> 
					<TD CLASS="campo"><?=@mysql_result($medida,0,'DESCRICAO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
</TABLE> 
<? @mysql_free_result($medida); ?>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
