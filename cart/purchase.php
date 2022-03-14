<?php
require("dbcon.php");
session_start();
date_default_timezone_set('Asia/Kolkata');
include 'dbcon.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['purchase'])){
        $create_date = date("Y-m-d H:i:s");
        $query1="INSERT INTO `order_manager`(`username`, `mobile`, `address`, `Pay_Mode`,`date`) VALUES ('$_POST[username]','$_POST[mobile]','$_POST[address]','$_POST[Pay_Mode]','$create_date')";
        if(mysqli_query($con,$query1))
        { 
           
            $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
           $stmt= mysqli_prepare($con,$query2);
           
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isss",$Order_id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
              echo"
                <script>
                 alert('Order Placed');
                window.location.href='cart.php';
                </script>";
               ;

            }
            else
            {
                ?>
            <script>
             alert("sql quer prepare error ");
            </script>
            <?php
            }
        }
        else{
            ?>
            <script>
             alert("sql error ");
            </script>
            <?php
        }
    }

}
