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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="../Style/inventory.css">
    <link rel="stylesheet" href="../Style/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <title>Bikes</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">

    <link rel="stylesheet" href="../Bikes/style-bike.css">

</head>

<body>


    <header class="header">
        <div class="logo">
            <a href="../Index/index2.php" title="Go to home">
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



    <!---bike listed-->

    <section id="products" class="products">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">
                            <span class="sale">Sale</span>
                            <img src="../Bikes/royal-enfield-bullet-350-ks.jpg" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Bullet 350</h3>
                            <p class="md-0 amount">Rs.2,50,000 <del>Rs.2,30,000</del></p>
                            <div class="py-1">
                                <span class="ti-star active"></span>
                                <span class="ti-star active"></span>
                                <span class="ti-star active"></span>
                                <span class="ti-star active"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';" type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">
                            <span class="sale">Sale</span>
                            <img src="../Bikes/red metor.png" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Red Metor</h3>
                            <p class="md-0 amount">Rs.1,80,000 <del>Rs.1,45,000</del></p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">
                            <span class="sale">Sale</span>
                            <img src="../Bikes/thunder bird.jpg" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Thunder Bird </h3>
                            <p class="md-0 amount">Rs.3,50,000 <del>Rs.3,30,000</del></p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">

                            <img src="../Bikes/royal-enfield-continental-gt-650-standard--bs-vi2020.jpg" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Continental-Gt-650</h3>
                            <p class="md-0 amount">Rs.1,10,000</p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">
                            <span class="sale">Sale</span>
                            <img src="../Bikes/royal-enfield-himalayan-standard--bs-vi-2021.jpg" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Himalayan Standard</h3>
                            <p class="md-0 amount">Rs.3,00,000 <del>Rs.3,30,000</del> </p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">
                            <span class="sale">Sale</span>
                            <img src="../Bikes/royal-enfield-interceptor-650-standard--bs-vi2020.jpg" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Interceptor 650</h3>
                            <p class="md-0 amount">Rs.2,25,000 <del>Rs.3,30,000</del></p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">

                            <img src="../Bikes/intercoper black.png" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Interceptor Black</h3>
                            <p class="md-0 amount">Rs.2,75,000</p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">

                            <img src="../Bikes/royal-enfield-meteor-350-fireball2020.jpg" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Meteor 350</h3>
                            <p class="md-0 amount">Rs.4,79,000</p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button onclick="window.location.href = '../contact/contact.php';"  type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <a href="#" class="d-block text-center md-4">
                    <div class="product-list">
                        <div class="product-image position-relative">

                            <img src="../Bikes/royalenfield-classic-350-2021-redditch-single-channel-abs.png" alt="products" class="img-fluid product-image-first" height="800" width="440">

                        </div>
                        <div class="product-name pt-3">
                            <h3 class="text-capitalize">Royal Enfield Classic 350</h3>
                            <p class="md-0 amount">Rs.9 lakh</p>
                            <div class="py-1">
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                                <span class="ti-star"></span>
                            </div>
                            <button  onclick="window.location.href = '../contact/contact.php';" type="button" class="add_to_Card">KNOW MORE >></button>
                        </div>
                    </div>
            </div>
        </div>
    </section>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



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
</body>

</html>