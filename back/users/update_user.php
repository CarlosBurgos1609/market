<?php   
    include("../config/cnx_db.php");
    echo json_encode($_POST);
    $userId = $_POST['uId'];
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="UPDATE users SET
        first_name = '$fName',
        last_name = '$lName',
        email = '$email',
        password = '$password'
     WHERE 
        id = $userId
    ";
    if($conn -> query($sql)=== true){
        //echo "<script>alerte('user has been update')</script>";
        header("refresh:0;url=http://localhost/market/back/users/list_user.php");
        
    } else {
        echo $conn->error;
    }



?>