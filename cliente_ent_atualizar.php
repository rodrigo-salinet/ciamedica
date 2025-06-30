<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_cliente = trim(@$_POST['hdn_id_cliente']);
$txt_contato = trim(@$_POST['txt_contato']);
$txt_endereco = trim(@$_POST['txt_endereco']);
$txt_numero = trim(@$_POST['txt_numero']);
$txt_bairro = trim(@$_POST['txt_bairro']);
$txt_municipio = trim(@$_POST['txt_municipio']);
$txt_uf = trim(@$_POST['txt_uf']);
$txt_cep = trim(@$_POST['txt_cep']);
$txt_ddd_fone = trim(@$_POST['txt_ddd_fone']);
$txt_fone = trim(@$_POST['txt_fone']);
$txt_ddd_fax = trim(@$_POST['txt_ddd_fax']);
$txt_fax = trim(@$_POST['txt_fax']);
$txt_ddd_celular = trim(@$_POST['txt_ddd_celular']);
$txt_celular = trim(@$_POST['txt_celular']);
$txt_email_msn = trim(@$_POST['txt_email_msn']);
$txt_obs = trim(@$_POST['txt_obs']);
$tipo = 2;

$campos = '';
$valores = '';
$campos_valores = '';

if ($tipo != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_TIPO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$tipo";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_TIPO=$tipo";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_TIPO=NULL";
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

if ($hdn_id_cliente != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_CLIENTE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$hdn_id_cliente";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_CLIENTE=$hdn_id_cliente";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_CLIENTE=NULL";
}

if ($txt_contato != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CONTATO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_contato'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CONTATO='$txt_contato'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CONTATO=NULL";
}

if ($txt_endereco != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ENDERECO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_endereco'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ENDERECO='$txt_endereco'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ENDERECO=NULL";
}

if ($txt_numero != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'NUMERO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_numero'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "NUMERO='$txt_numero'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "NUMERO=NULL";
}

if ($txt_bairro != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'BAIRRO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_bairro'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "BAIRRO='$txt_bairro'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "BAIRRO=NULL";
}

if ($txt_municipio != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'MUNICIPIO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_municipio'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MUNICIPIO='$txt_municipio'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "MUNICIPIO=NULL";
}

if ($txt_uf != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'UF';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_uf'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "UF='$txt_uf'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "UF=NULL";
}

if ($txt_cep != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CEP';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_cep'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CEP='$txt_cep'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CEP=NULL";
}

if ($txt_ddd_fone != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DDD_FONE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_ddd_fone'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DDD_FONE='$txt_ddd_fone'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DDD_FONE=NULL";
}

if ($txt_fone != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'FONE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_fone'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "FONE='$txt_fone'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "FONE=NULL";
}

if ($txt_ddd_fax != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DDD_FAX';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_ddd_fax'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DDD_FAX='$txt_ddd_fax'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DDD_FAX=NULL";
}

if ($txt_fax != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'FAX';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_fax'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "FAX='$txt_fax'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "FAX=NULL";
}

if ($txt_ddd_celular != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DDD_CELULAR';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_ddd_celular'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DDD_CELULAR='$txt_ddd_celular'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DDD_CELULAR=NULL";
}

if ($txt_celular != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CELULAR';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_celular'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CELULAR='$txt_celular'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CELULAR=NULL";
}

if ($txt_email_msn != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'EMAIL';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_email_msn'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "EMAIL='$txt_email_msn'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "EMAIL=NULL";
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

$sql_cliente = "SELECT * FROM CLIENTES WHERE ID=$hdn_id_cliente";
$cliente = mysql_query($sql_cliente,$conexao);
$nome_cliente = @mysql_result($cliente,0,'NOME');
@mysql_free_result($cliente);

$sql_string = "INSERT INTO DADOS_CLIENTE ($campos) VALUES ($valores)";

$sql_ent_cliente = "SELECT * FROM ENTREGA_CLIENTE WHERE ID_CLIENTE=$hdn_id_cliente";
$ent_cliente = mysql_query($sql_ent_cliente,$conexao);
$existe = false;
if (@mysql_num_rows($ent_cliente) > 0) {
	$existe = true;
	$sql_string = "UPDATE DADOS_CLIENTE SET $campos_valores WHERE ID_CLIENTE=$hdn_id_cliente";
}
@mysql_free_result($ent_cliente);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrados';
	if ($existe == true) {
		$foi = 'atualizados';
	}
	$msg = "Dados de entrega do cliente $nome_cliente $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar dados de entrega do cliente $nome_cliente.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_cliente != '') {
	$redir = "&id_cliente=$hdn_id_cliente";
}

header("Location: cliente_edit_cobranca.php?msg=" . urlencode($msg) . $redir);
?>
