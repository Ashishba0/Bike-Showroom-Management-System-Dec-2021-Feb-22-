<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <link rel="stylesheet" type="text/css" href="../Style/style-login.css">

    <title>Customer Login</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">
</head>

<body>



    <?php

    include 'dbcon.php';

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from registration where email= '$email'";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);

        if ($email_count) {

            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];


            $_SESSION['username'] = $email_pass['username'];
            $_SESSION['email'] = $email_pass['email'];
            $_SESSION['mobile'] = $email_pass['mobile'];

            $pass_decode = password_verify($password, $db_pass);

            if ($pass_decode) {
                
                echo '<script>alert("Welcome \n Login Successfull !!!")</script>';
                header("refresh:0.1 ; url=../Index/index2.php");
            } else {
                echo '<script>alert("Wrong Password !!!")</script>';
            }
        } else {
            echo '<script>alert("Wrong Email !!!")</script>';
        }
    }

    ?>





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
            <h1>Login</h1>

        </div>
    </header>


    <div class="right-column">
        <div class="header-login">
            <ul>
               
                <li><a href="../Admin/Admin Login.php">Admin Login</a></li>
            </ul>
        </div>
    </div>




        <div class="container">
            <div class="text">
                <h1>Customer Login</h1>
                <p>
                <form action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="login" method="POST">
                    <label class="label1" for="name">Enter E-mail</label>
                    <input type="text" name="email" placeholder="Enter Email" id="name" required>
                    <br>
                    <label class="label2" for="password">Password</label>
                    <input type="password" name="password" placeholder="Enter your Password" id="password" required>
                    <br>



                    <button id="btn1" type="submit" name="submit" class="btn btn-info">Login</button>
                </form>

            </div>

        </div>
        <div class="register-text">
            <h2>REGISTER</h2>
            <div class="register-info">
                <p style="text-align: center;">"Be a part of the our clan.Fill in your details to register in minutes".
            </div>
            <form action="register.php" id="register">
                <button id="btn2"> Register</button>
            </form>

        </div>


</body>




</html>