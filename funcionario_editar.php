<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_fun = document.getElementById('frm_cad_fun');
	var txt_nome = document.getElementById('txt_nome');
	var txt_rg = document.getElementById('txt_rg');
	var txt_cpf = document.getElementById('txt_cpf');
	var txt_endereco = document.getElementById('txt_endereco');
	var txt_numero = document.getElementById('txt_numero');
	var txt_bairro = document.getElementById('txt_bairro');
	var txt_municipio = document.getElementById('txt_municipio');
	var txt_uf = document.getElementById('txt_uf');
	var txt_cep = document.getElementById('txt_cep');
	var txt_ddd_fone = document.getElementById('txt_ddd_fone');
	var txt_fone = document.getElementById('txt_fone');
	var txt_ddd_celular = document.getElementById('txt_ddd_celular');
	var txt_celular = document.getElementById('txt_celular');
	var txt_email_msn = document.getElementById('txt_email_msn');
	var txt_obs = document.getElementById('txt_obs');
	var rdg_ativo = document.getElementById('rdg_ativo');

	if (trim(txt_nome.value) == '' || trim(txt_nome.value).length < 3) {
		alert('Preencha corretamente o campo NOME FANTASIA\nque deve conter no MÍNIMO 3 LETRAS');
		txt_nome.focus();
		return false;
	}
	/*if (trim(txt_razao_social.value) == '' || trim(txt_razao_social.value).length < 3) {
		alert('Preencha corretamente o campo RAZÃO SOCIAL\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_razao_social.focus();
		return false;
	}*/
	if (trim(txt_rg.value) == '') {
		alert('Preencha corretamente o campo RG\nque deve conter no mínimo 1 NÚMERO.');
		txt_rg.focus();
		return false;
	}
	if (trim(txt_cpf.value) == '' || trim(txt_cpf.value).length < 14) {
		alert('Preencha corretamente o campo CPF\nque deve conter no mínimo 11 NÚMEROS.');
		txt_cpf.focus();
		return false;
	}
	/*if (trim(txt_endereco.value) == '' || trim(txt_endereco.value).length < 3) {
		alert('Preencha corretamente o campo ENDEREÇO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_endereco.focus();
		return false;
	}*/
	/*if (trim(txt_numero.value) == '') {
		alert('Preencha corretamente o campo Nº\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_numero.focus();
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
	/*if (trim(txt_obs.value) == '') {
		alert('Preencha corretamente o campo OBSERVAÇÕES.');
		txt_obs.focus();
		return false;
	}*/
	frm_cad_fun.submit();
}
function formata_campo(txt) {
	return formata_cpf(txt.value);
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_funcionario = @$_GET['id_funcionario'];
$sql_funcionario = "SELECT * FROM FUNCIONARIOS WHERE ID=$id_funcionario";
$funcionario = mysql_query($sql_funcionario,$conexao);
?>
<DIV CLASS="nome_pag">Editar Funcionário</DIV>
<FORM ACTION="funcionario_atualizar.php" ID="frm_cad_fun" METHOD="POST" NAME="frm_cad_fun"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_funcionario" ID="hdn_id_funcionario" VALUE="<?=@mysql_result($funcionario,0,'ID');?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Nome Completo:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome" VALUE="<?=@mysql_result($funcionario,0,'NOME');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">RG:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_rg" TYPE="TEXT" CLASS="txt" ID="txt_rg" onKeyPress="filtra_teclas('.-');" VALUE="<?=@mysql_result($funcionario,0,'RG');?>" SIZE="16" MAXLENGTH="15"></TD> 
						<TD CLASS="txt_novo">CPF:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cpf" TYPE="TEXT" CLASS="txt" ID="txt_cpf" onBlur="return formata_campo(this);" onKeyPress="filtra_teclas('.-');" VALUE="<?=@mysql_result($funcionario,0,'CPF');?>" SIZE="20" MAXLENGTH="18"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Endereço:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_endereco" TYPE="TEXT" CLASS="txt" ID="txt_endereco" VALUE="<?=@mysql_result($funcionario,0,'ENDERECO');?>" STYLE="width: 89%;"> Nº: <INPUT NAME="txt_numero" TYPE="TEXT" CLASS="txt" ID="txt_numero" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($funcionario,0,'NUMERO');?>" SIZE="5" MAXLENGTH="4"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Complemento:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_complemento" TYPE="TEXT" CLASS="txt" ID="txt_complemento" VALUE="<?=@mysql_result($funcionario,0,'COMPLEMENTO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Bairro:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_bairro" TYPE="TEXT" CLASS="txt" ID="txt_bairro" VALUE="<?=@mysql_result($funcionario,0,'BAIRRO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Município:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_municipio" TYPE="TEXT" CLASS="txt" ID="txt_municipio" VALUE="<?=@mysql_result($funcionario,0,'MUNICIPIO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">UF:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_uf" TYPE="TEXT" CLASS="txt" ID="txt_uf" onKeyPress="filtra_letras();" onKeyUp="formata_uf();" VALUE="<?=@mysql_result($funcionario,0,'UF');?>" SIZE="2" MAXLENGTH="2"></TD> 
						<TD CLASS="txt_novo">CEP:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cep" TYPE="TEXT" CLASS="txt" ID="txt_cep" onKeyUp="return formata_cep(this);" VALUE="<?=@mysql_result($funcionario,0,'CEP');?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Fone:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fone" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fone" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($funcionario,0,'DDD_FONE');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fone" TYPE="TEXT" CLASS="txt" ID="txt_fone" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($funcionario,0,'FONE');?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Celular:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_celular" TYPE="TEXT" CLASS="txt" ID="txt_ddd_celular" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($funcionario,0,'DDD_CELULAR');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_celular" TYPE="TEXT" CLASS="txt" ID="txt_celular" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($funcionario,0,'CELULAR');?>" SIZE="10" MAXLENGTH="9"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_email_msn" TYPE="TEXT" CLASS="txt" ID="txt_email_msn" VALUE="<?=@mysql_result($funcionario,0,'EMAIL');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs" ROWS="2" CLASS="txt" ID="txt_obs" STYLE="width: 100%;"><?=@mysql_result($funcionario,0,'OBS');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Ativo:</TD> 
						<TD CLASS="campo">
							<TABLE>
								<TR>
<?
$marca_sim = ' CHECKED';
$marca_nao = '';
if (@mysql_result($funcionario,0,'ATIVO') == 'Não') {
	$marca_nao = ' CHECKED';
	$marca_sim = '';
}
?>
									<TD><INPUT TYPE="RADIO" NAME="rdg_ativo" ID="rdg_ativo" STYLE="border: 0px;" VALUE="Sim"<?=$marca_sim;?>></TD> 
									<TD>Sim</TD>
									<TD><INPUT TYPE="RADIO" NAME="rdg_ativo" ID="rdg_ativo" STYLE="border: 0px;" VALUE="Não"<?=$marca_nao;?>></TD> 
									<TD>Não</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($funcionario) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('funcionario_todos.php','funcionarios');">
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
