<?php
    function conexion(){
        #Parametros de conexión
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbData = "dukigym";

        #Diver mejorado mysqli (PDO,OO)

        $cn = new mysqli($dbHost, $dbUser, $dbPass, $dbData);
        if($cn->connect_errno){
            die("Error en la base de datos");
        } else {
            return $cn;
        }
    }
?>