<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_caixa = trim(@$_POST['hdn_id_caixa']);
$sel_tipo = trim(@$_POST['sel_tipo']);
$sel_despesa = trim(@$_POST['sel_despesa']);
$sel_forma_pagamento = trim(@$_POST['sel_forma_pagamento']);
$sel_banco = trim(@$_POST['sel_banco']);
$txt_responsavel = trim(@$_POST['txt_responsavel']);
$txt_dia = trim(@$_POST['txt_dia']);
$txt_mes = trim(@$_POST['txt_mes']);
$txt_ano = trim(@$_POST['txt_ano']);
$txt_valor = trim(@$_POST['txt_valor']);
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

if ($sel_banco != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_BANCO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_banco";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_BANCO=$sel_banco";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_BANCO=NULL";
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

if ($txt_responsavel != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'RESPONSAVEL';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_responsavel'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "RESPONSAVEL='$txt_responsavel'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "RESPONSAVEL=NULL";
}

if ($txt_dia != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DIA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_dia";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA=$txt_dia";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DIA=NULL";
}

if ($txt_mes != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'MES';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_mes";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES=$txt_mes";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MES=NULL";
}

if ($txt_ano != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ANO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$txt_ano";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO=$txt_ano";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ANO=NULL";
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

if ($horario != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'HORARIO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$horario'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "HORARIO='$horario'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "HORARIO=NULL";
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

$sql_string = "INSERT INTO CAIXA ($campos) VALUES ($valores)";

$sql_caixa = "SELECT * FROM CAIXA WHERE ID=$hdn_id_caixa";
$caixa = mysql_query($sql_caixa,$conexao);
$existe = false;
if (@mysql_num_rows($caixa) > 0) {
	$existe = true;
	$sql_string = "UPDATE CAIXA SET $campos_valores WHERE ID=$hdn_id_caixa";
}
@mysql_free_result($caixa);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrada';
	if ($existe == true) {
		$foi = 'atualizada';
	}
	$msg = "Caixa $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar caixa.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_caixa != '') {
	$redir = "&id_caixa=$hdn_id_caixa";
}

header("Location: caixa_editar.php?msg=" . urlencode($msg) . $redir);
?>
