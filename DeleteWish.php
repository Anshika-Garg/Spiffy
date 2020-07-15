<?php
     session_start();
     include("DatabaseConnection.php");

     $id=$_GET['item'];
     $sq="delete from wishlist where ProductID=$id";
     $r=$ref->query($sq);
     header("location:Wishlist.php")
?>