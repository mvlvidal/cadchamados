<?php

class Conexao{
    protected $dsn = 'mysql:host=localhost;dbname=dbchamados;charset=utf8';
    protected $user = 'root';
    protected $pass = '';

    public function conectar(){
    
        try{

            $pdo = new PDO($this->dsn,$this->user,$this->pass);

        }catch(PDOException $ex){
            echo 'Erro: '.$ex->getMessage();
        }
    
        return $pdo;
    }

}
