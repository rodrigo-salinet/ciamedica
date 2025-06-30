<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_ent_cli = document.getElementById('frm_cad_ent_cli');
	var txt_contato = document.getElementById('txt_contato');
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
	var txt_obs = document.getElementById('txt_obs');

	if (trim(txt_contato.value) == '' || trim(txt_contato.value).length < 3) {
		alert('Preencha corretamente o campo CONTATO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_contato.focus();
		return false;
	}
	if (trim(txt_endereco.value) == '' || trim(txt_endereco.value).length < 3) {
		alert('Preencha corretamente o campo ENDEREÇO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_endereco.focus();
		return false;
	}
	if (trim(txt_numero.value) == '') {
		alert('Preencha corretamente o campo Nº\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_numero.focus();
		return false;
	}
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
	if (trim(txt_cep.value) == '' || trim(txt_cep.value).length < 10) {
		alert('Preencha corretamente o campo CEP\nque deve conter 8 NÚMEROS.');
		txt_cep.focus();
		return false;
	}
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
	/*if (trim(txt_ddd_fax.value) == '' || trim(txt_ddd_fax.value).length < 2) {
		alert('Preencha corretamente o campo DDD DO FAX\nque deve conter 2 NÚMEROS.');
		txt_ddd_fax.focus();
		return false;
	}*/
	/*if (trim(txt_fax.value) == '' || trim(txt_fax.value).length < 8) {
		alert('Preencha corretamente o campo FAX\nque deve conter no 8 NÚMEROS.');
		txt_fax.focus();
		return false;
	}*/
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
	frm_cad_ent_cli.submit();
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_cliente = @$_GET['id_cliente'];
$sql_ent_cliente = "SELECT * FROM ENTREGA_CLIENTE WHERE ID_CLIENTE=$id_cliente";
$ent_cliente = mysql_query($sql_ent_cliente,$conexao);

$sql_cliente = "SELECT * FROM CLIENTES WHERE ID=$id_cliente";
$cliente = mysql_query($sql_cliente,$conexao);

if (@mysql_num_rows($ent_cliente) > 0) {
	$contato = @mysql_result($ent_cliente,0,'CONTATO');
	$endereco = @mysql_result($ent_cliente,0,'ENDERECO');
	$numero = @mysql_result($ent_cliente,0,'NUMERO');
	$complemento = @mysql_result($ent_cliente,0,'COMPLEMENTO');
	$bairro = @mysql_result($ent_cliente,0,'BAIRRO');
	$municipio = @mysql_result($ent_cliente,0,'MUNICIPIO');
	$uf = @mysql_result($ent_cliente,0,'UF');
	$cep = @mysql_result($ent_cliente,0,'CEP');
	$ddd_fone = @mysql_result($ent_cliente,0,'DDD_FONE');
	$fone = @mysql_result($ent_cliente,0,'FONE');
	$ddd_fax = @mysql_result($ent_cliente,0,'DDD_FAX');
	$fax = @mysql_result($ent_cliente,0,'FAX');
	$ddd_celular = @mysql_result($ent_cliente,0,'DDD_CELULAR');
	$celular = @mysql_result($ent_cliente,0,'CELULAR');
	$email = @mysql_result($ent_cliente,0,'EMAIL');
	$obs = @mysql_result($ent_cliente,0,'OBS');
} else {
	$contato = @mysql_result($cliente,0,'CONTATO');
	$endereco = @mysql_result($cliente,0,'ENDERECO');
	$numero = @mysql_result($cliente,0,'NUMERO');
	$complemento = @mysql_result($cliente,0,'COMPLEMENTO');
	$bairro = @mysql_result($cliente,0,'BAIRRO');
	$municipio = @mysql_result($cliente,0,'MUNICIPIO');
	$uf = @mysql_result($cliente,0,'UF');
	$cep = @mysql_result($cliente,0,'CEP');
	$ddd_fone = @mysql_result($cliente,0,'DDD_FONE');
	$fone = @mysql_result($cliente,0,'FONE');
	$ddd_fax = @mysql_result($cliente,0,'DDD_FAX');
	$fax = @mysql_result($cliente,0,'FAX');
	$ddd_celular = @mysql_result($cliente,0,'DDD_CELULAR');
	$celular = @mysql_result($cliente,0,'CELULAR');
	$email = @mysql_result($cliente,0,'EMAIL');
	$obs = @mysql_result($cliente,0,'OBS');
}
?>
<DIV CLASS="nome_pag">Editar Dados de Entrega</DIV>
<FORM ACTION="cliente_ent_atualizar.php" ID="frm_cad_ent_cli" METHOD="POST" NAME="frm_cad_ent_cli"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_cliente" ID="hdn_id_cliente" VALUE="<?=$id_cliente;?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Contato:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_contato" TYPE="TEXT" CLASS="txt" ID="txt_contato" VALUE="<?=$contato;?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Endereço:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_endereco" TYPE="TEXT" CLASS="txt" ID="txt_endereco" VALUE="<?=$endereco;?>" STYLE="width: 89%;"> Nº: <INPUT NAME="txt_numero" TYPE="TEXT" CLASS="txt" ID="txt_numero" onKeyPress="filtra_teclas();" VALUE="<?=$numero;?>" SIZE="5" MAXLENGTH="4"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Complemento:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_complemento" TYPE="TEXT" CLASS="txt" ID="txt_complemento" VALUE="<?=$complemento;?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Bairro:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_bairro" TYPE="TEXT" CLASS="txt" ID="txt_bairro" VALUE="<?=$bairro;?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Município:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_municipio" TYPE="TEXT" CLASS="txt" ID="txt_municipio" VALUE="<?=$municipio;?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">UF:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_uf" TYPE="TEXT" CLASS="txt" ID="txt_uf" onKeyPress="filtra_letras();" onKeyUp="formata_uf();" VALUE="<?=$uf;?>" SIZE="2" MAXLENGTH="2"></TD> 
						<TD CLASS="txt_novo">CEP:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cep" TYPE="TEXT" CLASS="txt" ID="txt_cep" onKeyUp="return formata_cep(this);" VALUE="<?=$cep;?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Fone:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fone" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fone" onKeyPress="filtra_teclas();" VALUE="<?=$ddd_fone;?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fone" TYPE="TEXT" CLASS="txt" ID="txt_fone" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=$fone;?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Fax:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fax" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fax" onKeyPress="filtra_teclas();" VALUE="<?=$ddd_fax;?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fax" TYPE="TEXT" CLASS="txt" ID="txt_fax" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=$fax;?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Celular:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_celular" TYPE="TEXT" CLASS="txt" ID="txt_ddd_celular" onKeyPress="filtra_teclas();" VALUE="<?=$ddd_celular;?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_celular" TYPE="TEXT" CLASS="txt" ID="txt_celular" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=$celular;?>" SIZE="10" MAXLENGTH="9"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_email_msn" TYPE="TEXT" CLASS="txt" ID="txt_email_msn" VALUE="<?=$email;?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs" ROWS="2" CLASS="txt" ID="txt_obs" STYLE="width: 100%;"><?=$obs;?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($ent_cliente) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('cliente_cobranca.php','clientes');">
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">document.getElementById('txt_contato').focus();</SCRIPT> 
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
