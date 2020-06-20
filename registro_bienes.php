<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="assets/estilo.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="Shortcut icon" href="assets/vicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Activo Fijo</title>
</head>

<body class="body1">
    <?php
    include("assets/header.php");
    ?>
    <header class="shield">
        <svg class="bi bi-cart-plus" width="5em" height="5em" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.5 5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 .5-.5z" />
            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0v-2z" />
            <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
        </svg>
        <h2 class="h21" style="margin-left: 30px">NUEVO ACTIVO FIJO</h2>
    </header>
    <div class=" div1 " style=" margin-top:50px ">
        <div align="center">
            <form action="logica/logica_registro.php" method="POST" class="form1">
                <div class="div2">
                <label for="item" class="data"> Activo: </label><br>
                <select class="data2" name="item_type" required>
                        <option value="" selected disabled hidden>Selecciona el tipo de activo:</option>
                        <option value="i1">PC escritorio</option>
                        <option value="i2">Laptop</option>
                        <option value="i3">user</option>
                    </select>
                <label for="item" class="data"> Usuario asignado: </label><br>
                <?php
                require "./logica/conexion.php";
                ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
</body>

</html>