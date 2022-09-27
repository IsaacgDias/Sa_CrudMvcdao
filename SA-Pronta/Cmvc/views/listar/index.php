<?php 

session_start();

require_once('../../config/Conexao.php');
require_once('../../dao/UserDao.php');
require_once('../../model/Usuario.php');

//instancia as classes
$usuario = new Usuario();
$userdao = new UserDao();

$login = new UserDao();

$id = $_SESSION['user_session'];

if(!$login->checkLogin() || $id != 1) {
    header("Location: ../login");
}

?>
<style>
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
            width:200px;
            height:90px;
            margin: 0 auto;
            margin-right:365px;
            border-radius: 10px;
           
            
            }
            h2{
                font-size: 33pt;
            }
            #imagee{
                width: 100%;
                height: 100%;    
            }
            .inpu{
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
    </head>
    <body>
    <header>
        <ul>
            <li class="li"><a href="../../"><h3>Voltar</h3></a></li>
            <section id="se">
                <img src="../../img/imagemeletro.jpg" id="imagee">
                
            </section>                             
        </ul>
        
    </header>
       <br/>

        <table border="1" style="margin:0 auto; border:4px solid #000; width:800px;" class="table">
            <tr style="background-color:#7B98EE;" align="center">
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php foreach ($userdao->listar() as $usuario) : ?>
            <tr>
                <td><?= $usuario->getID() ?></td>
                <td><?= $usuario->getNome() ?></td>
                <td><?= $usuario->getCPF() ?></td>
                <td><?= $usuario->getEmail() ?></td>
                <td><?= $usuario->getTelefone() ?></td>
                <td><?= $usuario->getSexo()?></td>
                <td style="text-align:center;">
                    <form action="../../controller/UsuarioController.php" method="post" name="del">
                        <input type="hidden" id="id_del" name="id_del" value="<?= $usuario->getID() ?>"/>
                        <input type="submit" id="excluir" name="excluir" value="EXCLUIR" class="inpu" style="margin-bottom:-15px; background-color:#FF0000;" onclick="return deletar()"/>
                    </form>
                </td>
                <td style="text-align:center;"> 
                    <form action="../alterar/" method="post" name="edit">
                        <input type="hidden" id="id_edit" name="id_edit" value="<?= $usuario->getID() ?>"/>
                        <input type="submit" id="editar" name="editar" value="EDITAR" class="inpu" style="margin-bottom:-15px; background-color:#ADFF2F;"/>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>