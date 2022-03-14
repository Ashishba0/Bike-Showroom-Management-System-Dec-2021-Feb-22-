<?php
   $server = "localhost";
   $user = "root";
   $password = "";
   $db = "signup";

   $con = mysqli_connect($server,$user,$password,$db);

  if($con){
?>
   <script>
    
   </script>

<?php
  }else{
   ?>
   <script>
    alert("Connection Broke ");
   </script>
   <?php
  }

  define("UPLOAD_SRC",$_SERVER['DOCUMENT_ROOT']."/ashish/Project Sem 5 2/Image/uploads/");

  define("FETCH_SRC","http://127.0.0.1/ashish/Project Sem 5 2/Image/uploads/")
?>