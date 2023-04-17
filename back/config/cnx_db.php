<?php
    //Developer: Carlos
    //database:conexion-Database engine conection
    //credenciales
    $host = "localhost"; //127.0.0.1
    $port = "3306";
    $username = "root";
    $password = "";
    $dbname = "market";
    //Mysqul connection
    $conn = new mysqli($host, $username, $password, $dbname, $port);
    //Check conmecttion
    if ($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }
    // else {
    //     echo "Connection succesfully";
    // }
?>