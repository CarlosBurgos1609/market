<?php include('../config/cnx_db.php') ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lIST_USER</title>
</head>

<body>
    <table border="6">
        <tr>
            <th>FirstName</th>
            <th>LastaName</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * From users";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr> 
                    <td>" . $row['first_name'] . "</td>                 
                    <td>" . $row['last_name'] . "</td>                 
                    <td>" . $row['email'] . "</td>                 
                    <td> 
                     <a href='edit_user.php?id=" . $row['id'] . "'>
                    <img src='../../front/icons/update.png'width='15' alt='logo' ></a> 

                     <a href='edit_user.php?id=" . $row['id'] . "'>
                    <img src='../../front/icons/delete.png' width='15' alt='logo'></a> 
                    </td>"
                ;
            }
        }





        ?>
    </table>

</body>

</html>