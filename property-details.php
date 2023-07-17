<?php 
include('./config/dbcon.php');

if(isset($_GET['title'])){
    $slug = mysqli_real_escape_string($con,$_GET['title']);

    $meta_properties = "SELECT p_slug,meta_title,meta_description,meta_keyword FROM property WHERE p_slug='$slug' LIMIT 1 ";
    $meta_properties_run = mysqli_query($con, $meta_properties);

    if(mysqli_num_rows($meta_properties_run) > 0){
        $metapropertyItem = mysqli_fetch_array($meta_properties_run);

        $page_title = $metapropertyItem['meta_title'];
        $meta_descreption = $metapropertyItem['meta_description'];
        $meta_keyword = $metapropertyItem['meta_keyword'];
    }
    else {
        $page_title = "Property Details";
        $meta_descreption = " Property Details from property map website";
        $meta_keyword = "property, properties , cash, sale, installment, apartment, office,building";
    }
}
else {

$page_title = "Property Details";
$meta_descreption = " Property Details from property map website";
$meta_keyword = "property, properties , cash, sale, installment, apartment, office,building";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script src="js/sweetalert.js"></script>
    <title><?php if(isset($page_title)) {echo "$page_title";} else {echo "Property Details";} ?></title>
    <meta name="descreption" content="<?php if(isset($meta_descreption)) {echo "$meta_descreption";} ?>">
    <meta name="kerwords" content="<?php if(isset($meta_keywords)) {echo "$meta_keywords";} ?>">
    <meta name="property map" content="property map Website">
</head>
<body>

    <header>

    <?php 
    @include('./includes/navbar.php');

    ?>

    </header>

    <?php 
        if(isset($_GET['title'])){
            $slug = mysqli_real_escape_string($con,$_GET['title']);


            $properties = "SELECT * FROM property Where p_slug='$slug' ";
            $properties_run = mysqli_query($con,$properties);

            if(mysqli_num_rows($properties_run) > 0){

                if(mysqli_num_rows($properties_run) > 0){
                    foreach($properties_run as $propertyItems){
    ?>


            <div class="container-fluid prop-hero-img p-0">
                <?php if($propertyItems['image'] != null) :?>
                    <!-- <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="w-100 deta-img" height="520px" alt="<?= $propertyItems['name']; ?>"/> -->
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            
                            <?php if($propertyItems['image'] != null) :?>
                                <div class="carousel-item active">
                                <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="w-100 deta-img" height="600px" alt="<?= $propertyItems['name']; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if($propertyItems['image1'] != null) :?>
                                <div class="carousel-item" >
                                <img src="<?= ('./admin/property/'.$propertyItems['image1']);?>" class="w-100 deta-img" height="600px" alt="<?= $propertyItems['name']; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if($propertyItems['image2'] != null) :?>
                                <div class="carousel-item" >
                                <img src="<?= ('./admin/property/'.$propertyItems['image2']);?>" class="w-100 deta-img" height="600px" alt="<?= $propertyItems['name']; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if($propertyItems['image3'] != null) :?>
                                <div class="carousel-item" >
                                <img src="<?= ('./admin/property/'.$propertyItems['image3']);?>" class="w-100 deta-img" height="600px" alt="<?= $propertyItems['name']; ?>">
                            </div>
                            <?php endif; ?>

                            <?php if($propertyItems['image4'] != null) :?>
                                <div class="carousel-item" >
                                <img src="<?= ('./admin/property/'.$propertyItems['image4']);?>" class="w-100 deta-img" height="600px" alt="<?= $propertyItems['name']; ?>">
                            </div>
                            <?php endif; ?>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <div class="container-fluid head-details py-3">
                <div class="container">
                    <div class="row align-items-end">

                        <div class="col-md-6">
                            <nav class="nav" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="properties.php"><?php echo $propertyItems['city'];?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $propertyItems['area'];?></li>
                                </ol>
                            </nav>
                            <h5 class="text-uppercase" name="head-address"><?php echo $propertyItems['name'];?></h5>
                            <h6 class="text-uppercase" name="head-title"><?php echo $propertyItems['address'];?></h6>
                        </div>

                        <div class="col-md-3  mb-2 py-3">
                        <?php if($propertyItems['price'] != null) :?>
                            <p class="text-uppercase"  name="head-price">Price</p>
                            <span class="price-data" name="price-data"><?= number_format($propertyItems ['price'])  ?> egp</span> 
                        </div>
                        <?php endif; ?>
                        <div class="col-md-3 mb-2">
                            <a href="contact.php" class="btn nav-btn">Book now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-3 start-detail">

                <div class="row ">
                    <div class="col-md-12 text-center py-3">
                        <h3 class="text-uppercase" style="color:#986F67;">details</h3>
                    </div>
                </div>

                <div class="row py-3">

                    <div class="col-md-12 text-center  ">
                        <div class="row" >

                            <?php if($propertyItems['p_usage'] != null) :?>
                                <div class="col-md-4  wd-sm">
                                    <i class="fa-regular fa-building"></i> <br>
                                    <label for="prop-type" class="text-capitalize"><?php echo $propertyItems['p_usage'];?></label>
                                </div>
                            <?php endif; ?>

                            <?php if($propertyItems['size'] != null) :?>
                                <div class="col-md-4  wd-sm">
                                    <i class="fa-regular fa-square"></i> <br>
                                    <label for="prop-space" class="text-capitalize"><?=  number_format($propertyItems['size']); ?>Sq.ft</label>
                                </div>
                            <?php endif; ?>

                            <?php if($propertyItems['beds'] > 0) :?>
                                <div class="col-md-4  wd-sm">
                                    <i class="fa-solid fa-bed "></i> <br>
                                    <label for="prop-room" class="text-capitalize"> bedroom (s) <?php echo number_format($propertyItems['beds']);?></label>
                                </div>
                            <?php endif; ?>


                        </div>
                    </div>
                    <div class="text-center d-flex justify-content-center">
                        <hr class="w-50 text-center">
                    </div>
                </div>

                <?php if($propertyItems['description'] != null) :?>
                    <div class=" description py-3 " >
                        <div class=" text-center">
                            <h3 style="color:#986F67;" class="text-uppercase ">Description</h3>
                        </div>
                        <div class="text-center" >
                            <h6 style="line-height: 30px;"><?php echo $propertyItems['description'];?></h6>
                        </div>

                    </div> 
                <?php endif; ?>

                <!-- <div class="pro-data " >
                    <div class="data-title" >
                        <p class="text-uppercase ">Property Status</p>
                        <p class="text-uppercase">Selling Price (incl. VAT)</p>
                        <p class="text-uppercase">Land Registration Fee</p>
                        <p class="text-uppercase">OQOOD Amount</p>
                        <p class="text-uppercase">Applicable Fees to Dubai Land Department</p>
                        <p class="text-uppercase">Property Usage</p>
                        <p class="text-uppercase">Plot Area (sq ft)</p>
                    </div>
                    <div class="data-action">
                        <p class="text-capitalize">Available</p>
                        <p><?= number_format($propertyItems ['price']); ?> Egp</p>
                        <p><?= number_format($propertyItems ['land_fees']); ?> Egp</p>
                        <p><?= number_format($propertyItems ['oqod_amount']); ?> Egp</p>
                        <p><?= number_format($propertyItems ['app_fees']); ?> Egp</p>
                        <p class="text-capitalize"><?= $propertyItems['p_usage']  ?></p>
                        <p><?= number_format($propertyItems['size']); ?></p>
                    </div>
                </div> -->

                <div class="text-center d-flex justify-content-center">
                    <hr class="w-50 text-center">
                </div>

            </div>

            <?php if($propertyItems['add_features'] != null) :?>
            <div class="container py-3 addi-details">

                    <div class=" text-center">
                        <h3 style="color:#986F67;" class="text-uppercase ">features</h3>
                    </div>

                        <h6 class="text-dark text-justify" style="line-height: 20px;">
                            <?php echo $propertyItems ['add_features'];   ?>
                        </h6>


                 <!-- <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="text-uppercase">additional Details</h3>
                    </div>
                </div>

                <div class="row py-4 addi-item ">
                    <div class="col-md-4 mb-4">
                        <span><img src="img/1.svg" alt="" class="mx-2"> VIP Meeting Rooms (Fully Equipped)</span><br>
                        <span><img src="img/2.svg" alt="" class="mx-2"> Entertainment Rooms</span><br>
                        <span><img src="img/3.svg" alt="" class="mx-2">  Prayer Rooms</span><br>
                        <span><img src="img/4.svg" alt="" class="mx-2">  Storage Areas</span><br>
                    </div>
                    <div class="col-md-4 mb-4">
                        <span><img src="img/5.svg" alt="" class="mx-2">Green Buildings</span><br>
                        <span><img src="img/6.svg" alt="" class="mx-2"> Fire Protection (meets NFPA codes)</span><br>
                        <span><img src="img/7.svg" alt="" class="mx-2">  Gym</span><br>
                        <span><img src="img/8.svg" alt="" class="mx-2">  ATM Center</span><br>
                    </div>
                    <div class="col-md-4 mb-4">
                        <span><img src="img/9.svg" alt="" class="mx-2">Building Management System</span><br>
                        <span><img src="img/10.svg" alt="" class="mx-2"> Emergency Clinic</span><br>
                        <span><img src="img/11.svg" alt="" class="mx-2"> Jogging Track</span><br>
                    </div>
                </div>

                <div class="text-center d-flex justify-content-center">
                    <hr class="w-50 text-center">
                </div>  -->
                <div class="text-center d-flex justify-content-center">
                    <hr class="w-50 text-center">
                </div>

            </div>
            <?php endif; ?>

             <!-- <div class="container py-1 Features-details" >

                <div class="row" >
                    <div class="col-md-12 text-center">
                        <h3 class="text-uppercase">Features</h3>
                    </div>
                </div>

                <div class="row py-4 Features-item">
                    <div class="col-md-4 mb-4">
                        <span><i class="fa-solid fa-circle-check"></i> 2 Stories</span><br>
                        <span><i class="fa-solid fa-circle-check"></i> Emergency Exit</span><br>
                        <span><i class="fa-solid fa-circle-check"></i> Lawn</span><br>
                    </div>
                    <div class="col-md-4 mb-4">
                        <span><i class="fa-solid fa-circle-check"></i> Next to busy way</span><br>
                        <span><i class="fa-solid fa-circle-check"></i> Fire Alarm</span><br>
                        <span><i class="fa-solid fa-circle-check"></i> Marble Floors</span><br>
                    </div>
                    <div class="col-md-4 mb-4">
                        <span><i class="fa-solid fa-circle-check"></i> Central Heating</span><br>
                        <span><i class="fa-solid fa-circle-check"></i> Central cooling</span><br>
                        <span><i class="fa-solid fa-circle-check"></i> Fire Place</span><br>
                    </div>
                </div>
                <div class="text-center d-flex justify-content-center">
                    <hr class="w-50 text-center">
                </div>
            </div>  -->




            <div class="container py-3 payment-details" >

                <div class="row" >
                    <div class="col-md-12 ">
                        <h3 class="text-uppercase text-center" style="color:#986F67;">Payment Plan</h3>
                    </div>
                </div>

                <div class="payment-item py-3">
                    <div class="p-item">
                        <!-- <p> Milestones</p> -->
                        <p> Down payment</p>
                        <p> Installment Years</p>
                        <!-- <p> 3 months from the Handover Date</p>
                        <p> 6 months from the Handover Date</p> -->
                    </div>
                    <!-- <div class="p-item">
                        <p> %</p>
                        <p> 10</p>
                        <p> Years</p>
                        <p> 10</p>
                        <p> 10</p>
                    </div> -->
                    <div class="p-item">
                        <!-- <p> EGP</p> -->
                        <p> <?= number_format($propertyItems ['first_hand']); ?> EGP</p>
                        <p> <?= number_format($propertyItems ['on_hand']);?> Years</p>
                        <!-- <p> <?= number_format($propertyItems ['three_month']); ?></p>
                        <p> <?= number_format($propertyItems ['six_month']); ?></p> -->
                    </div>
                </div>
                <div class="text-center d-flex justify-content-center">
                    <hr class="w-50 text-center">
                </div>
            </div>

            <div class="container-fluid maps ">
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

                        <iframe src="<?=$propertyItems['location']?>" 
                            width="100%" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map-view">
                        </iframe>
                </div>
                <!-- <div class="text-center">
                    <a href="<?=$propertyItems['location']?>" class="btn nav-btn w-25 mt-3">Map view</a>
                </div> -->
            </div>

            <div class="container-fluid mt-3 py-3">
                <div class=" text-center">
                    <h2 class="text-uppercase" style="color:#986F67;">we want to hear from you</h2>
                    <h5 class="text-capitalize"> do you have any enquiry? send us a message</h5>
                </div>

                <div class="container rounded shadow mt-3 py-2">
                    <div class="row ">
                        <div class="col-md-12 " >
                            <form action="" method="POST">
                                <?php 
                                    $Name = ""; 
                                    // $lastName = ""; 
                                    // $userEmail = ""; 
                                    $phoneNumber = ""; 
                                    // $message = ""; //first we leave email field blank
                                    if(isset($_POST['contact'])){ //if subscribe btn clicked
                                    $Name = $_POST['name']; 
                                    // $lastName = $_POST['lname'];
                                    // $userEmail = $_POST['email']; //getting user entered email
                                    $phoneNumber = $_POST['number']; 
                                    // $message = $_POST['message'];
                                    // $new_message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
                                    if($Name != null){ //validating user email
                                        $to = "info@propertymap.com.eg";
                                        $subject = "Message From PropertyMap Website";
                                        $txt ="Customer Name: ". $Name.  "\r\n Phone Number : ". $phoneNumber . "\r\n "; 
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
                                        $Name = "";
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
                                        <?php echo "Please Enter You name and phone number" ?>
                                        </div>
                                        <?php
                                        }
                                    }
                                ?>

                                <div class="row  ">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                        <input class="form-control mb-4" name="name" type="text" required  placeholder="First Name">
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <label>Last Name</label>
                                        <input class="form-control mb-4" name="lname" type="text" required  placeholder="last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input class="form-control mb-4" name="email" type="email" required  placeholder="Enter your email">
                                    </div> -->
                                    <div class="col-md-6">
                                        <label>Phone Number</label>
                                        <input class="form-control mb-4" name="number" type="number" required  placeholder="Enter your phone">
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <label>Message</label>
                                        <textarea style="resize: none;" name="message" class="form-control mb-4" placeholder="Your message"  id="" rows="4"></textarea>
                                    </div> -->

                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="contact" class="btn nav-btn w-50 mb-3 ">Submit</button>
                                    </div>
                                </div>    
                            </form>
                        </div>                    
                    </div>

                </div>
            </div>


    <?php
                    }
                }
                
            }

            else {
                ?>
                <h4>No such Property found</h4>
                <?php
            }
        }
        else {
            ?>
            <h4>No such url found</h4>
            <?php
        }
    ?>



    <!--  Footer start -->
    <?php
    @include('./includes/footer.php')
    ?>
    <!--  Footer end -->