<? require_once('funcoes.php'); ?>
<? require_once('script_inicio.php'); ?>
<? require_once('sessao.php'); ?>
<?
$hdn_id_venda = trim(@$_POST['hdn_id_venda']);
$hdn_id_cliente = trim(@$_POST['hdn_id_cliente']);

$txt_controle = trim(@$_POST['txt_controle']);
$txt_nome = trim(@$_POST['txt_nome']);
$txt_razao_social = trim(@$_POST['txt_razao_social']);
$txt_contato = trim(@$_POST['txt_contato']);
$txt_cpf_cnpj = trim(@$_POST['txt_cpf_cnpj']);
$txt_inscricao_estadual = trim(@$_POST['txt_inscricao_estadual']);
$txt_cfop = trim(@$_POST['txt_cfop']);
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
$txt_obs_cliente = trim(@$_POST['txt_obs_cliente']);

$txt_desconto = trim(@$_POST['txt_desconto']);
$txt_preco_total = trim(@$_POST['txt_preco_total']);
$txt_data_entrega = trim(@$_POST['txt_data_entrega']);
$txt_data_validade = trim(@$_POST['txt_data_validade']);
$rdg_aceita = trim(@$_POST['rdg_aceita']);
$rdg_completa = trim(@$_POST['rdg_completa']);
$txt_obs = trim(@$_POST['txt_obs']);

$tipo = 2;

$campos = '';
$valores = '';
$campos_valores = '';

if ($txt_controle != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'CONTROLE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_controle'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CONTROLE='$txt_controle'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "CONTROLE=NULL";
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

if ($txt_data_entrega != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DATA_ENTREGA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_data_entrega'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DATA_ENTREGA='$txt_data_entrega'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DATA_ENTREGA=NULL";
}

if ($horario != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'HORARIO_ENTREGA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$horario'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "HORARIO_ENTREGA='$horario'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "HORARIO_ENTREGA=NULL";
}

if ($txt_data_validade != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'DATA_VALIDADE';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_data_validade'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DATA_VALIDADE='$txt_data_validade'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "DATA_VALIDADE=NULL";
}

if ($txt_preco_total != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'PRECO_TOTAL';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$txt_preco_total'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "PRECO_TOTAL='$txt_preco_total'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "PRECO_TOTAL=NULL";
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

if ($rdg_completa != '') {
	if ($campos != '') {
		$campos .= ',';
	}
	$campos .= 'COMPLETA';
	if ($valores != '') {
		$valores .= ',';
	}
	$valores .= "'$rdg_completa'";
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "COMPLETA='$rdg_completa'";
} else {
	if ($campos_valores != '') {
		$campos_valores .= ',';
	}
	$campos_valores .= "COMPLETA=NULL";
}

$sql_string = "INSERT INTO VENDAS ($campos) VALUES ($valores)";

$sql_venda = "SELECT * FROM VENDAS WHERE ID=$hdn_id_venda";
$venda = mysql_query($sql_venda,$conexao);
$existe = false;
if (@mysql_num_rows($venda) > 0) {
	$existe = true;
	$sql_string = "UPDATE VENDAS SET $campos_valores WHERE ID=$hdn_id_venda";
}
@mysql_free_result($venda);

if (mysql_query($sql_string,$conexao)) {
	$foi = 'cadastrada';
	$erro = true;
	if ($existe == true) {
		$foi = 'atualizada';

		$sql_itens = "SELECT * FROM ITENS WHERE ID_TIPO=2 AND ID_TABELA=$hdn_id_venda";
		$itens = mysql_query($sql_itens);
		$tem_item = false;
		if (@mysql_num_rows($itens) > 0) {
			$tem_item = true;
			for  ($n = 0; $n < @mysql_num_rows($itens); $n++) {
				$txt_quantidade_item = @$_POST['txt_quantidade_' . mysql_result($itens,$n,'ID')];
				if ($txt_quantidade_item != '') {
					$id_produto = mysql_result($itens,$n,'ID_PRODUTO');
					$txt_preco_item = @$_POST['txt_preco_' . mysql_result($itens,$n,'ID')];
					$txt_desconto_item = @$_POST['txt_desconto_' . mysql_result($itens,$n,'ID')];
					$txt_total_item = @$_POST['txt_total_' . mysql_result($itens,$n,'ID')];

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

					if ($txt_quantidade_item != '') {
						if ($campos != '') {
							$campos .= ',';
						}
						$campos .= 'QUANTIDADE';
						if ($valores != '') {
							$valores .= ',';
						}
						$valores .= "'$txt_quantidade_item'";
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "QUANTIDADE='$txt_quantidade_item'";
					} else {
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "QUANTIDADE=NULL";
					}

					if ($txt_preco_item != '') {
						if ($campos != '') {
							$campos .= ',';
						}
						$campos .= 'PRECO';
						if ($valores != '') {
							$valores .= ',';
						}
						$valores .= "'$txt_preco_item'";
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "PRECO='$txt_preco_item'";
					} else {
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "PRECO=NULL";
					}

					if ($txt_desconto_item != '') {
						if ($campos != '') {
							$campos .= ',';
						}
						$campos .= 'DESCONTO';
						if ($valores != '') {
							$valores .= ',';
						}
						$valores .= "'$txt_desconto_item'";
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "DESCONTO='$txt_desconto_item'";
					} else {
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "DESCONTO=NULL";
					}

					if ($txt_total_item != '') {
						if ($campos != '') {
							$campos .= ',';
						}
						$campos .= 'TOTAL';
						if ($valores != '') {
							$valores .= ',';
						}
						$valores .= "'$txt_total_item'";
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "TOTAL='$txt_total_item'";
					} else {
						if ($campos_valores != '') {
							$campos_valores .= ',';
						}
						$campos_valores .= "TOTAL=NULL";
					}

					$sql_atualizar = "UPDATE ITENS SET $campos_valores WHERE ID_TIPO=$tipo AND ID_PRODUTO=$id_produto AND ID_TABELA=$hdn_id_venda";
					if (mysql_query($sql_atualizar,$conexao)) {
						$erro = false;
					}
				}
			}
		} else {
			$erro = false;
		}
		@mysql_free_result($itens);
	} else {
		$sql_venda = "SELECT * FROM VENDAS ORDER BY ID DESC";
		$venda = mysql_query($sql_venda,$conexao);
		$id_venda = @mysql_result($venda,0,'ID');
		@mysql_free_result($venda);
	}
	$msg = "Venda $foi com sucesso.";
	if ($tem_item == true) {
		if ($erro == false) {
			$msg .= " Ítens atualizados com sucesso.";
		} else {
			$msg .= " Ocorreu algum erro ao atualizar ítens.";
		}
	} else {
		$msg .= " Não há item cadastrado para esta venda.";
	}
} else {
	$executar = 'cadastrar';
	if ($existe == true) {
		$executar = 'atualizar';
	}
	$msg = "Ocorreu um erro ao $executar venda.";
}

@mysql_free_result($tbl_status);
@mysql_close($conexao);

$redir = '';
if ($hdn_id_venda != '') {
	$redir = "&id_venda=$hdn_id_venda";
}
if (@$id_venda != '') {
	$redir = "&id_venda=$id_venda";
}

$pag = 'venda_editar';
$hdn_pag = trim(@$_POST['hdn_pag']);
if ($hdn_pag != '') {
	$pag = $hdn_pag;
}

header("Location: $pag.php?msg=" . urlencode($msg) . $redir);
?>
