<?php
  
   session_start();
   $e=$_POST['lemail'];
   $p=$_POST['lpassword'];

   include("../DatabaseConnection.php"); //database connect
    
   $pen=md5($p);//encrypts password
   
   $sq= "select * from login where Email='$e'";
   $r1= $ref->query($sq);
   $rw= $r1->fetch_array();

      

   
   
   if($pen== $rw[3] and $r1->num_rows)
   {
      $_SESSION['e']=$e;
      $_SESSION['key']=1;
      header("location:../Home.php");
   }
   else
   {
      $_SESSION['wrong']='*Enter a valid Email and Password';
      header("location:../Login.php");
   } 
?>