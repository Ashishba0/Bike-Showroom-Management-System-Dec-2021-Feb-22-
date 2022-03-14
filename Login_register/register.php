<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <link rel="stylesheet" type="text/css" href="../Style/style-register.css" .>

    <title>Register</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">
</head>

<body>

    <?php

    include 'dbcon.php';


    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
       

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from registration where email = '$email'";
        $query = mysqli_query($con, $emailquery);

        $emailcount = mysqli_num_rows($query);

        if ($emailcount > 0) {
    ?>
            <script>
                alert("Email already exits!!!!");
            </script>
            <?php

        } else {
            if ($password === $cpassword) {

                $insertquery = "insert into registration(username, email, mobile,password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";

                $iquery = mysqli_query($con, $insertquery);

                if ($iquery) {
                    echo '<script>alert("Registration Successful\n You can Login Now!!")</script>';
                    header("refresh:1 ; url=../Login_register/login.php");
                } else {
                    echo '<script>alert("Unsucessful Registration!!!")</script>';
                }
            } else {
            ?>
                <script>
                    alert("Passsword not matching!!!");
                </script>
    <?php


            }
        }
    }

    ?>

    <!----===
<a href="../Login_register/logout.php"> Logout</a>
-->
    <header class="header">
        <div class="logo">
            <a href="../Index/index1.php" title="Go to home">
                <img src="../Image/gif1.gif" href="#" height="100" width="720">
            </a>
        </div>
        <div class="navbar">


            <ul>
                <li><a href="../Index/index1.php">Home </a> </li>
                <li><a href="../Bikes/bikes.php">Bikes</a></li>
                <li><a href="../Garage/garage.php">Garage</a></li>
                <li><a href="../Lightning/lightning.php">Lightning</a></li>
                <li><a href="../Riding gear/riding gear.php">Riding Gear </a></li>
                <li><a href="../Service/Servicing.php">Servicing</a></li>
                <li><a href="../contact/contact.php">Contact Us </a></li>
            </ul>

        </div>
    </header>

    <div class="container">
        <h1> Registration</h1>
        <div class="text">
            <form action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="register" method="POST">
                <label class="label" for="username">First Name</label>
                <input type="text" placeholder="Full Name" name="username" class="name1" pattern="[a-zA-Z'-'\s]*" required="" oninvalid="this.setCustomValidity('Please Enter Valid Name')" oninput="setCustomValidity('')">
                <br>

                <label class="label" for="username">Mobile NO.</label>
                <input placeholder="Phone Number" name="mobile" class="name1" pattern="^[7-9]\d{9}$" required="" maxlength="10" oninvalid="this.setCustomValidity('Please Enter Valid Number start from 9/8/7')" oninput="setCustomValidity('')">
                <br>

                <label class="label" for="email">E-mail</label>
                <input type="email" id="email" placeholder="Enter your Email" name="email" class="name1" required>
                <br>

                <label class="label" for="password">Password</label>
                <input type="password" placeholder="Set Password" name="password" class="name1" required>
                <br>

                <label class="label" for="confirm password">Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="cpassword" class="name1" required="" oninvalid="this.setCustomValidity('Password Not Matching')" oninput="setCustomValidity('')">
                <br>

                <button type="submit" name="submit" id="btn-register" value="register"> Register </button>
            </form>
        </div>
    </div>
    <div class="login-text">
        <h2>Already have a account !!</h2>
        <div class="register-info">
            <p style="text-align: center;">"Be a part of the our clan.Fill in your details to register in minutes".
        </div>
        <form action="login.php">
            <button type="submit" id="btn-login" value="login">Go back to Login</button>
        </form>
    </div>





</body>

</html>