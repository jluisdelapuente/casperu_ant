<?php

    require_once 'config.php';
    
    $username = $_POST['username'];
    $userpass = $_POST['userpass'];
    
    $usuario = login($username, $userpass);
    
    if($usuario){
        $_SESSION['usuario'] = $usuario;
        header('location:portada.php');
    }else{
        header('location:index.php?error=1');
    }
    
    ?>