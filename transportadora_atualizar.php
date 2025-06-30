<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_transportadora = trim(@$_POST['hdn_id_transportadora']);
$txt_nome = trim(@$_POST['txt_nome']);
$txt_razao_social = trim(@$_POST['txt_razao_social']);
$txt_contato = trim(@$_POST['txt_contato']);
$txt_cpf_cnpj = trim(@$_POST['txt_cpf_cnpj']);
$txt_inscricao_estadual = trim(@$_POST['txt_inscricao_estadual']);
$txt_endereco = trim(@$_POST['txt_endereco']);
$txt_numero = trim(@$_POST['txt_numero']);
$txt_complemento = trim(@$_POST['txt_complemento']);
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
$txt_site = trim(@$_POST['txt_site']);
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

if ($txt_nome != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'NOME';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_nome'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "NOME='$txt_nome'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "NOME=NULL";
}

if ($txt_razao_social != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'RAZAO_SOCIAL';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_razao_social'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "RAZAO_SOCIAL='$txt_razao_social'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "RAZAO_SOCIAL=NULL";
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

if ($txt_cpf_cnpj != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CPF_CNPJ';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_cpf_cnpj'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CPF_CNPJ='$txt_cpf_cnpj'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CPF_CNPJ=NULL";
}

if ($txt_inscricao_estadual != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'INSCRICAO_ESTADUAL';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_inscricao_estadual'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "INSCRICAO_ESTADUAL='$txt_inscricao_estadual'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "INSCRICAO_ESTADUAL=NULL";
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

if ($txt_complemento != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'COMPLEMENTO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_complemento'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "COMPLEMENTO='$txt_complemento'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "COMPLEMENTO=NULL";
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

if ($txt_site != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'SITE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_site'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "SITE='$txt_site'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "SITE=NULL";
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

$sql_string = "INSERT INTO TRANSPORTADORAS ($campos) VALUES ($valores)";

$sql_transportadora = "SELECT * FROM TRANSPORTADORAS WHERE ID=$hdn_id_transportadora";
$transportadora = mysql_query($sql_transportadora,$conexao);
$existe = false;
if (@mysql_num_rows($transportadora) > 0) {
	$existe = true;
	$sql_string = "UPDATE TRANSPORTADORAS SET $campos_valores WHERE ID=$hdn_id_transportadora";
}
@mysql_free_result($transportadora);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrado';
	if ($existe == true) {
		$foi = 'atualizado';
	}
	$msg = "Transportadora $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar transportadora.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_transportadora != '') {
	$redir = "&id_transportadora=$hdn_id_transportadora";
}

header("Location: transportadora_editar.php?msg=" . urlencode($msg) . $redir);
?>
