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

if(!$login->checkLogin() || $id != 1) {
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style> 
            img {
                width: 100px;
                height: 80px;
                margin: 0 auto;
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

            border: 1px solid #000;
            width:150px;
            height:150px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -60px;
            
            }
            h2{
                font-size: 33pt;
            }
            #imagee{
                margin: 0 auto;
                width: 150px;
                height: 150px;    
                
            }
            .inpu{
              border-radius:9px;
                   
            }

            /* responsividade */

            @media (max-width: 800px) {

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
        

            @media(max-width: 600px){

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

                main{

                    scale: 0.5;

                }

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
    <body class="i">
    <header class="container-fluid">
    <a href="../../"><h3>Voltar</h3></a>
            <section id="se">
                <img src="../../img/imagemeletro.jpg" id="imagee" style="margin: 0 auto; float: center;">
            </section>                             
        
        
    </header>
        
        <h2 align="center">PRODUTOS</h2>

        <main class="container-fluid">
        <table class="table container table-bordered" style="margin:0 auto; border:1px solid #000;  width:900px; ">
            <tr align="center" style="background-color:#7B98EE;">
                <th>ID</th>
                <th>Nome</th>        
                <th>Preço</th>        
                <th>Marca</th>       
                <th>Quantidade</th>       
                <th>Imagem</th>
               
                <th colspan="2">Ações</th>
            </tr>
            <?php foreach ($produtodao->listar() as $produto) : ?>
            <tr>
                <td><?= $produto->getID() ?></td>
                <td><?= $produto->getNome() ?></td>
                <td><?= $produto->getPreco() ?></td>
                <td><?= $produto->getMarca() ?></td>
                <td><?= $produto->getQuantidade() ?></td>
                
                <td> <img src="../../img/<?= $produto->getImg()?>" alt="<?= $produto->getImg()?>"/></td>
                <td style="text-align:center;">
                    <form action="../../controller/ProdutoController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $produto->getID() ?>"/>
                        <input type="hidden" id="del_img" name="del_img" value="<?= $produto->getImg() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="EXCLUIR" class="inpu" style="margin-bottom:-15px; background-color:#FF0000;" onclick="return deletar()"/>
                    </form>
                </td>
                <td style="text-align:center;"> 
                    <form action="../produto/alterar.php" method="post" name="edit">
                        <input type="hidden" id="id_edit" name="id_edit" value="<?= $produto->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="EDITAR" class="inpu" style="margin-bottom:-15px; background-color:#ADFF2F;"/>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
        </main>
    </body>
</html>