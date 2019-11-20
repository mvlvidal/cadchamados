<?php

include 'class.Conexao.php';

class PessoaDao extends Conexao{

    public function salvar($Pessoa){

        $id = $Pessoa->getId();
        $nome = $Pessoa->getNome();
        $email = $Pessoa->getEmail();
        $cpf = $Pessoa->getCpf();
        $ativo = $Pessoa->getAtivo();
        $tipo = $Pessoa->getTipo();
        
        $conn = $this->conectar();

        if($Pessoa->getId() == null){

            $sql = 'INSERT INTO pessoa (nome, email, cpf, ativo, tipo) VALUES (?,?,?,?,?)';
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2,$email);
            $stmt->bindParam(3,$cpf);
            $stmt->bindParam(4,$ativo);
            $stmt->bindParam(5,$tipo);

            if($stmt->execute()){
                echo 'Inserido com sucesso!';
            }else{
                echo 'Erro ao tentar inserir';
            }

        }else{

            $sql = 'UPDATE pessoa SET nome = ?, email = ?, cpf = ?, ativo = ?, tipo = ? WHERE id = ?';
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $nome);
            $stmt->bindParam(2,$email);
            $stmt->bindParam(3,$cpf);
            $stmt->bindParam(4,$ativo);
            $stmt->bindParam(5,$tipo);
            $stmt->bindParam(6,$id);

            if($stmt->execute()){
                echo 'Atualizado com sucesso!';
            }else{
                echo 'Erro ao tentar atualizar!';
            }
        }

    }

    public function listar(){

        $conn = $this->conectar();

        $sql = 'SELECT * FROM pessoa';

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    public function listarRequerentes(){

        $conn = $this->conectar();

        $sql = "SELECT * FROM pessoa WHERE tipo = 'r' ";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    public function listarTecnicos(){

        $conn = $this->conectar();

        $sql = "SELECT * FROM pessoa WHERE tipo = 't' ";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();

        echo json_encode($result, JSON_PRETTY_PRINT);
    }

    public function buscarPorId($id){

        $conn = $this->conectar();

        $sql = 'SELECT * FROM pessoa WHERE id = ?';

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(1, $id);

        $stmt->execute();

        $result = $stmt->fetch();

        echo json_encode($result, JSON_PRETTY_PRINT); 
    }

}