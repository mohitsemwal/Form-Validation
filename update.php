<?php
include("connection.php");

if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $name = $_POST['user_name'];
    $email = $_POST['Email'];
    $mobile = $_POST['Mobile'];
    $password = $_POST['password'];
    $country = $_POST['country'];
    $profession = $_POST['profession'];
    $gender = $_POST['Gender'];

    $q = "UPDATE `registration_tb` SET `user_name`=' $name',`email_id`='$email',`mobile_number`=' $mobile',
    `password`=' $password',`country`='$country',`profession`=' $profession ',`gender`='$gender' WHERE user_id ='$id'";

    $result = mysqli_query($connection,$q);

    if($result==true){
        header('location:table.php');
    }
    else{
        header('location:edit.php');
    }
}

?>
