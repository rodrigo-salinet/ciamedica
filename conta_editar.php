<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_con = document.getElementById('frm_cad_con');
	var sel_fornecedor = document.getElementById('sel_fornecedor');
	var sel_cliente = document.getElementById('sel_cliente');
	var sel_tipo = document.getElementById('sel_tipo');
	var sel_forma_pagamento = document.getElementById('sel_forma_pagamento');
	var sel_despesa = document.getElementById('sel_despesa');
	var txt_dia_vencimento = document.getElementById('txt_dia_vencimento');
	var txt_mes_vencimento = document.getElementById('txt_mes_vencimento');
	var txt_ano_vencimento = document.getElementById('txt_ano_vencimento');
	var txt_quantidade = document.getElementById('txt_quantidade');
	var txt_valor = document.getElementById('txt_valor');
	var txt_total = document.getElementById('txt_total');
	var txt_obs = document.getElementById('txt_obs');

	/*if (trim(sel_fornecedor.value) == '') {
		alert('Selecione o campo FORNECEDOR');
		sel_fornecedor.focus();
		return false;
	}*/
	/*if (trim(sel_cliente.value) == '') {
		alert('Selecione o campo CLIENTE');
		sel_cliente.focus();
		return false;
	}*/
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
	/*if (trim(txt_data_emissao.value) == '' || trim(txt_data_emissao.value).length < 8) {
		alert('Preencha corretamente o campo DATA DA EMISSÃO\nque deve conter no MÍNIMO 8 NÚMEROS.');
		txt_data_emissao.focus();
		return false;
	}*/
	/*if (trim(txt_horario_emissao.value) == '' || trim(txt_horario_emissao.value).length < 6) {
		alert('Preencha corretamente o campo HORÁRIO DA EMISSÃO\nque deve conter no MÍNIMO 8 NÚMEROS.');
		txt_horario_emissao.focus();
		return false;
	}*/
	if (trim(txt_dia_vencimento.value) == '') {
		alert('Preencha corretamente o campo DIA DO VENCIMENTO\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_dia_vencimento.focus();
		return false;
	}
	if (trim(txt_mes_vencimento.value) == '') {
		alert('Preencha corretamente o campo MES DO VENCIMENTO\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_mes_vencimento.focus();
		return false;
	}
	if (trim(txt_ano_vencimento.value) == '' || trim(txt_ano_vencimento.value).length < 4) {
		alert('Preencha corretamente o campo ANO DO VENCIMENTO\nque deve conter 4 NÚMEROS.');
		txt_ano_vencimento.focus();
		return false;
	}
	/*if (trim(txt_quantidade.value) == '') {
		alert('Preencha corretamente o campo QUANTIDADE\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_quantidade.focus();
		return false;
	}*/
	/*if (trim(txt_data_baixa.value) == '' || trim(txt_data_baixa.value).length < 8) {
		alert('Preencha corretamente o campo DATA DA BAIXA\nque deve conter no MÍNIMO 8 NÚMEROS.');
		txt_data_baixa.focus();
		return false;
	}*/
	if (trim(txt_valor.value) == '') {
		alert('Preencha corretamente o campo VALOR\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_valor.focus();
		return false;
	}
	/*if (trim(txt_total.value) == '') {
		alert('Preencha corretamente o campo TOTAL\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_total.focus();
		return false;
	}*/
	/*if (trim(txt_obs.value) == '') {
		alert('Preencha corretamente o campo OBSERVAÇÕES.');
		txt_obs.focus();
		return false;
	}*/
	frm_cad_con.submit();
}
function total() {
	var txt_quantidade = document.getElementById('txt_quantidade');
	var txt_valor = document.getElementById('txt_valor');
	var txt_total = document.getElementById('txt_total');

	var quantidade = parseInt(trim(txt_quantidade.value));

	if (!isNaN(quantidade)) {
		var valor = parseFloat(trim(txt_valor.value.replace('.','')).replace(',','.'));
		var total = quantidade * valor;
		txt_total.value = formato_numero(total,2);
	} else {
		txt_total.value = '';
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_conta = @$_GET['id_conta'];
$sql_conta = "SELECT * FROM CONTAS WHERE ID=$id_conta";
$conta = mysql_query($sql_conta,$conexao);
?>
<DIV CLASS="nome_pag">Editar Conta</DIV>
<FORM ACTION="conta_atualizar.php" ID="frm_cad_con" METHOD="POST" NAME="frm_cad_con"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_conta" ID="hdn_id_conta" VALUE="<?=@mysql_result($conta,0,'ID');?>"> 
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
$sql_tipos = "SELECT * FROM TIPOS_CONTA ORDER BY NOME";
$tipos = mysql_query($sql_tipos,$conexao);

for ($n = 0; $n < @mysql_num_rows($tipos); $n++) {
	$selecionado = "";
	if (@mysql_result($conta,0,'ID_TIPO') == mysql_result($tipos,$n,'ID')) {
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
	if (@mysql_result($conta,0,'ID_FORMA_PAGAMENTO') == mysql_result($formas_pagamento,$n,'ID')) {
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
	if (@mysql_result($conta,0,'ID_DESPESA') == mysql_result($despesas,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($despesas,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($despesas,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($despesas);
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
						<TD CLASS="txt_novo">Fornecedor:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_fornecedor" NAME="sel_fornecedor">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_fornecedores = "SELECT * FROM FORNECEDORES ORDER BY NOME";
$fornecedores = mysql_query($sql_fornecedores,$conexao);

for ($n = 0; $n < @mysql_num_rows($fornecedores); $n++) {
	$selecionado = "";
	if (@mysql_result($conta,0,'ID_FORNECEDOR') == mysql_result($fornecedores,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($fornecedores,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($fornecedores,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($fornecedores);
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
						<TD CLASS="txt_novo">Cliente:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_cliente" NAME="sel_cliente">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_clientes = "SELECT * FROM CLIENTES ORDER BY NOME";
$clientes = mysql_query($sql_clientes,$conexao);

for ($n = 0; $n < @mysql_num_rows($clientes); $n++) {
	$selecionado = "";
	if (@mysql_result($conta,0,'ID_CLIENTE') == mysql_result($clientes,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($clientes,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($clientes,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($clientes);
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
						<TD CLASS="txt_novo">Data da Emissão:</TD> 
						<TD CLASS="campo">
							<INPUT NAME="txt_dia_emissao" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_dia_emissao" VALUE="<?=@mysql_result($conta,0,'DIA_EMISSAO');?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
							<INPUT NAME="txt_mes_emissao" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_mes_emissao" VALUE="<?=@mysql_result($conta,0,'MES_EMISSAO');?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
							<INPUT NAME="txt_ano_emissao" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_ano_emissao" VALUE="<?=@mysql_result($conta,0,'ANO_EMISSAO');?>" SIZE="5" MAXLENGTH="4" onKeyPress="filtra_numeros();">
						</TD> 
						<TD CLASS="txt_novo">Data do Vencimento:</TD> 
						<TD CLASS="campo">
							<INPUT NAME="txt_dia_vencimento" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_dia_vencimento" VALUE="<?=@mysql_result($conta,0,'DIA_VENCIMENTO');?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
							<INPUT NAME="txt_mes_vencimento" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_mes_vencimento" VALUE="<?=@mysql_result($conta,0,'MES_VENCIMENTO');?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
							<INPUT NAME="txt_ano_vencimento" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_ano_vencimento" VALUE="<?=@mysql_result($conta,0,'ANO_VENCIMENTO');?>" SIZE="5" MAXLENGTH="4" onKeyPress="filtra_numeros();">
						</TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Data do Cadastro:</TD> 
						<TD CLASS="campo">
<?
$dia_cadastro = @mysql_result($conta,0,'DIA_CADASTRO');
if ($dia_cadastro == '') {
	$dia_cadastro = $dia;
}
?>
							<INPUT NAME="txt_dia_cadastro" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_dia_cadastro" VALUE="<?=$dia_cadastro;?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
<?
$mes_cadastro = @mysql_result($conta,0,'MES_CADASTRO');
if ($mes_cadastro == '') {
	$mes_cadastro = $mes;
}
?>
							<INPUT NAME="txt_mes_cadastro" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_mes_cadastro" VALUE="<?=$mes_cadastro;?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
<?
$ano_cadastro = @mysql_result($conta,0,'ANO_CADASTRO');
if ($ano_cadastro == '') {
	$ano_cadastro = $ano;
}
?>
							<INPUT NAME="txt_ano_cadastro" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_ano_cadastro" VALUE="<?=$ano_cadastro;?>" SIZE="5" MAXLENGTH="4" onKeyPress="filtra_numeros();">
						</TD> 
						<TD CLASS="txt_novo">Data da Baixa:</TD> 
						<TD CLASS="campo">
							<INPUT NAME="txt_dia_baixa" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_dia_baixa" VALUE="<?=@mysql_result($conta,0,'DIA_BAIXA');?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
							<INPUT NAME="txt_mes_baixa" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_mes_baixa" VALUE="<?=@mysql_result($conta,0,'MES_BAIXA');?>" SIZE="3" MAXLENGTH="2" onKeyPress="filtra_numeros();">
							/
							<INPUT NAME="txt_ano_baixa" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_ano_baixa" VALUE="<?=@mysql_result($conta,0,'ANO_BAIXA');?>" SIZE="5" MAXLENGTH="4" onKeyPress="filtra_numeros();">
						</TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Quantidade:</TD> 
<?
$quantidade = trim(@mysql_result($conta,0,'QUANTIDADE'));
if ($quantidade == '') {
	$quantidade = '1';
}
?>
						<TD CLASS="campo"><INPUT NAME="txt_quantidade" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_quantidade" VALUE="<?=$quantidade;?>" SIZE="4" MAXLENGTH="3" onKeyPress="filtra_numeros();" onKeyUp="total();"></TD> 
						<TD CLASS="txt_novo">Valor:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_valor" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_valor" VALUE="<?=@mysql_result($conta,0,'VALOR');?>" SIZE="11" MAXLENGTH="10" onKeyPress="moeda();" onKeyUp="total();" onBlur="this.value = formato_numero(this.value,2);"></TD> 
						<TD CLASS="txt_novo">Total:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_total" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_total" VALUE="<?=@mysql_result($conta,0,'TOTAL');?>" SIZE="11" MAXLENGTH="10" onKeyPress="moeda();" onBlur="this.value = formato_numero(this.value,2);"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs" ROWS="2" CLASS="txt" ID="txt_obs" STYLE="width: 100%;"><?=@mysql_result($conta,0,'OBS');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($conta) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('conta_todas.php','contas');">
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
