<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? $id_tipo = trim(@$_GET['id_tipo']); ?>
<?
$id_cotacao = trim(@$_GET['id_cotacao']);
if ($id_cotacao != '') {
	$_SESSION['id_cotacao'] = $id_cotacao;
}
?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<STYLE TYPE="TEXT/CSS">
img {
	cursor: hand;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_cot = document.getElementById('frm_cad_cot');
	var txt_nome = document.getElementById('txt_nome');
	var txt_razao_social = document.getElementById('txt_razao_social');
	var txt_contato = document.getElementById('txt_contato');
	var txt_cpf_cnpj = document.getElementById('txt_cpf_cnpj');
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
	var txt_obs_cliente = document.getElementById('txt_obs_cliente');

	if (trim(txt_nome.value) == '' || trim(txt_nome.value).length < 3) {
		alert('Preencha corretamente o campo NOME FANTASIA\nque deve conter no MÍNIMO 3 LETRAS\nou Selecione o Cliente');
		txt_nome.focus();
		return false;
	}
	/*if (trim(txt_razao_social.value) == '' || trim(txt_razao_social.value).length < 3) {
		alert('Preencha corretamente o campo RAZÃO SOCIAL\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_razao_social.focus();
		return false;
	}*/
	/*if (trim(txt_contato.value) == '' || trim(txt_contato.value).length < 3) {
		alert('Preencha corretamente o campo CONTATO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_contato.focus();
		return false;
	}*/
	/*if (trim(txt_cpf_cnpj.value) == '' || trim(txt_cpf_cnpj.value).length < 14) {
		alert('Preencha corretamente o campo CPF / CNPJ\nque deve conter no mínimo 11 NÚMEROS.');
		txt_cpf_cnpj.focus();
		return false;
	}*/
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
	/*if (trim(txt_municipio.value) == '' || trim(txt_municipio.value).length < 3) {
		alert('Preencha corretamente o campo MUNICÍPIO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_municipio.focus();
		return false;
	}*/
	/*if (trim(txt_uf.value) == '' || trim(txt_uf.value).length < 2) {
		alert('Preencha corretamente o campo UF\nque deve conter 2 LETRAS.');
		txt_uf.focus();
		return false;
	}*/
	/*if (trim(txt_cep.value) == '' || trim(txt_cep.value).length < 10) {
		alert('Preencha corretamente o campo CEP\nque deve conter 8 NÚMEROS.');
		txt_cep.focus();
		return false;
	}*/
	/*if (trim(txt_ddd_fone.value) == '' || trim(txt_ddd_fone.value).length < 2) {
		alert('Preencha corretamente o campo DDD DO FONE\nque deve conter 2 NÚMEROS.');
		txt_ddd_fone.focus();
		return false;
	}*/
	/*if (trim(txt_fone.value) == '' || trim(txt_fone.value).length < 8) {
		alert('Preencha corretamente o campo FONE\nque deve conter 8 NÚMEROS.');
		txt_fone.focus();
		return false;
	}*/
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
	/*if (trim(txt_site.value) == '') {
		alert('Preencha corretamente o campo SITE.');
		txt_site.focus();
		return false;
	}*/
	/*if (trim(txt_obs_cliente.value) == '') {
		alert('Preencha corretamente o campo OBSERVAÇÕES DO CLIENTE.');
		txt_obs_cliente.focus();
		return false;
	}*/
	frm_cad_cot.submit();
}
function formata_campo(txt) {
	var numeros = remove_letras(trim(txt.value));
	if (numeros.length <= 11) {
		return formata_cpf(txt.value);
	}
	if (numeros.length > 11) {
		return formata_cnpj(txt.value);
	}
}
function excluir(num,id) {
	if (window.confirm('Esta ação irá excluir definitivamente o ítem nº ' + num + '.') == true) {
		window.open('cotacao_excluir_item.php?id_tipo=<?=$id_tipo;?>&id_cotacao=<?=$id_cotacao;?>&num_item=' + num + '&id_item=' + id,'_self');
	}
}
function total(txt) {
	var num_item = txt.id.split('_');
	num_item = num_item[num_item.length - 1];

	var txt_quantidade = document.getElementById('txt_quantidade_' + num_item);
	var txt_preco = document.getElementById('txt_preco_' + num_item);
	var txt_desconto = document.getElementById('txt_desconto_' + num_item);
	var txt_total = document.getElementById('txt_total_' + num_item);

	var quantidade = parseInt(trim(txt_quantidade.value));
	var desconto = parseFloat(trim(txt_desconto.value.replace(',','.')));

	if (!isNaN(quantidade)) {
		var preco = parseFloat(trim(txt_preco.value.replace('.','')).replace(',','.'));
		var total = quantidade * preco;
		if (!isNaN(desconto) && desconto != '') {
			total = total - ((total / 100) * desconto);
		}
		txt_total.value = formato_numero(total,3);
	} else {
		txt_total.value = '';
	}

	soma_total();
}
function soma_total() {
	var txt_preco_total = document.getElementById('txt_preco_total');
	var hdn_total_itens = document.getElementById('hdn_total_itens');
	var txt_desconto = document.getElementById('txt_desconto');

	var total_itens = 0;
	var total_atual = 0;
	var txt_total_atual;

	for (var n = 0; n < parseInt(hdn_total_itens.value); n++) {
		txt_total_atual = document.getElementById('txt_total_' + (n + 1));
		if (txt_total_atual) {
			total_atual = parseFloat((txt_total_atual.value.replace('.','')).replace(',','.'));

			if (!isNaN(total_atual)) {
				if (total_itens > 0) {
					total_itens += total_atual;
				} else {
					total_itens = total_atual;
				}
			}
		}
	}
	if (total_itens > 0) {
		var desconto = parseFloat(trim(txt_desconto.value.replace(',','.')));
		if (desconto > 0) {
			total_itens = total_itens - ((total_itens / 100) * desconto);
		}
		txt_preco_total.value = formato_numero(total_itens,3);
	}
}
function analisa_total() {
	var txt_preco_total = document.getElementById('txt_preco_total');
	var preco_total = parseFloat((txt_preco_total.value.replace('.','')).replace(',','.'));
	if (preco_total == 0 || isNaN(preco_total)) {
		soma_total();
	}
}
function adicionar_item() {
	var frm_cad_cot = document.getElementById('frm_cad_cot');
	var hdn_id_cotacao = document.getElementById('hdn_id_cotacao');
	var hdn_pag = document.getElementById('hdn_pag');
	var txt_nome = document.getElementById('txt_nome');
	var link_sel_cli = document.getElementById('link_sel_cli');
	if (trim(hdn_id_cotacao.value) != '') {
		window.open('cotacao_itens.php?id_tipo=<?=$id_tipo;?>&id_cotacao=<?=$id_cotacao;?>','cotacoes');
	} else {
		if (trim(txt_nome.value) == '' || trim(txt_nome.value).length < 3) {
			alert('Preencha corretamente o campo NOME FANTASIA\nque deve conter no MÍNIMO 3 LETRAS\nou Selecione o Cliente');
			txt_nome.focus();
			return false;
		}
		hdn_pag.value = 'cotacao_itens';
		frm_cad_cot.submit();
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$sql_cotacao = "SELECT * FROM COTACOES WHERE ID=$id_cotacao AND ID_TIPO=$id_tipo";
$cotacao = mysql_query($sql_cotacao,$conexao);
?>
<DIV CLASS="nome_pag">Editar Cotação</DIV>
<FORM ACTION="cotacao_atualizar.php" ID="frm_cad_cot" METHOD="POST" NAME="frm_cad_cot"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_cotacao" ID="hdn_id_cotacao" VALUE="<?=@mysql_result($cotacao,0,'ID');?>"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_cliente" ID="hdn_id_cliente" VALUE="<?=@mysql_result($cotacao,0,'ID_CLIENTE');?>"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_pag" ID="hdn_pag"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Controle:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_controle" TYPE="TEXT" CLASS="txt" ID="txt_controle" VALUE="<?=@mysql_result($cotacao,0,'CONTROLE');?>" SIZE="7" MAXLENGTH="6"></TD> 
						<TD CLASS="txt_novo">Nível:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_nivel" NAME="sel_nivel">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_niveis = "SELECT * FROM NIVEIS_COTACAO ORDER BY NOME";
$niveis = mysql_query($sql_niveis,$conexao);

for ($n = 0; $n < @mysql_num_rows($niveis); $n++) {
	$selecionado = "";
	if (@mysql_result($cotacao,0,'ID_NIVEL') == mysql_result($niveis,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($niveis,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($niveis,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($niveis);
?>
							</SELECT>
						</TD> 
						<TD CLASS="txt_novo">Tipo:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_tipo" NAME="sel_tipo">
								<OPTION VALUE="">-- Selecione aqui --</OPTION>
<?
$sql_tipos = "SELECT * FROM TIPOS_ITENS ORDER BY NOME";
$tipos = mysql_query($sql_tipos,$conexao);

for ($n = 0; $n < @mysql_num_rows($tipos); $n++) {
	$selecionado = "";
	if (@mysql_result($cotacao,0,'ID_TIPO') == mysql_result($tipos,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($tipos,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($tipos,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($tipos);
?>
							</SELECT>
						</TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Nome Fantasia:<BR><A HREF="cotacao_clientes.php" TARGET="cotacoes" ID="link_sel_cli">Selecionar</A></TD> 
						<TD CLASS="campo"><INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome" VALUE="<?=@mysql_result($cotacao,0,'CLI_NOME');?>" STYLE="width: 100%; cursor: hand;" onDblClick="window.open('cliente.php?id_cliente=<?=@mysql_result($cotacao,0,'ID_CLIENTE');?>','_self');"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Razão Social:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_razao_social" TYPE="TEXT" CLASS="txt" ID="txt_razao_social" VALUE="<?=@mysql_result($cotacao,0,'CLI_RAZAO_SOCIAL');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Contato:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_contato" TYPE="TEXT" CLASS="txt" ID="txt_contato" VALUE="<?=@mysql_result($cotacao,0,'CLI_CONTATO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">CPF/CNPJ:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cpf_cnpj" TYPE="TEXT" CLASS="txt" ID="txt_cpf_cnpj" onBlur="return formata_campo(this);" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($cotacao,0,'CLI_CPF_CNPJ');?>" SIZE="20" MAXLENGTH="18"></TD> 
						<TD CLASS="txt_novo">Inscrição Estadual:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_inscricao_estadual" TYPE="TEXT" CLASS="txt" ID="txt_inscricao_estadual" VALUE="<?=@mysql_result($cotacao,0,'CLI_INSCRICAO_ESTADUAL');?>" SIZE="16" MAXLENGTH="15"></TD> 
						<TD CLASS="txt_novo">CFOP:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cfop" TYPE="TEXT" CLASS="txt" ID="txt_cfop" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($cotacao,0,'CLI_CFOP');?>" SIZE="6" MAXLENGTH="5"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Endereço:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_endereco" TYPE="TEXT" CLASS="txt" ID="txt_endereco" VALUE="<?=@mysql_result($cotacao,0,'CLI_ENDERECO');?>" STYLE="width: 89%;"> Nº: <INPUT NAME="txt_numero" TYPE="TEXT" CLASS="txt" ID="txt_numero" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($cotacao,0,'CLI_NUMERO');?>" SIZE="5" MAXLENGTH="4"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Complemento:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_complemento" TYPE="TEXT" CLASS="txt" ID="txt_complemento" VALUE="<?=@mysql_result($cotacao,0,'CLI_COMPLEMENTO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Bairro:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_bairro" TYPE="TEXT" CLASS="txt" ID="txt_bairro" VALUE="<?=@mysql_result($cotacao,0,'CLI_BAIRRO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Município:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_municipio" TYPE="TEXT" CLASS="txt" ID="txt_municipio" VALUE="<?=@mysql_result($cotacao,0,'CLI_MUNICIPIO');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">UF:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_uf" TYPE="TEXT" CLASS="txt" ID="txt_uf" onKeyPress="filtra_letras();" onKeyUp="formata_uf();" VALUE="<?=@mysql_result($cotacao,0,'CLI_UF');?>" SIZE="2" MAXLENGTH="2"></TD> 
						<TD CLASS="txt_novo">CEP:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_cep" TYPE="TEXT" CLASS="txt" ID="txt_cep" onKeyUp="return formata_cep(this);" VALUE="<?=@mysql_result($cotacao,0,'CLI_CEP');?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Fone:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fone" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fone" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($cotacao,0,'CLI_DDD_FONE');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fone" TYPE="TEXT" CLASS="txt" ID="txt_fone" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($cotacao,0,'CLI_FONE');?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Fax:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_fax" TYPE="TEXT" CLASS="txt" ID="txt_ddd_fax" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($cotacao,0,'CLI_DDD_FAX');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_fax" TYPE="TEXT" CLASS="txt" ID="txt_fax" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($cotacao,0,'CLI_FAX');?>" SIZE="10" MAXLENGTH="9"></TD> 
						<TD CLASS="txt_novo">Celular:</TD> 
						<TD CLASS="campo">(<INPUT NAME="txt_ddd_celular" TYPE="TEXT" CLASS="txt" ID="txt_ddd_celular" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($cotacao,0,'CLI_DDD_CELULAR');?>" SIZE="2" MAXLENGTH="2">) 
							<INPUT NAME="txt_celular" TYPE="TEXT" CLASS="txt" ID="txt_celular" onKeyPress="filtra_teclas();" onKeyUp="formata_fone();" VALUE="<?=@mysql_result($cotacao,0,'CLI_CELULAR');?>" SIZE="10" MAXLENGTH="9"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_email_msn" TYPE="TEXT" CLASS="txt" ID="txt_email_msn" VALUE="<?=@mysql_result($cotacao,0,'CLI_EMAIL');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Site:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_site" TYPE="TEXT" CLASS="txt" ID="txt_site" VALUE="<?=@mysql_result($cotacao,0,'CLI_SITE');?>" STYLE="width: 100%;"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações<BR>
							do Cliente:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs_cliente" ROWS="2" CLASS="txt" ID="txt_obs_cliente" STYLE="width: 100%;"><?=@mysql_result($cotacao,0,'CLI_OBS');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="white-space: nowrap; text-align: center;">
				<TABLE>
					<TR onMouseOver="menu_esq_sobre(this);" onMouseOut="menu_esq_fora(this);" onClick="adicionar_item();">
						<TD STYLE="padding: 7px;"><IMG SRC="imagens/tachinha_papel.gif"></TD>
						<TD STYLE="cursor: hand; padding: 7px;">Adicionar Item(s)</TD>
					</TR>
				</TABLE>
			</TD> 
		</TR> 
		<TR> 
			<TD STYLE="white-space: nowrap; text-align: center;">
				<TABLE STYLE="width: 100%;">
<?
$sql_max_itens = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo ORDER BY ID DESC";
$max_itens = mysql_query($sql_max_itens,$conexao);
?>
					<INPUT TYPE="HIDDEN" NAME="hdn_total_itens" ID="hdn_total_itens" VALUE="<?=@mysql_result($max_itens,0,'ID');?>">
<?
$ver_itens = false;
if ($id_cotacao != '') {
	$sql_itens = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo AND ID_TABELA=$id_cotacao";
	$itens = mysql_query($sql_itens,$conexao);
	if (@mysql_num_rows($itens) > 0) {
		$ver_itens = true;
	}
}
if ($ver_itens == true) {
?>
					<TR>
						<TD COLSPAN="2" CLASS="cotacao">Nº:</TD>
						<TD CLASS="cotacao">Nome:</TD>
						<TD CLASS="cotacao">Quantidade:</TD>
						<TD CLASS="cotacao">Unidade:</TD>
						<TD CLASS="cotacao">Preço: R$ </TD>
						<TD CLASS="cotacao">Desconto:</TD>
						<TD CLASS="cotacao">Total: R$ </TD>
					</TR>
<?
	@mysql_free_result($max_itens);
	for ($n = 0; $n < @mysql_num_rows($itens); $n++) {
?>
					<TR>
						<TD CLASS="cotacao"><IMG SRC="imagens/x.gif" onClick="excluir('<?=($n + 1);?>','<?=mysql_result($itens,$n,'ID');?>');" TITLE="Excluir"></TD>
<?
		$sql_produto = "SELECT * FROM ESTOQUE WHERE ID=" . @mysql_result($itens,$n,'ID_PRODUTO');
		$produto = mysql_query($sql_produto,$conexao);
?>
						<TD CLASS="cotacao" TITLE="Código: <?=@mysql_result($produto,0,'ID');?>"><?=$n + 1;?></TD>
						<TD CLASS="cotacao" STYLE="width: 0.01%;"><A HREF="produto.php?id_produto=<?=@mysql_result($produto,0,'ID');?>"><?=@mysql_result($produto,0,'NOME');?></A></TD>
						<TD CLASS="cotacao"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: center;" ID="txt_quantidade_<?=@mysql_result($itens,$n,'ID');?>" NAME="txt_quantidade_<?=@mysql_result($itens,$n,'ID');?>" onKeyPress="filtra_numeros();" onKeyUp="total(this);" onClick="analisa_total();" SIZE="7" MAXLENGTH="6" VALUE="<?=@mysql_result($itens,$n,'QUANTIDADE');?>"></TD>
<?
		$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=" . @mysql_result($itens,$n,'ID_MEDIDA');
		$medida = mysql_query($sql_medida,$conexao);
?>
						<TD CLASS="cotacao"><?=@mysql_result($medida,0,'NOME');?></TD>
<? 		@mysql_free_result($medida); ?>
						<TD CLASS="cotacao"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_preco_<?=@mysql_result($itens,$n,'ID');?>" NAME="txt_preco_<?=@mysql_result($itens,$n,'ID');?>" onKeyPress="moeda();" onKeyUp="total(this);" onClick="analisa_total();" SIZE="12" MAXLENGTH="11" VALUE="<?=@mysql_result($itens,$n,'PRECO');?>"></TD>
<? 		@mysql_free_result($produto); ?>
						<TD CLASS="cotacao"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_desconto_<?=@mysql_result($itens,$n,'ID');?>" NAME="txt_desconto_<?=@mysql_result($itens,$n,'ID');?>" onKeyPress="desconto();" onKeyUp="total(this);" onClick="analisa_total();" SIZE="8" MAXLENGTH="7" VALUE="<?=@mysql_result($itens,$n,'DESCONTO');?>">%</TD>
						<TD CLASS="cotacao"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_total_<?=@mysql_result($itens,$n,'ID');?>" NAME="txt_total_<?=@mysql_result($itens,$n,'ID');?>" onKeyPress="moeda();" onKeyUp="soma_total();" onClick="analisa_total();" SIZE="21" VALUE="<?=@mysql_result($itens,$n,'TOTAL');?>"></TD>
					</TR>
<?
	}
} else {
?>
					<TR>
						<TD CLASS="cotacao">Não há item adicionado nesta seção no momento.</TD>
					</TR>
<? } ?>
				</TABLE>
			</TD> 
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo" STYLE="width: 100%;">Desconto:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_desconto" TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_desconto" onKeyPress="desconto();" onKeyUp="soma_total();" onClick="analisa_total();" VALUE="<?=@mysql_result($cotacao,0,'DESCONTO');?>" SIZE="8" MAXLENGTH="7">%</TD> 
						<TD CLASS="txt_novo">Preço Total: R$</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_preco_total" TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_preco_total" onKeyPress="moeda();" onClick="analisa_total();" VALUE="<?=@mysql_result($cotacao,0,'PRECO_TOTAL');?>" SIZE="26" MAXLENGTH="25"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Data de entrega:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_data_entrega" TYPE="TEXT" CLASS="txt" ID="txt_data_entrega" onKeyPress="filtra_teclas('/');" VALUE="<?=@mysql_result($cotacao,0,'DATA_ENTREGA');?>" SIZE="11" MAXLENGTH="10"></TD> 
						<TD CLASS="txt_novo">Válida até:</TD> 
<?
$ult_dia_mes = array(31,28,31,30,31,30,31,31,30,31,30,31);
$dia_validade = intval($dia) + 15;
$ultimo_dia = intval($ult_dia_mes[intval($mes) - 1]);
$mes_validade = $mes;
$ano_validade = $ano;
if ($dia_validade > $ultimo_dia) {
	$dia_validade -= $ultimo_dia;
	$mes_validade = intval($mes) + 1;
	if ($mes == '12') {
		$mes_validade = '01';
		$ano_validade = intval($ano) + 1;
	}
}
if (strlen($dia_validade) == 1) {
	$dia_validade = '0' . $dia_validade;
}
if (strlen($mes_validade) == 1) {
	$mes_validade = '0' . $mes_validade;
}
$data_validade = $dia_validade . '/' . $mes_validade . '/' . $ano_validade;
if (@mysql_num_rows($cotacao) > 0) {
	$data_validade = @mysql_result($cotacao,0,'DATA_VALIDADE');
}
?>
						<TD CLASS="campo"><INPUT NAME="txt_data_validade" TYPE="TEXT" CLASS="txt" ID="txt_data_validade" onKeyPress="filtra_teclas('/');" VALUE="<?=$data_validade;?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Aceita:</TD> 
						<TD CLASS="campo">
							<TABLE>
								<TR>
<?
$marca_sim = '';
$marca_nao = ' CHECKED';
if (@mysql_result($cotacao,0,'ACEITA') == 'Sim') {
	$marca_nao = '';
	$marca_sim = ' CHECKED';
}
?>
									<TD><INPUT TYPE="RADIO" NAME="rdg_aceita" ID="rdg_aceita" STYLE="border: 0px;" VALUE="Sim"<?=$marca_sim;?>></TD> 
									<TD>Sim</TD>
									<TD><INPUT TYPE="RADIO" NAME="rdg_aceita" ID="rdg_aceita" STYLE="border: 0px;" VALUE="Não"<?=$marca_nao;?>></TD> 
									<TD>Não</TD>
								</TR>
							</TABLE>
						</TD>
						<TD CLASS="txt_novo">Completa:</TD> 
						<TD CLASS="campo">
							<TABLE>
								<TR>
<?
$marca_nao = ' CHECKED';
$marca_sim = '';
if (@mysql_result($cotacao,0,'COMPLETA') == 'Sim') {
	$marca_sim = ' CHECKED';
	$marca_nao = '';
}
?>
									<TD><INPUT TYPE="RADIO" NAME="rdg_completa" ID="rdg_completa" STYLE="border: 0px;" VALUE="Sim"<?=$marca_sim;?>></TD> 
									<TD>Sim</TD>
									<TD><INPUT TYPE="RADIO" NAME="rdg_completa" ID="rdg_completa" STYLE="border: 0px;" VALUE="Não"<?=$marca_nao;?>></TD> 
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
						<TD CLASS="campo"><TEXTAREA NAME="txt_obs" ROWS="2" CLASS="txt" ID="txt_obs" STYLE="width: 100%;"><?=@mysql_result($cotacao,0,'OBS');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($cotacao) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('cotacao_todas.php','cotacoes');">
			</TD> 
		</TR> 
	</TABLE> 
</FORM> 
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
document.getElementById('txt_nome').focus();
<? if (trim(@mysql_result($cotacao,0,'PRECO_TOTAL')) == '') { ?>
soma_total();
<? } ?>
</SCRIPT> 
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
