<?php
include("connection/db.php");

    $category=$_POST['category'];
    $Description=$_POST['Description'];
  
    

    $query=mysqli_query($conn,
    "insert into job_category(category,des)values('$category','$Description')");

    if($query){
        echo "data has been added to db";
    }else{
        echo "data has not been added to db";
    }

?>