<?php

//connects to server
$SERVER = "localhost";

//mysql User
$USER = "root";
//mysql password
$PASSWORD ="";
//The Database in use
$DB = "login";

$conn = mysqli_connect($SERVER, $USER, $PASSWORD, $DB);
$response = array();

if(mysqli_connect_errno()){
    
    $response["succes"] = false;
    $response["message"] = mysqli_connect_error($conn);
    echo json_encode($response);
    exit();
}





?>