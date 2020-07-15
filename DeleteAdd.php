<?php
     session_start();
     if(!isset($_SESSION['e']))
     {
         header("location:Login.php");
     }
     include("DatabaseConnection.php");

     $id=$_GET['d'];
     $sq="delete from address where Sno=$id";
     $r=$ref->query($sq);
     header("location:SAddress.php");
?>