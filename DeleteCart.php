<?php
     session_start();
     include("DatabaseConnection.php");

     $id=$_GET['d'];
     $sq="delete from cart where Sno=$id";
     $r=$ref->query($sq);
     echo $ref->affected_rows;
     header("location:Cart.php")
?>