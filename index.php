<?php
include("connection.php");
 $name_err =  $Email_err =  $Mobile_Number_err =  $password_err = $conform_password_err = $country_err =  $profession_err =  $Gender_err ="";

if(isset($_POST['submit'])){
$name = $_POST['name'];
if(empty($name)){
    $name_err = "Please enter your name";
}

$Email = $_POST['Email'];
if(empty($Email)){
    $Email_err = "Please enter your Email-Id";
}

$Mobile_Number = $_POST['Mobile'];
if(empty($Mobile_Number)){
    $Mobile_Number_err = "Please enter your Mobile Number";
}

$password = $_POST['password'];
if(empty($password)){
    $password_err = "Please enter your password";
}

$conform_password = $_POST['conform_password'];
if(empty($conform_password)){
    $conform_password_err = "Please conform your password";
}

$country = $_POST['country'];
if(empty($country)){
    $country_err = "Please select your country";
}

$profession = $_POST['profession'];
if(empty($profession)){
    $profession_err = "Please select your profession";
}

$Gender = $_POST['Gender'];
if(empty($Gender)){
    $Gender_err = "Please select your Gender";
}
$sql = "INSERT INTO registration_tb(user_name,	email_id,	mobile_number,	password,	country,	profession,	gender)
VALUES('$name','$Email','$Mobile_Number','$password','$country','$profession','$Gender')";
$result = mysqli_query($connection,$sql);
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="Name"> Name: </label>
            <input type="text" name="name" placeholder="Enter your name">
            <span style="color: red; font-size: 1rem;"><?php echo $name_err; ?></span><br>

            <label for="Email"> Email-Id: </label>
            <input type="text" name="Email" placeholder="Enter your Email-Id">
            <span style="color: red; font-size: 1rem;"><?php echo $Email_err; ?></span><br>

            <label for="Mobile"> Mobile Number: </label>
            <input type="text" name="Mobile" placeholder="Enter your Mobile Number">
            <span style="color: red; font-size: 1rem;"><?php echo $Mobile_Number_err ; ?></span><br>

            <label for="Password"> Password: </label>
            <input type="Password" name="password" placeholder="Enter your Password">
            <span style="color: red; font-size: 1rem;"><?php echo $password_err ; ?></span><br>

            <label for="conform_password"> conform password: </label>
            <input type="password" name="conform_password" placeholder=" conform  your password">
            <span style="color: red; font-size: 1rem;"><?php echo $conform_password_err ; ?></span> <br>

            <label for="Country"> country: </label>
            <select name="country"style=" margin-bottom: 1.5rem;">
                <option value="">----SELECT YOUR COUNTRY----</option>
                <option value="U.S.A">U.S.A</option>
                <option value="INDIA">INDIA</option>
                <option value="JAPAN">JAPAN</option>
                <option value="FRANCE">FRANCE</option>
                <option value="GERMANY">GERMANY</option>
            </select>
            <span style="color: red; font-size: 1rem;"><?php echo $country_err ; ?></span><br>

            <div class="profession" style=" margin-bottom: 1.5rem;">
                <label for="Profession" > profession: </label>
               <input type="checkbox" name="profession" value="Web Developer" style="  width: 50px; height: 20px; font-size: 1.5rem;">
               <label for="web developer" style="font-size: 1.5rem;">Web Developer</label>
               <input type="checkbox" name="profession" value="App Developer" style=" width: 50px; height: 20px; font-size: 1.5rem; ">
               <label for="App developer" style="font-size: 1.5rem;">App Developer</label>
               <span style="color: red; font-size: 1rem;"><?php echo $profession_err ; ?></span><br>
            </div>

            <div class="gender">
                <label for="Gender"> Gender: </label>
                <input type="Radio" name="Gender" value="Male" style="  width: 50px; height: 20px; font-size: 1.5rem;">
                <label for="male" style="font-size: 1.5rem;">Male</label>
                <input type="Radio" name="Gender" value="Female" style="  width: 50px; height: 20px; font-size: 1.5rem;">
                <label for="Female" style="font-size: 1.5rem;">Female</label>
                <input type="Radio"  name="Gender" value="Others" style="  width: 50px; height: 20px; font-size: 1.5rem;">
                <label for="Others" style="font-size: 1.5rem;">Others</label>
                <span style="color: red; font-size: 1rem;"><?php echo $Gender_err ; ?></span><br>
            </div>

            <div class="submit">
                <input type="submit" name="submit" style="  width: 150px; height: 50px; font-size: 1.5rem;">
            </div>

        </form>
    </div>
</body>
</html>
