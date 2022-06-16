<?php
session_start();
if(!isset($_SESSION['LogueadoN'])){
    header("Location: ./login.php");
}
    $nutricionista = $_SESSION['UserId'];

?>
<?php 
include 'bd/selects.php';
$nutricionistaid = select_nutriologo($nutricionista);
$clientes = select_clientes_nutriologo($nutricionistaid);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutriologo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/entrenador.css">
     <link rel="shortcut icon" href="images/logodukos.png">
</head>
<body>
    <?php include 'navnutri.php' ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="entrenador__titulo" id="viewclients">Rutina de clientes</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Status</th>
                            <th>Telefono</th>
                            <th>Ver Dieta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($clientes as $cliente){
                        ?>
                        <tr>
                            <td><?php echo $cliente[0] ?></td>
                            <td><?php echo $cliente[1] ?></td>
                            <td><?php echo $cliente[2] ?></td>
                            <td><?php echo $cliente[3] ?></td>
                            <td><?php echo $cliente[4] ?></td>
                            <td><?php echo '<a href="verdieta.php?id='.$cliente[0].'" class="btn btn-success" >Ver</a>'?></td>
                        </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>