<?php

header('Content-Type' . "text/json");

require_once '../../dao/class.ChamadoDao.php';

$cdao = new ChamadoDao();

echo $cdao->listar();