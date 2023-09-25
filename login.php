<?php
$servername = "localhost";
$database = "database";
$username = "user";
$password = "pass";
// Create connection

$conn = mysqli_connect($localhost, $username, $password, $database);


$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$contrasena= $_POST["contrasena"];

$sql = "SELECT FROM usuarios where correo='$correo' AND contrasena='$contrasena'";
$resultado = mysqli_query($conn,$sql);

if ($resultado){
    echo "registro correctamente";
    }
    else{
    echo"error";
    }

?>
