<?php

header('Content-Type' . "text/json");

require_once '../../dao/class.PessoaDao.php';

$pdao = new PessoaDao();

echo $pdao->listarTecnicos();