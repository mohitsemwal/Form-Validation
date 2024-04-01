<?php
include("connection.php");
if(isset($_GET['user_id'])){
    $delete_id = $_GET['user_id'];

    $q = "DELETE FROM `registration_tb` WHERE user_id = '$delete_id'";
    $result = mysqli_query($connection, $q);

    if($result==true){
        header('location: table.php');
    }else{
        header('location:edit.php');
    }
}
?>