<?php
    session_start();
    session_unset();
    header('location:admin_login.php');

include("connection/db.php");
//$query = mysqli_query($conn,"select * from admin_login where admin_email='{ $_SESSION['email']}'
//and admin_type='2'");
//if($query){
	//header('location://localhost/Job-Portal-System-main/');


//}else{
	//header('location:admin_login.php');
//}
?>