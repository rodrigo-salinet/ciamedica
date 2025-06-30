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
$id_caixa = trim(@$_GET['id_caixa']);
$sql_caixa = "SELECT * FROM CAIXA WHERE ID=$id_caixa";
$caixa = mysql_query($sql_caixa,$conexao);
?>
<DIV CLASS="nome_pag">Informações Sobre o Caixa</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Tipo:</TD> 
<?
$id_tipo = @mysql_result($caixa,0,'ID_TIPO');
$sql_tipo = "SELECT * FROM TIPOS_CAIXA WHERE ID=$id_tipo";
$tipo = mysql_query($sql_tipo,$conexao);
$nome_tipo = @mysql_result($tipo,0,'NOME');
@mysql_free_result($tipo);
?>
					<TD CLASS="campo"><?=$nome_tipo;?></TD> 
					<TD CLASS="txt_novo">Forma de Pagamento:</TD> 
<?
$id_forma_pagamento = @mysql_result($caixa,0,'ID_FORMA_PAGAMENTO');
$sql_forma_pagamento = "SELECT * FROM FORMAS_PAGAMENTO WHERE ID=$id_forma_pagamento";
$forma_pagamento = mysql_query($sql_forma_pagamento,$conexao);
$nome_forma_pagamento = @mysql_result($forma_pagamento,0,'NOME');
@mysql_free_result($forma_pagamento);
?>
					<TD CLASS="campo"><?=$nome_forma_pagamento;?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Despesa:</TD> 
<?
$id_despesa = @mysql_result($caixa,0,'ID_DESPESA');
$sql_despesa = "SELECT * FROM DESPESAS WHERE ID=$id_despesa";
$despesa = mysql_query($sql_despesa,$conexao);
$nome_despesa = @mysql_result($despesa,0,'NOME');
@mysql_free_result($despesa);
?>
					<TD CLASS="campo"><?=$nome_despesa;?></TD> 
					<TD CLASS="txt_novo">Banco:</TD> 
<?
$id_banco = @mysql_result($caixa,0,'ID_BANCO');
$sql_banco = "SELECT * FROM BANCOS WHERE ID=$id_banco";
$banco = mysql_query($sql_banco,$conexao);
$nome_banco = @mysql_result($banco,0,'NOME');
@mysql_free_result($banco);
?>
					<TD CLASS="campo"><?=$nome_banco;?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Responsável:</TD> 
					<TD CLASS="campo"><?=@mysql_result($caixa,0,'RESPONSAVEL');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Data:</TD> 
					<TD CLASS="campo"><?=@mysql_result($caixa,0,'DIA') . '/' . @mysql_result($caixa,0,'MES') . '/' . @mysql_result($caixa,0,'ANO') . ' - ' . @mysql_result($caixa,0,'HORARIO');?></TD> 
					<TD CLASS="txt_novo">Valor:</TD> 
					<TD CLASS="campo"><?=@mysql_result($caixa,0,'VALOR');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações:</TD> 
					<TD CLASS="campo"><?=@mysql_result($caixa,0,'OBS');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
</TABLE> 
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
