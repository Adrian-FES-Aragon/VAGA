<?php
require "conexion.php";
//conexion a la DB
$conn= new mysqli($host_db,$user_db,$password_db,$name_db);
mysqli_set_charset($conn, 'utf8');
//validacion si el usuario ya esta registrado
$buscarUsuario="SELECT * FROM USUARIOS WHERE user = $_POST[nombre_usuario]";
//mandar al query
$result=$conn->query($buscarUsuario);
//saber si tenemos un resultado y se almacena en una variable
$count=mysqli_num_rows($result);
//se hace la validacion del resultado para saber si esta registrado 
if ($count == 1 ) { //se se encentra algun reegistro
    echo"<h1>'El Usuario: ' ".$_POST['nombre_usuario']. "' Ya esta registrado'</h1>";
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
    '$_POST[password]')");
    echo"<h1> Usuario registrado exitosamente</h1>";
    echo"<h2>Bienvenido: ".$_POST['nombre_usuario']. "</h2>";
}
?>
