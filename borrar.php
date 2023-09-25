<?php
$servername = "localhost";
$database = "id17359814_zosenbd";
$username = "id17359814_zosenbd1";
$password = "?Os(j<7Gs_ahvU}$";
// Create connection

$conn = mysqli_connect($localhost, $username, $password, $database);

$id = $_POST['id'];

$query = "DELETE FROM usuarios WHERE id = '$id'";

$results = mysqli_query($conn,$query);
if($result){
    echo json_encode("Data deleted");
}else{
    echo json_encode("error occured");
}

?>