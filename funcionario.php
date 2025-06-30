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
$id_funcionario = trim(@$_GET['id_funcionario']);
$sql_funcionario = "SELECT * FROM FUNCIONARIOS WHERE ID=$id_funcionario";
$funcionario = mysql_query($sql_funcionario,$conexao);
?>
<DIV CLASS="nome_pag">Informações Sobre o Funcionário</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Nome:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'NOME');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">RG:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'RG');?></TD> 
					<TD CLASS="txt_novo">CPF:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'CPF');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Endereço:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'ENDERECO');?>, Nº <?=@mysql_result($funcionario,0,'NUMERO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Complemento:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'COMPLEMENTO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Bairro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'BAIRRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Município:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'MUNICIPIO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">UF:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'UF');?></TD> 
					<TD CLASS="txt_novo">CEP:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'CEP');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fone:</TD> 
					<TD CLASS="campo">(<?=@mysql_result($funcionario,0,'DDD_FONE');?>)<?=@mysql_result($funcionario,0,'FONE');?></TD> 
					<TD CLASS="txt_novo">Celular:</TD> 
					<TD CLASS="campo">
<? if (trim(@mysql_result($funcionario,0,'CELULAR')) != '') { ?>
						(<?=@mysql_result($funcionario,0,'DDD_CELULAR');?>)<?=@mysql_result($funcionario,0,'CELULAR');?>
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
					<TD CLASS="campo"><A HREF="mailto:<?=@mysql_result($funcionario,0,'EMAIL');?>"><?=@mysql_result($funcionario,0,'EMAIL');?></A></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Data do Cadastro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'DATA_CADASTRO') . ' - ' . @mysql_result($funcionario,0,'HORARIO_CADASTRO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'OBS');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Ativo:</TD> 
					<TD CLASS="campo"><?=@mysql_result($funcionario,0,'ATIVO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
</TABLE> 
<? @mysql_free_result($funcionario); ?>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
