<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_medida = trim(@$_POST['hdn_id_medida']);
$txt_nome = trim(@$_POST['txt_nome']);
$txt_abreviatura = trim(@$_POST['txt_abreviatura']);
$txt_descricao = trim(@$_POST['txt_descricao']);

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

if ($txt_abreviatura != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ABREVIATURA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_abreviatura'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ABREVIATURA='$txt_abreviatura'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ABREVIATURA=NULL";
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

$sql_string = "INSERT INTO MEDIDAS ($campos) VALUES ($valores)";

$sql_medida = "SELECT * FROM MEDIDAS WHERE ID=$hdn_id_medida";
$medida = mysql_query($sql_medida,$conexao);
$existe = false;
if (@mysql_num_rows($medida) > 0) {
	$existe = true;
	$sql_string = "UPDATE MEDIDAS SET $campos_valores WHERE ID=$hdn_id_medida";
}
@mysql_free_result($medida);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrada';
	if ($existe == true) {
		$foi = 'atualizada';
	}
	$msg = "Unidade de Medida $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar unidade de medida.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_medida != '') {
	$redir = "&id_medida=$hdn_id_medida";
}

header("Location: medida_editar.php?msg=" . urlencode($msg) . $redir);
?>
