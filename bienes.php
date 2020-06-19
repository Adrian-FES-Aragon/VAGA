<?php
session_start();
$carry = $_SESSION['noCuenta'];

if (!isset($carry)) {
    header("location: index.php");
} else {
    echo'<link rel="Shortcut icon" href="assets/vicon.png">
    <link rel="stylesheet" type="text/css" href="assets/estilo.php">';
    include("assets/header.php");

    echo "<br>";
    echo "<p style='margin-left:5%'>Bienvenido: $carry</p>";
    //se usa el require para requerir obligatoriamente el archivo conexion 
    //no es requisito obligatorio, independiente de los erroes
    require("./logica/conexion.php");

    $consulta_sql = "SELECT * FROM BIENES";
    //mandar el query por medio de la conexion y almacenaremos en una variable
    $resultado = $conn->query($consulta_sql);
    //retorna el numero de filas del resultado. Si encuentra más de uno lo usamos para imprimir el resultado en nuestra tabla
    $count = mysqli_num_rows($resultado);
        
    if ($count > 0) {
        echo "<h1 class='h21'>ACTIVO FIJO</h1>";
        echo "<body  class='sansserif'>
        <div align='center' style='overflow-x:auto'>
        <table >
        <tr>
        <th>TieneDueño</th>
        <th>EslapTop</th>
        <th>id</th>
        <th>id_dueño</th>
        </div>
        </body>";
        //aqui se pintarian los registros de la BD 
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['TieneDueño'] .         "</td>";
            echo "<td>" . $row['EslapTop'] .     "</td>";
            echo "<td>" . $row['id'] .     "</td>";
            echo "<td>" . $row['id_dueño'] .     "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h1 style='color:red'>  Sin ningun registro</h1>";
    }
}

echo "<br>";

//echo "<input type='button' style='font-size:.6em' onclick='location.href=`registro.php`' value='AGREGAR USUARIO' class='btn1'> ";
//echo "<input type='button' style='font-size:.6em' onclick='location.href=`eliminar.php`' value='ELIMINAR USUARIO' class='btn1'> <br><br>";
echo "<input type='button' style='font-size:.6em' onclick='location.href=`consulta.php`' value='REGISTROS' class='btn1'> <br><br>"; 
echo "<input type='button' style='font-size:.6em' onclick='location.href=`./logica/salir.php`' value='SALIR' class='btn1'> ";

echo "
<title>Consulta Usuarios</title>
<style>
    a {
        color: white;
    }

    body {
        background: url('assets/back2.jpg') repeat center fixed;
        color: white;
        background-size: cover;
        font-size: 1.5em;
        
    }

    table {
        text-align: center;
        border-collapse: collapse;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    th {
        text-align: center;
        background-color: black;
        padding: 15px 10px;
    }

    td {
        padding: 5px 25px;
        vertical-align: center;
        border-bottom: 1px solid #ddd;
        border-radius: 15px 50px;
        box-shadow: 2px 2px 2px white;
    }

    h1 {
        text-align: center;
    }

    tr:hover {
        background-color: black;
    }

    tr:nth-child(even) {
        background-color: #636468;
    }

    .sansserif {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>";
?>