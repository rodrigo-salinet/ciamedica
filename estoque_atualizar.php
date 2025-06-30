<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_produto = trim(@$_POST['hdn_id_produto']);
$txt_nome = trim(@$_POST['txt_nome']);
$txt_descricao = trim(@$_POST['txt_descricao']);
$sel_fornecedor = trim(@$_POST['sel_fornecedor']);
$sel_linha = trim(@$_POST['sel_linha']);
$txt_preco = trim(@$_POST['txt_preco']);
$txt_custo = trim(@$_POST['txt_custo']);
$txt_medio = trim(@$_POST['txt_medio']);
$txt_quantidade = trim(@$_POST['txt_quantidade']);
$sel_medida = trim(@$_POST['sel_medida']);
$txt_ipi = trim(@$_POST['txt_ipi']);
$txt_lucro = trim(@$_POST['txt_lucro']);

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

if ($sel_linha != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_LINHA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_linha";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_LINHA=$sel_linha";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_LINHA=NULL";
}

if ($txt_preco != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'PRECO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_preco'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "PRECO='$txt_preco'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "PRECO=NULL";
}

if ($txt_custo != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CUSTO_COMPRA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_custo'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CUSTO_COMPRA='$txt_custo'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CUSTO_COMPRA=NULL";
}

if ($txt_medio != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CUSTO_MEDIO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_medio'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CUSTO_MEDIO='$txt_medio'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CUSTO_MEDIO=NULL";
}

if ($txt_quantidade != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'QUANTIDADE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_quantidade'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "QUANTIDADE='$txt_quantidade'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "QUANTIDADE=NULL";
}

if ($sel_medida != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'ID_MEDIDA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "$sel_medida";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_MEDIDA=$sel_medida";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "ID_MEDIDA=NULL";
}

if ($txt_ipi != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'IPI';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_ipi'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "IPI='$txt_ipi'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "IPI=NULL";
}

if ($txt_lucro != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'LUCRO';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_lucro'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "LUCRO='$txt_lucro'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "LUCRO=NULL";
}

$sql_string = "INSERT INTO ESTOQUE ($campos) VALUES ($valores)";

$sql_estoque = "SELECT * FROM ESTOQUE WHERE ID=$hdn_id_produto";
$estoque = mysql_query($sql_estoque,$conexao);
$existe = false;
if (@mysql_num_rows($estoque) > 0) {
	$existe = true;
	$sql_string = "UPDATE ESTOQUE SET $campos_valores WHERE ID=$hdn_id_produto";
}
@mysql_free_result($estoque);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrado';
	if ($existe == true) {
		$foi = 'atualizado';
	}
	$msg = "Produto $foi com sucesso.";
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um problema ao $executar produto.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_produto != '') {
	$redir = "&id_produto=$hdn_id_produto";
}

header("Location: estoque_editar.php?msg=" . urlencode($msg) . $redir);
?>
