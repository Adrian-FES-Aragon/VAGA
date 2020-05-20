<?php  
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="php_test";

$conn=mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if(!$conn){
    die("No hay conexion RIP: ".mysqli_connect_error());
}

$nombre=$_POST["txtusuario"];
$pass=$_POST["txtpassword"];

$query=mysqli_query($conn, "SELECT * FROM usuarios WHERE NOMBRE ='".$nombre."' and PASSWORD = '".$pass."'");
$nr=mysqli_num_rows($query);

if($nr == 1){
    //header("location: pagina.html")
    header("location: consulta.php");
    echo "Bienvenido: " .$nombre;
}
else if ($nr == 0){
    header("HTTP/1.0 404 Not Found");
    
}

?>