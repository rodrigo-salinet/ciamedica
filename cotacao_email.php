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
<BODY SCROLL="AUTO">
<? require_once('frm_html.php'); ?>
<? require_once('sessao.php'); ?> 
<? require_once('msg.php'); ?>
<?
$sql_cotacao = "SELECT * FROM COTACOES WHERE ID=$id_cotacao AND ID_TIPO=$id_tipo";
$cotacao = mysql_query($sql_cotacao,$conexao);
$nome_destinatario = mysql_result($cotacao,0,'CLI_NOME');

$email = trim(@$_GET['email']);

$para = '"' . $nome_destinatario . '" <' . $email . '>' . "\n";
$de = '"CiaMédica" <ciamedica@yahoo.com.br>' . "\n";
$titulo = 'Cotação - ' . $hoje;

$html  = '<HTML>' . "\n";
$html .= '<STYLE TYPE="TEXT/CSS">' . "\n";
$html .= 'body {' . "\n";
$html .= '	scrollbar-face-color: #FFFFFF;' . "\n";
$html .= '	scrollbar-highlight-color: #AAAAAA;' . "\n";
$html .= '	scrollbar-3dlight-color: #51A432;' . "\n";
$html .= '	scrollbar-darkshadow-color: #DDDDDD;' . "\n";
$html .= '	scrollbar-shadow-color: #51A432;' . "\n";
$html .= '	scrollbar-arrow-color: #51A432;' . "\n";
$html .= '	scrollbar-track-color: #FFFFFF;' . "\n";
$html .= '	margin: 0px;' . "\n";
$html .= '	padding: 0px;' . "\n";
$html .= '	background-color: #FFFFFF;' . "\n";
$html .= '	border: 0px;' . "\n";
$html .= '}' . "\n";
$html .= 'body, td, marquee, div, span, a, font, input, select {' . "\n";
$html .= '	font-family: Verdana, Tahoma, Arial, Helvetica;' . "\n";
$html .= '	font-size: 12px;' . "\n";
$html .= '	color: #000000;' . "\n";
$html .= '}' . "\n";
$html .= 'table {' . "\n";
$html .= '	border-width: 0px;' . "\n";
$html .= '	border-style: solid;' . "\n";
$html .= '	border-collapse: collapse;' . "\n";
$html .= '	border-spacing: 0px;' . "\n";
$html .= '	empty-cells: show;' . "\n";
$html .= '}' . "\n";
$html .= 'td {' . "\n";
$html .= '	padding: 4px;' . "\n";
$html .= '	vertical-align: middle;' . "\n";
$html .= '	border-width: 0px;' . "\n";
$html .= '	border-style: solid;' . "\n";
$html .= '}' . "\n";
$html .= '.txt_novo {' . "\n";
$html .= '	text-align: right;' . "\n";
$html .= '	width: 0.01%;' . "\n";
$html .= '	white-space: nowrap;' . "\n";
$html .= '	border-color: #51A432;' . "\n";
$html .= '	border-style: solid;' . "\n";
$html .= '	border-width: 1px;' . "\n";
$html .= '	border-right: 0px;' . "\n";
$html .= '}' . "\n";
$html .= '.campo {' . "\n";
$html .= '	border-color: #51A432;' . "\n";
$html .= '	border-style: solid;' . "\n";
$html .= '	border-width: 1px;' . "\n";
$html .= '	border-left: 0px;' . "\n";
$html .= '	white-space: nowrap;' . "\n";
$html .= '	font-weight: bold;' . "\n";
$html .= '}' . "\n";
$html .= '.cotacao {' . "\n";
$html .= '	border-color: #51A432;' . "\n";
$html .= '	border-style: solid;' . "\n";
$html .= '	border-width: 1px;' . "\n";
$html .= '	text-align: center;' . "\n";
$html .= '	font-weight: bold;' . "\n";
$html .= '}' . "\n";
$html .= '</STYLE>' . "\n";
$html .= '<BODY>' . "\n";
$html .= '<TABLE STYLE="width: 100%;">' . "\n";
$html .= '	<TR>' . "\n";
$html .= '		<TD STYLE="padding: 20px;"><H1>CiaMédica</H1> Produtos Médicos, Hospitalares e Odontológicos</TD>' . "\n";
$html .= '	</TR>' . "\n";
$html .= '	<TR>' . "\n";
$html .= '		<TD STYLE="text-align: center;">Cotação - ' . $hoje . '</TD>' . "\n";
$html .= '	</TR>' . "\n";
$html .= '	<TR>' . "\n";
$html .= '		<TD>' . "\n";
$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
$html .= '				<TR>' . "\n";
$html .= '					<TD CLASS="txt_novo">Nome:</TD>' . "\n";
$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_NOME') . '</TD>' . "\n";
$html .= '				</TR>' . "\n";
$html .= '			</TABLE>' . "\n";
$html .= '		</TD>' . "\n";
$html .= '	</TR>' . "\n";

if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Razão Social:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_RAZAO_SOCIAL') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
}

$html .= '	<TR>' . "\n";
$html .= '		<TD>' . "\n";
$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
$html .= '				<TR>' . "\n";
$html .= '					<TD CLASS="txt_novo">Contato:</TD>' . "\n";
$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_CONTATO') . '</TD>' . "\n";
$html .= '				</TR>' . "\n";
$html .= '			</TABLE>' . "\n";
$html .= '		</TD>' . "\n";
$html .= '	</TR>' . "\n";

if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">CPF/CNPJ:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_CPF_CNPJ') . '</TD>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Inscrição Estadual:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_INSCRICAO_ESTADUAL') . '</TD>' . "\n";
	$html .= '					<TD CLASS="txt_novo">CFOP:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_CFOP') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Endereço:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_ENDERECO') . ', Nº ' . @mysql_result($cotacao,0,'CLI_NUMERO') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Complemento:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_COMPLEMENTO') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Bairro:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_BAIRRO') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
}

$html .= '	<TR>' . "\n";
$html .= '		<TD>' . "\n";
$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
$html .= '				<TR>' . "\n";
$html .= '					<TD CLASS="txt_novo">Município:</TD>' . "\n";
$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_MUNICIPIO') . '</TD>' . "\n";
$html .= '				</TR>' . "\n";
$html .= '			</TABLE>' . "\n";
$html .= '		</TD>' . "\n";
$html .= '	</TR>' . "\n";
$html .= '	<TR>' . "\n";
$html .= '		<TD>' . "\n";
$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
$html .= '				<TR>' . "\n";
$html .= '					<TD CLASS="txt_novo">UF:</TD>' . "\n";
$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_UF') . '</TD>' . "\n";

if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
	$html .= '					<TD CLASS="txt_novo">CEP:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_CEP') . '</TD>' . "\n";
}

$html .= '				</TR>' . "\n";
$html .= '			</TABLE>' . "\n";
$html .= '		</TD>' . "\n";
$html .= '	</TR>' . "\n";
$html .= '	<TR>' . "\n";
$html .= '		<TD>' . "\n";
$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
$html .= '				<TR>' . "\n";
$html .= '					<TD CLASS="txt_novo">Fone:</TD>' . "\n";
$html .= '					<TD CLASS="campo">(' . @mysql_result($cotacao,0,'CLI_DDD_FONE') . ') ' . @mysql_result($cotacao,0,'CLI_FONE') . '</TD>' . "\n";

if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
	$html .= '					<TD CLASS="txt_novo">Fax:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">(' . @mysql_result($cotacao,0,'CLI_DDD_FAX') . ') ' . @mysql_result($cotacao,0,'CLI_FAX') . '</TD>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Celular:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">(' . @mysql_result($cotacao,0,'CLI_DDD_CELULAR') . ') ' . @mysql_result($cotacao,0,'CLI_CELULAR') . '</TD>' . "\n";
}

$html .= '				</TR>' . "\n";
$html .= '			</TABLE>' . "\n";
$html .= '		</TD>' . "\n";
$html .= '	</TR>' . "\n";

if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">E-Mail/MSN:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_EMAIL') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Site:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_SITE') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Observações:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'CLI_OBS') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
}

$html .= '	<TR>' . "\n";
$html .= '		<TD>' . "\n";
$html .= '			<TABLE STYLE="width: 100%;">' . "\n";

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
	$html .= '				<TR>' . "\n";

	if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
		$html .= '					<TD CLASS="cotacao">Cód:</TD>' . "\n";
	}

	$html .= '					<TD CLASS="cotacao">Nome:</TD>' . "\n";
	$html .= '					<TD CLASS="cotacao">Quantidade:</TD>' . "\n";
	$html .= '					<TD CLASS="cotacao">Unidade:</TD>' . "\n";
	$html .= '					<TD CLASS="cotacao">Preço: R$</TD>' . "\n";

	if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
		$html .= '					<TD CLASS="cotacao">Desconto:</TD>' . "\n";
		$html .= '					<TD CLASS="cotacao">Total: R$</TD>' . "\n";
	}

	$html .= '				</TR>' . "\n";
	@mysql_free_result($max_itens);
	for ($n = 0; $n < @mysql_num_rows($itens); $n++) {
		$html .= '				<TR>' . "\n";

		$sql_produto = "SELECT * FROM ESTOQUE WHERE ID=" . @mysql_result($itens,$n,'ID_PRODUTO');
		$produto = mysql_query($sql_produto,$conexao);

		if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
			$html .= '					<TD CLASS="cotacao">' . @mysql_result($produto,0,'ID') . '</TD>' . "\n";
		}

		$html .= '					<TD CLASS="cotacao">' . @mysql_result($produto,0,'NOME') . '</TD>' . "\n";
		$html .= '					<TD CLASS="cotacao">' . @mysql_result($itens,$n,'QUANTIDADE') . '</TD>' . "\n";

		$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=" . @mysql_result($itens,$n,'ID_MEDIDA');
		$medida = mysql_query($sql_medida,$conexao);

		$html .= '					<TD CLASS="cotacao">' . @mysql_result($medida,0,'NOME') . '</TD>' . "\n";

		@mysql_free_result($medida);

		$html .= '					<TD CLASS="cotacao">' . "\n";

		if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
			$html .= '					' . @mysql_result($itens,$n,'PRECO') . "\n";
		}

		$html .= '						&nbsp;' . "\n";
		$html .= '					</TD>' . "\n";

		if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
			$html .= '					<TD CLASS="cotacao">' . @mysql_result($itens,$n,'DESCONTO') . '</TD>' . "\n";
			$html .= '					<TD CLASS="cotacao">' . @mysql_result($itens,$n,'TOTAL') . '</TD>' . "\n";
		}

 		@mysql_free_result($produto);

		$html .= '				</TR>' . "\n";
	}
} else {
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="cotacao">Não há item adicionado nesta seção no momento.</TD>' . "\n";
	$html .= '				</TR>' . "\n";
}

$html .= '			</TABLE>' . "\n";
$html .= '		</TD>' . "\n";
$html .= '	</TR>' . "\n";

if (@mysql_result($cotacao,0,'ID_NIVEL') == 1) {
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo" STYLE="width: 100%;">Desconto:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'DESCONTO') . '</TD>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Preço Total: R$</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'PRECO_TOTAL') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Data de entrega:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'DATA_ENTREGA') . '</TD>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Válida até</TD>' . "\n";

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

	$html .= '					<TD CLASS="campo">' . $data_validade . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo" STYLE="width: 100%;">Aceita:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'ACEITA') . '</TD>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Completa</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'COMPLETA') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
	$html .= '	<TR>' . "\n";
	$html .= '		<TD>' . "\n";
	$html .= '			<TABLE STYLE="width: 100%;">' . "\n";
	$html .= '				<TR>' . "\n";
	$html .= '					<TD CLASS="txt_novo">Observações gerais:</TD>' . "\n";
	$html .= '					<TD CLASS="campo">' . @mysql_result($cotacao,0,'OBS') . '</TD>' . "\n";
	$html .= '				</TR>' . "\n";
	$html .= '			</TABLE>' . "\n";
	$html .= '		</TD>' . "\n";
	$html .= '	</TR>' . "\n";
}

$html .= '</TABLE>' . "\n";
$html .= '</BODY>' . "\n";
$html .= '</HTML>' . "\n";

@ini_set('SMTP','localhost');
@ini_set('smtp_port','25');

$resposta = 'E-mail enviado com sucesso.';
if (@mail(
	$para, // Destinatário.
	$titulo, // Título do email.
	$html, // Corpo da página em HTML.
	"Reply-To: $de \r\n" . // Responder para...
	"From: $de \r\n" . // Remetente.
	"Organization: CiaMédica \r\n" . // Empresa.
	"MIME-Version: 1.0 \r\n" . // Tipo do MIME.
	"Content-Type: text/html; charset=iso-8859-1 \r\n" . // Tipo de email.
	"X-Priority: 3 \r\n" . // Prioridade de envio. (1 = Baixa[Sem pressa], 2 = Média[Normal], 3 = Alta[Urgente])
	"X-MSMail-Priority: Normal \r\n" . // Prioridade de envio.
	"X-Mailer: .:: CiaMédica ::. \r\n" . // Programa que enviou.
	"Disposition-Notification-To: $de \r\n" . // Notificação de leitura.
	'Bcc: "Administrador do sistema" <rodrigosalinet@hotmail.com>' // Cópia oculta.
	) == false) {
	$resposta = 'Não foi possível enviar o e-mail.';
}
?>
<BR>
<BR>
<BR>
<TABLE STYLE="width: 100%;">
	<TR>
		<TD STYLE="width: 100%; height: 100%; text-align: center; vertical-align: middle;"><?=$resposta;?></TD>
	</TR>
</TABLE>
<? require_once('menu_contexto.php'); ?>
<? require_once('script_fim.php'); ?>
</BODY>
</HTML>
<?
echo '<PRE>' . "\n"; echo(htmlspecialchars($html)); echo '</PRE>' . "\n"; exit();
 while(@ob_end_flush()); ?>
