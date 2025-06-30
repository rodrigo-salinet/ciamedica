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
	if (window.confirm('Esta ação irá excluir definitivamente a conta nº ' + id + '.') == true) {
		window.open('conta_excluir.php?id_conta=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Contas</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nº:</TD>
		<TD CLASS="titulo">Tipo:</TD>
		<TD CLASS="titulo">Despesa:</TD>
		<TD CLASS="titulo">Vencimento:</TD>
		<TD CLASS="titulo">Total:</TD>
		<TD CLASS="titulo">Ações:</TD>
	</TR>
	<TR>
		<TD COLSPAN="6">&nbsp;</TD>
	</TR>
<?
$id_tipo = trim(@$_GET['id_tipo']);
$filtro = '';
if ($id_tipo != '') {
	$filtro = "WHERE ID_TIPO=$id_tipo";
}

$sql_contas = "SELECT * FROM CONTAS $filtro ORDER BY ANO_VENCIMENTO,MES_VENCIMENTO,DIA_VENCIMENTO,HORARIO_VENCIMENTO DESC";
$contas = mysql_query($sql_contas,$conexao);
if (@mysql_num_rows($contas) < 1) {
?>
	<TR>
		<TD COLSPAN="6" STYLE="text-align: center;">Não há conta cadastrada nesta seção no momento.</TD>
	</TR>
<?
} else {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($contas);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
?>
	<TR>
		<TD STYLE="text-align: center;"><A HREF="conta.php?id_conta=<?=mysql_result($contas,$n,'ID');?>"><?=mysql_result($contas,$n,'ID');?></A></TD>
<?
		$id_tipo_temp = mysql_result($contas,$n,'ID_TIPO');
		$sql_tipo = "SELECT * FROM TIPOS_CONTA WHERE ID=$id_tipo_temp";
		$tipo = mysql_query($sql_tipo,$conexao);
		$nome_tipo = @mysql_result($tipo,0,'NOME');
?>
		<TD CLASS="centro"><?=$nome_tipo;?></TD>
<?
		$id_despesa_temp = mysql_result($contas,$n,'ID_DESPESA');
		$sql_despesa = "SELECT * FROM DESPESAS WHERE ID=$id_despesa_temp";
		$despesa = mysql_query($sql_despesa,$conexao);
		$nome_despesa = @mysql_result($despesa,0,'NOME');
?>
		<TD CLASS="centro"><?=$nome_despesa;?></TD>
		<TD CLASS="centro"><?=mysql_result($contas,$n,'DIA_VENCIMENTO') . '/' . mysql_result($contas,$n,'MES_VENCIMENTO') . '/' . mysql_result($contas,$n,'ANO_VENCIMENTO');?></TD>
		<TD CLASS="centro"><?=mysql_result($contas,$n,'TOTAL');?></TD>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('conta.php?id_conta=<?=mysql_result($contas,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('conta_editar.php?id_conta=<?=mysql_result($contas,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($contas,$n,'ID');?>');" TITLE="Excluir"></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
<?
		@mysql_free_result($tipo);
	}
}
?>
</TABLE><BR>
<BR>
<TABLE>
	<TR>
<?
$total_separado = explode('.',strval(@mysql_num_rows($contas) / $reg_por_pag));

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
