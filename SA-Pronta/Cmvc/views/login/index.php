<?php 


?>



</html>
<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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
height: 400px;
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
    opacity: 0.8;
}
main{
    
    border: 0px solid #000;
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
    color:#fff;
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
#divsl{
    width: 20%;
    height:200px;
    margin:0 auto;
}


/*responisividade*/ 

@media(max-width: 768px) {

iframe{
    display: none;
    margin: 0 auto;
    top: 0;
}

main{

position: absolute;

}

}

</style>
</head>
<body style="background-color: rgb(72,61,139);">
<header>
        <ul>
            <li class="li"><a href="../login/listar_feedmenu.php">Avaliações</a></li>
            <li class="li"><a href="contato.html">Contato</a></li>
            <li class="li"><a href="../cadastro/">Cadastrar</a></li>
            <li class="li"><a href="#login">Login</a></li>
        </ul>
    </header>

  <main align="center" class="container">
  <br/>
        <iframe width="800px" height="450px" src="https://www.youtube.com/embed/tU8BuomMd-4" title="YouTube video player" style="margin: 0 auto; margin-top: -35px;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br/>
  </main>
 
    </div>
    <div class="container-fluid">
        <main id="maini">
            <div class="container-fluid">
            <a href="#logar"></a>
            <form action="../../controller/UsuarioController.php" method="post" name="entrar">
            <div id="login">
                <label> E-mail: </label>
                <input type="email" id="mail" name="mail" required />
            </div>
                <br/> <br/>
                <div id="login">
                <label> Senha: </label>
                <input type="password" id="senha" name="senha" required />
                </div>
                
                <div class="container-fluid" id="botaoEnviar" align="center"/>
                        <input class="btn btn" style="background-color: rgb(119, 60, 146); color: aliceblue; margin: 0 auto;" type="submit" id="login" name="login" value="ENTRAR">
                    </div>
                <div class="container-fluid" style="margin-top: 30px;">
                        <small>Não possui cadastro? <a href="../cadastro/">Clique aqui</a> para se cadastrar</small>
                    </div>
                </form>
                <a name="login"> </a>
            </div>

        </main>
    </div>

</body>



</html>