<?php

require("dbcon.php");

session_start();
session_regenerate_id(true);
if (!isset($_SESSION['AdminLoginId'])) {
    echo '<script>alert("Please Login !!")</script>';
    header("refresh:0 ; url=Admin Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../Style/style-index.css">
    <title>Manage Orders</title>
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
            <li><a href="/../ashish/Project Sem 5 2/Admin/Admin Panel.php">Home </a> </li>
            <li><a href="../orders.php">orders</a></li>
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

<body class="bg-light">
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between">
            <h2><i class="bi bi-bag-check"></i> Order Manager</h2>


        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center ">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Payment Mode</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query = "SELECT * FROM `order_manager`";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                            echo " 
                             <tr>
                                <td class='table-active' >$user_fetch[Order_id]</td>
                                <td class='table-active'>$user_fetch[username]</td>
                                <td class='table-active'>$user_fetch[mobile]</td>
                                <td class='table-active'>$user_fetch[address]</td>
                                <td class='table-active'>$user_fetch[Pay_Mode]</td>
                                <td class='table-active'>$user_fetch[date]</td>
                                <td  class='table-secondary'>
                                <table class='table text-center'>
                                <thead class='table-bordered text-light bg-dark'>
                                    <tr>
                                        <th scope='col'>Item Name</th>
                                        <th scope='col'>Price</th>
                                        <th scope='col'>Quantity</th>  
                                        <th width='30%' scope='col'>Total +<br>Gst&nbsp18%</th>
                                        <th width='20%' scope='col'>Total</th>
                                                                        
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                ";
                            $order_query = "SELECT * FROM `user_orders` WHERE `Order_id`='$user_fetch[Order_id]'";
                            $order_result = mysqli_query($con, $order_query);
                            $gfinal = 0;
                            while ($order_fetch = mysqli_fetch_assoc($order_result)) {

                                $gst = 0.18 * $order_fetch['Price'] * $order_fetch['Quantity'];
                                $total = $order_fetch['Price'] * $order_fetch['Quantity'];
                                $final = $total + $gst;
                                $gfinal = $gfinal + $final;


                                // $insert= "INSERT INTO order_manager (Total) values ($gfinal,'')";
                                // $inserttquery=mysqli_query($con,$insert);


                                echo "

                                    <tr>
                                        <td class='table-success'>$order_fetch[Item_Name]</td>
                                        <td class='table-success'>$order_fetch[Price]</td>
                                        <td class='table-success'>$order_fetch[Quantity]</td>
                                        <td class='table-success'>₹.&nbsp$total + ₹.&nbsp$gst</td>
                                        <td class='table-success'>₹.&nbsp$final</td>
                                        
                                    </tr>
                                    ";
                            }
                            //    $gfinal=0;
                            //     for ($i = $final; $i < $final; $i++) {
                            //         $gfinal = $gfinal + $final;
                            //     }



                            echo "    

                                <th width='100%' class='gfinal' scope='col'>Grand Total ₹.&nbsp$gfinal</th>

                                </tbody>
                                </table>
                                <br>
                                </td>
                            </tr>
                                    ";



                            // $total_query = "SELECT * FROM `user_orders` ";
                            // $total_result = mysqli_query($con, $total_query);

                            // if($total_result)
                            // {}
                            $insert_query = "UPDATE order_manager SET gtotal='$gfinal' WHERE `Order_id`='$user_fetch[Order_id]' ";

                            $tquery = mysqli_query($con, $insert_query);
                        }



                        ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <?php



    ?>

</body>

</html>