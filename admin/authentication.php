<?php     
//Start a new session

session_start();



include('../config/dbcon.php');

if(!isset($_SESSION['auth_role'])){
    $_SESSION['message'] = "login to access dashboard";
    header("Location: ../login.php");
    exit(0);
}
else {
    if($_SESSION['auth_role'] != "1" && $_SESSION['auth_role'] != "2"){
        $_SESSION['message'] = "You are not Authorised as ADMIN";
        header("Location: ../login.php");
        exit(0);
    }
}



?>