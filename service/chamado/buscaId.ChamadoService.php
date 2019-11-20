<?php

header('Content-Type' . "text/json");

require_once '../../dao/class.ChamadoDao.php';

$cdao = new ChamadoDao();

$id = $_POST['id'];

echo $cdao->buscarPorId($id);