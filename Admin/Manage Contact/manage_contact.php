<?php

require("dbcon.php");

session_start();
session_regenerate_id(true);
if (!isset($_SESSION['AdminLoginId'])) {
    echo '<script>alert("Please Login !!")</script>';
    header("refresh:0 ; url=../Admin Login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/../ashish/Project Sem 5 2/Style/contact.css">

    <link rel="stylesheet" href="/../ashish/Project Sem 5 2/Style/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="/../ashish/Project Sem 5 2/Style/style-index.css">
    <title>Manage Contact us</title>
    <link rel="icon" href="/../ashish/Project Sem 5 2/Image/title_icon.gif" type="image/icon type">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>


<header class="header">
    <div class="logo">
        <a href="/../ashish/Project Sem 5 2/Admin/Admin Panel.php" title="Go to home">

            <img src="/../ashish/Project Sem 5 2/Image/gif1.gif" href="#" height="100" width="720">

        </a>
    </div>

    <div class="navbar">


        <ul>
            <li><a href="/../ashish/Project Sem 5 2/Admin/Admin Panel.php">Home </a> </li>
            <li><a href="../orders.php">orders</a></li>
            <li><a> </a>
                <a class="text-light" data-bs-toggle="dropdown" aria-expanded="false">manage products </a>
                <ul class="dropdown-menu dropdown-menu-dark text-white bg-dark" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" href="../Garage Products/garage_products.php">Garage</a></li>
                    <li><a class="dropdown-item" href="../Lightning Products/lightning_products.php">Lightning</a></li>
                    <li><a class="dropdown-item" href="../Riding Gear/riding gear_products.php">Riding Gear</a></li>
                </ul>
            </li>
           <li><a href="../Manage Service/manage_service.php">manage Service </a></li>
           <li><a href="../Manage Contact/manage_contact.php">Manage Contact us</a></li>
           <li><a href="../Manage Register/manage_register.php">Registration</a></li>


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
            <li><a href="../logout.php"> Logout</a></li>
            </div>
        </ul>
    </div>
</div>

<body class="bg-light">
    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between">
            <h2><i class="bi bi-bag-check"></i> Contact us Manager</h2>

           
        </div>
    </div>
    <?php

    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'img_rem_fail') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Contact form  Removal Fail! Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
       
      
     
        if ($_GET['alert'] == 'remove_failed') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Cannot Remove Contact form  Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
       
    } else if (isset($_GET['success'])) {
      
        if ($_GET['success'] == 'removed') {
            echo <<<alert
                                <div class="container alert alert-success alert-dismissible text-center" role="alert">
                                <strong>Contact form Deleted </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
    }

    ?>

    <div class="container mt-4 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr. No.</th>
                    <th width="15%" scope="col">Name</th>
                    <th width="20%" scope="col">Email</th>
                    <th width="10%" scope="col">Mobile</th>
                    <th width="10%" scope="col">Subject</th>
                    <th width="20%" scope="col">Message</th>
                    <th width="10%" scope="col">Date & Time</th>
                    <th width="10%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php

                $query = "SELECT * FROM `contact`";
                $result = mysqli_query($con, $query);
                $i = 1;

                while ($fetch = mysqli_fetch_assoc($result)) {

                    echo <<<product
                    <tr class="align-middle">
                    <th scope="row">$i</th>
                    <td>$fetch[username]</td>
                    <td>$fetch[email]</td>
                    <td>$fetch[mobile]</td>
                    <td>$fetch[subject]</td>
                    <td>$fetch[message]</td>
                    <td>$fetch[date_time]</td>
        
                    <td>
                   
                    <button onclick="confirm_rem($fetch[id])" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </td>
                    </tr>
                    product;
                    $i++;
                }


                ?>


            </tbody>
        </table>

    </div>


    <script>
        function confirm_rem(id) {
            if (confirm("Are you sure,you want to delete this item?")) {
                window.location.href = "crud.php?rem=" + id;
            }
        }
    </script>


</body>

</html>