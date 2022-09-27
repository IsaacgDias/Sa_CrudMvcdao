<?php

require_once('../config/Conexao.php');
require_once('../dao/FeedbackDao.php');
require_once('../model/Feedback.php');
require_once('../dao/ProdutoDao.php');
require_once('../model/Produto.php');

$feedback = new Feedback();
$feedbackdao = new FeedbackDao();
$produto = new Produto();
$produtodao = new ProdutoDao();

$dados = filter_input_array(INPUT_POST);

if(isset($_POST['feeba'])){
  
    $feedback->setNome($dados['nome']);
    $feedback->setIDA($dados['usu']);
    $feedback->setIDU($dados['produ']);
    $feedback->setAvalia($dados['avaliacao']);
    $feedback->setComment($dados['comentario']);
   

    if($feedbackdao->feedback($feedback)) {

    echo "<script>
            alert('Feedback Enviado com sucesso!!');
            location.href = '../';
          </script>";
    }else{
        "<script>
            alert('Alguma coisa deu errado');
        </script>";
    }
 }
 
?>