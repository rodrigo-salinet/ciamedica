<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_est = document.getElementById('frm_cad_est');
	var txt_nome = document.getElementById('txt_nome');
	var txt_descricao = document.getElementById('txt_descricao');
	var sel_fornecedor = document.getElementById('sel_fornecedor');
	var sel_linha = document.getElementById('sel_linha');
	var txt_preco = document.getElementById('txt_preco');
	var txt_custo = document.getElementById('txt_custo');
	var txt_medio = document.getElementById('txt_medio');
	var txt_quantidade = document.getElementById('txt_quantidade');
	var sel_medida = document.getElementById('sel_medida');
	var txt_ipi = document.getElementById('txt_ipi');
	var txt_lucro = document.getElementById('txt_lucro');

	if (trim(txt_nome.value) == '' || trim(txt_nome.value).length < 3) {
		alert('Preencha corretamente o campo NOME FANTASIA\nque deve conter no MÍNIMO 3 LETRAS');
		txt_nome.focus();
		return false;
	}
	/*if (trim(txt_descricao.value) == '' || trim(txt_descricao.value).length < 3) {
		alert('Preencha corretamente o campo DESCRIÇÃO\nque deve conter no MÍNIMO 3 LETRAS.');
		txt_descricao.focus();
		return false;
	}*/
	if (trim(sel_fornecedor.value) == '' || trim(sel_fornecedor.value) == '0') {
		alert('Selecione o FORNECEDOR.');
		sel_fornecedor.focus();
		return false;
	}
	if (trim(sel_linha.value) == '' || trim(sel_linha.value) == '0') {
		alert('Selecione a LINHA do produto.');
		sel_linha.focus();
		return false;
	}
	if (trim(txt_preco.value) == '') {
		alert('Preencha corretamente o campo PREÇO\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_preco.focus();
		return false;
	}
	if (trim(txt_custo.value) == '') {
		alert('Preencha corretamente o campo CUSTO COMPRA\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_custo.focus();
		return false;
	}
	/*if (trim(txt_medio.value) == '') {
		alert('Preencha corretamente o campo CUSTO MÉDIO\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_medio.focus();
		return false;
	}*/
	if (trim(txt_quantidade.value) == '') {
		alert('Preencha corretamente o campo QUANTIDADE\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_quantidade.focus();
		return false;
	}
	if (trim(sel_medida.value) == '') {
		alert('Selecione a UNIDADE.');
		sel_medida.focus();
		return false;
	}
	/*if (trim(txt_ipi.value) == '') {
		alert('Preencha corretamente o campo IPI\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_ipi.focus();
		return false;
	}*/
	/*if (trim(txt_lucro.value) == '') {
		alert('Preencha corretamente o campo LUCRO\nque deve conter no MÍNIMO 1 NÚMERO.');
		txt_lucro.focus();
		return false;
	}*/
	frm_cad_est.submit();
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_produto = @$_GET['id_produto'];
$sql_produto = "SELECT * FROM ESTOQUE WHERE ID=$id_produto";
$produto = mysql_query($sql_produto,$conexao);
?>
<DIV CLASS="nome_pag">Editar Produto</DIV>
<FORM ACTION="estoque_atualizar.php" ID="frm_cad_est" METHOD="POST" NAME="frm_cad_est"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_produto" ID="hdn_id_produto" VALUE="<?=@mysql_result($produto,0,'ID');?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Nome:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome" STYLE="width: 100%;" VALUE="<?=@mysql_result($produto,0,'NOME');?>"></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Descrição:</TD> 
						<TD CLASS="campo"><TEXTAREA NAME="txt_descricao" ROWS="2" CLASS="txt" ID="txt_descricao" STYLE="width: 100%;"><?=@mysql_result($produto,0,'DESCRICAO');?></TEXTAREA></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Fornecedor:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_fornecedor" NAME="sel_fornecedor">
								<OPTION VALUE="0">-- Selecione aqui --</OPTION>
<?
$sql_fornecedores = "SELECT * FROM FORNECEDORES ORDER BY NOME";
$fornecedores = mysql_query($sql_fornecedores,$conexao);

for ($n = 0; $n < @mysql_num_rows($fornecedores); $n++) {
	$selecionado = "";
	if (@mysql_result($produto,0,'ID_FORNECEDOR') == mysql_result($fornecedores,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($fornecedores,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($fornecedores,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($fornecedores);
?>							</SELECT>
						</TD>
						<TD CLASS="txt_novo">Linha:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_linha" NAME="sel_linha">
								<OPTION VALUE="0">-- Selecione aqui --</OPTION>
<?
$sql_linhas = "SELECT * FROM LINHAS ORDER BY NOME";
$linhas = mysql_query($sql_linhas,$conexao);

for ($n = 0; $n < @mysql_num_rows($linhas); $n++) {
	$selecionado = "";
	if (@mysql_result($produto,0,'ID_LINHA') == mysql_result($linhas,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($linhas,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($linhas,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($linhas);
?>							</SELECT>
						</TD>
					</TR>
				</TABLE>
			</TD> 
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Preço: R$</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_preco" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_preco" onKeyPress="filtra_teclas('.,');" VALUE="<?=@mysql_result($produto,0,'PRECO');?>" SIZE="11" MAXLENGTH="10"></TD> 
						<TD CLASS="txt_novo">Custo compra:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_custo" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_custo" onKeyPress="filtra_teclas('.,');" VALUE="<?=@mysql_result($produto,0,'CUSTO_COMPRA');?>" SIZE="11" MAXLENGTH="10"></TD> 
						<TD CLASS="txt_novo">Custo médio:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_medio" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_medio" onKeyPress="filtra_teclas('.,');" VALUE="<?=@mysql_result($produto,0,'CUSTO_MEDIO');?>" SIZE="11" MAXLENGTH="10"></TD> 
					</TR>
				</TABLE>
			</TD> 
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Quantidade:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_quantidade" TYPE="TEXT" STYLE="text-align: center;" CLASS="txt" ID="txt_quantidade" onKeyPress="filtra_teclas();" VALUE="<?=@mysql_result($produto,0,'QUANTIDADE');?>" SIZE="7" MAXLENGTH="6"></TD> 
						<TD CLASS="txt_novo">Unidade:</TD> 
						<TD CLASS="campo">
							<SELECT ID="sel_medida" NAME="sel_medida">
								<OPTION VALUE="0">-- Selecione aqui --</OPTION>
<?
$sql_medidas = "SELECT * FROM MEDIDAS";
$medidas = mysql_query($sql_medidas,$conexao);

for ($n = 0; $n < @mysql_num_rows($medidas); $n++) {
	$selecionado = "";
	if (@mysql_result($produto,0,'ID_MEDIDA') == mysql_result($medidas,$n,'ID')) {
		$selecionado = " SELECTED";
	}
?>
								<OPTION VALUE="<?=mysql_result($medidas,$n,'ID');?>"<?=$selecionado;?>><?=mysql_result($medidas,$n,'NOME');?></OPTION>
<?
}
@mysql_free_result($medidas);
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
						<TD CLASS="txt_novo">IPI:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_ipi" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_ipi" onKeyPress="filtra_teclas('.');" VALUE="<?=@mysql_result($produto,0,'IPI');?>" SIZE="7" MAXLENGTH="6"> %</TD> 
						<TD CLASS="txt_novo">Lucro:</TD> 
						<TD CLASS="campo"><INPUT NAME="txt_lucro" TYPE="TEXT" STYLE="text-align: right;" CLASS="txt" ID="txt_lucro" onKeyPress="filtra_teclas('.');" VALUE="<?=@mysql_result($produto,0,'LUCRO');?>" SIZE="7" MAXLENGTH="6"> %</TD> 
					</TR>
				</TABLE>
			</TD> 
		</TR> 
		<TR> 
			<TD STYLE="text-align: center;">
<?
if (@mysql_num_rows($produto) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('estoque_todos.php','estoque');">
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
