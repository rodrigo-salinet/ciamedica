<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_cliente = trim(@$_GET['id_cliente']);

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
if (@mysql_num_rows($venda) > 0) {
	$data_validade = @mysql_result($venda,0,'DATA_VALIDADE');
}

if ($id_cliente != '') {
	$sql_cliente = "SELECT * FROM CLIENTES WHERE ID=$id_cliente";
	$cliente = mysql_query($sql_cliente,$conexao);
	$cli = 'Inativo';

	$txt_nome = mysql_result($cliente,0,'NOME');
	$txt_razao_social = mysql_result($cliente,0,'RAZAO_SOCIAL');
	$txt_contato = mysql_result($cliente,0,'CONTATO');
	$txt_cpf_cnpj = mysql_result($cliente,0,'CPF_CNPJ');
	$txt_inscricao_estadual = mysql_result($cliente,0,'INSCRICAO_ESTADUAL');
	$txt_cfop = mysql_result($cliente,0,'CFOP');
	$txt_endereco = mysql_result($cliente,0,'ENDERECO');
	$txt_numero = mysql_result($cliente,0,'NUMERO');
	$txt_complemento = mysql_result($cliente,0,'COMPLEMENTO');
	$txt_bairro = mysql_result($cliente,0,'BAIRRO');
	$txt_municipio = mysql_result($cliente,0,'MUNICIPIO');
	$txt_uf = mysql_result($cliente,0,'UF');
	$txt_cep = mysql_result($cliente,0,'CEP');
	$txt_ddd_fone = mysql_result($cliente,0,'DDD_FONE');
	$txt_fone = mysql_result($cliente,0,'FONE');
	$txt_ddd_fax = mysql_result($cliente,0,'DDD_FAX');
	$txt_fax = mysql_result($cliente,0,'FAX');
	$txt_ddd_celular = mysql_result($cliente,0,'DDD_CELULAR');
	$txt_celular = mysql_result($cliente,0,'CELULAR');
	$txt_email_msn = mysql_result($cliente,0,'EMAIL');
	$txt_site = mysql_result($cliente,0,'SITE');
	$txt_obs_cliente = mysql_result($cliente,0,'OBS');

	$campos = '';
	$valores = '';
	$campos_valores = '';

	if ($id_cliente != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'ID_CLIENTE';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "$id_cliente";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "ID_CLIENTE=$id_cliente";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "ID_CLIENTE=NULL";
	}

	if ($id_usuario != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'ID_USUARIO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "$id_usuario";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "ID_USUARIO=$id_usuario";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "ID_USUARIO=NULL";
	}

	if ($txt_nome != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_NOME';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_nome'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_NOME='$txt_nome'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_NOME=NULL";
	}

	if ($txt_razao_social != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_RAZAO_SOCIAL';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_razao_social'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_RAZAO_SOCIAL='$txt_razao_social'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_RAZAO_SOCIAL=NULL";
	}

	if ($txt_contato != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_CONTATO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_contato'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CONTATO='$txt_contato'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CONTATO=NULL";
	}

	if ($txt_cpf_cnpj != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_CPF_CNPJ';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_cpf_cnpj'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CPF_CNPJ='$txt_cpf_cnpj'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CPF_CNPJ=NULL";
	}

	if ($txt_inscricao_estadual != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_INSCRICAO_ESTADUAL';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_inscricao_estadual'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_INSCRICAO_ESTADUAL='$txt_inscricao_estadual'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_INSCRICAO_ESTADUAL=NULL";
	}

	if ($txt_cfop != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_CFOP';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_cfop'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CFOP='$txt_cfop'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CFOP=NULL";
	}

	if ($txt_endereco != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_ENDERECO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_endereco'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_ENDERECO='$txt_endereco'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_ENDERECO=NULL";
	}

	if ($txt_numero != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_NUMERO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_numero'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_NUMERO='$txt_numero'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_NUMERO=NULL";
	}

	if ($txt_complemento != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_COMPLEMENTO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_complemento'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_COMPLEMENTO='$txt_complemento'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_COMPLEMENTO=NULL";
	}

	if ($txt_bairro != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_BAIRRO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_bairro'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_BAIRRO='$txt_bairro'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_BAIRRO=NULL";
	}

	if ($txt_municipio != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_MUNICIPIO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_municipio'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_MUNICIPIO='$txt_municipio'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_MUNICIPIO=NULL";
	}

	if ($txt_uf != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_UF';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_uf'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_UF='$txt_uf'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_UF=NULL";
	}

	if ($txt_cep != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_CEP';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_cep'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CEP='$txt_cep'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CEP=NULL";
	}

	if ($txt_ddd_fone != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_DDD_FONE';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_ddd_fone'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_DDD_FONE='$txt_ddd_fone'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_DDD_FONE=NULL";
	}

	if ($txt_fone != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_FONE';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_fone'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_FONE='$txt_fone'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_FONE=NULL";
	}

	if ($txt_ddd_fax != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_DDD_FAX';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_ddd_fax'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_DDD_FAX='$txt_ddd_fax'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_DDD_FAX=NULL";
	}

	if ($txt_fax != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_FAX';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_fax'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_FAX='$txt_fax'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_FAX=NULL";
	}

	if ($txt_ddd_celular != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_DDD_CELULAR';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_ddd_celular'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_DDD_CELULAR='$txt_ddd_celular'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_DDD_CELULAR=NULL";
	}

	if ($txt_celular != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_CELULAR';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_celular'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CELULAR='$txt_celular'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_CELULAR=NULL";
	}

	if ($txt_email_msn != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_EMAIL';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_email_msn'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_EMAIL='$txt_email_msn'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_EMAIL=NULL";
	}

	if ($txt_site != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_SITE';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_site'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_SITE='$txt_site'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_SITE=NULL";
	}

	if ($txt_limite_credito != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_LIMITE_CREDITO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_limite_credito'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_LIMITE_CREDITO='$txt_limite_credito'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_LIMITE_CREDITO=NULL";
	}

	if ($txt_obs_cliente != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'CLI_OBS';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$txt_obs_cliente'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_OBS='$txt_obs_cliente'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "CLI_OBS=NULL";
	}

	if ($hoje != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'DATA_CADASTRO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$hoje'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "DATA_CADASTRO='$hoje'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "DATA_CADASTRO=NULL";
	}

	if ($horario != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'HORARIO_CADASTRO';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$horario'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "HORARIO_CADASTRO='$horario'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "HORARIO_CADASTRO=NULL";
	}

	if ($data_validade != '') {
		if ($campos != '') {
			$campos .= ',';
		}
		$campos .= 'DATA_VALIDADE';
		if ($valores != '') {
			$valores .= ',';
		}
		$valores .= "'$data_validade'";
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "DATA_VALIDADE='$data_validade'";
	} else {
		if ($campos_valores != '') {
			$campos_valores .= ',';
		}
		$campos_valores .= "DATA_VALIDADE=NULL";
	}

	if (@$_SESSION['id_venda'] != '') {
		$sel_id_cli = "";
		if (@mysql_num_rows($cliente) > 0) {
			$sql_string = "UPDATE VENDAS SET $campos_valores WHERE ID=". @$_SESSION['id_venda'];
			$cli = 'Atualizado';
		}
	} else {
		$sql_string = "INSERT INTO VENDAS ($campos) VALUES ($valores)";
		$cli = 'Inserido';
	}
	if (mysql_query($sql_string,$conexao)) {
		$msg = 'Cliente selecionado com sucesso.';
	} else {
		$msg = 'Ocorreu uma falha ao selecionar cliente.';
	}
	if ($cli == 'Inserido') {
		$sql_venda_temp = "SELECT * FROM VENDAS ORDER BY ID DESC";
		$venda_temp = mysql_query($sql_venda_temp,$conexao);
		if (@mysql_num_rows($venda_temp) > 0) {
			$_SESSION['id_venda'] = @mysql_result($venda_temp,0,'ID');
		}
		@mysql_free_result($venda_temp);
	}
}
$venda = '';
if (trim(@$_SESSION['id_venda']) != '') {
	$venda = '&id_venda=' . $_SESSION['id_venda'];
}
header("Location: venda_editar.php?msg=" . urlencode($msg) . $venda);
?>