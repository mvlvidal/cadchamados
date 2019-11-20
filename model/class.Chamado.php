<?php

class Chamado{

    private $id;
    private $titulo;
    private $data;
    private $urgencia;
    private $descricao;
    private $requerente;
    private $tecnico;

    public function Chamado($id, $titulo, $data, $urgencia, $descricao, $Requerente, $Tecnico){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->data = $data;
        $this->urgencia = $urgencia;
        $this->descricao = $descricao;
        $this->requerente = $Requerente;
        $this->tecnico = $Tecnico;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getUrgencia(){
        return $this->urgencia;
    }

    public function setUrgencia($urgencia){
        $this->urgencia = $urgencia;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getRequerente(){
        return $this->requerente;
    }

    public function setRequerente($Requerente){
        $this->requerente = $Requerente;
    }

    public function getTecnico(){
        return $this->tecnico;
    }

    public function setTecnico($Tecnico){
        $this->tecnico = $Tecnico;
    }

}