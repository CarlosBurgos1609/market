<?php
    //create_user.php
    // include("../config/cnx_db.php");
    include_once("../config/cnx_db.php");
    $firtsName = $_POST['f_name'];
    $lastaName = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['passsword'];
    //Push data base
    $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firtsName','$lastaName','$email, '$password')";
    $test = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `update_at`, `delete_at`) VALUES (NULL, '', '', '', '', current_timestamp(), NULL, NULL)";
    // echo $sql;
    $conn->query($sql);
?>