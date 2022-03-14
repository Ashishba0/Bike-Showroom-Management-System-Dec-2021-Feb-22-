<?php


require("dbcon.php");

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
    <title>Riding Gear</title>
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



    <?php
    $query = "SELECT * FROM `riding_gear`";
    $query2  = "SELECT * FROM `riding_gear`";
    $result = mysqli_query($con, $query);
    $image =  mysqli_query($con, $query2);

    $fetch = mysqli_fetch_assoc($image);

    $res = mysqli_fetch_all($result);

    $fetch_src = FETCH_SRC;

    ?>


            <!---bike listed-->


            <section id="products" class="products">



                <div class="container mt-4 p-0">
                    <table class="table table-hover text-center">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th width="10%" scope="col" class="rounded-start">Sr. No.</th>
                                <th width="15%" scope="col">Image</th>
                                <th width="15%" scope="col">Name</th>
                                <th width="10%" scope="col">Price</th>
                                <th width="35%" scope="col">Description</th>
                                <th width="20%" scope="col" class="rounded-end"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <div class="row">
                                <?php

                                $query = "SELECT * FROM `riding_gear`";
                                $result = mysqli_query($con, $query);
                                $i = 1;

                                $fetch_src = FETCH_SRC;

                                while ($fetch = mysqli_fetch_assoc($result)) {

                                     echo <<<product
                                        <form action="../cart/manage_cart.php" method="POST">
                                        <tr class="align-middle">
                                        <th scope="row">$i</th>
                                        <td><img src="$fetch_src$fetch[image]" width="150px"></td>
                                        <td>$fetch[name]</td>
                                        <td>Rs.$fetch[price]</td>
                                        <td>$fetch[description]</td>
                                        <td>
                                        <button type="submit" name="Add_To_Cart" class="add_to_Card">ADD TO CART</button>
                                        <input type="hidden" name="Item_Name" value="$fetch[name]">
                                        <input type="hidden" name="Price" value="$fetch[price]">
                                        </td>
                                        </tr>
                                        </form>
                                        product;
                                    $i++;
                                }


                                ?>


                        </tbody>
                    </table>

                </div>


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