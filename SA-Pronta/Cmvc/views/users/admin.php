<?php 
  

?>

<!DOCTYPE html>
<style type="text/css">
        main{
            border: 1px solid #000;
            background-color:floralwhite;
            width:600px;
            height:700px;
            margin: 0 auto;
            border-radius:60px;
        }
        body{
          background-color:#483D8B;
        }
        a:hover{
          
            box-shadow: 2px 2px 4px #000;
            border-radius: 5px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
    }
    section{
        border: 1px solid #000;
        width:300px;
        height: auto;
        margin: 0 auto;
        border-radius: 10px;
        background-color: rgb(105,89,205);
    }
    h3{
        color:#fff;
    }
    h2{
        font-size:25pt;
        font-family:Georgia, 'Times New Roman', Times, serif;
    }
    #se{
        border: 1px solid #000;
        width:300px;
        height: 200px;
        margin: 0 auto;
        border-radius: 10px;
        background-image: url(img/imagemeletro.jpg);
        background-size:220px;
        background-position-x: 40px;
    }
    #sai{
        border: 1px solid #000;
        width:100px;
        height: 60px; 
    }
        
  
       
        
</style>
        <html>
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title></title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="admin.css">
            </head>
            <body>
                  
        
                        
               <main>              
            
                <h2 align="center"> Administrador</h2>
                

               <!--  <a href="views/cadastro"><h3 align="center">Cadastrar Usuários</h3>  </a> -->
               <section> 
                 <a href="views/produto"> <h3 align="center">Cadastrar Produtos </h3> </a>
                </section>
                <br/>
                <section> 
                 <a href="views/produto/listar_admin.php"><h3 align="center"> Ver Produtos </h3> </a>
                </section>
                <br/>
                <section>
                <a href="views/listar"><h3 align="center"> Lista dos Usuários </h3> </a>
                </section>
                <br/>
                <section>
                <a href="views/listar_feed.php"><h3 align="center"> Feedbacks </h3> </a>
                </section>
                <br/>
                
                <section id="sai">   
                 <a href="./controller/UsuarioController.php?logout=true"> <h3 align="center"> Sair </h3> </a>
                </section> 
                    <br/>
                  <section id="se">
                    
                  </section>
                </main>  

            </body>
        </html>

       