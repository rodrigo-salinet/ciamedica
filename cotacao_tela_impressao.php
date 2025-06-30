<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? $id_tipo = trim(@$_GET['id_tipo']); ?>
<? $id_cotacao = trim(@$_GET['id_cotacao']); ?>
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
$sql_cotacao = "SELECT * FROM COTACOES WHERE ID=$id_cotacao AND ID_TIPO=$id_tipo";
$cotacao = mysql_query($sql_cotacao,$conexao);
?>
	<TABLE STYLE="width: 100%;"> 
		<TR>
			<TD STYLE="width: 100%; height: 0.01%;">
				<TABLE CLASS="topo">
					<TR>
						<TD STYLE="background-image: url(imagens/borda_superior.gif); background-repeat: repeat-x; width: 10px; background-position: top;">&nbsp;</TD>
					</TR>
					<TR>
						<TD>
							<TABLE STYLE="width: 100%;">
								<TR>
									<TD STYLE="width: 0.01%;"><IMG SRC="imagens/topo.gif"></TD>
									<TD CLASS="titulo_topo">PRODUTOS MÉDICOS<BR>
										HOSPITALARES<BR>
										E ODONTOLÓGICOS</TD>
								</TR>
							</TABLE>
						</TD>
					</TR>
					<TR>
						<TD STYLE="background-image: url(imagens/borda_inferior.gif); background-repeat: repeat-x; width: 10px; background-position: bottom;">&nbsp;</TD>
					</TR>
					<TR>
					</TR>
				</TABLE>
			</TD>
		</TR>
<? if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Controle:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CONTROLE');?></TD> 
						<TD CLASS="txt_novo">Nível:</TD> 
<?
$sql_nivel = "SELECT * FROM NIVEIS_COTACAO WHERE ID=" . @mysql_result($cotacao,0,'ID_NIVEL');
$nivel = mysql_query($sql_nivel,$conexao);
?>
						<TD CLASS="campo"><?=@mysql_result($nivel,0,'NOME');?></TD> 
<? @mysql_free_result($nivel); ?>
						<TD CLASS="txt_novo">Tipo:</TD> 
<?
$sql_tipo = "SELECT * FROM TIPOS_ITENS WHERE ID=" . @mysql_result($cotacao,0,'ID_TIPO');
$tipo = mysql_query($sql_tipo,$conexao);
?>
						<TD CLASS="campo"><?=@mysql_result($tipo,0,'NOME');?></TD> 
<? @mysql_free_result($tipo); ?>
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? } ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Nome:</TD> 
						<TD CLASS="campo"><A HREF="cliente.php?id_cliente=<?=@mysql_result($cotacao,0,'ID_CLIENTE');?>"><?=@mysql_result($cotacao,0,'CLI_NOME');?></A></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Razão Social:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_RAZAO_SOCIAL');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? } ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Contato:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_CONTATO');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">CPF/CNPJ:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_CPF_CNPJ');?></TD> 
						<TD CLASS="txt_novo">Inscrição Estadual:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_INSCRICAO_ESTADUAL');?></TD> 
						<TD CLASS="txt_novo">CFOP:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_CFOP');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Endereço:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_ENDERECO');?>, Nº <?=@mysql_result($cotacao,0,'CLI_NUMERO');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Complemento:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_COMPLEMENTO');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Bairro:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_BAIRRO');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? } ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Município:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_MUNICIPIO');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">UF:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_UF');?></TD> 
						<TD CLASS="txt_novo">CEP:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_CEP');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Fone:</TD> 
						<TD CLASS="campo">(<?=@mysql_result($cotacao,0,'CLI_DDD_FONE');?>) <?=@mysql_result($cotacao,0,'CLI_FONE');?></TD> 
						<TD CLASS="txt_novo">Fax:</TD> 
						<TD CLASS="campo">(<?=@mysql_result($cotacao,0,'CLI_DDD_FAX');?>) <?=@mysql_result($cotacao,0,'CLI_FAX');?></TD> 
						<TD CLASS="txt_novo">Celular:</TD> 
						<TD CLASS="campo">(<?=@mysql_result($cotacao,0,'CLI_DDD_CELULAR');?>) <?=@mysql_result($cotacao,0,'CLI_CELULAR');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">E-Mail/MSN:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_EMAIL');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Site:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_SITE');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações do Cliente:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'CLI_OBS');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? } ?>
		<TR> 
			<TD STYLE="white-space: nowrap; text-align: center;">
				<TABLE STYLE="width: 100%;">
<?
$sql_max_itens = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo ORDER BY ID DESC";
$max_itens = mysql_query($sql_max_itens,$conexao);
$ver_itens = false;
if ($id_cotacao != '') {
	$sql_itens = "SELECT * FROM ITENS WHERE ID_TIPO=$id_tipo AND ID_TABELA=" . $id_cotacao;
	$itens = mysql_query($sql_itens,$conexao);
	if (@mysql_num_rows($itens) > 0) {
		$ver_itens = true;
	}
}
if ($ver_itens == true) {
?>
					<TR>
<?	if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
						<TD CLASS="cotacao">Cód:</TD>
<?	} ?>
						<TD CLASS="cotacao">Nome:</TD>
						<TD CLASS="cotacao">Quantidade:</TD>
						<TD CLASS="cotacao">Unidade:</TD>
						<TD CLASS="cotacao">Preço: R$ </TD>
<?	if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
						<TD CLASS="cotacao">Desconto:</TD>
						<TD CLASS="cotacao">Total: R$ </TD>
<?	} ?>
					</TR>
<?
	@mysql_free_result($max_itens);
	for ($n = 0; $n < @mysql_num_rows($itens); $n++) {
?>
					<TR>
<?
		$sql_produto = "SELECT * FROM ESTOQUE WHERE ID=" . @mysql_result($itens,$n,'ID_PRODUTO');
		$produto = mysql_query($sql_produto,$conexao);
?>
<?		if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
						<TD CLASS="cotacao"><?=@mysql_result($produto,0,'ID');?></TD>
<?		} ?>
						<TD CLASS="cotacao" STYLE="width: 0.01%; white-space: nowrap;"><A HREF="produto.php?id_produto=<?=@mysql_result($produto,0,'ID');?>"><?=@mysql_result($produto,0,'NOME');?></A></TD>
						<TD CLASS="cotacao"><?=@mysql_result($itens,$n,'QUANTIDADE');?></TD>
<?
		$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=" . @mysql_result($itens,$n,'ID_MEDIDA');
		$medida = mysql_query($sql_medida,$conexao);
?>
						<TD CLASS="cotacao"><?=@mysql_result($medida,0,'NOME');?></TD>
<? 		@mysql_free_result($medida); ?>
						<TD CLASS="cotacao">
<?		if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
							<?=@mysql_result($itens,$n,'PRECO');?>
<?		} ?>
						&nbsp;</TD>
<?		if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
						<TD CLASS="cotacao"><?=@mysql_result($itens,$n,'DESCONTO');?>%</TD>
						<TD CLASS="cotacao"><?=@mysql_result($itens,$n,'TOTAL');?></TD>
<?
		}
 		@mysql_free_result($produto);
?>
					</TR>
<?
	}
} else {
?>
					<TR>
						<TD CLASS="cotacao">Não há item adicionado nesta seção no momento.</TD>
					</TR>
<? } ?>
				</TABLE>
			</TD> 
		</TR> 
<? if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) { ?>
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo" STYLE="width: 100%;">Desconto:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'DESCONTO');?>%</TD> 
						<TD CLASS="txt_novo">Preço Total: R$</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'PRECO_TOTAL');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Data de entrega:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'DATA_ENTREGA');?></TD> 
						<TD CLASS="txt_novo">Válida até:</TD> 
<?
	$ult_dia_mes = array(31,28,31,30,31,30,31,31,30,31,30,31);
	$dia_validade = intval($dia) + 15;
	$ultimo_dia = intval($ult_dia_mes[intval($mes) - 1]);
	$mes_validade = $mes;
	$ano_validade = $ano;
	if ($dia_validade > $ultimo_dia) {
		$dia_validade -= $ultimo_dia;
		$mes_validade = intval($mes) + 1;
		if ($mes == '12') {
			$mes_validade = '01';
			$ano_validade = intval($ano) + 1;
		}
	}
	if (strlen($dia_validade) == 1) {
		$dia_validade = '0' . $dia_validade;
	}
	if (strlen($mes_validade) == 1) {
		$mes_validade = '0' . $mes_validade;
	}
	$data_validade = $dia_validade . '/' . $mes_validade . '/' . $ano_validade;
	if (@mysql_num_rows($cotacao) > 0) {
		$data_validade = @mysql_result($cotacao,0,'DATA_VALIDADE');
	}
?>
						<TD CLASS="campo"><?=$data_validade;?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Aceita:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'ACEITA');?></TD>
						<TD CLASS="txt_novo">Completa:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'COMPLETA');?></TD>
					</TR>
				</TABLE>
			</TD>
		</TR> 
		<TR> 
			<TD>
				<TABLE STYLE="width: 100%;">
					<TR>
						<TD CLASS="txt_novo">Observações:</TD> 
						<TD CLASS="campo"><?=@mysql_result($cotacao,0,'OBS');?></TD> 
					</TR>
				</TABLE>
			</TD>
		</TR> 
<? } ?>
	</TABLE> 
<? require_once('menu_contexto.php'); ?> 
<? require_once('script_fim.php'); ?> 
</BODY>
</HTML>
<? while(@ob_end_flush()); ?>
