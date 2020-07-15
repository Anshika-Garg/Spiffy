<?php
    include("DatabaseConnection.php");

    $sq="select * from women";
    $r=$ref->query($sq);
    $id=2147483647;
    while($row=$r->fetch_array())
    {   
        $sq1="update `women` set `ProductID`=$id where Sno=$row[0]";
        $id=$id-1;
        echo $row[0]." ";   
        $r1=$ref->query($sq1);
        echo $ref->affected_rows."<br>";
    }
?>