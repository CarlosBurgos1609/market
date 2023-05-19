<?php
    //login-singin
    include("../config/cnx_db.php");
    $email = $_POST['email'];
    $pasword = $_POST[`password`];
    // $pasword= md5($_POST[`password`]);
    $sql = "SELECT * FROM users where email = '$email' AND password = '$pasword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo"User has been found succesfully. You're login";
    }
    else{
        echo "Verify your data";
    }
?>