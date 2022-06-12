<?php
require_once "../bd/conexion.php";

function InsertarEntrenador($nombrecompleto, $usuario, $password, $telefono)
{
    try {
        $cn = conexion();
        $status = 1;
        $SqlInsertar = "INSERT INTO entrenador VALUES (NULL,'$nombrecompleto','$usuario','$password',
            '$status', '$telefono')";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function InsertarNutriologo($nombrecompleto, $usuario, $password, $telefono)
{
    try {
        $cn = conexion();
        $status = 2;
        $SqlInsertar = "INSERT INTO nutriologo VALUES (NULL,'$nombrecompleto','$usuario','$password',
                '$status', '$telefono')";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function InsertarCliente($entrenadorid, $nombrecompleto, $usuario, $password, $telefono, $nutriologoid)
{
    try {
        $cn = conexion();
        $status = 3;
        $SqlInsertar = "INSERT INTO cliente VALUES (NULL,'$entrenadorid','$nombrecompleto','$usuario','$password',
                    '$status', '$telefono',$nutriologoid)";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function InsertarDieta($clienteid, $comida, $porcion, $hora, $dia)
{
    try {
        $cn = conexion();
        $SqlInsertar = "INSERT INTO dieta VALUES (NULL,'$clienteid','$comida','$porcion',
                            '$hora','$dia')";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function InsertarRutina($clienteid, $ejercicio, $repeticiones, $peso, $dia)
{
    try {
        $cn = conexion();
        $SqlInsertar = "INSERT INTO rutina VALUES (NULL,'$clienteid','$ejercicio','$repeticiones',
                                '$peso','$dia')";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function InsertarSalud($clienteid, $peso, $altura, $masacorporal)
{
    try {
        $cn = conexion();
        $SqlInsertar = "INSERT INTO salud VALUES (NULL,'$clienteid','$peso','$altura',
                                        '$masacorporal')";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function InsertarMembresia($clienteid, $fechacobro, $status, $tarjeta, $plan)
{
    try {
        $cn = conexion();
        $SqlInsertar = "INSERT INTO membresia VALUES (NULL,'$clienteid','$fechacobro','$status','$tarjeta',
                                            '$plan')";
        $cn->query($SqlInsertar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarEntrenador($id)
{
    try {
        $cn = conexion();
        $SqlBorrar = "DELETE FROM entrenador WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarNutriologo($id)
{
    try {
        $cn = conexion();
        $SqlBorrar = "DELETE FROM nutriologo WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarCliente($id)
{
    try {
        $cn = conexion();
        $status = 3;
        $SqlBorrar = "DELETE FROM cliente WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarDieta($id)
{
    try {
        $cn = conexion();
        $SqlBorrar = "DELETE FROM dieta WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarRutina($id)
{
    try {
        $cn = conexion();
        $SqlBorrar = "DELETE FROM rutina WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarSalud($id)
{
    try {
        $cn = conexion();
        $SqlBorrar = "DELETE FROM salud WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function BorrarMembresia($id)
{
    try {
        $cn = conexion();
        $SqlBorrar = "DELETE FROM rutina WHERE id='$id'";
        $cn->query($SqlBorrar);
        return 1;
    } catch (Exception $e) {
        return 0;
    }
}

function SeleccionarUsuario($usuario,$password)
{
    try {
        $cn = conexion();
        $SqlSeleccionar = "SELECT * FROM entrenador WHERE entrenador.usuario='$usuario' AND entrenador.password='$password'";
        $UsuarioSelect = $cn->query($SqlSeleccionar);
        
        if($UsuarioSelect->num_rows > 0) {
            $Row = $UsuarioSelect -> fetch_assoc();
            $Mensaje = "Prueba Usuario".$Row['nombrecompleto']." ".$Row['usuario']." ".$Row['password'];
            $array = implode(" ",$Row);

            $_SESSION['UserName'] = "Bienvenido".$Row['NombreAlumno']." ".$Row['ApellidoAlumno'];
            $_SESSION['UserId'] = 

            header("Location: ../indexentrenador.php");

        }
        $SqlSeleccionar = "SELECT * FROM nutriologo WHERE nutriologo.usuario='$usuario' AND nutriologo.password='$password'";
        $UsuarioSelect = $cn->query($SqlSeleccionar);
        if($UsuarioSelect->num_rows > 0) {
            $Row = $UsuarioSelect -> fetch_assoc();
            $Mensaje = "Prueba Usuario".$Row['nombrecompleto']." ".$Row['usuario']." ".$Row['password'];
            $array = implode(" ",$Row);
            header("Location: ../indexnutriologo.php");
        }
        $SqlSeleccionar = "SELECT * FROM cliente WHERE cliente.usuario='$usuario' AND cliente.password='$password'";
        $UsuarioSelect = $cn->query($SqlSeleccionar);
        if($UsuarioSelect->num_rows > 0) {
            $Row = $UsuarioSelect -> fetch_assoc();
            $Mensaje = "Prueba Usuario".$Row['nombrecompleto']." ".$Row['usuario']." ".$Row['password'];
            $array = implode(" ",$Row);
            header("Location: ../indexcliente.php");
        }
        return "CREDENCIALES DE USUARIO INEXISTENTES, VUELVA A INTENTARLO";
    }catch (Exception $e){
        return $e;
    }
}
#echo InsertarEntrenador("Derian Cardenas","Derian@gmail.com","1234","2299063190");
#echo InsertarNutriologo("Leo Messi","Leomessi@gmail.com","1234","2295892254");
#echo InsertarCliente("1","EdwinDeThomas","edwin@gmail.com","1234","2299035433","1");
#echo InsertarDieta("1","frijoles","2gr","10am","lunes");
#echo InsertarRutina("1","pesa","4x4","10kg","lunes");
#echo InsertarMembresia("1", "9 junio", "activo", "bancomer", "300.00");
#echo InsertarSalud("1","89.9","170.9","28.0");
#echo BorrarRutina("2");
echo SeleccionarUsuario("Derian@gmail.com","1234");