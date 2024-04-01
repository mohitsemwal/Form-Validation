<?php
include("connection.php");
if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $q = "SELECT * FROM registration_tb WHERE user_id = '$id'";
    $result = mysqli_query($connection, $q);

    while($rows = mysqli_fetch_array($result)){
        $id = $rows['user_id'];
        $name = $rows['user_name'];
        $email = $rows['email_id'];
        $mobile = $rows['mobile_number'];
        $password = $rows['password'];
        $country = $rows['country'];
        $profession = $rows['profession'];
        $gender = $rows['gender'];

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> update form </title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <div class="form">
        <form action="update.php" method="POST">
        <input type="text" name="id" value="<?php echo $id; ?>" placeholder="Enter your name">
            <br>

            <label for="Name"> Name: </label>
            <input type="text" name="user_name" value="<?php echo $name; ?>" placeholder="Enter your name">
            <br>

            <label for="Email"> Email-Id: </label>
            <input type="text" name="Email" value="<?php echo $email; ?>" placeholder="Enter your Email-Id">
            <br>

            <label for="Mobile"> Mobile Number: </label>
            <input type="text" name="Mobile" value="<?php echo $mobile; ?>" placeholder="Enter your Mobile Number">
           <br>

            <label for="Password"> Password: </label>
            <input type="Password" name="password" value="<?php echo $password; ?>" placeholder="Enter your Password">
          <br>

            <label for="conform_password"> conform password: </label>
            <input type="password" name="conform_password" value="<?php echo $password; ?>" placeholder=" conform  your password">
           <br>

            <label for="Country"> country: </label>
            <select name="country"style=" margin-bottom: 1.5rem;">
                <option value="">----SELECT YOUR COUNTRY----</option>
                <option value="U.S.A" <?php if($country == "U.S.A"){ echo "selected"; } ?> >U.S.A</option>
                <option value="INDIA" <?php if($country == "INDIA"){ echo "selected"; } ?>>INDIA</option>
                <option value="JAPAN" <?php if($country == "JAPAN"){ echo "selected"; } ?>>JAPAN</option>
                <option value="FRANCE" <?php if($country == "FRANCE"){ echo "selected"; } ?>>FRANCE</option>
                <option value="GERMANY" <?php if($country == "GERMANY"){ echo "selected"; } ?>>GERMANY</option>
            </select>
            <br>

            <div class="profession" style=" margin-bottom: 1.5rem;">
                <label for="Profession" > profession: </label>
               <input type="checkbox" name="profession" value="Web Developer"<?php if($profession == "Web Developer"){ echo "checked";} ?> style="  width: 50px; height: 20px; font-size: 1.5rem;">
               <label for="web developer" style="font-size: 1.5rem;">Web Developer</label>
               <input type="checkbox" name="profession" value="App Developer"<?php if($profession == "App Developer"){ echo "checked";} ?> style=" width: 50px; height: 20px; font-size: 1.5rem; ">
               <label for="App developer" style="font-size: 1.5rem;">App Developer</label>
              <br>
            </div>

            <div class="gender">
                <label for="Gender"> Gender: </label>
                <input type="Radio" name="Gender" value="Male"<?php if($gender == "Male"){ echo "checked";} ?> style="  width: 50px; height: 20px; font-size: 1.5rem;">
                <label for="male" style="font-size: 1.5rem;">Male</label>
                <input type="Radio" name="Gender" value="Female"<?php if($gender == "Female"){ echo "checked";} ?> style="  width: 50px; height: 20px; font-size: 1.5rem;">
                <label for="Female" style="font-size: 1.5rem;">Female</label>
                <input type="Radio"  name="Gender" value="Others"<?php if($gender == "Others "){ echo "checked";} ?> style="  width: 50px; height: 20px; font-size: 1.5rem;">
                <label for="Others" style="font-size: 1.5rem;">Others</label>
                <br>
            </div>

            <div class="submit">
                <input type="submit" name="submit" value="UPDATE" style="  width: 150px; height: 50px; font-size: 1.5rem;">
            </div>

        </form>
    </div>
</body>
</html>
