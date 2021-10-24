<?php
session_start();
include("connection/db.php");
$login= $_SESSION['email'];
    echo $job_title=$_POST['job_title'];
    echo $Description=$_POST[' Description'];
    echo $country=$_POST['country'];
    echo$state=$_POST['state'];
    echo $city=$_POST['city'];
    $category=$_POST['category'];
    $keyword=$_POST['keyword'];
  
  
  
  
    

    $query=mysqli_query($conn,"insert into  all_jobs(customer_email,job_title,des,country,state,city,category,keyword)values('$login','$job_title','$Description','$country','$state','$city','$category','$keyword')");

    if($query){
        echo "data has been added to db";
    }else{
        echo "data has not been added to db";
    }

?>