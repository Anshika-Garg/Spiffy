<?php
     session_start();
     if(!isset($_SESSION['e']))
     {
         header("location:Login.php");
     }

     include("DatabaseConnection.php");


     $email=$_SESSION['e'];
     $item=$_GET['item'];
     $sq1="select * from wishlist where (`User`='$email' and `ProductID`=$item)";
     $r1=$ref->query($sq1);
     if($r1->num_rows!=1)
      {
            $sq="insert into wishlist(`User`,`ProductID`) values('$email','$item')";
            $r1=$ref->query($sq);
      }
      
     header("location:Wishlist.php");
?>