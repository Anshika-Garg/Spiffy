<?php
    session_start();
    include("DatabaseConnection.php");

    $cat=$_GET['ee'];
    $category=$_GET['cat'];

    $sq="select * from women where Category='$cat'";
    $rs=$ref->query($sq);

?>
<?php include("Display.php"); ?>