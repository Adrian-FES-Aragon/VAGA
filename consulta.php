<?php
include("assets/header.php");

//se usa el require para requerir obligatoriamente el archivo conexion 
//no es requisito obligatorio, independiente de los erroes
//include("conexion.php");
$conexion = new mysqli('127.0.0.1', 'root', '', 'php_test');
//generar el query
$consulta_sql = "SELECT * FROM USUARIOS";
//mandar el query por medio de la conexion y almacenaremos en una variable
$resultado = $conexion->query($consulta_sql);
//retorna el numero de filas del resultado. Si encuentra más de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado);

echo "<body  class='sansserif'>
    <div align='center' style='overflow-x:auto'>
    <table >
    <tr>
    <th>ID</th>
    <th>Usuario</th>
    <th>Correo</th>
    <th>Contraseña</th>
    </div>
    </body>";

if ($count > 0) {
    //aqui se pintarian los registros de la BD 
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] .        "</td>";
        echo "<td>" . $row['correo'] .      "</td>";
        echo "<td>" . $row['password'] .       "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<h1 style='color:red'>  Sin ningun registro</h1>";
}
?>

<style>
    body {
        background: url('assets/back2.jpg') repeat center fixed;
        color: white;
        background-size: cover;
        font-size: 2em;
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
</style>