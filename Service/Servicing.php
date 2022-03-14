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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Style/style-index.css">
    <link rel="stylesheet" href="../Style/service.css">



    <title>Service Booking</title>
    <link rel="icon" href="../Image/title_icon.gif" type="image/icon type">
</head>

<body>



    <?php

    include 'dbcon.php';


    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $service = mysqli_real_escape_string($con, $_POST['service']);
        $vehicle = mysqli_real_escape_string($con, $_POST['vehicle']);
        $date =  mysqli_real_escape_string($con, $_POST['date']);
        $time = mysqli_real_escape_string($con, $_POST['time']);
        $remark = mysqli_real_escape_string($con, $_POST['remark']);


        $timequery = " select * from servicing where time = '$time'";
        $query = mysqli_query($con, $timequery);

        $timecount = mysqli_num_rows($query);

        if ($timecount > 0) {
    ?>
            <script>
                alert("Time ALready Booked !!!!");
            </script>
            <?php
        } else {
            $insertquery = "insert into servicing(username, mobile, email, location, address, service, vehicle, date, time, remark) values('$username','$mobile','$email','$location','$address','$service','$vehicle','$date','$time','$remark')";

            $iquery = mysqli_query($con, $insertquery);

            if ($con) {
                echo ' <script>alert("Your Service Request is booked successfully");  </script>';
                header("refresh:0.1 ; url=../Service/thanku.php");
            } else {
            ?>
                <script>
                    alert("Sorry Service Request no booked ");
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



    <!--   <div class="head">
            <h1>Book Your Servicing Slot</h1>
        </div>
        <div class="content">
            <form action="#">
                <label for="name-book">Name : </label>
                <input type="text" id="name" placeholder="Your Name"><br>


                <label for="mob-book">Mobile No. : </label>
                <input type="text" id="name" placeholder="Contact Number"><br>


                <label for="regi-book">Registration No. : </label>
                <input type="text" id="name" placeholder="Vechile Number"><br>


                <label for="name-book">Bike Model : </label>


                <select>
                    <option value="Royal Enfield Classic 350">Royal Enfield Classic 350</option>
                    <option value="Royal Enfield Bullet 350">Royal Enfield Bullet 350</option>
                    <option value="Yamaha YZF R15 V3">Yamaha YZF R15 V3</option>
                    <option value="KTM 200 Duke">KTM 200 Duke</option>
                    <option value="Bajaj Pulsar NS200">Bajaj Pulsar NS200</option>
                    <option value="TVS Apache RTR 160">TVS Apache RTR 160</option>
                    <option value="Maestro Edge VX">Maestro Edge VX</option>
                </select>


            </form>

            <form action="#">
                <label for="slot-booking">Choose date</label>
                <input type="date" id="slot-booking" name="servicing"><br>


                <label for="appt">Select a time:</label>
                <input type="time" id="appt" name="appt"><br>

                <button id="book-button"> Book your Slot</button>

            </form>

        </div>
-->

    <div class="container-fluid innerpage">
        <div class="container">
            <div class="contact-form mt-5">

                <form action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="service" method="POST">

                    <!-- end_mail_bookservice.php -->

                    <fieldset class="form-book">
                        <div>
                            <h1>Service Form</h1>
                        </div>
                        <legend>Personal &amp; Vehicle Detail</legend>
                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Your Name <span class="parsley-required text-danger">*</span></label>

                                <input value="<?php echo $_SESSION['username'] ?>" class="form-control effect-16" id="Name" name="username" type="text" pattern="[a-zA-Z'-'\s]*" required="" oninvalid="this.setCustomValidity('Please Enter Valid Name')" oninput="setCustomValidity('')">

                                <div class="focus-border"></div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Mobile No. <span class="parsley-required text-danger">*</span></label>
                                <input value="<?php echo $_SESSION['mobile'] ?>" type="text" id="mobile" name="mobile" class="form-control effect-16" pattern="^[7-9]\d{9}$" maxlength="10" required="" oninvalid="this.setCustomValidity('Please Enter Valid Number 9/8/7')" oninput="setCustomValidity('')">

                                <div class="focus-border"></div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Your Email ID <span class="parsley-required text-danger">*</span></label>
                                <input value="<?php echo $_SESSION['email'] ?>" style="max-width: 100%;" class="form-control effect-16" name="email" id="email" type="email" readonly>

                                <div class="focus-border"></div>
                            </div>

                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Location <span class="parsley-required text-danger">*</span></label>
                                <select class="form-control effect-16" name="location"  id="location" required="" oninvalid="this.setCustomValidity('Please Enter valid Loccation')" oninput="setCustomValidity('')">
                                    <option disabled="" value="" class="form-select-placeholder" selected=""></option>
                                    <option value="Mumbai Naka">Mumbai Naka</option>
                                    <option value="Indira Nagar">Indira Nagar </option>
                                    <option value="Ambad"> Ambad </option>
                                </select>

                                <div class="focus-border"></div>
                            </div>

                            <div class="col-md-12 col-lg-7 mb-3 input-effect">
                                <label>Your Address<span class="parsley-required text-danger">*</span></label>
                                <textarea class="form-control effect-16" id="Address" name="address" style="height: 45px;" required></textarea>

                                <div class="focus-border"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Select Service <span class="parsley-required text-danger">*</span></label>
                                <select class="form-control effect-16" data-val="true" id="service" name="service" required="" oninvalid="this.setCustomValidity('Please Select Service')" oninput="setCustomValidity('')">
                                    <option disabled="" value="" class="form-select-placeholder" selected=""></option>
                                    <option value="">Select Services</option>
                                    <option value="Free Service">Free Service</option>
                                    <option value="Paid Service">Paid Service</option>
                                    <option value="Accidental Repair">Accidental Repair</option>
                                </select>

                                <div class="focus-border"></div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Vehicle No. <span class="parsley-required text-danger">*<small>EG: MH 15 GH 6436</small></span></label>
                                <input placeholder="EG: MH 15 GH 6436" type="text" id="vehical_no" name="vehicle" class="form-control effect-16" maxlength="13" pattern="^[M,H]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{4}$" required="" oninvalid="this.setCustomValidity('Please Enter as per example')" oninput="setCustomValidity('')">

                                <div class="focus-border"></div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label>Select Date<span class="parsley-required text-danger">*<small> (Sunday close)</small></span></label>

                                <input style="max-width: 100%;" class="form-control effect-16" name="date" type="date" placeholder="DD/MM/Year" id="datefield"  required="" oninvalid="this.setCustomValidity('Please Enter Date yaarrrrrrrrrrrrrrrrr')" oninput="setCustomValidity('')">


                                <div class="focus-border"></div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-2 input-effect">
                                <label for="appt">Select a time:<span class="parsley-required text-danger">*<small> ( 9 AM to 6 PM)</small></span></label>
                                <input type="time" id="appt" name="time"  min="09:00" max="18:00" required><br>
                            </div>

                            <div class="col-md-12 col-lg-12 input-effect">
                                <label>Remark<span class="parsley-required text-danger">*</span></label>
                                <textarea type="remark" style="max-width: 100%;" class="form-control effect-16" cols="20" id="remark" name="remark" rows="2" required></textarea>

                                <div class="focus-border"></div>
                            </div>

                        </div>
            </div>
            </fieldset>
            <br>
            <button id="btn1" type="submit" name="submit" value="service" class="btn btn-info">Submit </button>
            </form>
        </div>
    </div>
    </div>

    <br>

    <div class="card">
        <div class="h3 px-3 pt-2 mb-0 text-danger"></div>
        <div class="card-body">
            <ul>

                <li class="mt-1"><span class="text-danger">with regards, Ashish Royal Enfield.</span></li>
            </ul>
        </div>
    </div>

    <script>
        // Use Javascript
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("datefield").setAttribute("min", today);
    </script>


</body>

</html>