<?php
session_start();
require_once "./bd/conexion.php";
require_once "./loginvista.php";

if(isset($_POST['btnLogin'])){

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

        try {
            $cn = conexion();
            $SqlSeleccionar = "SELECT * FROM entrenador WHERE entrenador.usuario='$usuario' AND entrenador.password='$password'";
            $UsuarioSelect = $cn->query($SqlSeleccionar);
            
            if($UsuarioSelect->num_rows > 0) {
                $Row = $UsuarioSelect -> fetch_assoc();
                $Mensaje = "Prueba Usuario".$Row['nombrecompleto']." ".$Row['usuario']." ".$Row['password'];
                $array = implode(" ",$Row);
    
                $_SESSION['UserName'] = $Row['nombrecompleto'];
                $_SESSION['UserId'] = $Row['usuario'];
                $_SESSION['Id'] = $Row['id']; 
                $_SESSION['LogueadoE'] = true;
    
              header("Location: ./indexentrenador.php");

            }
            $SqlSeleccionar = "SELECT * FROM nutriologo WHERE nutriologo.usuario='$usuario' AND nutriologo.password='$password'";
            $UsuarioSelect = $cn->query($SqlSeleccionar);
            if($UsuarioSelect->num_rows > 0) {
                $Row = $UsuarioSelect -> fetch_assoc();
                $Mensaje = "Prueba Usuario".$Row['nombrecompleto']." ".$Row['usuario']." ".$Row['password'];
                $array = implode(" ",$Row);
    
                
                $_SESSION['UserName'] = $Row['nombrecompleto'];
                $_SESSION['UserId'] = $Row['usuario'];
                $_SESSION['Id'] = $Row['id'];
                $_SESSION['LogueadoN'] = true;
    
                header("Location: ./indexnutricionista.php");
            }
            $SqlSeleccionar = "SELECT * FROM cliente WHERE cliente.usuario='$usuario' AND cliente.password='$password'";
            $UsuarioSelect = $cn->query($SqlSeleccionar);
            if($UsuarioSelect->num_rows > 0) {
                $Row = $UsuarioSelect -> fetch_assoc();
                $Mensaje = "Prueba Usuario".$Row['nombrecompleto']." ".$Row['usuario']." ".$Row['password'];
                $array = implode(" ",$Row);
    
                
                $_SESSION['UserName'] = $Row['nombrecompleto'];
                $_SESSION['UserId'] = $Row['usuario'];
                $_SESSION['Id'] = $Row['id'];
                $_SESSION['LogueadoC'] = true;
    
                header("Location: ./indexcliente.php");
            }
            return "CREDENCIALES DE USUARIO INEXISTENTES, VUELVA A INTENTARLO";
        }catch (Exception $e){
            return $e;
        }
    

}


?>