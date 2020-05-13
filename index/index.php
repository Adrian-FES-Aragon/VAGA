<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../styles/estilo.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <header>
        <h2>Login</h2>
    </header>
    <div class="div1" style="margin-top:50px">
        <div class="div2">
            <form action="validacion.php">
                <div>
                    <label class="active">Usuario</label>
                    <input type="text" class="text" placeholder="Nombre de usuario" id="user" name="user">
                </div>
                <div>
                    <label class="active">Contraseña</label>
                    <input type="password" class="text" placeholder="Contraseña de usuario" id="pwd" name="pwd">
                </div>
                <br>
                <button class="btn">INICIAR SESION</button>
                <button class="btn">REGISTRARSE</button>
            </form>
        </div>
    </div>
</body>

</html>