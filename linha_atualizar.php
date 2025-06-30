<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_linha = trim(@$_POST['hdn_id_linha']);
$txt_nome = trim(@$_POST['txt_nome']);
$txt_descricao = trim(@$_POST['txt_descricao']);
$rdg_ativa = trim(@$_POST['rdg_ativa']);

$campos = '';
$valores = '';
$campos_valores = '';

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

if ($txt_descricao != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DESCRICAO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_descricao'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DESCRICAO='$txt_descricao'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DESCRICAO=NULL";
}

if ($rdg_ativa != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ATIVA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$rdg_ativa'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ATIVA='$rdg_ativa'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ATIVA=NULL";
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

$sql_string = "INSERT INTO LINHAS ($campos) VALUES ($valores)";

$sql_linha = "SELECT * FROM LINHAS WHERE ID=$hdn_id_linha";
$linha = mysql_query($sql_linha,$conexao);
$existe = false;
if (@mysql_num_rows($linha) > 0) {
	$existe = true;
	$sql_string = "UPDATE LINHAS SET $campos_valores WHERE ID=$hdn_id_linha";
}
@mysql_free_result($linha);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrada';
	if ($existe == true) {
		$foi = 'atualizada';
	}
	$msg = "Linha $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar linha.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_linha != '') {
	$redir = "&id_linha=$hdn_id_linha";
}

header("Location: linha_editar.php?msg=" . urlencode($msg) . $redir);
?>
