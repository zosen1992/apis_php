<?php
$servername = "localhost";
$database = "database";
$username = "user";
$password = "pass";
// Create connection
$conn = mysqli_connect($localhost, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$contrasena= $_POST["contrasena"];

$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";
$resultado = mysqli_query($conn,$sql);

if ($resultado){
echo "registro correctamente";
}
else{
echo"error";
}

?>
