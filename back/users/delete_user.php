<!-- http://localhost/market/back/users/delete_user.php -->
<?php
    include('../config/cnx_db.php');
    $userID = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $userID";
    
    if($conn -> query($sql)==TRUE){
        if($conn ->affected_rows>0){
            echo "<script>alert('user has been delete!')</script>";
            header("refresh:0; url=http://localhost/market/back/users/list_user.php");
        }else{
            echo "user doen not exist";
        }
    } else{
        echo "Error:User hasnt been delete!";
        echo "Error: ".$conn->error;
    }
    
    
    
    // $sql2="SELECT * FROM user WHERE id='$userID'";
    /*$result =$conn->query($sql);
    if($result->num_rows>0){
        if($conn->query($sql)===TRUE){
            echo "<script>alert('user has been delete!')</script>";
            header("refresh:0; url=http://localhost/market/back/users/list_user.php");
        } else{
            echo "Error:User hasnt been delete!";
            echo "Error: ".$conn->error;
        }
    } else{
        echo "<script>alert('user does not exist')</script>";
        header("......");
    } 
    */

?>