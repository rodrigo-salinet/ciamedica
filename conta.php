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
$id_conta = trim(@$_GET['id_conta']);
$sql_conta = "SELECT * FROM CONTAS WHERE ID=$id_conta";
$conta = mysql_query($sql_conta,$conexao);
?>
<DIV CLASS="nome_pag">Informações Sobre a Conta</DIV>
<TABLE STYLE="width: 100%;"> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Fornecedor:</TD> 
<?
$id_fornecedor = @mysql_result($conta,0,'ID_FORNECEDOR');
$sql_fornecedor = "SELECT * FROM FORNECEDORES WHERE ID=$id_fornecedor";
$fornecedor = mysql_query($sql_fornecedor,$conexao);
$nome_fornecedor = @mysql_result($fornecedor,0,'NOME');
@mysql_free_result($fornecedor);
?>
					<TD CLASS="campo"><?=$nome_fornecedor;?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Cliente:</TD> 
<?
$id_cliente = @mysql_result($conta,0,'ID_CLIENTE');
$sql_cliente = "SELECT * FROM CLIENTES WHERE ID=$id_cliente";
$cliente = mysql_query($sql_cliente,$conexao);
$nome_cliente = @mysql_result($cliente,0,'NOME');
@mysql_free_result($cliente);
?>
					<TD CLASS="campo"><?=$nome_cliente;?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Tipo:</TD> 
<?
$id_tipo = @mysql_result($conta,0,'ID_TIPO');
$sql_tipo = "SELECT * FROM TIPOS_CONTA WHERE ID=$id_tipo";
$tipo = mysql_query($sql_tipo,$conexao);
$nome_tipo = @mysql_result($tipo,0,'NOME');
@mysql_free_result($tipo);
?>
					<TD CLASS="campo"><?=$nome_tipo;?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Forma de Pagamento:</TD> 
<?
$id_forma_pagamento = @mysql_result($conta,0,'ID_FORMA_PAGAMENTO');
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
$id_despesa = @mysql_result($conta,0,'ID_DESPESA');
$sql_despesa = "SELECT * FROM DESPESAS WHERE ID=$id_despesa";
$despesa = mysql_query($sql_despesa,$conexao);
$nome_despesa = @mysql_result($despesa,0,'NOME');
@mysql_free_result($despesa);
?>
					<TD CLASS="campo"><?=$nome_despesa;?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Data da Emissão:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'DIA_EMISSAO') . '/' . @mysql_result($conta,0,'MES_EMISSAO') . '/' . @mysql_result($conta,0,'ANO_EMISSAO');?></TD> 
					<TD CLASS="txt_novo">Data da Vencimento:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'DIA_VENCIMENTO') . '/' . @mysql_result($conta,0,'MES_VENCIMENTO') . '/' . @mysql_result($conta,0,'ANO_VENCIMENTO');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Data do Cadastro:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'DIA_CADASTRO') . '/' . @mysql_result($conta,0,'MES_CADASTRO') . '/' . @mysql_result($conta,0,'ANO_CADASTRO') . ' - ' . @mysql_result($conta,0,'HORARIO_CADASTRO');?></TD> 
					<TD CLASS="txt_novo">Data da Baixa:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'DIA_BAIXA') . '/' . @mysql_result($conta,0,'MES_BAIXA') . '/' . @mysql_result($conta,0,'ANO_BAIXA');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Quantidade:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'QUANTIDADE');?></TD> 
					<TD CLASS="txt_novo">Valor:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'VALOR');?></TD> 
					<TD CLASS="txt_novo">Total:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'TOTAL');?></TD> 
				</TR>
			</TABLE>
		</TD>
	</TR> 
	<TR> 
		<TD>
			<TABLE STYLE="width: 100%;">
				<TR>
					<TD CLASS="txt_novo">Observações:</TD> 
					<TD CLASS="campo"><?=@mysql_result($conta,0,'OBS');?></TD> 
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
