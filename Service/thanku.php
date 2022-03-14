<?php

session_start();
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Please Login !!")</script>';
    header("refresh:0 ; url=../Login_register/login.php");
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap-5.1.3-dist/js/bootstrap.js ">
    <link rel="stylesheet" href="../Style/style-index.css">
    <link rel="stylesheet" href="../Style/service.css">



    <title>Thank You</title>
    <link rel="icon" href="../Image/gif1.gif" type="image/icon type">
</head>

<body>

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

    <!--login&cart-->


    <div class="right-column">
        <!-- <div class="header-login">
        <ul>
            <div class="user">
                <li>Hello !! <?php echo $_SESSION['username'] ?> </li>
            </div>

        </ul>
    </div> -->
        <!-- Example split danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-danger">Hello!!&nbsp<?php echo $_SESSION['username'] ?> </button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden"></span>
            </button>
            <ul class="dropdown-menu">
                <li> <a class="dropdown-item" href="../Profile/profile.php"> Profile </a></li>
                <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Separated link</a></li> -->
            </ul>


            <!-- Split dropstart button -->

            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">
                        <div>
                            <?php
                            $count = 0;
                            if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                            }
                            ?>
                        </div>
                        <i class="bi bi-cart-check-fill"></i>(<?php echo $count; ?> )
                    </span>
                </button>
                <ul class="dropdown-menu">
                    <div class="logout">
                        <li>
                            <div>
                                <?php
                                $count = 0;
                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                }
                                ?>
                            </div>
                            <a href="../cart/cart.php">MY CART (<?php echo $count; ?> ) </a> <br>


                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="btn-group dropstart" role="group">
            <button type="button" class="btn btn-dark">
                <div class="logout">

                    <!-- <a href="../Profile/profile.php"> Profile </a> <br> -->
                    <a href="../Login_register/logout.php"> Logout</a>

            </button>
        </div>

    </div>




    <div class="jumbotron text-center">
        <div class="confirm-sign mb-3">
            <i class="fa fa-check" aria-hidden="true"></i>
        </div>
        <h1 class="display-3">Thank You!</h1>
        <p class="lead">Your call request has been received. <br>
            Our business team will contact you soon.</p>

        <p>
            Having trouble? <a href="../contact/contact.php">Contact us</a>
        </p>
        <p class="lead">
            <!-- <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a> -->
            <a href="https://www.youtube.com/" class="review-us btn btn-primary btn-sm" target="_blank">Review Us</a>
        </p>

    </div>

</body>


</html>