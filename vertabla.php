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

$query = "SELECT * FROM usuarios";
$results = mysqli_query($conn,$query);
$val = array();
if(mysqli_num_rows($results)>0){
    while($res = mysqli_fetch_assoc($results)){
        $val['response']= "Success";
        $val['data'][] = $res;
        
    }
    echo json_encode($val);
}else{
    $val['response'] = "There is no data";
    echo json_encode($val);
}

?>
