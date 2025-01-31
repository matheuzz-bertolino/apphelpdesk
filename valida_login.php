<?php 
session_start();
$usuario_logado = false;
echo '<br>';
//echo '<pre>';
//print_r($_POST);
//echo '</pre>';
//print_r($_POST);
//echo '<br>';
//var_dump($_POST);
//echo '<br>';

//echo $_POST['email'];
//echo $_POST['senha'];

//USUARIOS DO SISTEMA   
 $usuarios_app = array(
    array('email' => 'niggaz123@negro.com', 'senha' => 'negaodms'),
    array('email' => 'negro@niggaz.com', 'senha' => 'negao123'),
    array('email' => 'trancaniggaz@negro.com', 'senha' => 'twistounago')
 );

 foreach($usuarios_app as $user){
    if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']){
      $usuario_logado = true;

    }
 }
   if($usuario_logado){
      $_SESSION['autenticado'] = 'SIM';
      header('Location: home.php');
   }
   else{
      $_SESSION['autenticado'] = 'NAO';
      header('Location: index.php?login=erro');
   }
?>