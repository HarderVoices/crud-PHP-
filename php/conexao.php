<?php
    $user = 'root';
    $password = '1234';
    $server = '127.0.0.1:3306';
    $database = 'CadastroEscola';
    
    $conn = mysqli_connect($server, $user, $password, $database);
    
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else {
        echo "Connected successfully";
    }
?>