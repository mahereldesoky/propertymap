<?php 
@include('config/dbcon.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

    <?php 
    @include('./includes/navbar.php');

    ?>

    <div class="container-fluid  py-5">



          <?php if (!isset($_SESSION['auth_role'])) : ?>
            <div class="container">
            <?php @include('message.php')?>
            </div>

            <div class="container login-form" >

                <div class="login-form-overlay">
                </div>
                <div class="row">

                    <div class="col-md-4  mt-5" style="z-index: 6598598;">
                        <div class="row ">
                            <div class="col-md-12 text-center mt-5 " >
                                <a href="" class="text-dark">
                                    <img  src="img/logo horizontal  white-01-04.png" alt=""> Property Map
                                </a>
                                <p class="mt-4">WELCOME</p>
                                <h3 class="mb-4">Login</h3>
                            </div>
                        </div>
                        <div class="log-form" style="margin-left: 30px;">
                            <form action="./logincode.php" method="POST">

                                <label for="">Email</label>
                                <input class="log-input" type="email" required name="email" placeholder="Enter You Email">
                                <label for="">Password</label>
                                <input class="log-input" type="password" required name="password" placeholder="Enter You Password">
                                <button class="btn nav-btn w-100" name="login_btn">Login</button>

                            </form>
                        </div>
                    </div>

                    <div class="col-md-8">
        
                        <img src="img/log.png" alt="" class="img-fluid log-logo" >
                    </div>
                </div>
            </div>


    </div>
    <?php elseif (isset($_SESSION['auth_role'])) : ?>

    <div class="container logout-form">

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            You Are logged in
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        <div class="container login-form" >

            <div class="login-form-overlay"></div>

            <div class="row">

                <div class="col-md-4  mt-5" style="z-index: 6598598;">
                    <div class="row ">
                        <div class="col-md-12 text-center mt-5 " >
                            <a href="" class="text-dark">
                                <img  src="img/logo horizontal  white-01-04.png" alt=""> Property Map
                            </a>
                            <p class="mt-4">WELCOME</p>
                            <h3 class="mb-4">Logout</h3>
                        </div>
                    </div>
                    <div class="log-form text-center" style="margin-left: 30px;">
                        <form action="logout.php" method="POST">

                            <a class="btn nav-btn w-100 mb-3" href="./admin/index.php">Back To Dashboard</a>
                            <button class="btn nav-btn w-100" name="logout_btn">Logout</button>

                        </form>
                    </div>
                </div>

                <div class="col-md-8">

                    <img src="img/log.png" alt="" class="img-fluid log-logo" >
                </div>
            </div>

        </div>
    </div> 


<?php endif; ?>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>