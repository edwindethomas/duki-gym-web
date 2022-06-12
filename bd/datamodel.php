<?php 
    require_once "../bd/conexion.php";

    function InsertarEntrenador($nombrecompleto, $usuario, $password, $telefono){
        try{
            $cn = conexion();
            $status = 1;
            $SqlInsertar = "INSERT INTO entrenador VALUES (NULL,'$nombrecompleto','$usuario','$password',
            '$status', '$telefono')";
            $cn->query($SqlInsertar);
            return 1;
        } catch (Exception $e){
            return 0;
        }
        }
        function InsertarNutriologo($nombrecompleto, $usuario, $password, $telefono){
            try{
                $cn = conexion();
                $status = 2;
                $SqlInsertar = "INSERT INTO nutriologo VALUES (NULL,'$nombrecompleto','$usuario','$password',
                '$status', '$telefono')";
                $cn->query($SqlInsertar);
                return 1;
            } catch (Exception $e){
                return 0;
            }
            }
            function InsertarCliente($entrenadorid, $nombrecompleto, $usuario, $password, $telefono, $nutriologoid){
                try{
                    $cn = conexion();
                    $status = 3;
                    $SqlInsertar = "INSERT INTO cliente VALUES (NULL,'$entrenadorid','$nombrecompleto','$usuario','$password',
                    '$status', '$telefono',$nutriologoid)";
                    $cn->query($SqlInsertar);
                    return 1;
                } catch (Exception $e){
                    return 0;
                }
                }
                function InsertarDieta($clienteid,$comida,$porcion,$hora,$dia){
                    try{
                        $cn = conexion();
                        $SqlInsertar = "INSERT INTO dieta VALUES (NULL,'$clienteid','$comida','$porcion',
                        '$hora','$dia')";
                        $cn->query($SqlInsertar);
                        return 1;
                    } catch (Exception $e){
                        return 0;
                    }
                    }
    
  # echo InsertarEntrenador("Derian Cardenas","Derian@gmail.com","1234","2299063190");
  # echo InsertarNutriologo("Leo Messi","Leomessi@gmail.com","1234","2295892254");
 # echo InsertarCliente("1","EdwinDeThomas","edwin@gmail.com","1234","2299035433","1");
 echo InsertarDieta("1","frijoles","2gr","10am","lunes");

?>