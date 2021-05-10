<?php 

$conn = new mysqli("localhost", "root", "9432964", "gdlwebcamp", "3306");

if($conn->connect_error){
    echo $error = $conn->connect_error;
}

?>