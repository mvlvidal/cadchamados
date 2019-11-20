<?php

require_once '../../model/class.Pessoa.php';
require_once '../../dao/class.PessoaDao.php';

$id = $_POST['pId'] == '' ? null : $_POST['pId'];
$nome = $_POST['pNome'];
$email = $_POST['pEmail'];
$cpf = $_POST['pCpf'];
$ativo = $_POST['pAtivo'];
$tipo = $_POST['pTipo'];

$p = new Pessoa($id, $nome, $email, $cpf, $ativo, $tipo);

$dao = new PessoaDao();

echo $dao->salvar($p);
