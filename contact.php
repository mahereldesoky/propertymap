<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src="js/sweetalert.js"></script>


    <title>Property Map / Contact US</title>
</head>
<body>

  <header>

  <?php 
  @include('./includes/navbar.php');

  ?>

  </header>

  <!-- Page Title start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center head-title py-2">
                <h1 class="text-uppercase">contact us</h1>
                <p>Have any questions? We're happy to answer.</p>
            </div>
        </div>
    </div>

  <!-- Page Title end -->

  <!-- Hero sec start -->

    <div class="container-fluid hero-sec p-0 "
        style="background-image: url('img/Contact\ Us.jpg');
        background-repeat: no-repeat;
        background-size: cover; 
        background-position: center;
        height: 405px;">

        <div class="hero-txt text-center">
            <h2>we want to hear from you</h2>
            <h5 class="text-white">send us a message, give us a call , or better still visit us</h5>
        </div>
    </div>

  <!-- Hero sec end -->


  <div class="container contact-form shadow py-4">
    <div class="row ">
        <div class="col-md-8 form-item" >
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <?php 
                    $firstName = ""; 
                    // $lastName = ""; 
                    // $userEmail = ""; 
                    $phoneNumber = ""; 
                    $message = ""; //first we leave email field blank
                    if(isset($_POST['contact'])){ //if subscribe btn clicked
                    $firstName = $_POST['name']; 
                    // $lastName = $_POST['lname'];
                    // $userEmail = $_POST['email']; //getting user entered email
                    $phoneNumber = $_POST['number']; 
                    $message = $_POST['message']; 
                    $new_message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

                    if(filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)){ //validating user email
                        $to = "info@propertymap.com.eg";
                        $subject = "Message From PropertyMap Website";
                        $txt ="Customer Name: ". $firstName. "\r\n Phone Number : ". $phoneNumber . "\r\n  Message : ". $new_message; 
                        $headers = "From: noreply@Propertymap.com" . "\r\n" .
                                    "CC: ";                        //php function to send mail
                        if(mail($to, $subject, $txt, $headers)){
                        ?>
                        <!-- show sucess message once email send successfully -->
                        <script>
                            const sucssess = Swal.mixin({
                            sucssess: true,
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (sucssess) => {
                                sucssess.addEventListener('mouseenter', Swal.stopTimer)
                                sucssess.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                            })

                            sucssess.fire({
                            icon: 'success',
                            title: 'Thank You Message Sent Successfully !'
                            })
                        </script>
                        <?php
                        $userEmail = "";
                        }else{
                        ?>
                        <!-- show error message if somehow mail can't be sent -->
                        <script>
                            const Toast = Swal.mixin({
                            toast: true,
                            position: 'center',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                            })

                            Toast.fire({
                            icon: 'error',
                            title: 'Something Went wrong'
                            })
                        </script>
                        <?php
                        }
                        }else{
                        ?>
                        <!-- show error message if user entered email is not valid -->
                        <div class="alert alert-danger">
                        <?php echo "$userEmail is not a valid email address!" ?>
                        </div>
                        <?php
                        }
                    }
                ?>

                <div class="row  ">
                    <div class="col-md-12">
                        <label>Name</label>
                        <input class="form-control mb-4" name="name" type="text" required  placeholder="Name">
                    </div>
                    <!--<div class="col-md-6">-->
                    <!--    <label>Last Name</label>-->
                    <!--    <input class="form-control mb-4" name="lname" type="text" required  placeholder="last Name">-->
                    <!--</div>-->
                    <!--<div class="col-md-6">-->
                    <!--    <label>Email</label>-->
                    <!--    <input class="form-control mb-4" name="email" type="email" required  placeholder="Enter your email">-->
                    <!--</div>-->
                    <div class="col-md-12">
                        <label>Phone Number</label>
                        <input class="form-control mb-4" name="number" type="number" required  placeholder="Enter your phone">
                    </div>
                    <div class="col-md-12">
                        <label>Message</label>
                        <textarea style="resize: none;" name="message" required class="form-control mb-4" placeholder="Your message"  id="" rows="4"></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" name="contact" class="btn nav-btn w-50 mb-3 ">Send Message</button>
                    </div>
                </div>    
            </form>
        </div>

        <div class="col-md-4 mt-2 " >
            <div class="row form-item">
                <div class="col-md-12 px-0 text-center py-2 " style="border-radius: 20px; border: 1px solid #C5C5C5;">
                    <label >company email/ phone</label> 
                    <hr>
                    <p class="fw-bold"><i class="fa-solid fa-envelope mx-1"></i> Email us at : <a class="text-dark" href="">info@propertymap.com.eg</a></p> 
                    <p class="fw-bold"><i class="fa-solid fa-phone mx-1"></i> 01103616140</p>
                </div>
                <div class="col-md-12 px-0 text-center py-2 mt-4" style="border-radius: 20px; border: 1px solid #C5C5C5;" >
                    <label >company address</label>
                    <hr>
                    <p class="fw-bold">Galaxy mall 306, South 90 Industrial Area, 
                        New Cairo, Egypt</p> 
                </div>
            </div>
        </div>
        
    </div>

  </div>



  <div class="container-fluid maps pt-5 ">
                <div class="row" >
                    <div class="col-md-12 py-3">
                        <h3 class="text-uppercase text-center" style="color:#986F67;">location</h3>
                    </div>
                </div>
                <div class="map" >
                        <style>
                            iframe {
                                border: 0;
                                width: 100% !important;
                                height: 450px !important;
                                }
                        </style>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13817.541343127492!2d31.4662874!3d30.0258011!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458234ef7ddda33%3A0xf00953c5233c2c9!2sProperty%20Map%20Investments!5e0!3m2!1sen!2seg!4v1686573954892!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                </div>
            </div>







    <!--  Footer start -->
    <?php
    @include('./includes/footer.php')
    ?>
    <!--  Footer end -->
