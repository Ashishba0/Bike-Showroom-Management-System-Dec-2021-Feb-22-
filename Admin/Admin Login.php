<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <link rel="stylesheet" type="text/css" href="../Style/style-login.css">

    <title>Admin Login</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">
</head>

<body>



    <?php

    include 'dbcon.php';

    function input_filter($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['submit'])) {
        $AdminName = input_filter($_POST['AdminName']);
        $AdminPassword = input_filter($_POST['AdminPassword']);

        $AdminName = mysqli_real_escape_string($con, $AdminName);
        $AdminPassword = mysqli_real_escape_string($con, $AdminPassword);

        $query = " SELECT * FROM `admin_login` WHERE `Admin_Name` =? AND `Admin_Password`=?";

        if ($stmt = mysqli_prepare($con, $query)) {
            mysqli_stmt_bind_param($stmt, "ss", $AdminName, $AdminPassword);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                session_start();
                $_SESSION['AdminLoginId'] = $AdminName;
                echo '<script>alert(" Welcome ADMIN !!!")</script>';
                header("refresh:0.1 ; url=Admin Panel.php");
                //    header("location: Admin Panel.php");
            } else {
                echo '<script>alert("Wrong Admin_Name  or pwd!!!")</script>';
            }
            mysqli_stmt_close($stmt);
        } else {
            echo '<script>alert("sql query not prepared")</script>';
        }

        // $Admin_Name_count = mysqli_num_rows($query);

        // if ($Admin_Name_count) {

        //     $Admin_Name_pass = mysqli_fetch_assoc($query);

        //     $db_pass = $Admin_Name_pass['Admin_Password'];

        //     $_SESSION['Admin_Name']= $Admin_Name_pass['Admin_Name'];
        //     $_SESSION['Admin_Password']= $Admin_Name_pass['Admin_Password'];

        //     $pass_decode = password_verify($Admin_Password, $db_pass);

        //     if ($pass_decode) {                
        //         echo '<script>alert("Login Successfull !!!")</script>';
        //         header("refresh:0.1 ; url=../Index/index2.php");
        //     } else {
        //         echo '<script>alert("Wrong Password !!!")</script>';
        //     }
        // } else {
        //     echo '<script>alert("Wrong Admin_Name !!!")</script>';
        // }
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
                <li><a href="../Admin/Admin Panel.php">Home </a> </li>
                <li><a href="../Admin/orders.php">orders</a></li>
                <li><a href="./Manage Service/manage_service.php">manage product </a>         </li>
                <li><a href="./Manage Service/manage_service.php">manage Service </a></li>
                <li><a href="./Manage Contact/manage_contact.php">Manage Contact us</a></li>
                <li><a href="./Manage Register/manage_register.php">Manage Register</a></li>

            </ul>
            <h1>Admin</h1>

        </div>
    </header>




    <div class="right-column">
        <div class="header-login">
            <ul>
                <li><a href="../Login_register/login.php">Customer Login</a></li>

            </ul>
        </div>
    </div>

    <div class="container">
        <div class="text">
            <h1>Admin Login</h1>
            <p>
            <form action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="login" method="POST">
                <label class="label1" for="name">Admin</label>
                <input type="text" name="AdminName" placeholder="Name" id="name" required>
                <br>
                <label class="label2" for="password">Password</label>
                <input type="password" name="AdminPassword" placeholder="Enter your Password" id="password" required>
                <br>



                <button id="btn1" type="submit" name="submit" class="btn btn-info">Login</button>
            </form>

        </div>

    </div>



</body>




</html>