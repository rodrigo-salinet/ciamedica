<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_conta = trim(@$_POST['hdn_id_conta']);
$sel_fornecedor = trim(@$_POST['sel_fornecedor']);
$sel_cliente = trim(@$_POST['sel_cliente']);
$sel_despesa = trim(@$_POST['sel_despesa']);
$sel_tipo = trim(@$_POST['sel_tipo']);
$sel_forma_pagamento = trim(@$_POST['sel_forma_pagamento']);
$txt_dia_emissao = trim(@$_POST['txt_dia_emissao']);
$txt_mes_emissao = trim(@$_POST['txt_mes_emissao']);
$txt_ano_emissao = trim(@$_POST['txt_ano_emissao']);
$txt_dia_vencimento = trim(@$_POST['txt_dia_vencimento']);
$txt_mes_vencimento = trim(@$_POST['txt_mes_vencimento']);
$txt_ano_vencimento = trim(@$_POST['txt_ano_vencimento']);
$txt_dia_cadastro = trim(@$_POST['txt_dia_cadastro']);
$txt_mes_cadastro = trim(@$_POST['txt_mes_cadastro']);
$txt_ano_cadastro = trim(@$_POST['txt_ano_cadastro']);
$txt_dia_baixa = trim(@$_POST['txt_dia_baixa']);
$txt_mes_baixa = trim(@$_POST['txt_mes_baixa']);
$txt_ano_baixa = trim(@$_POST['txt_ano_baixa']);
$txt_quantidade = trim(@$_POST['txt_quantidade']);
$txt_valor = trim(@$_POST['txt_valor']);
$txt_total = trim(@$_POST['txt_total']);
$txt_obs = trim(@$_POST['txt_obs']);

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

if ($sel_fornecedor != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_FORNECEDOR';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_fornecedor";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_FORNECEDOR=$sel_fornecedor";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_FORNECEDOR=NULL";
}

if ($sel_cliente != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_CLIENTE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_cliente";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_CLIENTE=$sel_cliente";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_CLIENTE=NULL";
}

if ($sel_despesa != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_DESPESA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_despesa";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_DESPESA=$sel_despesa";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_DESPESA=NULL";
}

if ($sel_tipo != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_TIPO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_tipo";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_TIPO=$sel_tipo";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_TIPO=NULL";
}

if ($sel_forma_pagamento != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_FORMA_PAGAMENTO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_forma_pagamento";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_FORMA_PAGAMENTO=$sel_forma_pagamento";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_FORMA_PAGAMENTO=NULL";
}

if ($txt_dia_emissao != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DIA_EMISSAO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_dia_emissao";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_EMISSAO=$txt_dia_emissao";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_EMISSAO=NULL";
}

if ($txt_mes_emissao != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'MES_EMISSAO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_mes_emissao";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_EMISSAO=$txt_mes_emissao";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_EMISSAO=NULL";
}

if ($txt_ano_emissao != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ANO_EMISSAO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_ano_emissao";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_EMISSAO=$txt_ano_emissao";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_EMISSAO=NULL";
}

if ($txt_dia_vencimento != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DIA_VENCIMENTO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_dia_vencimento";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_VENCIMENTO=$txt_dia_vencimento";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_VENCIMENTO=NULL";
}

if ($txt_mes_vencimento != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'MES_VENCIMENTO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_mes_vencimento";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_VENCIMENTO=$txt_mes_vencimento";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_VENCIMENTO=NULL";
}

if ($txt_ano_vencimento != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ANO_VENCIMENTO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_ano_vencimento";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_VENCIMENTO=$txt_ano_vencimento";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_VENCIMENTO=NULL";
}

if ($txt_dia_cadastro != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DIA_CADASTRO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_dia_cadastro";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_CADASTRO=$txt_dia_cadastro";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_CADASTRO=NULL";
}

if ($txt_mes_cadastro != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'MES_CADASTRO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_mes_cadastro";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_CADASTRO=$txt_mes_cadastro";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_CADASTRO=NULL";
}

if ($txt_ano_cadastro != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ANO_CADASTRO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_ano_cadastro";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_CADASTRO=$txt_ano_cadastro";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_CADASTRO=NULL";
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

if ($txt_dia_baixa != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DIA_BAIXA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_dia_baixa";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_BAIXA=$txt_dia_baixa";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA_BAIXA=NULL";
}

if ($txt_mes_baixa != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'MES_BAIXA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_mes_baixa";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_BAIXA=$txt_mes_baixa";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES_BAIXA=NULL";
}

if ($txt_ano_baixa != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ANO_BAIXA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_ano_baixa";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_BAIXA=$txt_ano_baixa";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO_BAIXA=NULL";
}

if ($txt_quantidade != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'QUANTIDADE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_quantidade";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "QUANTIDADE=$txt_quantidade";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "QUANTIDADE=NULL";
}

if ($txt_valor != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'VALOR';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_valor'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "VALOR='$txt_valor'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "VALOR=NULL";
}

if ($txt_total != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'TOTAL';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_total'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "TOTAL='$txt_total'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "TOTAL=NULL";
}

if ($txt_obs != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'OBS';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_obs'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "OBS='$txt_obs'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "OBS=NULL";
}

$sql_string = "INSERT INTO CONTAS ($campos) VALUES ($valores)";

$sql_conta = "SELECT * FROM CONTAS WHERE ID=$hdn_id_conta";
$conta = mysql_query($sql_conta,$conexao);
$existe = false;
if (@mysql_num_rows($conta) > 0) {
	$existe = true;
	$sql_string = "UPDATE CONTAS SET $campos_valores WHERE ID=$hdn_id_conta";
}
@mysql_free_result($conta);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrada';
	if ($existe == true) {
		$foi = 'atualizada';
	}
	$msg = "Conta $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar conta.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_conta != '') {
	$redir = "&id_conta=$hdn_id_conta";
}

header("Location: conta_editar.php?msg=" . urlencode($msg) . $redir);
?>
