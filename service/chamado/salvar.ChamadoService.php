<?php

require_once '../../model/class.Chamado.php';
require_once '../../model/class.Pessoa.php';
require_once '../../dao/class.ChamadoDao.php';

$id = $_REQUEST['id'] == '' ? null : $_REQUEST['id'];
$titulo = $_REQUEST['titulo'];
$data = $_REQUEST['data'];
$urgencia = $_REQUEST['urgencia'];
$descricao = $_REQUEST['descricao'];
$idRequerente = $_REQUEST['idRequerente'];
$idTecnico = $_REQUEST['idTecnico'];

$Requerente = new Pessoa($idRequerente, '', '', '', '', '');
$Tecnico = new Pessoa($idTecnico, '', '', '', '', '');
$Chamado = new Chamado($id, $titulo, $data, $urgencia, $descricao, $Requerente, $Tecnico);

$dao = new ChamadoDao();

echo $dao->salvar($Chamado);
