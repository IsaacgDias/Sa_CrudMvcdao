<?php 

// session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/ProdutoDao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');
require_once('../../model/Produto.php');

//instancia as classes
$produto = new Produto();
$produtodao = new ProdutoDao();
$usuario = new Usuario();
$userdao = new UserDao();


// $login = new UserDao();

// $id = $_SESSION['user_session'];

// if(!$login->checkLogin()|| $id != 1) {
//     header("Location: ../login");
// }

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
height: 1000px;
margin: 0 auto;
margin-top: 50px;
background-color: rgba(177, 177, 177, 0.308);
}
#login{

width: 200px;
margin: 0 auto;
border: 0px solid black;
position: relative;
margin-top: 20px;
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



    </style>
</head>
<body>
    
    

    
<div class="container-fluid">
        <main id="maini">
            <div class="container-fluid">
            <?php foreach ($produtodao->editar() as $produto) : ?>
                
                <h3>Informações Do Produto</h3>
                <div id="login">
                <label> Id do produto: </label>
                <input type="text" id="id_alter" name="id_alter" value="<?= $produto->getID() ?>" disabled />
                <label>Nome do Produto </label>
                <input type="text" id="nomae" name="naome" value="<?= $produto->getNome() ?>" disabled />
                </div>
                <div id="login">
                <label> Preço: </label>
                <input type="text" id="prseco" name="pareco" value="<?= $produto->getPreco() ?>" disabled />
                </div>
                <div id="login">
                <label> Marca: </label>
                <input type="text" id="mafrca" name="marcad" value="<?= $produto->getMarca() ?>" disabled />
                </div>
                    
                <?php endforeach ?>
            
            <?php foreach ($produtodao->editar() as $produto) : ?>

<form action="../../controller/FeedbackController.php" method="post" enctype="multipart/form-data" name="alter_pro">
    <div id="login">
        <h2>FeedBack Do Produto</h2>
    <label> Nome do Produto: </label>
    <input type="text" id="nome" name="nome"  required />
    </div>
    <div id="login">
    <label> Qual eo seu id: </label>
    <input type="text" id="usu" name="usu"  required />
    </div>
    <div id="login">
    <label> Qual eo id do produto: </label>
    <input type="text" id="produ" name="produ"  required />
    </div>
    
   
    <div id="login">
    <!-- <label> Imagem: </label> <br/>
    <img id="mostrar" alt=""> <br/>
    <input type="hidden" id="del_img" name="del_img" value="<?= $produto->getImg() ?>"/>
    <input type="file" name="img" id="img" required onchange="mostrarImg(event)">
        </div>
        </main>
    </div>   -->
  
    <label>O quão bom eo produto</label>
                    <select id="avaliacao" name="avaliacao">
                    <option value="" selected="selected">--Selecione--</option>
                    <option value="A"> Muito Bom </option>
                    <option value="B"> Regular </option>
                    <option value="C"> Ruim </option>
                    </select>
                    <br/>
                    <label>Comentário</label>
                    <textarea type="text" id="comentario" name="comentario" placeholder="Digite aqui sua opnião"></textarea>

                    <input type="submit" id="feeba" name="feeba" value="ENVIAR" />
                    
                    <a href="../../"><h3>Voltar</h3>
                    
                </form> 
      
 <?php endforeach ?>
  
 </div>

</main>
</div>   
                   
</body>
</html>