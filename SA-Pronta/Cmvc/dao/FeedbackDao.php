<?php

class FeedbackDao {

    public function feedback(Feedback $feedback) {
        try {

            $sql = "INSERT INTO feedback(id_usuario, id_produto, nome, avaliacao, comentario) VALUES (:id_usuario, :id_produto, :nome, :avaliacao, :comentario)";

            $stmt = Conexao::getConexao()->prepare($sql);
            $stmt->bindValue(":id_usuario", $feedback->getIDA(), PDO::PARAM_STR);
            $stmt->bindValue(":id_produto", $feedback->getIDU(), PDO::PARAM_STR);
            $stmt->bindValue(":nome", $feedback->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(":avaliacao", $feedback->getAvalia(), PDO::PARAM_STR);
            $stmt->bindValue(":comentario", $feedback->getComent(), PDO::PARAM_STR);
     
            return $stmt->execute();

        } catch (PDOException $e) {
            echo "Erro ao Inserir Feedback <br>" . $e->getMessage() . '<br>';
        }
    }
    
    public function listarBack() {
        try {
            $sql = "SELECT * FROM feedback";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listafeedback($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }
    private function listafeedback($linhas) {

        $feedback = new Feedback();
        $feedback->setIDA($linhas['id_usuario']);
        $feedback->setIDU($linhas['id_produto']);
        $feedback->setNome($linhas['nome']);
        $feedback->setAvalia($linhas['avaliacao']);
        $feedback->setComment($linhas['comentario']);

        return $feedback;
    }
    public function listarBonsAva() {
        try {
            $sql = "SELECT * FROM feedback WHERE avaliacao = 'A' ";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listabons($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }
    private function listabons($linhas) {

        $feedback = new Feedback();
        $feedback->setIDA($linhas['id_usuario']);
        $feedback->setIDU($linhas['id_produto']);
        $feedback->setNome($linhas['nome']);
        $feedback->setAvalia($linhas['avaliacao']);
        $feedback->setComment($linhas['comentario']);

        return $feedback;
    }
    public function listarRegularAva() {
        try {
            $sql = "SELECT * FROM feedback WHERE avaliacao = 'B' ";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaregular($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }
    private function listaregular($linhas) {

        $feedback = new Feedback();
        $feedback->setIDA($linhas['id_usuario']);
        $feedback->setIDU($linhas['id_produto']);
        $feedback->setNome($linhas['nome']);
        $feedback->setAvalia($linhas['avaliacao']);
        $feedback->setComment($linhas['comentario']);

        return $feedback;
    }
    public function listarRuimAva() {
        try {
            $sql = "SELECT * FROM feedback WHERE avaliacao = 'C' ";
            $stmt = Conexao::getConexao()->query($sql);
            $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $list = array();

            foreach ($lista as $linha) {
                $list[] = $this->listaruim($linha);
            }

            return $list;

        } catch (PDOException $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." . $e->getMessage();
        }
    }
    private function listaruim($linhas) {

        $feedback = new Feedback();
        $feedback->setIDA($linhas['id_usuario']);
        $feedback->setIDU($linhas['id_produto']);
        $feedback->setNome($linhas['nome']);
        $feedback->setAvalia($linhas['avaliacao']);
        $feedback->setComment($linhas['comentario']);

        return $feedback;
    }
 } 

 
?>