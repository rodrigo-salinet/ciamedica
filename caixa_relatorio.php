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
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_caixa = trim(@$_GET['id_caixa']);
$sql_caixa = "SELECT * FROM CAIXA WHERE ID=$id_caixa";
$caixa = mysql_query($sql_caixa,$conexao);
?>
<DIV CLASS="nome_pag">Relatório de Caixa</DIV>
<FORM ACTION="caixa_relatorio.php" ID="frm_rel_cai" METHOD="GET">
<TABLE STYLE="width: 100%;"> 
	<TR>
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Mês:</TD> 
					<TD CLASS="campo">
			<SELECT ID="sel_mes" NAME="sel_mes" onChange="document.getElementById('frm_rel_cai').submit();">
				<OPTION VALUE="">-- Aqui --</OPTION>
<?
$sel_mes = @$_GET['sel_mes'];
$num_mes = '';
for ($n = 0; $n < count($meses); $n++) {
	$selecionado = '';
	if ($meses[$n] == $sel_mes) {
		$num_mes = ($n + 1);
		$selecionado = ' SELECTED';
	}
?>
				<OPTION VALUE="<?=$meses[$n];?>"<?=$selecionado;?>><?=$meses[$n];?></OPTION>
<? } ?>
			</SELECT>
					</TD> 
					<TD CLASS="txt_novo">Ano:</TD> 
					<TD CLASS="campo">
			<SELECT ID="sel_ano" NAME="sel_ano" onChange="document.getElementById('frm_rel_cai').submit();">
				<OPTION VALUE="">-- Aqui --</OPTION>
<?
$sel_ano = @$_GET['sel_ano'];
for ($n = 0; $n <= 99; $n++) {
	$ano_temp = '20' . $n;
	if (strlen($n) == 1) {
		$ano_temp = '200' . $n;
	}

	$selecionado = '';
	if ($ano_temp == $sel_ano) {
		$selecionado = ' SELECTED';
	}
?>
				<OPTION VALUE="<?=$ano_temp;?>"<?=$selecionado;?>><?=$ano_temp;?></OPTION>
<? } ?>
			</SELECT>
					</TD> 
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE><BR>
<BR>
<?
$filtro = '';

if ($num_mes != '') {
	if ($filtro != '') {
		$filtro .= ' AND ';
	}
	$filtro .= "MES=$num_mes";
}

if ($sel_ano != '') {
	if ($filtro != '') {
		$filtro .= ' AND ';
	}
	$filtro .= "ANO=$sel_ano";
}

if ($filtro != '') {
	$filtro = 'WHERE ' . $filtro;
}

$sql_caixa = "SELECT * FROM CAIXA $filtro ORDER BY ANO,MES,DIA";
$caixa = mysql_query($sql_caixa,$conexao);

$total = 0;

if (@mysql_num_rows($caixa) > 0) {
?>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nº:</TD>
		<TD CLASS="titulo">Tipo:</TD>
		<TD CLASS="titulo">Despesa:</TD>
		<TD CLASS="titulo">Data:</TD>
		<TD CLASS="titulo">Valor: R$</TD>
	</TR>
<?
	for ($n = 0; $n < @mysql_num_rows($caixa); $n++) {
?>
	<TR> 
		<TD STYLE="text-align: center;"><A HREF="movimento.php?id_caixa=<?=mysql_result($caixa,$n,'ID');?>"><?=mysql_result($caixa,$n,'ID');?></A></TD>
<?
		$id_tipo_temp = mysql_result($caixa,$n,'ID_TIPO');
		$sql_tipo = "SELECT * FROM TIPOS_CAIXA WHERE ID=$id_tipo_temp";
		$tipo = mysql_query($sql_tipo,$conexao);
		$id_movimento = @mysql_result($tipo,0,'ID_MOVIMENTO');
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
		<TD CLASS="centro"><?=mysql_result($caixa,$n,'DIA') . '/' . mysql_result($caixa,$n,'MES') . '/' . mysql_result($caixa,$n,'ANO');?></TD>
<?
		$valor_temp = floatval(str_replace(',','.',str_replace('.','',mysql_result($caixa,$n,'VALOR'))));
		
		$cor = 'color: #0000FF';
		if ($id_movimento == 1) {
			$total += $valor_temp;
		} else if ($id_movimento == 2) {
			$cor = 'color: #FF0000';
			$total -= $valor_temp;
		}
?>
		<TD STYLE="text-align: right; <?=$cor;?>"><?=mysql_result($caixa,$n,'VALOR');?></TD>
	</TR> 
<?
	}
} else {
?>
	<TR>
		<TD COLSPAN="5" STYLE="text-align: center;">Não há movimentação cadastrada de acordo com o mês e/ou ano selecionado(s) no momento.</TD>
	</TR>
<? } ?>
</TABLE><BR>
<BR>
<TABLE STYLE="width: 100%;">
<TR>
	<TD STYLE="padding: 0px; border: 0px;">
		<TABLE STYLE="width: 100%;">
			<TR>
				<TD STYLE="width: 100%; text-align: right;">Saldo:</TD>
<?
$cor = 'color: #0000FF';
if ($total < 0) {
	$cor = 'color: #FF0000';
}
?>
				<TD STYLE="width: 0.01%; white-space: nowrap;">R$ <SPAN STYLE="<?=$cor;?>"><?=number_format($total,2,',','.');?></SPAN></TD>
			</TR>
		</TABLE>
	</TD>
</TR>
</TABLE> 
</FORM>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
