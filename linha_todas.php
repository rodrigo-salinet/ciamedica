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
	if (window.confirm('Esta ação irá excluir definitivamente a linha ' + nome + '.') == true) {
		window.open('linha_excluir.php?id_linha=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Linhas de Produto</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nome:</TD>
		<TD CLASS="titulo">Descrição:</TD>
		<TD CLASS="titulo">Ativa:</TD>
		<TD CLASS="titulo">Ações:</TD>
	</TR>
	<TR>
		<TD COLSPAN="4">&nbsp;</TD>
	</TR>
<?
$ativa = trim(@$_GET['ativa']);
$filtro = '';
if ($ativa != '') {
	$filtro = "WHERE ATIVA='$ativa'";
}

$sql_linhas = "SELECT * FROM LINHAS $filtro ORDER BY NOME";
$linhas = mysql_query($sql_linhas,$conexao);
if (@mysql_num_rows($linhas) < 1) {
?>
	<TR>
		<TD COLSPAN="6" STYLE="text-align: center;">Não há linha cadastrada nesta seção no momento.</TD>
	</TR>
<?
} else {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($linhas);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
?>
	<TR>
		<TD><A HREF="linha.php?id_linha=<?=mysql_result($linhas,$n,'ID');?>"><?=mysql_result($linhas,$n,'NOME');?></A></TD>
		<TD CLASS="centro"><?=mysql_result($linhas,$n,'DESCRICAO');?></TD>
		<TD CLASS="centro"><?=mysql_result($linhas,$n,'ATIVA');?></TD>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('linha.php?id_linha=<?=mysql_result($linhas,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('linha_editar.php?id_linha=<?=mysql_result($linhas,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($linhas,$n,'ID');?>','<?=mysql_result($linhas,$n,'NOME');?>');" TITLE="Excluir"></TD>
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
$total_separado = explode('.',strval(@mysql_num_rows($linhas) / $reg_por_pag));

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
