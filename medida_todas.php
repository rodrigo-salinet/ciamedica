<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaM�dica ::.</TITLE>
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
	if (window.confirm('Esta a��o ir� excluir definitivamente a medida ' + nome + '.') == true) {
		window.open('medida_excluir.php?id_medida=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Unidades de Medida</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nome:</TD>
		<TD CLASS="titulo">Abreviatura:</TD>
		<TD CLASS="titulo">Descri��o:</TD>
		<TD CLASS="titulo">A��es:</TD>
	</TR>
	<TR>
		<TD COLSPAN="4">&nbsp;</TD>
	</TR>
<?
$sql_medidas = "SELECT * FROM MEDIDAS ORDER BY NOME";
$medidas = mysql_query($sql_medidas,$conexao);
if (@mysql_num_rows($medidas) < 1) {
?>
	<TR>
		<TD COLSPAN="4" STYLE="text-align: center;">N�o h� medida cadastrado nesta se��o no momento.</TD>
	</TR>
<?
} else {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($medidas);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
?>
	<TR>
		<TD><A HREF="medida.php?id_medida=<?=mysql_result($medidas,$n,'ID');?>"><?=mysql_result($medidas,$n,'NOME');?></A></TD>
		<TD CLASS="centro"><?=mysql_result($medidas,$n,'ABREVIATURA');?></TD>
		<TD CLASS="centro"><?=mysql_result($medidas,$n,'DESCRICAO');?></TD>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('medida.php?id_medida=<?=mysql_result($medidas,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('medida_editar.php?id_medida=<?=mysql_result($medidas,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($medidas,$n,'ID');?>','<?=mysql_result($medidas,$n,'NOME');?>');" TITLE="Excluir"></TD>
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
$total_separado = explode('.',strval(@mysql_num_rows($medidas) / $reg_por_pag));

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
