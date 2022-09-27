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

if(!$login->checkLogin()) {
    header("Location: ../login");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Produtos </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <script type="text/javascript"></script>
       

        <style> 
            img {
                width: 100px;
                height: 80px;
            }
            table{
            border-spacing: 0px;
            background-color:#fff;
            }

            td{
            padding: 10px;
            }
            .i{
               background-color: #7B68EE;
            }
            header{
            border: 1px solid #000;
            width: 100%;
            height:150px;
            background-color: rgb(122, 63, 198);
            border-radius:5px;
            }
            header > ul{
                margin-right:210px;
            }
            header > ul > li{
            display: inline;
            margin: auto;
             
            }
            #se{

            border: 0px solid #000;
            width:150px;
            height:100px;
            margin: 0 auto;
            margin-top: -60px;
            
            }
            h2{
                font-size: 33pt;
            }
            #imagee{
                width: 150px;
                height: 150px; 
                margin: 0 auto;
                margin-left: 60px;   
            }
            .inpu{
              border-radius:9px;
                   
            }

            /* responsividade */

            @media (max-width: 800px) {

                header img{

                    display: none;

                }

                header{
                    height: 100px;
                }
    
                #se{
                    display: none;
                }
                h2{
                    font-size: 20pt;
                }

                table{

                    width: 50%;

                }

                img{
                    width: 50px;
                    height: 40px;
                }

                th{

                    font-size: 10pt;

                }

            }
        

            @media(max-width: 500px){

                header{
                    width: 100%;
                }
    
                #se{
                    display: none;
                }
                h2{
                    font-size: 20pt;
                }

                table{

                    width: 100%;

                }

                img{
                    width: 50px;
                    height: 40px;
                }

                th{

                    font-size: 10pt;

                }



            }

            .inpu:hover{
              border-radius:9px;
                   
            }
        </style>
        <script>

            function deletar() {
                ok = confirm("Tem certeza que deseja deletar estes dados??");
                if(ok){
                    return true;
                } else {
                    return false;
                }
            }

        </script>
    </head>
    <body>
    <header>
        <ul>
            <li class="li"><a href="../../"><h3>Voltar</h3></a></li>
            <div class="container-fluid">
            <section id="se">
                <img src="../../img/imagemeletro.jpg" id="imagee">
            </section> 
            </div>                
        </ul>
        
    </header>
    <main class="container-fluid">
        <h2 align="center"> Produtos FeedBack  </h2>
        <form action="" method="post" name="cad">
                   <!--
                   <label> ID do Produto </label>
                      <input type="number" name="id" id="id"/>  
                      <select id="ssl" name="ssl">
                    <option value="" selected="selected">--Selecione--</option>
                    <option value="A"> Muito Bom </option>
                    <option value="B"> Regular </option>
                    <option value="C"> Ruim </option>
                    </select>
                    <br/>
                    <label>FeedBack</label>
                    <textarea type="text" id="texto" name="texto">Digite aqui a sua opnião</textarea> -->
        </form>
        <table class="table table-bordered" border="1" bordercolor="black" style="margin:0 auto; border:1px solid #000; width:900px;">
            <tr style="background-color:#939;" align="center">
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Imagem</th>
                <th>FeedBack</th>
            </tr>
            <?php foreach ($produtodao->listar() as $produto) : ?>
            <tr>
                <td><?= $produto->getID() ?></td>
                <td><?= $produto->getNome() ?></td>
                <td><?= $produto->getPreco() ?></td>
                <td><?= $produto->getMarca() ?></td>
                <td> <img src="../../img/<?= $produto->getImg() ?>" alt="<?= $produto->getImg()?>"/></td>
                <td>
                  <form action="feedback.php" method="post" name="edit">
                        <input type="hidden" id="feed" name="feed" value="<?= $produto->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="feedback" style="margin-bottom:-15px; background-color:#6495ED;"/>
                    </form>
                
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </main>
    </body>
</html>