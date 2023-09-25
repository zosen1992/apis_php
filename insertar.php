<?php
$servername = "localhost";
$database = "id17359814_zosenbd";
$username = "id17359814_zosenbd1";
$password = "?Os(j<7Gs_ahvU}$";
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