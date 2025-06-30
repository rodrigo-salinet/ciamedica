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
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Clientes - Cobrança</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo" COLSPAN="2">Nome:</TD>
		<TD CLASS="titulo">Município:</TD>
		<TD CLASS="titulo">UF:</TD>
		<TD CLASS="titulo">Fone:</TD>
		<TD CLASS="titulo">Contato:</TD>
	</TR>
	<TR>
		<TD COLSPAN="6">&nbsp;</TD>
	</TR>
<?
$sql_clientes = "SELECT * FROM CLIENTES ORDER BY NOME";
$clientes = mysql_query($sql_clientes,$conexao);
if (@mysql_num_rows($clientes) < 1) {
?>
	<TR>
		<TD COLSPAN="7" STYLE="text-align: center;">Não há cliente cadastrado nesta seção no momento.</TD>
	</TR>
<?
} else {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($clientes);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
?>
	<TR>
		<TD STYLE="width: 0.01%;"><IMG SRC="imagens/cadernetas_seta.gif" onClick="window.open('cliente_edit_cobranca.php?id_cliente=<?=mysql_result($clientes,$n,'ID');?>','_self');" TITLE="Editar"></TD>
		<TD><?=mysql_result($clientes,$n,'NOME');?></TD>
		<TD CLASS="centro"><?=mysql_result($clientes,$n,'MUNICIPIO');?></TD>
		<TD CLASS="centro"><?=mysql_result($clientes,$n,'UF');?></TD>
		<TD CLASS="centro">(<?=mysql_result($clientes,$n,'DDD_FONE');?>)<?=mysql_result($clientes,$n,'FONE');?></TD>
		<TD><?=mysql_result($clientes,$n,'CONTATO');?></TD>
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
$total_separado = explode('.',strval(@mysql_num_rows($clientes) / $reg_por_pag));

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
