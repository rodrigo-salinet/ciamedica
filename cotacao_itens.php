<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? $id_tipo = trim(@$_GET['id_tipo']); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<STYLE TYPE="TEXT/CSS">
td {
	border-color: #51A432;
	border-style: dotted;
	border-width: 1px;
	padding: 4px;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
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
	var txt_total_itens = document.getElementById('txt_total_itens');
	var hdn_total_itens = document.getElementById('hdn_total_itens');

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
		txt_total_itens.value = formato_numero(total_itens,3);
	}
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?>
<? require_once('msg.php'); ?>
<?
$id_cotacao = trim(@$_GET['id_cotacao']);
if ($id_cotacao == '') {
	header("Location: cotacao_todas.php?id_tipo=$id_tipo&msg=" . urlencode('Identificador da cotação não encontrado. Selecione a cotação primeiro.'));
}
$sql_cotacao = "SELECT * FROM COTACOES WHERE ID=$id_cotacao AND ID_TIPO=$id_tipo";
$cotacao = mysql_query($sql_cotacao,$conexao);
?>
<DIV CLASS="nome_pag">Selecionar Ítens da Cotação p/ Cliente <?=@mysql_result($cotacao,0,'CLI_NOME');?></DIV>
<FORM ACTION="cotacao_adic_itens.php?id_cotacao=<?=$id_cotacao;?>" ID="frm_itens" METHOD="POST" NAME="frm_itens">
<DIV STYLE="width: 100%; height: 290px; overflow: auto;">
<TABLE STYLE="width: 100%;">
	<TR>
		<TD CLASS="titulo">Nome:</TD>
		<TD CLASS="titulo">Fornecedor:</TD>
		<!--TD CLASS="titulo">Linha:</TD-->
		<TD CLASS="titulo">Quantidade:</TD>
		<TD CLASS="titulo">Unidade:</TD>
		<TD CLASS="titulo">Preço: R$</TD>
		<TD CLASS="titulo">Desconto:</TD>
		<TD CLASS="titulo">Total: R$</TD>
	</TR>
	<TR>
		<TD COLSPAN="7">&nbsp;</TD>
	</TR>
<?
$sql_produtos = "SELECT * FROM ESTOQUE ORDER BY NOME";
$produtos = mysql_query($sql_produtos,$conexao);
?>
	<INPUT TYPE="HIDDEN" NAME="hdn_total_itens" ID="hdn_total_itens" VALUE="<?=@mysql_num_rows($produtos);?>">
<?
if (@mysql_num_rows($produtos) > 0) {
	$linha_inicial = 0;
	if ($pg > 1) {
		$linha_inicial = ($pg * $reg_por_pag) - $reg_por_pag;
	}

	$linha_final = $linha_inicial + $reg_por_pag;
	$total_linhas = @mysql_num_rows($produtos);
	if ($linha_final > $total_linhas) {
		$linha_final = $total_linhas;
	}

	for ($n = $linha_inicial; $n < $linha_final; $n++) {
		$sql_item_cotacao = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo AND ID_TABELA=$id_cotacao AND ID_PRODUTO=" . mysql_result($produtos,$n,'ID');
		$item_cotacao = mysql_query($sql_item_cotacao,$conexao);
		if (@mysql_num_rows($item_cotacao) == 0) {
?>
	<TR>
		<TD STYLE="width: 0.01%;"><A HREF="produto.php?id_produto=<?=mysql_result($produtos,$n,'ID');?>"><?=mysql_result($produtos,$n,'NOME');?></A></TD>
<?
			$sql_fornecedor = "SELECT * FROM FORNECEDORES WHERE ID=" . mysql_result($produtos,$n,'ID_FORNECEDOR');
			$fornecedor = mysql_query($sql_fornecedor,$conexao);
			$fornecedor_nome = mysql_result($fornecedor,0,'NOME');
			@mysql_free_result($fornecedor);
?>
		<TD CLASS="fornecedor"><?=$fornecedor_nome;?></TD>
<?
			$sql_linha = "SELECT * FROM LINHAS WHERE ID=" . mysql_result($produtos,$n,'ID_LINHA');
			$linha = mysql_query($sql_linha,$conexao);
			$linha_nome = mysql_result($linha,0,'NOME');
			@mysql_free_result($linha);
?>
		<!--TD CLASS="centro"><?=$linha_nome;?></TD-->
		<TD CLASS="centro"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: center;" ID="txt_quantidade_<?=mysql_result($produtos,$n,'ID');?>" NAME="txt_quantidade_<?=mysql_result($produtos,$n,'ID');?>" SIZE="7" MAXLENGTH="6" onKeyPress="filtra_numeros();" onKeyUp="total(this);"></TD>
<?
			$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=" . @mysql_result($produtos,0,'ID_MEDIDA');
			$medida = mysql_query($sql_medida,$conexao);
?>
		<TD CLASS="centro"><?=@mysql_result($medida,0,'NOME');?></TD>
<?			@mysql_free_result($medida); ?>
		<TD CLASS="centro"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_preco_<?=mysql_result($produtos,$n,'ID');?>" NAME="txt_preco_<?=mysql_result($produtos,$n,'ID');?>" VALUE="<?=mysql_result($produtos,$n,'PRECO');?>" SIZE="12" MAXLENGTH="11" onKeyPress="moeda();" onKeyUp="total(this);"></TD>
		<TD CLASS="centro" STYLE="white-space: nowrap;"><INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_desconto_<?=mysql_result($produtos,$n,'ID');?>" NAME="txt_desconto_<?=mysql_result($produtos,$n,'ID');?>" SIZE="8" MAXLENGTH="7" onKeyPress="desconto();" onKeyUp="total(this);">%</TD>
		<TD CLASS="centro">
			<INPUT TYPE="TEXT" CLASS="txt" STYLE="text-align: right;" ID="txt_total_<?=mysql_result($produtos,$n,'ID');?>" NAME="txt_total_<?=mysql_result($produtos,$n,'ID');?>" SIZE="21" onKeyPress="moeda();" onKeyUp="soma_total();">
		</TD>
	</TR>
<?
		}
		@mysql_free_result($item_cotacao);
	}
} else {
?>
	<TR>
		<TD COLSPAN="7" STYLE="text-align: center;">Não há produto cadastrado nesta seção no momento.</TD>
	</TR>
<?
}
?>
</TABLE>
</DIV>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD STYLE="width: 100%; text-align: right;">Total:</TD>
		<TD STYLE="width: 0.01%;"><INPUT TYPE="TEXT" NAME="txt_total_itens" ID="txt_total_itens" CLASS="txt" STYLE="text-align: right;" SIZE="10" MAXLENGTH="9" onKeyPress="filtra_teclas('.,');"></TD>
	</TR>
</TABLE>
<DIV ALIGN="CENTER"><INPUT TYPE="SUBMIT" VALUE="Adicionar Ítem(s)"> <INPUT TYPE="BUTTON" VALUE="Cancelar"></DIV>
</FORM><BR>
<BR>
<TABLE>
	<TR>
<?
$total_separado = explode('.',strval(@mysql_num_rows($produtos) / $reg_por_pag));

$total_pag = intval(implode('.',$total_separado));
if (count($total_separado) > 1) {
	$total_pag++;
}

unset($_GET['pg']);
for ($n = 1; $n <= $total_pag; $n++) {
	$sep_var = '?';
	$link_temp = basename($_SERVER['PHP_SELF']);
	if (count($_GET) > 0) {
		$sep_var = '&';
		$link_temp .= '?' . @$_SERVER['QUERY_STRING'];
	}
	if ($n != $pg) {
?>
		<TD><A HREF="<?=$link_temp . $sep_var . 'pg=' . $n;?>"><?=$n;?></A></TD>
<?	} else { ?>
		<TD STYLE="font-weight: bold;"><?=$n;?></TD>
<?
	}
}
?>
	</TR>
</TABLE>
<A HREF="javascript: history.go(-1);">Voltar</A>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
