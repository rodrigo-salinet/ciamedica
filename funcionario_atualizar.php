<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_funcionario = trim(@$_POST['hdn_id_funcionario']);
$txt_nome = trim(@$_POST['txt_nome']);
$txt_rg = trim(@$_POST['txt_rg']);
$txt_cpf = trim(@$_POST['txt_cpf']);
$txt_endereco = trim(@$_POST['txt_endereco']);
$txt_numero = trim(@$_POST['txt_numero']);
$txt_complemento = trim(@$_POST['txt_complemento']);
$txt_bairro = trim(@$_POST['txt_bairro']);
$txt_municipio = trim(@$_POST['txt_municipio']);
$txt_uf = trim(@$_POST['txt_uf']);
$txt_cep = trim(@$_POST['txt_cep']);
$txt_ddd_fone = trim(@$_POST['txt_ddd_fone']);
$txt_fone = trim(@$_POST['txt_fone']);
$txt_ddd_celular = trim(@$_POST['txt_ddd_celular']);
$txt_celular = trim(@$_POST['txt_celular']);
$txt_email_msn = trim(@$_POST['txt_email_msn']);
$txt_obs = trim(@$_POST['txt_obs']);
$rdg_ativo = trim(@$_POST['rdg_ativo']);

$campos = '';
$valores = '';
$campos_valores = '';

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

if ($txt_rg != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'RG';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_rg'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "RG='$txt_rg'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "RG=NULL";
}

if ($txt_cpf != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CPF';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_cpf'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CPF='$txt_cpf'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CPF=NULL";
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

if ($rdg_ativo != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ATIVO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$rdg_ativo'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ATIVO='$rdg_ativo'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ATIVO=NULL";
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

$sql_string = "INSERT INTO FUNCIONARIOS ($campos) VALUES ($valores)";

$sql_funcionario = "SELECT * FROM FUNCIONARIOS WHERE ID=$hdn_id_funcionario";
$funcionario = mysql_query($sql_funcionario,$conexao);
$existe = false;
if (@mysql_num_rows($funcionario) > 0) {
	$existe = true;
	$sql_string = "UPDATE FUNCIONARIOS SET $campos_valores WHERE ID=$hdn_id_funcionario";
}
@mysql_free_result($funcionario);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrado';
	if ($existe == true) {
		$foi = 'atualizado';
	}
	$msg = "Funcionario $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar funcionario.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_funcionario != '') {
	$redir = "&id_funcionario=$hdn_id_funcionario";
}

header("Location: funcionario_editar.php?msg=" . urlencode($msg) . $redir);
?>
