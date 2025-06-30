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
$id_produto = trim(@$_GET['id_produto']);
$sql_produtos = "SELECT * FROM ESTOQUE WHERE ID=$id_produto";
$produtos = mysql_query($sql_produtos,$conexao);
?>
<DIV CLASS="nome_pag">Informações sobre o Produto</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Nome:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'NOME');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Descrição:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'DESCRICAO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fornecedor:</TD> 
<?
$sql_fornecedores = "SELECT * FROM FORNECEDORES WHERE ID=" . @mysql_result($produtos,0,'ID_FORNECEDOR');
$fornecedores = mysql_query($sql_fornecedores,$conexao);
?>
					<TD CLASS="campo"><?=@mysql_result($fornecedores,0,'NOME');?></TD>
<? @mysql_free_result($fornecedores); ?>
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Linha:</TD> 
<?
$sql_linhas = "SELECT * FROM LINHAS WHERE ID=" . @mysql_result($produtos,0,'ID_LINHA');
$linhas = mysql_query($sql_linhas,$conexao);
?>
					<TD CLASS="campo"><?=@mysql_result($linhas,0,'NOME');?></TD>
<? @mysql_free_result($linhas); ?>
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Preço:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'PRECO');?></TD> 
					<TD CLASS="txt_novo">Custo Compra:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'CUSTO_COMPRA');?></TD> 
					<TD CLASS="txt_novo">Custo Médio:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'CUSTO_MEDIO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Quantidade:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'QUANTIDADE');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Unidade:</TD> 
<?
$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=" . @mysql_result($produtos,0,'ID_MEDIDA');
$medida = mysql_query($sql_medida,$conexao);
?>
					<TD CLASS="campo"><?=@mysql_result($medida,0,'NOME');?></TD> 
<? @mysql_free_result($medida); ?>
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">IPI:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'IPI');?></TD> 
					<TD CLASS="txt_novo">Lucro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($produtos,0,'LUCRO');?>%</TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
</TABLE> 
<? @mysql_free_result($produtos); ?>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
