<?php
    function conexion(){
        #Parametros de conexión
        $dbHost = "localhost";
        $dbUser = "u117281852_pweb0802";
        $dbPass = "Pweb0802";
        $dbData = "u117281852_pweb0802";

        #Diver mejorado mysqli (PDO,OO)

        $cn = new mysqli($dbHost, $dbUser, $dbPass, $dbData);
        if($cn->connect_errno){
            die("Error en la base de datos");
        } else {
            return $cn;
        }
    }
?>