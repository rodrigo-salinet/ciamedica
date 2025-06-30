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
$id_banco = trim(@$_GET['id_banco']);
$sql_bancos = "SELECT * FROM BANCOS WHERE ID=$id_banco";
$bancos = mysql_query($sql_bancos,$conexao);
?>
<DIV CLASS="nome_pag">Identificação do Banco</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Responsável:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'RESPONSAVEL');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Titular:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'TITULAR');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Nome:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'NOME');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Gerente:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'GERENTE');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">CNPJ:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'CNPJ');?></TD> 
					<TD CLASS="txt_novo">Conta:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'CONTA');?></TD> 
					<TD CLASS="txt_novo">Agência:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'AGENCIA');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Cartão:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'NUM_CARTAO');?> Venc. <?=@mysql_result($bancos,0,'VENCIMENTO_CARTAO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Endereço:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'ENDERECO');?>, Nº <?=@mysql_result($bancos,0,'NUMERO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Complemento:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'COMPLEMENTO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Bairro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'BAIRRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Município:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'MUNICIPIO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">UF:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'UF');?></TD> 
					<TD CLASS="txt_novo">CEP:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'CEP');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fone:</TD> 
					<TD CLASS="campo">(<?=@mysql_result($bancos,0,'DDD_FONE');?>)<?=@mysql_result($bancos,0,'FONE');?></TD> 
					<TD CLASS="txt_novo">Fax:</TD> 
					<TD CLASS="campo">
<? if (trim(@mysql_result($bancos,0,'FAX')) != '') { ?>
						(<?=@mysql_result($bancos,0,'DDD_FAX');?>)<?=@mysql_result($bancos,0,'FAX');?>
<? } ?>
					</TD> 
					<TD CLASS="txt_novo">Celular:</TD> 
					<TD CLASS="campo">
<? if (trim(@mysql_result($bancos,0,'CELULAR')) != '') { ?>
						(<?=@mysql_result($bancos,0,'DDD_CELULAR');?>)<?=@mysql_result($bancos,0,'CELULAR');?>
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
					<TD CLASS="campo"><A HREF="mailto:<?=@mysql_result($bancos,0,'EMAIL');?>"><?=@mysql_result($bancos,0,'EMAIL');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Site:</TD> 
					<TD CLASS="campo"><A HREF="http://<?=@mysql_result($bancos,0,'SITE');?>" TARGET="_BLANK"><?=@mysql_result($bancos,0,'SITE');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Limite de Crédito:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'LIMITE_CREDITO');?></TD> 
					<TD CLASS="txt_novo">Cancelado:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'CANCELADO');?></TD> 
					<TD CLASS="txt_novo">Data do Cadastro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'DATA_CADASTRO') . ' - ' . @mysql_result($bancos,0,'HORARIO_CADASTRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações:</TD> 
					<TD CLASS="campo"><?=@mysql_result($bancos,0,'OBS');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
</TABLE> 
<? @mysql_free_result($bancos); ?>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
