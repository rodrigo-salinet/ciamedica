<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function valida_form() {
	var frm_cad_med = document.getElementById('frm_cad_med');
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
	frm_cad_med.submit();
}
</SCRIPT>
</HEAD>
<BODY CLASS="rolagem"> 
<? require_once('frm_html.php'); ?> 
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$id_medida = @$_GET['id_medida'];
$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=$id_medida";
$medida = mysql_query($sql_medida,$conexao);
?>
<DIV CLASS="nome_pag">Editar Unidade de Medida</DIV>
<FORM ACTION="medida_atualizar.php" ID="frm_cad_med" METHOD="POST"> 
	<INPUT TYPE="HIDDEN" NAME="hdn_id_medida" ID="hdn_id_medida" VALUE="<?=@mysql_result($medida,0,'ID');?>"> 
	<TABLE STYLE="width: 100%;"> 
		<TR> 
			<TD CLASS="txt_novo">Nome:</TD> 
			<TD CLASS="campo"><INPUT NAME="txt_nome" TYPE="TEXT" CLASS="txt" ID="txt_nome" STYLE="width: 100%;" VALUE="<?=@mysql_result($medida,0,'NOME');?>"></TD> 
		</TR> 
		<TR> 
			<TD CLASS="txt_novo">Abreviatura:</TD> 
			<TD CLASS="campo"><INPUT TYPE="TEXT" NAME="txt_abreviatura" CLASS="txt" ID="txt_abreviatura" VALUE="<?=@mysql_result($medida,0,'ABREVIATURA');?>" SIZE="6" MAXLENGTH="5"></TD> 
		</TR> 
		<TR> 
			<TD CLASS="txt_novo">Descrição:</TD> 
			<TD CLASS="campo"><TEXTAREA NAME="txt_descricao" ROWS="2" CLASS="txt" ID="txt_descricao" STYLE="width: 100%;"><?=@mysql_result($medida,0,'DESCRICAO');?></TEXTAREA></TD> 
		</TR> 
		<TR> 
			<TD COLSPAN="2" STYLE="text-align: center;">
<?
if (@mysql_num_rows($medida) > 0) {
	$botao = 'Atualizar';
} else {
	$botao = 'Cadastrar';
}
?>
				<INPUT TYPE="BUTTON" VALUE="<?=$botao;?>" onClick="valida_form();"> 
				<INPUT TYPE="BUTTON" VALUE="Cancelar" onClick="window.open('medida_todas.php','medidas');">
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
