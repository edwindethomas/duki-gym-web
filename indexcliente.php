<? 
require_once "../bd/conexion.php";
require_once "bd/datamodel.php";
session_start(); #Activo la persistencia #Siempre será la primera instruccion ejecutable
if(isset($_SESSION['Logueado'])){
    if($_SESSION['Logueado']){
        header("Location: .../indexcliente.php");
    }
}
?>