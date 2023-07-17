<?php  
session_start();
include('config/dbcon.php');

if(isset($_POST['login_btn'])){
    $emails = mysqli_real_escape_string($con, $_POST['email']);
    $passwords = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM admin WHERE email='$emails' AND password='$passwords' LIMIT 1";
    $login_query_run = mysqli_query($con ,$login_query);

    if(mysqli_num_rows($login_query_run) > 0){
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['name']; 
            $user_email = $data['email'];
            $role_as = $data['role_as'];
            // $_SESSION['Active_time'] = time();
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; //1= admin 0= user 2=superdamin
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'user_name' => $user_name,
            'user_email' => $user_email,
        ];

        if($_SESSION['auth_role'] == '1'){
            $_SESSION['message'] = "welcome to dashboard";
            header("Location: admin/index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == '0'){
            $_SESSION['message'] = "you are logged in";
            header("Location: index.php");
            exit(0);
        }
        elseif($_SESSION['auth_role'] == '2'){
            $_SESSION['message'] = "you are logged in Super Admin"; //super admin
            header("Location: admin/index.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = "you are logged in "; 
            header("Location: index.php");
            exit(0);
        }
    }
    else {
        $_SESSION['message'] = "invalid email or password";
        header("Location: login.php");
        exit(0);
    }
}

else{
    $_SESSION['message'] = "you are not allowed to access this page";
    header("Location: login.php");
    exit(0);
}


?>