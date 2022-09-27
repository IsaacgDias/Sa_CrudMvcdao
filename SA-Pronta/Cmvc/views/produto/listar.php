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
        <title> Listar Usuários </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style> 

            body{

                background-color: #F0F8FF;

            }

            img {
                width: 100px;
                height: 80px;
            
            }

            table{
                border-spacing: 0px;
                background-color:#fff;
            }

            /* responsividade */

            @media (max-width: 1100px) {

               
                table{
                    width: 100%;
                }

                td{
                    padding: 5px;
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
                main{

                    float: left;
                    scale: 0.5;
                    margin-left: -100px;
                }
            }

            @media (max-width: 600px) {

                main{

                float: left;
                scale: 0.5;
                margin-left: -200px;
                
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
    <body>
        <h2 align="center"> Listar Produtos - <a href="../../"> voltar </a> </h2>

        <main align="center" class="container-fluid table-striped">
        <table border="1" style="border:4px solid #09A; width:800px;" class="table">
            <tr style="background-color:#7FF;">
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
                <td > <img class="container" src="../../img/<?= $produto->getImg()?>" alt="<?= $produto->getImg()?>"/></td>
                <td style="text-align:center;">
                    <form action="../../controller/ProdutoController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $produto->getID() ?>"/>
                        <input type="hidden" id="del_img" name="del_img" value="<?= $produto->getImg() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="EXCLUIR" style="margin-bottom:-15px; background-color:#E23;" onclick="return deletar()"/>
                    </form>
                </td>
                <td style="text-align:center;"> 
                    <form action="../alterar" method="post" name="edit">
                        <input type="hidden" id="id_edit" name="id_edit" value="<?= $produto->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="EDITAR" style="margin-bottom:-15px; background-color:#2E3;"/>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
        </main>
    </body>
</html>