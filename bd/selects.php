<?php

require_once "conexion.php";

function select_entrenador($usuario) {
    try {
        $cn = conexion();
        $sqlSelect = "SELECT id FROM entrenador WHERE entrenador.usuario = '$usuario'";
        $entrenadorSelect = $cn->query($sqlSelect);
        if($entrenadorSelect->num_rows > 0){
            $row = $entrenadorSelect -> fetch_assoc();
            return $row['id'];
        }
        return "No se encontró el usuario";
    } catch (Exception $e) {
        return 0;
    }
}

function select_nutriologo($usuario) {
    try {
        $cn = conexion();
        $sqlSelect = "SELECT id FROM nutriologo WHERE nutriologo.usuario = '$usuario'";
        $nutriologoSelect = $cn->query($sqlSelect);
        if($nutriologoSelect->num_rows > 0){
            $row = $nutriologoSelect -> fetch_assoc();
            return $row['id'];
        }
        return "No se encontró el usuario";
    } catch (Exception $e) {
        return 0;
    }
}

function select_clientes_entrenador($entrenadorid)
{
    try {
        $cn = conexion();
        $sqlSelect = "SELECT id,nombrecompleto,usuario,status,telefono,nutriologoid FROM cliente WHERE cliente.entrenadorid = '$entrenadorid'";
        $entrenadorSelect = $cn->query($sqlSelect);
        $clientes = $entrenadorSelect->fetch_all();
        return $clientes;
    } catch (Exception $e) {
        return 0;
    }
    
}
function select_clientes_nutriologo($nutriologoid)
{
    try {
        $cn = conexion();
        $sqlSelect = "SELECT id,nombrecompleto,usuario,status,telefono,entrenadorid FROM cliente WHERE cliente.nutriologoid = '$nutriologoid'";
        $entrenadorSelect = $cn->query($sqlSelect);
        $clientes = $entrenadorSelect->fetch_all();
        return $clientes;
    } catch (Exception $e) {
        return 0;
    }
    
}

function select_cliente_id($id){
    try {
        $cn = conexion();
        $sqlSelect="SELECT * FROM cliente WHERE cliente.id = '$id'";
        $clienteSelect = $cn->query($sqlSelect);
        $cliente = $clienteSelect->fetch_all();
        return $cliente;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

?>