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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/../ashish/Project Sem 5 2/Style/contact.css">

    <link rel="stylesheet" href="/../ashish/Project Sem 5 2/Style/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" type="text/css" href="/../ashish/Project Sem 5 2/Style/style-index.css">
    <title>Ashish Royal Enfield</title>
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
            <h2><i class="bi bi-bag-check"></i> Garage Product Manager</h2>

            <!-- Button trigger modal -->
            <button id="btn1" type="button" class="btn btn-primary text-dark" data-bs-toggle="modal" data-bs-target="#addproduct">
                <i class="bi bi-plus-circle"></i> Add Product
            </button>
        </div>
    </div>
    <?php

    if (isset($_GET['alert'])) {
        if ($_GET['alert'] == 'img_upload') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Image Upload Failed! Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
        if ($_GET['alert'] == 'img_rem_fail') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Image Removal Failed! Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
        if ($_GET['alert'] == 'add_failed') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Cannot Add Product Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
        if ($_GET['alert'] == 'remove_failed') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Cannot RemoveProduct Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
        if ($_GET['alert'] == 'update_failed') {
            echo <<<alert
                                <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                                <strong>Cannot Update Product Server Down</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
    } else if (isset($_GET['success'])) {
        if ($_GET['success'] == 'updated') {
            echo <<<alert
                                <div class="container alert alert-success alert-dismissible text-center" role="alert">
                                <strong>Product Updated</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
        if ($_GET['success'] == 'added') {
            echo <<<alert
                                <div class="container alert alert-success alert-dismissible text-center" role="alert">
                                <strong>Product Added </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

            alert;
        }
        if ($_GET['success'] == 'removed') {
            echo <<<alert
                                <div class="container alert alert-success alert-dismissible text-center" role="alert">
                                <strong>Product Removed </strong>
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
                    <th width="15%" scope="col">Image</th>
                    <th width="10%" scope="col">Name</th>
                    <th width="10%" scope="col">Price</th>
                    <th width="35%" scope="col">Description</th>
                    <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php

                $query = "SELECT * FROM `garage`";
                $result = mysqli_query($con, $query);
                $i = 1;

                $fetch_src = FETCH_SRC;

                while ($fetch = mysqli_fetch_assoc($result)) {

                    echo <<<product
                    <tr class="align-middle">
                    <th scope="row">$i</th>
                    <td><img src="$fetch_src$fetch[image]" width="150px"></td>
                    <td>$fetch[name]</td>
                    <td>Rs.$fetch[price]</td>
                    <td>$fetch[description]</td>
                    <td>
                    <a href="?edit=$fetch[id]" class="btn btn-warning me3"><i class="bi bi-pencil-square"></i>Edit</a>
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




    <!-- add Modal -->
    <div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="POST" enctype="multipart/form-data">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Product</h5>

                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" ">Name</span>
                            <input type=" text" class="form-control" name="name" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" ">Price</span>
                            <input type=" text" class="form-control" name="price" min="1" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Title</span>
                            <textarea class="form-control" name="desc" required></textarea>
                        </div>
                        <br>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button name="addproduct" id="btn1" type="submit" class="btn btn-success text-dark">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- edit Modal -->

    <div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="POST" enctype="multipart/form-data">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Product</h5>

                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" ">Name</span>
                            <input type=" text" class="form-control" name="name" id="editname" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" ">Price</span>
                            <input type=" text" class="form-control" name="price" id="editprice" min="1" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">Title</span>
                            <textarea class="form-control" name="desc" id="editdesc" required></textarea>
                        </div>
                        <br>
                        <img src="" id="editimg" width="100%" class="mb-3">
                        <br>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg">
                        </div>
                        <input type="hidden" name="editpid" id="editpid">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button name="editproduct" id="btn1" type="submit" class="btn btn-success text-dark">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php

    if (isset($_GET['edit']) && $_GET['edit'] > 0) {
        $query = "SELECT * FROM `garage` WHERE `id`='$_GET[edit]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);

        echo "

        <script>

        var editproduct = new bootstrap.Modal(document.getElementById('editproduct'), {
            keyboard: false
          });

                    
            document.querySelector('#editname').value=`$fetch[name]`;
            document.querySelector('#editprice').value=`$fetch[price]`;
            document.querySelector('#editdesc').value=`$fetch[description]`;
            document.querySelector('#editimg').src=`$fetch_src$fetch[image]`;
            document.querySelector('#editpid').value=`$_GET[edit]`;

          
          editproduct.show();
        
        </script>



        ";
    }



    ?>


    <script>
        function confirm_rem(id) {
            if (confirm("Are you sure,you want to delete this item?")) {
                window.location.href = "crud.php?rem=" + id;
            }
        }
    </script>


</body>

</html>