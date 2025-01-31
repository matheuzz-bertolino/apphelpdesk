<?php
require_once "validados_acesso.php";
?>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Help Desk</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
          body{
               display: flex;
               background: #f2f2f2;
               justify-content: center;
          }
          #principal{
               
               font-family: 'Poppins', sans-serif;
          }
          .header{
            display: flex;
            align-items: center; 
            height: 10vh;
            background: black;
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            padding-left: 1vw;
         }
         .container{
            background: #fff;
            margin-top: 13vh;
            border: 0.5px solid black;
            border-radius: 7px;
            width: 72vw;
         }
         .abertura{
            font-size: 35px;
         }
         .logo{
            height: 5vh;
            width: 3vw;
         }
         .col-sm-12{
            background: #e6e6e6;
            border-bottom: 1px solid black;
         }
         .col-sm{
            margin-top: 3vh;
         }
         label{
            font-size: 25px;
         }
         .titulo{
            text-decoration: none;
            color: white;
         }
         .exit{
           float: right;
           padding-left: 70%;
           font-family: 'Poppins', sans-serif;
           font-size: 20px;
         }
         a{
            text-decoration: none;
            color: white;
         }

    </style>
</head>
<body>
    <?php 
      include "menu.php"
    ?>
   <div id="principal">
       
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12"><h1 class="abertura">Abertura de chamado</h1></div>
            </div>
            <form method="post" action="registra_chamado.php">
                <div class="row">
                    <div class="col-sm">
                        <label for="formGroupExampleInput" class="form-label">Título</label>
                        <input type="text" name="titulo" class="form-control" id="formGroupExampleInput" placeholder="Titulo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                    <label for="formGroupExampleInput" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="categoria">
                            <option selected>Escolha</option>
                            <option>Criação Usuário</option>
                            <option>Impressora</option>
                            <option >Hardware</option>
                            <option>Software</option>
                            <option>Rede</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                    <div class="form-floating">
                        <textarea class="form-control" name="descricao" placeholder="Descrição" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <button type="submit" class="btn btn-warning btn-lg" formaction="home.php">Voltar</button>
                    </div>
                    <div class="col-sm">
                        <button type="submit" class="btn btn-info btn-lg">Abrir</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>