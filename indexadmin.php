<?php
session_start();
if(!isset($_SESSION['LogueadoA'])){
    header("Location: ./login.php");
}
?>
<?php 
include 'bd/selects.php';
$entrenadores = select_entrenadores();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrenador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/estilos.css">
     <link rel="stylesheet" href="css/entrenador.css">
     <link rel="shortcut icon" href="images/logodukos.png">
</head>
<body>
    <?php include 'navadmin.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h2 class="entrenador__titulo" id="viewclients">Lista de entrenadores</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Telefono</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($entrenadores as $entrenador){
                        ?>
                        <tr>
                            <td><?php echo $entrenador[0] ?></td>
                            <td><?php echo $entrenador[1] ?></td>
                            <td><?php echo $entrenador[2] ?></td>
                            <td><?php echo $entrenador[3] ?></td>
                            <td><?php echo $entrenador[4] ?></td>
                            <td><?php echo $entrenador[5] ?></td>
                            <td><?php echo '<a href="editarentrenador.php?id='.$entrenador[0].'" class="btn btn-primary" >Editar</a>'?></td>
                            <td><?php echo '<a href="borrarentrenador.php?id='.$entrenador[0].'" class="btn btn-danger" >Borrar</a>'?></td>
                        </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>