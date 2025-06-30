<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? $id_tipo = trim(@$_GET['id_tipo']); ?>
<? $id_cotacao = trim(@$_GET['id_cotacao']); ?>
<HTML>
<HEAD>
<TITLE>.:: CiaMédica ::.</TITLE>
<LINK HREF="estilos.css" REL="stylesheet" TYPE="text/css">
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT" SRC="javascript.js"></SCRIPT>
<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
function email() {
	var txt_email = trim(prompt('Digite o e-mail a quem será enviada a cotação'));
	if (txt_email != '') {
		open('cotacao_email.php?id_cotacao=<?=$id_cotacao;?>&id_tipo=<?=$id_tipo;?>&email=' + txt_email,'email','width=400,height=300,resizable=yes');
	}
}
function salvar() {
}
</SCRIPT>
</HEAD>
<BODY SCROLL="NO">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<TABLE CLASS="tbl">
	<TR>
		<TD STYLE="width: 100%; height: 0.01%;">
			<A HREF="#" onClick="impressao.focus(); print();">Imprimir</A>
			 - 
			 <A HREF="#" onClick="self.close();">Fechar</A>
			 - 
			 <A HREF="#" onClick="email();">E-mail</A>
			 - 
			 <A HREF="#" onClick="salvar();">Salvar</A>
		</TD>
	</TR>
	<TR>
		<TD STYLE="vertical-align: top; width: 100%; height: 100%;"><IFRAME SRC="cotacao_tela_impressao.php?id_tipo=<?=$id_tipo;?>&id_cotacao=<?=@$_GET['id_cotacao'];?>" NAME="impressao" ID="impressao" STYLE="width: 100%; height: 100%;" ALLOWTRANSPARENCY="true" APPLICATION="true"></IFRAME></TD>
	</TR>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
