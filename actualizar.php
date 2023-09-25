<?php
$servername = "localhost";
$database = "id17359814_zosenbd";
$username = "id17359814_zosenbd1";
$password = "?Os(j<7Gs_ahvU}$";
// Create connection

$conn = mysqli_connect($localhost, $username, $password, $database);



$nombre = $_POST['nombre'];
$correo = $_POST['passcorreoword'];
$contrasena = $_POST['contrasena'];
$id = $_POST['id'];

$query = "UPDATE usuarios SET nombre = '$nombre', correo= '$correo', contrasena= '$contrasena' WHERE id = '$id'";

$results = mysqli_query($conn,$query);
$val = array();
if(mysqli_num_rows($results)>0){
    echo json_encode($val);
}else{
    $val['response'] = "There is no data";
    echo json_encode($val);
}

?>