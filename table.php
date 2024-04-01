<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration table</title>
</head>
<body>
    <table border=2px>
        <thead>
            <tr>
                <th>user id</th>
                <th>user name</th>
                <th>email id</th>
                <th>mobile number</th>
                <th>password</th>
                <th>country</th>
                <th>profession</th>
                <th>gender</th>
                <th>action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include("connection.php");
            $q = "SELECT * FROM registration_tb";
            $result = mysqli_query($connection,$q);

            if(mysqli_num_rows($result)>0){
                while($rows = mysqli_fetch_array($result)){
?>
            <tr>
                <td><?php echo $rows['user_id']; ?></td>
                <td><?php echo $rows['user_name'];?></td>
                <td><?php echo $rows['email_id']; ?></td>
                <td><?php echo $rows['mobile_number']; ?></td>
                <td><?php echo $rows['password']; ?></td>
                <td><?php echo $rows['country']; ?></td>
                <td><?php echo $rows['profession']; ?></td>
                <td><?php echo $rows['gender']; ?></td>
                <td><a href="edit.php?user_id=<?php echo $rows['user_id']; ?>" style="text-decoration: none;">Edit</a>
                <a href="delete.php?user_id=<?php echo $rows['user_id']; ?>" style="text-decoration: none; margin-left: 2rem;">delete</a></td>
            
                
            </tr>
            <?php
               }
            }
            ?>
        </tbody>
    </table>
</body>
</html>