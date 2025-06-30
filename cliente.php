<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_cliente = trim(@$_GET['id_cliente']);
$sql_clientes = "SELECT * FROM CLIENTES WHERE ID=$id_cliente";
$clientes = mysql_query($sql_clientes,$conexao);
?>
<DIV CLASS="nome_pag">Identificação do Cliente</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Nome Fantasia:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'NOME');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Razão Social:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'RAZAO_SOCIAL');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Contato:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'CONTATO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">CPF/CNPJ:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'CPF_CNPJ');?></TD> 
					<TD CLASS="txt_novo">Inscrição Estadual:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'INSCRICAO_ESTADUAL');?></TD> 
					<TD CLASS="txt_novo">CFOP:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'CFOP');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Endereço:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'ENDERECO');?>, Nº <?=@mysql_result($clientes,0,'NUMERO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Complemento:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'COMPLEMENTO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Bairro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'BAIRRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Município:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'MUNICIPIO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">UF:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'UF');?></TD> 
					<TD CLASS="txt_novo">CEP:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'CEP');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fone:</TD> 
					<TD CLASS="campo">(<?=@mysql_result($clientes,0,'DDD_FONE');?>)<?=@mysql_result($clientes,0,'FONE');?></TD> 
					<TD CLASS="txt_novo">Fax:</TD> 
					<TD CLASS="campo">
<? if (trim(@mysql_result($clientes,0,'FAX')) != '') { ?>
						(<?=@mysql_result($clientes,0,'DDD_FAX');?>)<?=@mysql_result($clientes,0,'FAX');?>
<? } ?>
					</TD> 
					<TD CLASS="txt_novo">Celular:</TD> 
					<TD CLASS="campo">
<? if (trim(@mysql_result($clientes,0,'CELULAR')) != '') { ?>
						(<?=@mysql_result($clientes,0,'DDD_CELULAR');?>)<?=@mysql_result($clientes,0,'CELULAR');?>
<? } ?>
					</TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
					<TD CLASS="campo"><A HREF="mailto:<?=@mysql_result($clientes,0,'EMAIL');?>"><?=@mysql_result($clientes,0,'EMAIL');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Site:</TD> 
					<TD CLASS="campo"><A HREF="http://<?=@mysql_result($clientes,0,'SITE');?>" TARGET="_BLANK"><?=@mysql_result($clientes,0,'SITE');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Limite de Crédito:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'LIMITE_CREDITO');?></TD> 
					<TD CLASS="txt_novo">Em Dia:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'EM_DIA');?></TD> 
					<TD CLASS="txt_novo">Data do Cadastro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'DATA_CADASTRO') . ' - ' . @mysql_result($clientes,0,'HORARIO_CADASTRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações:</TD> 
					<TD CLASS="campo"><?=@mysql_result($clientes,0,'OBS');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
<?
$sql_cob_cliente = "SELECT * FROM DADOS_CLIENTE WHERE ID_TIPO=1 AND ID_CLIENTE=$id_cliente";
$cob_cliente = mysql_query($sql_cob_cliente,$conexao);
if (@mysql_num_rows($cob_cliente) > 0) {
?>
	<TR> 
		<TD CLASS="nome_pag">Dados de Cobrança</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Contato:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'CONTATO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Endereço:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'ENDERECO');?>, Nº <?=@mysql_result($cob_cliente,0,'NUMERO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Complemento:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'COMPLEMENTO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Bairro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'BAIRRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Município:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'MUNICIPIO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">UF:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'UF');?></TD> 
					<TD CLASS="txt_novo">CEP:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'CEP');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fone:</TD> 
					<TD CLASS="campo">(<?=@mysql_result($cob_cliente,0,'DDD_FONE');?>)<?=@mysql_result($cob_cliente,0,'FONE');?></TD> 
					<TD CLASS="txt_novo">Fax:</TD> 
					<TD CLASS="campo">
<?	if (trim(@mysql_result($cob_cliente,0,'FAX')) != '') { ?>
						(<?=@mysql_result($cob_cliente,0,'DDD_FAX');?>)<?=@mysql_result($cob_cliente,0,'FAX');?>
<?	} ?>
					</TD> 
					<TD CLASS="txt_novo">Celular:</TD> 
					<TD CLASS="campo">
<?	if (trim(@mysql_result($cob_cliente,0,'CELULAR')) != '') { ?>
						(<?=@mysql_result($cob_cliente,0,'DDD_CELULAR');?>)<?=@mysql_result($cob_cliente,0,'CELULAR');?>
<?	} ?>
					</TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
					<TD CLASS="campo"><A HREF="mailto:<?=@mysql_result($cob_cliente,0,'EMAIL');?>"><?=@mysql_result($cob_cliente,0,'EMAIL');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações Para Cobrança:</TD> 
					<TD CLASS="campo"><?=@mysql_result($cob_cliente,0,'OBS');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
<? } else { ?>
	<TR> 
		<TD STYLE="text-align: center;">Não há informações de cobrança para este cliente.</TD>
	</TR> 
<?
}

$sql_ent_cliente = "SELECT * FROM DADOS_CLIENTE WHERE ID_TIPO=2 AND ID_CLIENTE=$id_cliente";
$ent_cliente = mysql_query($sql_ent_cliente,$conexao);
if (@mysql_num_rows($ent_cliente) > 0) {
?>
	<TR> 
		<TD CLASS="nome_pag">Dados de Entrega</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Contato:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'CONTATO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Endereço:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'ENDERECO');?>, Nº <?=@mysql_result($ent_cliente,0,'NUMERO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Complemento:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'COMPLEMENTO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Bairro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'BAIRRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Município:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'MUNICIPIO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">UF:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'UF');?></TD> 
					<TD CLASS="txt_novo">CEP:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'CEP');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fone:</TD> 
					<TD CLASS="campo">(<?=@mysql_result($ent_cliente,0,'DDD_FONE');?>)<?=@mysql_result($ent_cliente,0,'FONE');?></TD> 
					<TD CLASS="txt_novo">Fax:</TD> 
					<TD CLASS="campo">
<?	if (trim(@mysql_result($ent_cliente,0,'FAX')) != '') { ?>
						(<?=@mysql_result($ent_cliente,0,'DDD_FAX');?>)<?=@mysql_result($ent_cliente,0,'FAX');?>
<?	} ?>
					</TD> 
					<TD CLASS="txt_novo">Celular:</TD> 
					<TD CLASS="campo">
<?	if (trim(@mysql_result($ent_cliente,0,'CELULAR')) != '') { ?>
						(<?=@mysql_result($ent_cliente,0,'DDD_CELULAR');?>)<?=@mysql_result($ent_cliente,0,'CELULAR');?>
<?	} ?>
					</TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
					<TD CLASS="campo"><A HREF="mailto:<?=@mysql_result($ent_cliente,0,'EMAIL');?>"><?=@mysql_result($ent_cliente,0,'EMAIL');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações Para Entrega:</TD> 
					<TD CLASS="campo"><?=@mysql_result($ent_cliente,0,'OBS');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
<? } else { ?>
	<TR> 
		<TD STYLE="text-align: center;">Não há informações de entrega para este cliente.</TD>
	</TR> 
<? } ?>
</TABLE> 
<? @mysql_free_result($clientes); ?>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
