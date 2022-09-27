<?php 

// session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/FeedbackDao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Feedback.php');

//instancia as classes
$feedback = new Feedback();
$feedbackdao = new FeedbackDao();

//  $login = new UserDao();

//  if(!$login->checkLogin()) {
//      header("Location: ../login");
// }


?>
<style> 
.navLogin{

background-color: #9254c8;
width: 100%;
height: 70px;
display: block;
position: block;

}

#maini{

border: 0px groove black;
border-radius: 5px;
width: 400px;
height: 100%;
margin: 0 auto;
margin-top: 50px;
background-color: rgba(177, 177, 177, 0.308);
}

#login{

width: 200px;
margin: 0 auto;
border: 0px solid black;
position: relative;
margin-top: 60px;
scale: 1.2;
margin-left: 30px;
}

#login input{

width: 300px;
height: 30px;
margin: 0 auto;
margin-top: 10px;
border: 1px solid black;
border-radius: 5px;
}

#botaoEnviar{

margin: 0 auto;
margin-top: 20px;

}
header{
    border: 1px solid rgb(250, 245, 245);
    width: 100%;
    height:100px;
    background-color: rgb(125, 63, 198);
    border-radius:5px;
}
main{
    
    border: 1px solid #000;
    width:900px;
    height:700px;
    margin: 0 auto;
    margin-top:50px;
      
}
header > ul{
    margin-right:210px;
}
header > ul > li{
    display: inline;
    margin: auto;
    
    
}
header > ul > li > a:hover {
    
    background-color: #8470FF;
    box-shadow: 2px 2px 4px #000;
    border-radius: 5px;
    transition: all, 0.2s;
}
header > ul > li > a{
    color:black;
    font-weight:bolder;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 12px;
    line-height:50px;
    border-radius:5px;
}
.lii{
    float:right;
}
.liii{
    margin-left:40px;
    float:right;
}
img{
    width:100%;
    height:100%;

}

</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Avaliações </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
<body> 
<header>
        <ul>
            <li class="li"><a href="../produto/feedruim.php">Mal Avaliados</a></li>
            <li class="li"><a href="../produto/feedregular.php">Regular</a></li>
            <li class="li"><a href="../produto/feedbons.php">Bons a Avaliados </a></li>
            <li class="li"><a href="../../">Ir para o menu </a></li>
            
        </ul>
    </header>
<h2 align="center">Toda as Avaliações</h2>

<table  style="margin:0 auto; border:1px solid #000;  width:900px; ">
    <tr align="center" style="background-color:#7B98EE;">
        <th>ID do Produto</th>
        <th>ID do Usuario</th>
        <th>Nome do Produto</th>        
        <th>Clasificção</th>        
        <th>Comentario</th>       
    </tr>
    <?php foreach ($feedbackdao->listarBack() as $feedback) : ?>
    <tr>
        <td><?= $feedback->getIDA() ?></td>
        <td><?= $feedback->getIDU() ?></td>
        <td><?= $feedback->getNome() ?></td>
        <td><?= $feedback->getAvalia() ?></td>
        <td><?= $feedback->getComent() ?></td>
        
    </tr>
    <?php endforeach ?>
</table>
</body>
</html>