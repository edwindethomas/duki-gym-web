<?php
session_start();
if(!isset($_SESSION['LogueadoC'])){
    header("Location: ./login.php");
}
$clienteid = $_SESSION['Id'];
?>
<?php 
include 'bd/selects.php';
$dietas = select_dieta_cliente($clienteid);
$nombre = select_cliente_id($clienteid);
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
    <?php include 'navcliente.php' ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="entrenador__titulo mb-4" id="viewclients">Dieta de <?php echo $nombre[0][2] ?></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Comida</th>
                            <th>Porcion</th>
                            <th>Hora</th>
                            <th>Dia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($dietas as $dieta){
                        ?>
                        <tr>
                            <td><?php echo $dieta[2] ?></td>
                            <td><?php echo $dieta[3] ?></td>
                            <td><?php echo $dieta[4] ?></td>
                            <td><?php echo $dieta[5] ?></td>
                           </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table>
             </div>
    </div>
</body>
</html>