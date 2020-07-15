<?php
     session_start();
     include("DatabaseConnection.php");

     $email=$_SESSION['e'];//email
     $id=$_SESSION['setid'];//Product Sno
     $size=$_GET['options'];//size
     $qty=$_GET['option'];//quantity
     $q1="select * from cart where (`User`='$email' and `ProductID`=$id and `Size`='$size')";
     $row=$ref->query($q1);
     if($row->num_rows==1)
     {
          $r=$row->fetch_array();
          if(($r[3]+$qty)<=4)
          {
               $change=$r[3]+$qty;
               $q2="update cart set `Qty`=$change where (`User`='$email' and `ProductID`=$id and `Size`='$size') ";
               $ex=$ref->query($q2);
          }
     }
     else
     {
               $sq1="select ImgPrice from women where Sno=$id";
               $r1=$ref->query($sq1);
               $p=$r1->fetch_array();
               $tp=$qty*$p[0];//total price
               $sq="insert into cart(`ProductID`,`User`,`Size`,`Qty`,`TotalPrice`) values ($id,'$email','$size',$qty,$tp)";
               $r=$ref->query($sq);
     }
     header("location:Cart.php");
?>