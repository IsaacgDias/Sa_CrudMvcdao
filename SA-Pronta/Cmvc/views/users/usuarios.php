<?php 


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Usuario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='usuario.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
header{
    border: 1px solid rgb(250, 245, 245);
    width: 100%;
    height:100px;
    background-color: rgb(122, 63, 198);
    border-radius:5px;
    opacity: 0.8;
}
main{
    border: 1px solid #000;
    height:400px;
    margin: 0 auto;
    margin-top:50px;
    background-color: rgb(0,0,139);
    border-radius:20px;
    width: 100%;
    height: 50%;
    opacity: 0.8;
    
}

main > ul > li{
   margin-left: 200px;
 
}
main > ul > li{
    display: inline;
       
}
main > ul > li > a:hover {
    
    background-color: rgb(71, 71, 165);
    box-shadow: 2px 2px 4px #000;
    border-radius: 5px;
    transition: all, 0.2s;
    
    
}
main > ul > li > a{
    color:#fff;
    font-weight:bolder;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 20px;
    line-height:300px;
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
h1{
    font-family:Arial, Helvetica, sans-serif;
    font-size: 30pt;
  
    
}

ul{

    margin: 0 auto;
    margin-right: 150px;
}

@media (max-width: 1100px) {

    main{
        width: 100%;
        height: 100%;
        margin: 0 auto;
        margin-top:50px;
        background-color: rgb(0,0,139);
        border-radius:20px;
        width: 100%;
        height: 50%;
        opacity: 0.8;
        
    }
    main > ul > li{
        margin-left: 0px;
        margin-top: 20px;
    }
    main > ul > li > a{
        padding: 10px;
        line-height: 100px;
    }
    h1{
        font-size: 20pt;
    }

    table{

        scale: 0.5;
    }

}

</style>
</head>
<body style="background-image: url(img/hd-wallpaper-gdb043e7ae_1920.jpg); width:100%; height:100%;">
    
    
    <header class="container-fluid">
            <h1 align="center">Eletro-Info - FeedBack</h1>
    </header>
    
        <main align="center" class="container-fluid" style="margin: 0 auto;">
            <table class="container">
            <ul style="font-size: 30px;">
                <li class="li"><a href="views/produto/listar_feed.php">Avaliações</a></li>
                <li class="li"><a href="views/produto/listar_user.php">Produtos</a></li>
                <li> <a href="./controller/UsuarioController.php?logout=true"> Sair </a> </li>
             
            </ul>
            </table>
        </main>


<!-- <button type="submit" style="background-color:#FFF; text-decoration:underline; border:none; cursor:pointer;"/> Alterar Cadastro </button> -->