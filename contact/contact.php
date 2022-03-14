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

    <link rel="stylesheet" href="../Style/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Style/style-index.css">


    <title>Contact us</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">
</head>

<body>


    <?php

    include 'dbcon.php';


    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);
        $message = mysqli_real_escape_string($con, $_POST['message']);

        $subjectquery = " select * from contact where subject = '$subject'";
        $query = mysqli_query($con, $subjectquery);

        $subjectcount = mysqli_num_rows($query);

        if ($subjectcount > 10) {
    ?>
            <script>
                alert("Subject already mentioned !!!!");
            </script>
            <?php


        } else {
            $insertquery = "insert into contact (username, email, mobile,  subject, message) values('$username','$email','$mobile','$subject','$message')";

            $iquery = mysqli_query($con, $insertquery);

            if ($con) {
            ?>
                <script>
                    alert("Your message is successfully deliverd");
                </script>

            <?php
            } else {
            ?>
                <script>
                    alert("Try again ");
                </script>
    <?php
            }
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



    <div class="container_map">
        <div>
            <h1>Contact Us</h1>
        </div>
        <br />
        <div class="row">
            <div class="col-md-6">
                <div id="googlemap" style="width:350px; height:350px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60001.069383814785!2d73.73328795862268!3d19.963691263390864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddec818fe7a537%3A0x6152c08c9f006b37!2sEmbark%20Auto%20-%20Royal%20Enfield%20Showroom%20%26%20Service%20Centre!5e0!3m2!1sen!2sin!4v1642075762108!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <br />
            <div class="col-md-6">

                <form action="  <?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="contact" method="POST">
                    <div class="form-group">

                        <label for="form-name">Name</label>
                        <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" class="form-control" id="form-name" placeholder="Name" pattern="[a-zA-Z'-'\s]*" required="" oninvalid="this.setCustomValidity('Please Enter Valid Name')" oninput="setCustomValidity('')">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="label" for="email">E-mail</label>
                        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" placeholder="Enter your Email" class="form-control" readonly>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="form-subject">Mobile No.</label>
                        <input type="text" name="mobile" value="<?php echo $_SESSION['mobile'] ?>" id="mobile" class="form-control effect-16" placeholder="Enter your Mobile Number" pattern="^[7-9]\d{9}$" maxlength="10" required="" oninvalid="this.setCustomValidity('Please yaar enter number')" oninput="setCustomValidity('')" >
                    </div>  
                    <br>
                    <div class="form-group">
                        <label for="form-subject">Subject</label>
                        <input type="text" name="subject" class="form-control" id="form-subject" placeholder="Subject" required="required" oninvalid="this.setCustomValidity('Please Enter Subject')" oninput="setCustomValidity('')">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="form-message">Your Message</label>
                        <textarea class="form-control" name="message" id="form-message" placeholder="Message" required="" oninvalid="this.setCustomValidity('Please Enter Message')" oninput="setCustomValidity('')"></textarea>
                    </div>
                    <br>
                    <button id="btn1" type="submit" name="submit" value="service" class="btn btn-info">Contact Us </button>

                </form>
                <br>
                <div class="card">
                    <div class="h3 px-3 pt-2 mb-0 text-danger">Contact Info</div>
                    <div class="card-body">
                        <ul>
                            <li>
                                Tel- 0235299399 <br>
                                E-mail - ashish.royalenfield.com
                            </li>
                        </ul>
                        <div class="card">
                            <div class="h3 px-3 pt-2 mb-0 text-danger">Address</div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Unit No. 270, 2147, Motilal Nagar No.1,<br>
                                        Main Link Road, Goregaon West,<br>
                                        Mumbai, Maharashtra 400104
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





</body>

</html>