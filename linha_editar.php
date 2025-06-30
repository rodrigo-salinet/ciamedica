<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<STYLE TYPE="TEXT/CSS">
td {
	padding: 2px;
}
</STYLE>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_lin = document.getElementById('frm_cad_lin');
	var txt_nome = document.getElementById('txt_nome');
	var txt_descricao = document.getElementById('txt_descricao');

	if (trim(txt_nome.value) == '' || trim(txt_nome.value).length < 3) {
		alert('Preencha corretamente o campo NOME\nque deve conter no MÍNIMO 3 LETRAS');
		txt_nome.focus();
		return false;
	}
	/*if (trim(txt_descricao.value) == '' || trim(txt_descricao.value).length < 3) {
		alert('Preencha corretamente o campo DESCRIÇÃO\nque deve conter no MÍNIMO 3 LETRAS');
		txt_nome.focus();
		return false;
	}*/
	frm_cad_lin.submit();
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_linha = @$_GET['id_linha'];
$sql_linha = "SELECT * FROM LINHAS WHERE ID=$id_linha";
$linha = mysql_query($sql_linha,$conexao);
?>
<DIV CLASS="nome_pag">Editar Linha</DIV>
<FORM ACTION="linha_atualizar.php" ID="frm_cad_lin" METHOD="POST"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_linha" ID="hdn_id_linha" VALUE="<?=@mysql_result($linha,0,'ID');?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD CLASS="txt_novo">Nome:</TD> 
			<TD CLASS="campo"><INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome" STYLE="width: 100%;" VALUE="<?=@mysql_result($linha,0,'NOME');?>"></TD> 
		</TR> 
		<TR> 
			<TD CLASS="txt_novo">Descrição:</TD> 
			<TD CLASS="campo"><TEXTAREA NAME="txt_descricao" ROWS="2" CLASS="txt" ID="txt_descricao" STYLE="width: 100%;"><?=@mysql_result($linha,0,'DESCRICAO');?></TEXTAREA></TD> 
		</TR> 
		<TR> 
			<TD CLASS="txt_novo">Ativa:</TD> 
			<TD CLASS="campo">
				<TABLE>
					<TR>
<?
$marca_sim = ' CHECKED';
$marca_nao = '';
if (@mysql_result($linha,0,'ATIVA') == 'Não') {
	$marca_nao = ' CHECKED';
	$marca_sim = '';
}
?>
						<TD><INPUT TYPE="RADIO" NAME="rdg_ativa" ID="rdg_ativa" STYLE="border: 0px;" VALUE="Sim"<?=$marca_sim;?>></TD> 
						<TD>Sim</TD>
						<TD><INPUT TYPE="RADIO" NAME="rdg_ativa" ID="rdg_ativa" STYLE="border: 0px;" VALUE="Não"<?=$marca_nao;?>></TD> 
						<TD>Não</TD>
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD COLSPAN="2" STYLE="text-align: center;">
<?
if (@mysql_num_rows($linha) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('linha_todas.php','linhas');">
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
