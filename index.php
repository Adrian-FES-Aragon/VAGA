<?php
session_start();
include('includes/conexion.php');
include("includes/sesion.php");
$result = mysqli_query($con, "SELECT * FROM usuarios WHERE correo='$correo'") or die('Error en la sesion');
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset=“utf-8“>
    <meta http-equiv=“X-UA-Compatible“ content=“IE=edge“>
    <title>Bienvenido</title>
    <link rel=“stylesheet“ href=““>
</head>

<body>
    <h2>Bienvenido <?php echo $row['nombre']; ?></h2>
</body>

</html>