<?php
include("connection/db.php");

    $Company=$_POST['Company'];
    $Description=$_POST['Description'];
  
    

    $query=mysqli_query($conn,
    "insert into Company (company,des)values
    ('$Company','$Description')");

    if($query){
        echo "data has been added to db";
    }else{
        echo "data has not been added to db";
    }

?>