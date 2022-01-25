<?php
$servername = "localhost";
$password = "";
$username = "root";
$dbname = "watermark";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){

   // echo "Connection is OKAY";
}else{
    echo "Connectio Failed".mysqli_connect_error();
}

?>