<?php

class Feedback{
    
    private $id_usuario;
    private $id_produto;
    private $nome;
    private $preco;
    private $marca;
    private $avaliacao;
    private $comentario;
    
    
    function getIDA() {
        return $this->id_usuario;
    }
    function getIDU() {
        return $this->id_produto;
    }
    function getNome(){
        return $this->nome;
    }
    function getPreco(){
        return $this->preco;
    }
    function getMarca(){
        return $this->marca;
    }
    function getAvalia(){
        return $this->avaliacao;
    }
    function getComent(){
        return $this->comentario;
    }

    function setIDA($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    function setIDU($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function setPreco($preco) {
        $this->preco = $preco;
    }
    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setAvalia($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    function setComment($comentario) {
        $this->comentario = $comentario;
    }

    
    
}