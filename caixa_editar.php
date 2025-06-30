<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_cai = document.getElementById('frm_cad_cai');
	var sel_tipo = document.getElementById('sel_tipo');
	var sel_forma_pagamento = document.getElementById('sel_forma_pagamento');
	var sel_despesa = document.getElementById('sel_despesa');
	var txt_dia = document.getElementById('txt_dia');
	var txt_mes = document.getElementById('txt_mes');
	var txt_ano = document.getElementById('txt_ano');
	var txt_obs = document.getElementById('txt_obs');

	if (trim(sel_tipo.value) == '') {
		alert('Selecione o campo TIPO');
		sel_tipo.focus();
		return false;
	}
	if (trim(sel_forma_pagamento.value) == '') {
		alert('Selecione o campo FORMA DE PAGAMENTO');
		sel_forma_pagamento.focus();
		return false;
	}
	if (trim(sel_despesa.value) == '') {
		alert('Selecione o campo DESPESA');
		sel_despesa.focus();
		return false;
	}
	if (trim(txt_dia.value) == '') {
		alert('Preencha corretamente o campo DIA\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_dia.focus();
		return false;
	}
	if (trim(txt_mes.value) == '') {
		alert('Preencha corretamente o campo MES\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_mes.focus();
		return false;
	}
	if (trim(txt_ano.value) == '' || trim(txt_ano.value).length < 4) {
		alert('Preencha corretamente o campo ANO\nque deve conter 4 NÚMEROS.');
		txt_ano.focus();
		return false;
	}
	/*if (trim(txt_obs.value) == '') {
		alert('Preencha corretamente o campo OBSERVAÇÕES.');
		txt_obs.focus();
		return false;
	}*/
	frm_cad_cai.submit();
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_caixa = @$_GET['id_caixa'];
$sql_caixa = "SELECT * FROM CAIXA WHERE ID=$id_caixa";
$caixa = mysql_query($sql_caixa,$conexao);
?>
<DIV CLASS="nome_pag">Editar Caixa</DIV>
<FORM ACTION="caixa_atualizar.php" ID="frm_cad_cai" METHOD="POST" NAME="frm_cad_cai"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_caixa" ID="hdn_id_caixa" VALUE="<?=@mysql_result($caixa,0,'ID');?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Tipo:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_tipo" NAME="sel_tipo">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_tipos = "SELECT * FROM TIPOS_CAIXA ORDER BY NOME";
$tipos = mysql_query($sql_tipos,$conexao);

for ($n = 0; $n < @mysql_num_rows($tipos); $n++) {
	$selecionado = "";
	if (@mysql_result($caixa,0,'ID_TIPO') == mysql_result($tipos,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($tipos,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($tipos,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($tipos);
?>							</SELECT>
						</TD> 
						<TD CLASS="txt_novo">Forma de Pagamento:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_forma_pagamento" NAME="sel_forma_pagamento">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_formas_pagamento = "SELECT * FROM FORMAS_PAGAMENTO ORDER BY NOME";
$formas_pagamento = mysql_query($sql_formas_pagamento,$conexao);

for ($n = 0; $n < @mysql_num_rows($formas_pagamento); $n++) {
	$selecionado = "";
	if (@mysql_result($caixa,0,'ID_FORMA_PAGAMENTO') == mysql_result($formas_pagamento,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($formas_pagamento,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($formas_pagamento,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($formas_pagamento);
?>							</SELECT>
						</TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Despesa:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_despesa" NAME="sel_despesa">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_despesas = "SELECT * FROM DESPESAS ORDER BY NOME";
$despesas = mysql_query($sql_despesas,$conexao);

for ($n = 0; $n < @mysql_num_rows($despesas); $n++) {
	$selecionado = "";
	if (@mysql_result($caixa,0,'ID_DESPESA') == mysql_result($despesas,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($despesas,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($despesas,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($despesas);
?>							</SELECT>
						</TD> 
						<TD CLASS="txt_novo">Banco:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_banco" NAME="sel_banco">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_bancos = "SELECT * FROM BANCOS ORDER BY NOME";
$bancos = mysql_query($sql_bancos,$conexao);

for ($n = 0; $n < @mysql_num_rows($bancos); $n++) {
	$selecionado = "";
	if (@mysql_result($caixa,0,'ID_BANCO') == mysql_result($bancos,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($bancos,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($bancos,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($bancos);
?>							</SELECT>
						</TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Responsável:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_responsavel" TYPE="TEXT" CLASS="txt" ID="txt_responsavel" VALUE="<?=@mysql_result($caixa,0,'RESPONSAVEL');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Data:</TD> 
						<TD CLASS="campo">
<?
$dia_temp = @mysql_result($caixa,0,'DIA');
if ($dia_temp == '') {
	$dia_temp = $dia;
}
?>
							<INPUT NAME="txt_dia" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_dia" VALUE="<?=$dia_temp;?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
<?
$mes_temp = @mysql_result($caixa,0,'MES');
if ($mes_temp == '') {
	$mes_temp = $mes;
}
?>
							<INPUT NAME="txt_mes" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_mes" VALUE="<?=$mes_temp;?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
<?
$ano_temp = @mysql_result($caixa,0,'ANO');
if ($ano_temp == '') {
	$ano_temp = $ano;
}
?>
							<INPUT NAME="txt_ano" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_ano" VALUE="<?=$ano_temp;?>" SIZE="5" MAXLENGTH="4" onKeyPress="filtra_numeros();">
						</TD> 
						<TD CLASS="txt_novo">Valor: R$</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_valor" TYPE="TEXT" CLASS="txt" ID="txt_valor" VALUE="<?=@mysql_result($caixa,0,'VALOR');?>" onKeyPress="moeda();" SIZE="26" MAXLENGTH="25" STYLE="text-align: right;" onBlur="this.value = formato_numero(this.value,2);"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs" ROWS="2" CLASS="txt" ID="txt_obs" STYLE="width: 100%;"><?=@mysql_result($caixa,0,'OBS');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($caixa) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('caixa_todos.php','caixa');">
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('sel_tipo').focus();</SCRIPT> 
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
