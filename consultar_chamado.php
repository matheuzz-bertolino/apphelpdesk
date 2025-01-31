<?php
require_once "validados_acesso.php";
?>
<?php 
    $chamados = array();
    $arquivo = fopen('arquivo.txt','r');

    while (!feof($arquivo)){
        $registro = fgets($arquivo);
        $chamados[] = $registro;
    }

    fclose($arquivo);

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
         .consulta{
               font-size: 35px;
         }
         .logo{
               height: 5vh;
               width: 3vw;
         }
         .col-sm-12{
            background: #e2e6e9;
            border-bottom: 1px solid black;
         }
         .col-sm{
            margin-top: 1vh;
         }
         a{
            text-decoration: none;
            color: white;
         }
         .volt{
            display:flex;
            justify-content: left;
         }
         .exit{
           float: right;
           padding-left: 70%;
           font-family: 'Poppins', sans-serif;
           font-size: 20px;
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
                <div class="col-sm-12"><h1 class="consulta">Consulta de Chamado</h1></div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <?php foreach($chamados as $chamado){?>
                    <?php 
                        $chamado_dados = explode('#',$chamado);
                        if(count($chamado_dados) < 3){
                            continue;
                        }    
                    ?>
                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h5 class="card-title"><?= $chamado_dados[0]?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1]?></h6>
                            <p class="card-text"><?= $chamado_dados[2]?></p>
                            
                        </div>
                    </div>

                    <?php }?> 
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                    <form>
                        <button type="submit" class="btn btn-warning" formaction="home.php">Voltar</button>
                    </form>
                </div>
                
            </div>
        </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>