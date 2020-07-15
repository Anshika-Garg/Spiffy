<?php
     session_start();
     if(!isset($_SESSION["confirm"]) || !isset($_POST["e"]))
        header("location:Home.php");
     include("DatabaseConnection.php");

     $email=$_SESSION['e'];
     $sq1="select * from cart where `User`='$email'";
     $r1=$ref->query($sq1);
    echo $r1->num_rows;
    
    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d");
    
     while($p=$r1->fetch_array())
     {      
         $sq="insert into `order`(`ProductID`,`User`,`Size`,`Qty`,`Price`,`Date`) values ($p[1],'$email','$p[4]',$p[3],$p[5],'$date')";
            $r=$ref->query($sq);

        echo $ref->error;

     }


     $sq2="delete from cart where `User`='$email'";
     $r=$ref->query($sq2);
     header("location:OrderPlaced.php");
?>