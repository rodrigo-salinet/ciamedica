<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$id_venda = trim(@$_GET['id_venda']);
if ($id_venda == '') {
	$id_venda = trim(@$_POST['hdn_id_venda']);
}

$erro = true;
if ($id_venda != '') {
	$sql_estoque = "SELECT * FROM ESTOQUE";
	$estoque = mysql_query($sql_estoque,$conexao);
	for  ($n = 0; $n < @mysql_num_rows($estoque); $n++) {
		$txt_quantidade = @$_POST['txt_quantidade_' . mysql_result($estoque,$n,'ID')];
		if ($txt_quantidade != '') {
			$txt_id_produto = mysql_result($estoque,$n,'ID');
			$txt_nome = mysql_result($estoque,$n,'NOME');
			$txt_id_fornecedor = mysql_result($estoque,$n,'ID_FORNECEDOR');
			$txt_id_linha = mysql_result($estoque,$n,'ID_LINHA');
			$txt_obs = mysql_result($estoque,$n,'OBS');
			$txt_id_medida = mysql_result($estoque,$n,'ID_MEDIDA');
			$txt_preco = @$_POST['txt_preco_' . mysql_result($estoque,$n,'ID')];
			$txt_custo_compra = mysql_result($estoque,$n,'CUSTO_COMPRA');
			$txt_custo_medio = mysql_result($estoque,$n,'CUSTO_MEDIO');
			$txt_desconto = @$_POST['txt_desconto_' . mysql_result($estoque,$n,'ID')];
			$txt_total = @$_POST['txt_total_' . mysql_result($estoque,$n,'ID')];
			$txt_ipi = mysql_result($estoque,$n,'IPI');
			$txt_lucro = mysql_result($estoque,$n,'LUCRO');
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

			if ($id_venda != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'ID_TABELA';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "$id_venda";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_TABELA=$id_venda";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_TABELA=NULL";
			}

			if ($txt_id_produto != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'ID_PRODUTO';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "$txt_id_produto";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_PRODUTO=$txt_id_produto";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_PRODUTO=NULL";
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

			if ($txt_id_fornecedor != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'ID_FORNECEDOR';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "$txt_id_fornecedor";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_FORNECEDOR=$txt_id_fornecedor";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_FORNECEDOR=NULL";
			}

			if ($txt_id_linha != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'ID_LINHA';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "$txt_id_linha";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_LINHA=$txt_id_linha";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_LINHA=NULL";
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

			if ($txt_id_medida != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'ID_MEDIDA';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "$txt_id_medida";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_MEDIDA=$txt_id_medida";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "ID_MEDIDA=NULL";
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

			if ($txt_custo_compra != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'CUSTO_COMPRA';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "'$txt_custo_compra'";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "CUSTO_COMPRA='$txt_custo_compra'";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "CUSTO_COMPRA=NULL";
			}

			if ($txt_custo_medio != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'CUSTO_MEDIO';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "'$txt_custo_medio'";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "CUSTO_MEDIO='$txt_custo_medio'";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "CUSTO_MEDIO=NULL";
			}

			if ($txt_desconto != '') {
				if ($campos != '') {
					$campos .= ',';
				}
				$campos .= 'DESCONTO';
				if ($valores != '') {
					$valores .= ',';
				}
				$valores .= "'$txt_desconto'";
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "DESCONTO='$txt_desconto'";
			} else {
				if ($campos_valores != '') {
					$campos_valores .= ',';
				}
				$campos_valores .= "DESCONTO=NULL";
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

			$sql_itens = "INSERT INTO ITENS ($campos) VALUES ($valores)";
			if (mysql_query($sql_itens,$conexao)) {
				$erro = false;
			}
		}
	}
	$msg = "Ítem(s) adicionado(s) com sucesso.";
}
if ($erro == true) {
	$msg = "Ocorreu algum erro ao adicionar ítem(s).";
}
header("Location: venda_editar.php?msg=" . urlencode($msg) . '&id_venda=' . $id_venda);
?>