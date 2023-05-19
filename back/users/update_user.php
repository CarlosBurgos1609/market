<?php   
    include("../config/cnx_db.php");
    $userId = $_POST['uId'];
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="UPDATE user Set
     firstname='$fName',
     last_name='$lName',
     email='$email',
     password='$password'
     WHERE id='$userId'
    ";
    if($conn -> query($sql)=== true){
        echo "<script>alerte('user has been update')</script>";
        header("refresh:0;url=http://localhost/market/back/users/list_user.php");
    }



?>