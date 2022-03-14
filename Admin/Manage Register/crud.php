<?php

require("dbcon.php");


function row_remove($img){
    if(unlink($img)){
        
        header("location: manage_register.php?alert=img_rem_fail");
        exit;

    }
    
}


if(isset($_GET['rem']) && $_GET['rem']>0)
{
    $query="SELECT * FROM `registration` WHERE `id`='$_GET[rem]' ";
    $result=mysqli_query($con,$query);
    $fetch=mysqli_fetch_assoc($result);


    row_remove($fetch['time']);

    $query="DELETE FROM `registration` WHERE `id`='$_GET[rem]'";
    if(mysqli_query($con,$query)){
        header("location: manage_register.php?success=removed");
    }
    else{
        header("location: manage_register.php?alert=remove_failed");
    }
}

?>