<?php 
include 'bd/selects.php';

$clienteid = $_GET["id"];
$rutinas = select_rutina_cliente($clienteid);
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
</head>
<body>
    <?php include 'navtrainer.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="entrenador__titulo" id="viewclients">Rutina de Ivan</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ejercicio</th>
                            <th>Repeticiones</th>
                            <th>Peso</th>
                            <th>Dia</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($rutinas as $rutina){
                        ?>
                        <tr>
                            <td><?php echo $rutina[2] ?></td>
                            <td><?php echo $rutina[3] ?></td>
                            <td><?php echo $rutina[4] ?></td>
                            <td><?php echo $rutina[5] ?></td>
                            <td><?php echo '<a href="editarrutina.php?id='.$rutina[0].'" class="btn btn-primary" >Editar</a>'?></td>
                            <td><?php echo '<a href="eliminarrutina.php?id='.$rutina[0].'&clientid='.$rutina[1].'" class="btn btn-danger" >Borrar</a>'?></td>
                        </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table>
                <td><?php echo '<a href="agregarejercicio.php?id='.$clienteid.'" class="btn btn-black" >Agregar Ejercicio</a>'?></td>
        </div>
    </div>
</body>
</html>