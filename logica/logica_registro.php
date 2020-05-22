<?php
require "conexion.php";
//conexion a la DB

mysqli_set_charset($conn, 'utf8');
//declaracion de variables para formulario
$form_pass= $_POST ['password'];
//validacion si el usuario ya esta registrado
$buscarUsuario="SELECT * FROM usuarios WHERE user = '$_POST[nombre_usuario]'";
//mandar al query
$result=$conn->query($buscarUsuario);
//saber si tenemos un resultado y se almacena en una variable
$count=mysqli_num_rows($result);
//se hace la validacion del resultado para saber si esta registrado 
if ($count == 1 ) { //se se encentra algun reegistro
    echo"<h1>'El Usuario: ' ".$_POST['nombre_usuario']. "' Ya esta registrado'</h1>";
    echo "<a href='../registro.php'>Hacer Registro</a>";
}else{//se registra al usuario
    //query para mandar el registro
    mysqli_query($conn, "INSERT INTO USUARIOS (
    user,
    nombre, 
    correo,
    password)
    VALUES(
    '$_POST[nombre_usuario]',
    '$_POST[nombre_completo]',
    '$_POST[email]',
    '$_POST[password]'
    
    )");
    echo"<h1> Usuario registrado exitosamente</h1>";
    echo"<h2>Bienvenido: ".$_POST['nombre_usuario']. "</h2>";
    echo "<h5>" . "<a href='../index.php'>Iniciar Sesión</a>" . "</h5>";
}
?>
