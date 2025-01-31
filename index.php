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
            justify-content: left;
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
         .main{
            display: flex;
            justify-content: center;
            background: #e6e6e6;
            margin-top: 13vh;
            border: 0.5px solid black;
            border-radius: 7px;
            width: 22vw;
         }
         .login{
               display: flex;
               justify-content: center;
               border-style: solid;
               border-width: 0px 0px 0.5px 0px;
               border-color: black;
               width: 21vw;
               padding: 4px
         }
         .logo{
               height: 5vh;
               width: 3vw;
         }
         .titulo{
            text-decoration: none;
            color: white;
         }
    </style>
</head>
<body>
    <?php 
      
    ?>
   <div id="principal">
        <div class="header">
          <img src="imagens/img3.png" class="logo">
          <a href="index.php" class="titulo"><h1>App Help Desk</h1></a>
        </div>
        <div class="main">
          <form action="valida_login.php" method="post">
               <div class="login">Login</div><br>
               <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email</label>
               <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
               <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail.</div>
               </div>
               <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
               </div>
          <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>
               <div class="text-danger">Usuário ou senha inválido(s)</div>
          <?php }?>

          <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>
               <div class="text-danger">Por Favor, faça login antes de acessar páginas protegidas</div>
          <?php }?>

               <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
        </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>