<?php

require("dbcon.php");

session_start();
session_regenerate_id(true);
if (!isset($_SESSION['AdminLoginId'])) {

    header("location: Admin Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <title>Admin Panel</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>


<header class="header">
    <div class="logo">
        <a href="../Admin/Admin Panel.php" title="Go to home">

            <img src="../Image/gif1.gif" href="#" height="100" width="720">

        </a>
    </div>

    <div class="navbar">


        <ul>
            <li><a href="../Admin/Admin Panel.php">Home </a> </li>
            <li><a href="../Admin/orders.php">orders</a></li>
            <li>
                <a class="text-light" data-bs-toggle="dropdown" aria-expanded="false">manage products </a>
                <ul class="dropdown-menu dropdown-menu-dark text-white bg-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="../Admin/Garage Products/garage_products.php">Garage</a></li>
                    <li><a class="dropdown-item" href="../Admin/Lightning Products/lightning_products.php">Lightning</a></li>
                    <li><a class="dropdown-item" href="../Admin/Riding Gear/riding gear_products.php">Riding Gear</a></li>
                </ul>
            </li>
            <li><a href="./Manage Service/manage_service.php">manage Service </a></li>
           <li><a href="./Manage Contact/manage_contact.php">Manage Contact us</a></li>
           <li><a href="./Manage Register/manage_register.php">Registration</a></li>


        </ul>

    </div>


</header>


<div class="right-column">
    <div class="header-login">
        <ul>
            <div class="user">
                <li>Hello ADMIN !! <?php echo $_SESSION['AdminLoginId'] ?> </li>
            </div>
            <div class="logout">
            <li><a href="logout.php"> Logout</a></li>
            </div>
        </ul>
    </div>
</div>

<body>
    
    <!--slider-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">>
            <div class="carousel-item active">
                <div class="info">
                    <h1>GEAR UP</h1>
                    <p>FOR THE MOTORCYCLE LIFE</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info">
                    <h1>Ashish Royal Enfield</h1>
                    <p>Every Thing You Need to Live Motorcycle Life</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="info">
                    <h1>Lifestyle Garage</h1>
                    <p>COMFORT | STYLE | PERFORMANCE</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <!--icon-->

    <div class="icon-maker">

        <img src="../Image/layer2.jpg" id="icon">

    </div>



    <!--video-->
    <style>
        video {
            padding: 200px 200px;
            position: relative;
            width: 100%;
            height: auto;
            background: url(../Image/back.jpg);

        }
    </style>
    <video width="1520" height="720" autoplay muted controls style="background-color: black;">
        <source src="../Image/demo.mp4" type="video/mp4">
        <source src="../Image/demo.mkv" type="video/ogg">
        Your browser does not support the video tag.
    </video>

    <!--footer-->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">orders</a></li>
                        <li><a href="#">payment options</a></li>


                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">helmets</a></li>
                        <li><a href="#">jackets</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">gloves</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
                    </div>
                </div>
            </div>

        </div>


    </footer>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>


</body>

</html>