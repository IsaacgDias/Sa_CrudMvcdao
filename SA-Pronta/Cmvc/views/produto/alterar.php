<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/ProdutoDao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Produto.php');

//instancia as classes
$produto = new Produto();
$produtodao = new ProdutoDao();

$login = new UserDao();

$id = $_SESSION['user_session'];

if(!$login->checkLogin()|| $id != 1) {
    header("Location: ../login");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Alterar Produto </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script type="text/javascript">
   	
        var mostrarImg = function(event) {
            var ler = new FileReader();
            ler.onload = function(){
                var mostrar = document.getElementById('mostrar');
                mostrar.src = ler.result;
            }
        ler.readAsDataURL(event.target.files[0]);
        }
        
    </script>
 
    <style type="text/css">
        
         #mostrar {
             width: 140px;
             height: 120px;
             margin: 10px;
             border: 1px dashed #CCC;
         }
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
height: 920px;
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
    width:800px;
    height:400px;
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
</head>
<body>
    
    

    
<div class="container-fluid">
        <main id="maini">
            <div class="container-fluid">
    
        <?php foreach ($produtodao->editar() as $produto) : ?>

            <form action="../../controller/ProdutoController.php" method="post" enctype="multipart/form-data" name="alter_pro">
                <div id="login">
                    <h3>Alterar Produto</h3>
                <label> Nome: </label>
                <input type="hidden" id="id_alter" name="id_alter" value="<?= $produto->getID() ?>" />
                <input type="text" id="nome" name="nome" value="<?= $produto->getNome() ?>" required />
                </div>
                <div id="login">
                <label> Preço: </label>
                <input type="text" id="preco" name="preco" value="<?= $produto->getPreco() ?>" required />
                </div>
                <div id="login">
                <label> Marca: </label>
                <input type="text" id="marca" name="marca" value="<?= $produto->getMarca() ?>" required />
                </div>
                <div id="login">
                <label> Quantidade: </label>
                <input type="number" id="qtd" name="qtd" value="<?= $produto->getQuantidade() ?>" required />
                </div>
                <div id="login">
                <label> Imagem: </label> <br/>
                <img id="mostrar" alt=""> <br/>
                <input type="hidden" id="del_img" name="del_img" value="<?= $produto->getImg() ?>"/>
                <input type="file" name="img" id="img" required onchange="mostrarImg(event)">
                </div>
                <div id="login">
                <input type="submit" id="alterar" name="alterar" value="ALTERAR" />
                <button> <a href="../produto/listar_admin.php" style="text-decoration:none;"> VOLTAR </a> </button>
                </div>
            </form>
        <?php endforeach ?>
        </div>
        </main>
    </div>


</body>
</html>