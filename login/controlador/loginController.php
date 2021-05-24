<?php
include_once '../modelo/Usuario.php';
session_start();
$user =$_POST['user'];
$pass=$_POST['pass'];
$usuario=new Usuario();

if(!empty($_SESSION['tipo_usuario']))
{

    switch($_SESSION['tipo_usuario']){
        case 1:
            header('location:../vista/cliente.php');
            break;
        case 2:
            header('location:../vista/servidor.php');
            break;
    }

}
else{
    $usuario->loguearse($user,$pass);
    if(!empty($usuario->objetos)){
        foreach ($usuario->objetos as $objeto){
            $_SESSION['usuario']=$objeto->id_usurio;
            $_SESSION['tipo_usuario']=$objeto->tipo_usuario;
            $_SESSION['nombreCompleto']=$objeto->nombreCompleto;
        }
        switch($_SESSION['tipo_usuario']){
            case 1:
                header('location:../vista/cliente.php');
                break;
            case 2:
                header('location:../vista/servidor.php');
                break;
        }
    
    }
    else{
        header('location: ../vista/login.php');
    }
}

?>