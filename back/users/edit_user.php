<?php
    include('../config/cnx_db.php');
    $userId= $_GET['id'];
$sql = "SELECT * From users WHERE id='$userId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $f_name = $row['first_name'];
            $l_name = $row['last_name'];
            $email = $row['email'];
            $pass = $row['password'];

        }
    }
    
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="shortcut icon" href="../../front/img/logo1.png" type="image/x-icon">
</head>

<body>
    <center>
        <form namme="EditUserForm" action="http://localhost/market/back/users/update_user.php" method="POST">
            <input type="hidden" name="uId" value="<?php echo $userId; ?>" disabled="true">
            <label>Firstname:</label><input name="f_name" placeholder="Tom" type="text" value="<?php echo $f_name; ?>" required><br><br>
            <label>Lastname:</label><input name="l_name" type="text" placeholder="Mclister" value="<?php echo $l_name; ?>" required><br><br>
            <label>Email:</label><input name="email" type="email" placeholder="Tom@gmailcom" value="<?php echo $email; ?>" required><br><br>
            <label>Pasword:</label><input name="password" type="password" placeholder="******" value="<?php echo $pass; ?>" required><br><br>
            <button>Update</button>
        </form>
    </center>

</body>

</html>