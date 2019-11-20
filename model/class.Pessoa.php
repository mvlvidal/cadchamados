<?php

class Pessoa{

    private $id;
    private $nome;
    private $email;
    private $cpf;
    private $ativo;
    private $tipo;

    public function __construct($id, $nome, $email, $cpf, $ativo, $tipo){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->ativo = $ativo;
        $this->tipo = $tipo;
    }

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getAtivo(){
        return $this->ativo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

}