<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? $id_tipo = trim(@$_GET['id_tipo']); ?>
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
	if (window.confirm('Esta ação irá excluir definitivamente a cotação do cliente ' + nome + '.') == true) {
		window.open('cotacao_excluir.php?id_cotacao=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<? @$_SESSION['id_cotacao'] = ''; ?>
<DIV CLASS="nome_pag">Cotações</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Cliente:</TD>
		<TD CLASS="titulo">Município:</TD>
		<TD CLASS="titulo">Data:</TD>
		<TD CLASS="titulo">Nº Ítens:</TD>
		<TD CLASS="titulo">Preço:</TD>
		<TD CLASS="titulo">Ações:</TD>
	</TR>
	<TR>
		<TD COLSPAN="6">&nbsp;</TD>
	</TR>
<?
$aceita = trim(@$_GET['aceita']);
$filtro = '';
if ($aceita != '') {
	$filtro .= " AND ACEITA='$aceita'";
}

$pendente = trim(@$_GET['pendente']);
if ($pendente != '') {
	$filtro .= " AND PENDENTE='$pendente'";
}
	

$sql_cotacoes = "SELECT * FROM COTACOES WHERE ID_TIPO=$id_tipo $filtro ORDER BY CLI_NOME";
$cotacoes = mysql_query($sql_cotacoes,$conexao);
if (@mysql_num_rows($cotacoes) > 0) {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($cotacoes);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
		
		$sql_itens = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo AND ID_TABELA=" . mysql_result($cotacoes,$n,'ID');
		$itens = mysql_query($sql_itens,$conexao);
?>
	<TR>
		<TD><A HREF="cotacao.php?id_cotacao=<?=@mysql_result($cotacoes,$n,'ID');?>"><?=@mysql_result($cotacoes,$n,'CLI_NOME');?></A></TD>
		<TD CLASS="centro"><?=@mysql_result($cotacoes,$n,'CLI_MUNICIPIO');?></TD>
		<TD CLASS="centro"><?=@mysql_result($cotacoes,$n,'DATA_CADASTRO');?></TD>
		<TD CLASS="centro"><?=@mysql_num_rows($itens);?></TD>
		<TD STYLE="text-align: right;"><?=@mysql_result($cotacoes,$n,'PRECO_TOTAL');?></TD>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('cotacao.php?id_cotacao=<?=mysql_result($cotacoes,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('cotacao_editar.php?id_cotacao=<?=mysql_result($cotacoes,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($cotacoes,$n,'ID');?>','<?=mysql_result($cotacoes,$n,'CLI_NOME');?>');" TITLE="Excluir"></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
<?
		@mysql_free_result($itens);
	}
} else {
?>
	<TR>
		<TD COLSPAN="6" STYLE="text-align: center;">Não há cotação cadastrada nesta seção no momento.</TD>
	</TR>
<? } ?>
</TABLE><BR>
<BR>
<TABLE>
	<TR>
<?
$total_separado = explode('.',strval(@mysql_num_rows($cotacoes) / $reg_por_pag));

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
