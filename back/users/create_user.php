<?php
    //create_user.php
    // include("../config/cnx_db.php");
    //llamar al servidor creado
    include_once("../config/cnx_db.php");
    $firtsName = $_POST['f_name'];
    $lastaName = $_POST['l_name'];
    $email = $_POST['email'];
    //para una contraseña para encriptar
    // $password = md5($_POST['password']);
    $password = $_POST['password'];
    //colocar los nombres de los campos de la base de datos
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firtsName','$lastaName','$email', '$password')";
    $test = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `update_at`, `delete_at`) VALUES (NULL, '', '', '', '', current_timestamp(), NULL, NULL)";
    // echo $sql;
    //$conn->query($sql);
    if ($conn->query($sql) === true) {
        //se creo satisfactoriamente
        echo "User has been created successfully";
    }
    else{
        //mostrar el error
        echo"Error: ".$conn->error."<br>".$sql;
    }
?>