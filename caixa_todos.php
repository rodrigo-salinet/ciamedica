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
function excluir(id) {
	if (window.confirm('Esta ação irá excluir definitivamente a movimentacao nº ' + id + '.') == true) {
		window.open('caixa_excluir.php?id_caixa=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Caixa</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nº:</TD>
		<TD CLASS="titulo">Tipo:</TD>
		<TD CLASS="titulo">Despesa:</TD>
		<TD CLASS="titulo">Valor: R$</TD>
		<TD CLASS="titulo">Data:</TD>
		<TD CLASS="titulo">Ações:</TD>
	</TR>
	<TR>
		<TD COLSPAN="6">&nbsp;</TD>
	</TR>
<?
$sql_caixa = "SELECT * FROM CAIXA ORDER BY ANO,MES,DIA";
$caixa = mysql_query($sql_caixa,$conexao);
if (@mysql_num_rows($caixa) < 1) {
?>
	<TR>
		<TD COLSPAN="6" STYLE="text-align: center;">Não há movimentação cadastrada nesta seção no momento.</TD>
	</TR>
<?
} else {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($caixa);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
?>
	<TR>
		<TD STYLE="text-align: center;"><A HREF="movimento.php?id_caixa=<?=mysql_result($caixa,$n,'ID');?>"><?=mysql_result($caixa,$n,'ID');?></A></TD>
<?
		$id_tipo_temp = mysql_result($caixa,$n,'ID_TIPO');
		$sql_tipo = "SELECT * FROM TIPOS_CAIXA WHERE ID=$id_tipo_temp";
		$tipo = mysql_query($sql_tipo,$conexao);
		$nome_tipo = @mysql_result($tipo,0,'NOME');
?>
		<TD CLASS="centro"><?=$nome_tipo;?></TD>
<?
		$id_despesa_temp = mysql_result($caixa,$n,'ID_DESPESA');
		$sql_despesa = "SELECT * FROM DESPESAS WHERE ID=$id_despesa_temp";
		$despesa = mysql_query($sql_despesa,$conexao);
		$nome_despesa = @mysql_result($despesa,0,'NOME');
?>
		<TD CLASS="centro"><?=$nome_despesa;?></TD>
		<TD STYLE="text-align: right;"><?=mysql_result($caixa,$n,'VALOR');?></TD>
		<TD CLASS="centro"><?=mysql_result($caixa,$n,'DIA') . '/' . mysql_result($caixa,$n,'MES') . '/' . mysql_result($caixa,$n,'ANO');?></TD>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('movimento.php?id_caixa=<?=mysql_result($caixa,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('caixa_editar.php?id_caixa=<?=mysql_result($caixa,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($caixa,$n,'ID');?>');" TITLE="Excluir"></TD>
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
$total_separado = explode('.',strval(@mysql_num_rows($caixa) / $reg_por_pag));

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
