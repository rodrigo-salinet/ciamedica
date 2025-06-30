<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<STYLE TYPE="TEXT/CSS">
td {
	border-color: #51A432;
	border-style: dotted;
	border-width: 1px;
	padding: 4px;
}
img {
	cursor: hand;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function excluir(id,nome) {
	if (window.confirm('Esta ação irá excluir definitivamente o produto ' + nome + '.') == true) {
		window.open('estoque_excluir.php?id_produto=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Produtos</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nome:</TD>
		<TD CLASS="titulo">Fornecedor:</TD>
		<TD CLASS="titulo">Linha:</TD>
		<TD CLASS="titulo">Preço:</TD>
		<TD CLASS="titulo">Quantidade:</TD>
		<TD CLASS="titulo">Unidade:</TD>
		<TD CLASS="titulo">Ações:</TD>
	</TR>
	<TR>
		<TD COLSPAN="7">&nbsp;</TD>
	</TR>
<?
$sql_produtos = "SELECT * FROM ESTOQUE ORDER BY NOME";
$produtos = mysql_query($sql_produtos,$conexao);
if (@mysql_num_rows($produtos) < 1) {
?>
	<TR>
		<TD COLSPAN="7" STYLE="text-align: center;">Não há produto cadastrado nesta seção no momento.</TD>
	</TR>
<?
} else {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($produtos);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
?>
	<TR>
		<TD><A HREF="produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>"><?=mysql_result($produtos,$n,'NOME');?></A></TD>
<?
		$sql_fornecedor = "SELECT * FROM FORNECEDORES WHERE ID=" . mysql_result($produtos,$n,'ID_FORNECEDOR');
		$fornecedor = mysql_query($sql_fornecedor,$conexao);
		$fornecedor_nome = mysql_result($fornecedor,0,'NOME');
		@mysql_free_result($fornecedor);
?>
		<TD CLASS="fornecedor"><?=$fornecedor_nome;?></TD>
<?
		$sql_linha = "SELECT * FROM LINHAS WHERE ID=" . mysql_result($produtos,$n,'ID_LINHA');
		$linha = mysql_query($sql_linha,$conexao);
		$linha_nome = mysql_result($linha,0,'NOME');
		@mysql_free_result($linha);
?>
		<TD CLASS="centro"><?=$linha_nome;?></TD>
		<TD CLASS="centro"><?=mysql_result($produtos,$n,'PRECO');?></TD>
		<TD CLASS="centro"><?=mysql_result($produtos,$n,'QUANTIDADE');?></TD>
<?
		$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=" . @mysql_result($produtos,$n,'ID_MEDIDA');
		$medida = mysql_query($sql_medida,$conexao);
?>
		<TD CLASS="centro"><?=@mysql_result($medida,0,'NOME');?></TD>
<?		@mysql_free_result($medida); ?>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('estoque_editar.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($produtos,$n,'ID');?>','<?=mysql_result($produtos,$n,'NOME');?>');" TITLE="Excluir"></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
<?
	}
}
?>
</TABLE><BR>
<BR>
<TABLE>
	<TR>
<?
$total_separado = explode('.',strval(@mysql_num_rows($produtos) / $reg_por_pag));

$total_pag = intval(implode('.',$total_separado));
if (count($total_separado) > 1) {
	$total_pag++;
}

unset($_GET['pg']);
for ($n = 1; $n <= $total_pag; $n++) {
	$sep_var = '?';
	$link_temp = basename($_SERVER['PHP_SELF']);
	if (count($_GET) > 0) {
		$sep_var = '&';
		$link_temp .= '?' . @$_SERVER['QUERY_STRING'];
	}
	if ($n != $pg) {
?>
		<TD><A HREF="<?=$link_temp . $sep_var . 'pg=' . $n;?>"><?=$n;?></A></TD>
<?	} else { ?>
		<TD STYLE="font-weight: bold;"><?=$n;?></TD>
<?
	}
}
?>
	</TR>
</TABLE>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
