<?php

header('Content-Type' . "text/json");

require_once '../../dao/class.PessoaDao.php';

$pdao = new PessoaDao();

$id = $_POST['id'];

echo $pdao->buscarPorId($id);