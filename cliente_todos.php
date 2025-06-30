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
	if (window.confirm('Esta ação irá excluir definitivamente o cliente ' + nome + '.') == true) {
		window.open('cliente_excluir.php?id_cliente=' + id,'_self');
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<DIV CLASS="nome_pag">Clientes</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nome:</TD>
		<TD CLASS="titulo">Município:</TD>
		<TD CLASS="titulo">UF:</TD>
		<TD CLASS="titulo">Fone:</TD>
		<TD CLASS="titulo">Contato:</TD>
		<TD CLASS="titulo">Ações:</TD>
	</TR>
	<TR>
		<TD COLSPAN="6">&nbsp;</TD>
	</TR>
<?
$em_dia = trim(@$_GET['em_dia']);
$filtro = '';
if ($em_dia != '') {
	$filtro = "WHERE EM_DIA='$em_dia'";
}

$sql_clientes = "SELECT * FROM CLIENTES $filtro ORDER BY NOME";
$clientes = mysql_query($sql_clientes,$conexao);
if (@mysql_num_rows($clientes) < 1) {
?>
	<TR>
		<TD COLSPAN="6" STYLE="text-align: center;">Não há cliente cadastrado nesta seção no momento.</TD>
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
		<TD><A HREF="cliente.php?id_cliente=<?=mysql_result($clientes,$n,'ID');?>"><?=mysql_result($clientes,$n,'NOME');?></A></TD>
		<TD CLASS="centro"><?=mysql_result($clientes,$n,'MUNICIPIO');?></TD>
		<TD CLASS="centro"><?=mysql_result($clientes,$n,'UF');?></TD>
		<TD CLASS="centro">(<?=mysql_result($clientes,$n,'DDD_FONE');?>)<?=mysql_result($clientes,$n,'FONE');?></TD>
		<TD><?=mysql_result($clientes,$n,'CONTATO');?></TD>
		<TD STYLE="width: 0.01%; text-align: center; padding: 0px;">
			<TABLE>
				<TR>
					<TD CLASS="icone"><IMG SRC="imagens/janela_lupa.gif" onClick="window.open('cliente.php?id_cliente=<?=mysql_result($clientes,$n,'ID');?>','_self');" TITLE="Visualizar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/prancheta_lapis.gif" onClick="window.open('cliente_editar.php?id_cliente=<?=mysql_result($clientes,$n,'ID');?>','_self');" TITLE="Editar"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/x.gif" onClick="excluir('<?=mysql_result($clientes,$n,'ID');?>','<?=mysql_result($clientes,$n,'NOME');?>');" TITLE="Excluir"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/saco_cifrao.gif" onClick="window.open('cliente_edit_cobranca.php?id_cliente=<?=mysql_result($clientes,$n,'ID');?>','_self');" TITLE="Dados de Cobrança"></TD>
					<TD CLASS="icone"><IMG SRC="imagens/caminhao.gif" onClick="window.open('cliente_edit_entrega.php?id_cliente=<?=mysql_result($clientes,$n,'ID');?>','_self');" TITLE="Dados de Entrega"></TD>
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
