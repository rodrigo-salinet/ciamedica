<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_ban = document.getElementById('frm_cad_ban');
	var txt_responsavel = document.getElementById('txt_responsavel');
	var txt_titular = document.getElementById('txt_titular');
	var txt_nome = document.getElementById('txt_nome');
	var txt_gerente = document.getElementById('txt_gerente');
	var txt_cnpj = document.getElementById('txt_cnpj');
	var txt_conta = document.getElementById('txt_conta');
	var txt_agencia = document.getElementById('txt_agencia');
	var txt_cartao = document.getElementById('txt_cartao');
	var txt_venc_cartao = document.getElementById('txt_venc_cartao');
	var txt_endereco = document.getElementById('txt_endereco');
	var txt_numero = document.getElementById('txt_numero');
	var txt_bairro = document.getElementById('txt_bairro');
	var txt_municipio = document.getElementById('txt_municipio');
	var txt_uf = document.getElementById('txt_uf');
	var txt_cep = document.getElementById('txt_cep');
	var txt_ddd_fone = document.getElementById('txt_ddd_fone');
	var txt_fone = document.getElementById('txt_fone');
	var txt_ddd_fax = document.getElementById('txt_ddd_fax');
	var txt_fax = document.getElementById('txt_fax');
	var txt_ddd_celular = document.getElementById('txt_ddd_celular');
	var txt_celular = document.getElementById('txt_celular');
	var txt_email_msn = document.getElementById('txt_email_msn');
	var txt_site = document.getElementById('txt_site');
	var txt_limite_credito = document.getElementById('txt_limite_credito');
	var rdg_cancelado = document.getElementById('rdg_cancelado');
	var txt_obs = document.getElementById('txt_obs');

	/*if (trim(txt_responsavel.value) == '' || trim(txt_responsavel.value).length < 3) {
		alert('Preencha corretamente o campo RESPONSÁVEL\nque deve conter no MÍNIMO 3 LETRAS');
		txt_responsavel.focus();
		return false;
	}*/
	if (trim(txt_titular.value) == '' || trim(txt_titular.value).length < 3) {
		alert('Preencha corretamente o campo TITULAR\nque deve conter no MÍNIMO 3 LETRAS');
		txt_titular.focus();
		return false;
	}
	if (trim(txt_nome.value) == '' || trim(txt_nome.value).length < 3) {
		alert('Preencha corretamente o campo NOME FANTASIA\nque deve conter no MÍNIMO 3 LETRAS');
		txt_nome.focus();
		return false;
	}
	if (trim(txt_gerente.value) == '' || trim(txt_gerente.value).length < 3) {
		alert('Preencha corretamente o campo GERENTE\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_gerente.focus();
		return false;
	}
	/*if (trim(txt_cnpj.value) == '' || trim(txt_cnpj.value).length < 14) {
		alert('Preencha corretamente o campo CNPJ\nque deve conter 14 NÚMEROS.');
		txt_cnpj.focus();
		return false;
	}*/
	if (trim(txt_conta.value) == '' || trim(txt_conta.value).length < 3) {
		alert('Preencha corretamente o campo CONTA\nque deve conter no mínimo 3 NÚMEROS.');
		txt_conta.focus();
		return false;
	}
	if (trim(txt_agencia.value) == '' || trim(txt_agencia.value).length < 3) {
		alert('Preencha corretamente o campo AGÊNCIA\nque deve conter no mínimo 3 NÚMERO.');
		txt_agencia.focus();
		return false;
	}
	if (trim(txt_cartao.value) == '') {
		alert('Preencha corretamente o campo CARTÃO DE CRÉDITO\nque deve conter no mínimo 1 NÚMERO.');
		txt_cartao.focus();
		return false;
	}
	if (trim(txt_venc_cartao.value) == '' || trim(txt_venc_cartao.value).length < 8) {
		alert('Preencha corretamente o campo VENC.\nque deve conter 8 NÚMEROS.');
		txt_venc_cartao.focus();
		return false;
	}
	if (trim(txt_endereco.value) == '' || trim(txt_endereco.value).length < 3) {
		alert('Preencha corretamente o campo ENDEREÇO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_endereco.focus();
		return false;
	}
	/*if (trim(txt_numero.value) == '') {
		alert('Preencha corretamente o campo Nº\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_numero.focus();
		return false;
	}*/
	/*if (trim(txt_complemento.value) == '') {
		alert('Preencha corretamente o campo txt_complemento.');
		txt_complemento.focus();
		return false;
	}*/
	/*if (trim(txt_bairro.value) == '') {
		alert('Preencha corretamente o campo BAIRRO.');
		txt_bairro.focus();
		return false;
	}*/
	if (trim(txt_municipio.value) == '' || trim(txt_municipio.value).length < 3) {
		alert('Preencha corretamente o campo MUNICÍPIO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_municipio.focus();
		return false;
	}
	if (trim(txt_uf.value) == '' || trim(txt_uf.value).length < 2) {
		alert('Preencha corretamente o campo UF\nque deve conter 2 LETRAS.');
		txt_uf.focus();
		return false;
	}
	/*if (trim(txt_cep.value) == '' || trim(txt_cep.value).length < 10) {
		alert('Preencha corretamente o campo CEP\nque deve conter 8 NÚMEROS.');
		txt_cep.focus();
		return false;
	}*/
	if (trim(txt_ddd_fone.value) == '' || trim(txt_ddd_fone.value).length < 2) {
		alert('Preencha corretamente o campo DDD DO FONE\nque deve conter 2 NÚMEROS.');
		txt_ddd_fone.focus();
		return false;
	}
	if (trim(txt_fone.value) == '' || trim(txt_fone.value).length < 8) {
		alert('Preencha corretamente o campo FONE\nque deve conter 8 NÚMEROS.');
		txt_fone.focus();
		return false;
	}
	if (trim(txt_ddd_fax.value) == '' || trim(txt_ddd_fax.value).length < 2) {
		alert('Preencha corretamente o campo DDD DO FAX\nque deve conter 2 NÚMEROS.');
		txt_ddd_fax.focus();
		return false;
	}
	if (trim(txt_fax.value) == '' || trim(txt_fax.value).length < 8) {
		alert('Preencha corretamente o campo FAX\nque deve conter no 8 NÚMEROS.');
		txt_fax.focus();
		return false;
	}
	/*if (trim(txt_ddd_celular.value) == '' || trim(txt_ddd_celular.value).length < 2) {
		alert('Preencha corretamente o campo DDD DO CELULAR\nque deve conter 2 NÚMEROS.');
		txt_ddd_celular.focus();
		return false;
	}*/
	/*if (trim(txt_celular.value) == '' || trim(txt_celular.value).length < 8) {
		alert('Preencha corretamente o campo CELULAR\nque deve conter 8 NÚMEROS.');
		txt_celular.focus();
		return false;
	}*/
	/*if (trim(txt_email_msn.value) == '' || trim(txt_email_msn.value).length < 11) {
		alert('Preencha corretamente o campo EMAIL / MSN\nque deve conter no MÍNIMO 11 LETRAS.');
		txt_email_msn.focus();
		return false;
	}*/
	/*if (trim(txt_site.value) == '') {
		alert('Preencha corretamente o campo SITE.');
		txt_site.focus();
		return false;
	}*/
	/*if (trim(txt_limite_credito.value) == '' || trim(txt_limite_credito.value).length < 1) {
		alert('Preencha corretamente o campo LIMITE DE CRÉDITO\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_limite_credito.focus();
		return false;
	}*/
	/*if (trim(rdg_cancelado.value) == '') {
		alert('Preencha corretamente o campo CANCELADO.');
		rdg_cancelado.focus();
		return false;
	}*/
	/*if (trim(txt_obs.value) == '') {
		alert('Preencha corretamente o campo OBSERVAÇÕES.');
		txt_obs.focus();
		return false;
	}*/
	frm_cad_ban.submit();
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_banco = @$_GET['id_banco'];
$sql_banco = "SELECT * FROM BANCOS WHERE ID=$id_banco";
$banco = mysql_query($sql_banco,$conexao);
?>
<DIV CLASS="nome_pag">Editar Banco</DIV>
<FORM ACTION="banco_atualizar.php" ID="frm_cad_ban" METHOD="POST" NAME="frm_cad_ban"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_banco" ID="hdn_id_banco" VALUE="<?=@mysql_result($banco,0,'ID');?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Responsável:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_responsavel" TYPE="TEXT" CLASS="txt" ID="txt_responsavel" VALUE="<?=@mysql_result($banco,0,'RESPONSAVEL');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Titular:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_titular" TYPE="TEXT" CLASS="txt" ID="txt_titular" VALUE="<?=@mysql_result($banco,0,'TITULAR');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Nome:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome" VALUE="<?=@mysql_result($banco,0,'NOME');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Gerente:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_gerente" TYPE="TEXT" CLASS="txt" ID="txt_gerente" VALUE="<?=@mysql_result($banco,0,'GERENTE');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">CNPJ do Banco:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cnpj" TYPE="TEXT" CLASS="txt" ID="txt_cnpj" onKeyPress="filtra_numeros();" onKeyUp="formata_cnpj();" VALUE="<?=@mysql_result($banco,0,'CNPJ');?>" SIZE="20" MAXLENGTH="18"></TD> 
						<TD CLASS="txt_novo">Conta:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_conta" TYPE="TEXT" CLASS="txt" ID="txt_conta" onKeyPress="filtra_teclas('./-');" VALUE="<?=@mysql_result($banco,0,'CONTA');?>" SIZE="11" MAXLENGTH="10"></TD> 
						<TD CLASS="txt_novo">Agência:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_agencia" TYPE="TEXT" CLASS="txt" ID="txt_agencia" onKeyPress="filtra_teclas('./-');" VALUE="<?=@mysql_result($banco,0,'AGENCIA');?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Cartão de Crédito:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cartao" TYPE="TEXT" CLASS="txt" ID="txt_cartao" VALUE="<?=@mysql_result($banco,0,'NUM_CARTAO');?>" STYLE="width: 79%;"> Venc.: <INPUT NAME="txt_venc_cartao" TYPE="TEXT" CLASS="txt" ID="txt_venc_cartao" onKeyPress="filtra_teclas('/');" VALUE="<?=@mysql_result($banco,0,'VENCIMENTO_CARTAO');?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Endereço:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_endereco" TYPE="TEXT" CLASS="txt" ID="txt_endereco" VALUE="<?=@mysql_result($banco,0,'ENDERECO');?>" STYLE="width: 89%;"> Nº: <INPUT NAME="txt_numero" TYPE="TEXT" CLASS="txt" ID="txt_numero" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($banco,0,'NUMERO');?>" SIZE="5" MAXLENGTH="4"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Complemento:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_complemento" TYPE="TEXT" CLASS="txt" ID="txt_complemento" VALUE="<?=@mysql_result($banco,0,'COMPLEMENTO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Bairro:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_bairro" TYPE="TEXT" CLASS="txt" ID="txt_bairro" VALUE="<?=@mysql_result($banco,0,'BAIRRO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Município:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_municipio" TYPE="TEXT" CLASS="txt" ID="txt_municipio" VALUE="<?=@mysql_result($banco,0,'MUNICIPIO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">UF:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_uf" TYPE="TEXT" CLASS="txt" ID="txt_uf" onKeyPress="filtra_letras();" onKeyUp="formata_uf();" VALUE="<?=@mysql_result($banco,0,'UF');?>" SIZE="2" MAXLENGTH="2"></TD> 
						<TD CLASS="txt_novo">CEP:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cep" TYPE="TEXT" CLASS="txt" ID="txt_cep" onKeyUp="return formata_cep(this);" VALUE="<?=@mysql_result($banco,0,'CEP');?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Fone:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fone" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fone" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($banco,0,'DDD_FONE');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fone" TYPE="TEXT" CLASS="txt" ID="txt_fone" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($banco,0,'FONE');?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Fax:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fax" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fax" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($banco,0,'DDD_FAX');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fax" TYPE="TEXT" CLASS="txt" ID="txt_fax" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($banco,0,'FAX');?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Celular:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_celular" TYPE="TEXT" CLASS="txt" ID="txt_ddd_celular" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($banco,0,'DDD_CELULAR');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_celular" TYPE="TEXT" CLASS="txt" ID="txt_celular" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($banco,0,'CELULAR');?>" SIZE="10" MAXLENGTH="9"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_email_msn" TYPE="TEXT" CLASS="txt" ID="txt_email_msn" VALUE="<?=@mysql_result($banco,0,'EMAIL');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Site:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_site" TYPE="TEXT" CLASS="txt" ID="txt_site" VALUE="<?=@mysql_result($banco,0,'SITE');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Limite de Crédito: R$</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_limite_credito" TYPE="TEXT" CLASS="txt" ID="txt_limite_credito" STYLE="text-align: right;" onKeyPress="filtra_teclas('.,');" VALUE="<?=@mysql_result($banco,0,'LIMITE_CREDITO');?>" SIZE="7" MAXLENGTH="6"></TD> 
						<TD CLASS="txt_novo">Cancelado:</TD> 
						<TD CLASS="campo">
							<TABLE>
								<TR>
<?
$marca_nao = ' CHECKED';
$marca_sim = '';
if (@mysql_result($banco,0,'CANCELADO') == 'Sim') {
	$marca_sim = ' CHECKED';
	$marca_nao = '';
}
?>
									<TD><INPUT TYPE="RADIO" NAME="rdg_cancelado" ID="rdg_cancelado" STYLE="border: 0px;" VALUE="Sim"<?=$marca_sim;?>></TD> 
									<TD>Sim</TD>
									<TD><INPUT TYPE="RADIO" NAME="rdg_cancelado" ID="rdg_cancelado" STYLE="border: 0px;" VALUE="Não"<?=$marca_nao;?>></TD> 
									<TD>Não</TD>
								</TR>
							</TABLE>
			</TD>
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs" ROWS="2" CLASS="txt" ID="txt_obs" STYLE="width: 100%;"><?=@mysql_result($banco,0,'OBS');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($banco) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('banco_todos.php','bancos');">
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_nome').focus();</SCRIPT> 
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
