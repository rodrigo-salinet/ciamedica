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
$id_linha = trim(@$_GET['id_linha']);
$sql_linhas = "SELECT * FROM LINHAS WHERE ID=$id_linha";
$linhas = mysql_query($sql_linhas,$conexao);
?>
<DIV CLASS="nome_pag">Informações Sobre a Linha de Produto</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Nome:</TD> 
					<TD CLASS="campo"><?=@mysql_result($linhas,0,'NOME');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Descrição:</TD> 
					<TD CLASS="campo"><?=@mysql_result($linhas,0,'DESCRICAO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Ativa:</TD> 
					<TD CLASS="campo"><?=@mysql_result($linhas,0,'ATIVA');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
</TABLE> 
<? @mysql_free_result($linhas); ?>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
