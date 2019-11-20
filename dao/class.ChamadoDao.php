<?php

include 'class.Conexao.php';

class ChamadoDao extends Conexao{

    public function salvar($Chamado){

        $conn = $this->conectar();

        $id = $Chamado->getId();
        $titulo = $Chamado->getTitulo();
        $data = $Chamado->getData();
        $urgencia = $Chamado->getUrgencia();
        $descricao = $Chamado->getDescricao();
        $requerente = $Chamado->getRequerente();
        $tecnico = $Chamado->getTecnico();
        $idRequerente = $requerente->getId();
        $idTecnico = $tecnico->getId();

        if($id == null){

            $sql = 'INSERT INTO chamado (titulo, data, urgencia, descricao, idRequerente, idTecnico) VALUES (?,?,?,?,?,?)';

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $titulo);
            $stmt->bindParam(2, $data);
            $stmt->bindParam(3, $urgencia);
            $stmt->bindParam(4, $descricao);
            $stmt->bindParam(5, $idRequerente);
            $stmt->bindParam(6, $idTecnico);

            if($stmt->execute()){
                echo 'Chamado cadastrado com sucesso!';
            }else{
                echo 'Erro ao tentar cadastrar chamado!';
            }

        }else{

            $sql = 'UPDATE chamado SET titulo = ?, data = ?, urgencia = ?, descricao = ?, idRequerente = ?, idTecnico = ? WHERE id = ?';

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $titulo);
            $stmt->bindParam(2, $data);
            $stmt->bindParam(3, $urgencia);
            $stmt->bindParam(4, $descricao);
            $stmt->bindParam(5, $idRequerente);
            $stmt->bindParam(6, $idTecnico);
            $stmt->bindParam(7, $id);

            if($stmt->execute()){
                echo 'Chamado atualizado com sucesso!';
            }else{
                echo 'Erro ao tentar atualizar chamado!';
            }
        }
        
    }

    public function buscarPorId($id){

        $conn = $this->conectar();

        $sql = 'SELECT * FROM chamado WHERE id = ?';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();

        $result = $stmt->fetch();

        echo json_encode($result, JSON_PRETTY_PRINT);

    }

    public function listar(){

        $conn = $this->conectar();

        $sql = 'SELECT a.id, a.titulo, a.data, a.urgencia, a.descricao, b.nome AS nomeReq, c.nome AS nomeTec FROM chamado a 
        JOIN pessoa AS b ON a.idRequerente = b.id
        JOIN pessoa AS c ON a.idTecnico = c.id';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        echo json_encode($result, JSON_PRETTY_PRINT);

    }

    public function deletar($id){
        
        $conn = $this->conectar();

        $sql = 'DELETE FROM chamado WHERE id = ?';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id);
        
        if($stmt->execute()){
            echo 'Chamado deletado com sucesso!';
        }else{
            echo 'Erro ao tentar deletar chamado!';
        }

    }

}