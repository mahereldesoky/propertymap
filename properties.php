<?php 
include('./config/dbcon.php');
// error_reporting(E_ALL ^ E_WARNING); 

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
    <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">


    <title>Properties</title>
    <meta name="descreption" content="property map properties">
    <meta name="kerwords" content="for sale for rent property properties vila office apartment building">
</head>
<body>

    <header>

    <?php

    @include('./includes/navbar.php');
    ?>

        <!--/ Carousel Star /-->
        <div class="intro intro-carousel">
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/Properties.jpg) ; background-repeat: no-repeat;
                background-size: cover; background-position: center; ">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-12 ">
                        <div class="intro-body">
                            <p class="intro-title-top">More than <span style="color:#ca992ee1;">500</span> House Avilable For Sell & Rent In Each Country</p>
                            <h1 class="intro-title mb-4">
                            <span class="color-b">Make you dreams a reality <br> with our estate</h1>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--/ Carousel end /-->

    </header>


        <!-- / search form Start / -->

        <div class="search"  > 
            <div class=" text-center ">
              <h2 class="text-uppercase srch-reslt">Search properties</h2>
            </div>

            <form action="compare.php" method="POST">
                <div class="container top-search">
                <div class="form-row p-3 row align-items-center justify-content-center text-light rounded me-auto ">
                    
                    <div class="col-lg-3">
                    <div class="form-group ">
                        <label  class="text-capitalize">Location</label>
                        <select class="form-select" required name="city" aria-label="Default select example">
                        <option value="" selected disabled>Select Location</option>
                        <option value="cairo">Cairo</option>
                        <option value="new-cairo">New Cairo</option>
                        <option value="new-capital">New Capital</option>
                        <option value="giza">Giza</option>
                        <option value="new_giza">New Giza</option>
                        <option value="6-october">6 October</option>
                        <option value="zayed">Al Shekh Zayed</option>
                        <option value="north_cost">North Cost</option>
                        <option value="sokhna">Al Ain Al Shokhna</option>
                        </select>
                    </div>
                    
                    </div>
                    <div class="col-lg-3">
                    <div class="form-group ">
                        <label  class="text-capitalize">property status</label>
                        <select class="form-select" required  name="p_status"  aria-label="Default select example">
                        <option selected disabled value="">Select Status</option>
                        <option value="cash">Cash</option>
                        <option value="installment">Installment</option>
                        </select>
                    </div>
                    
                    </div>
                    <div class="col-lg-3">
                    <div class="form-group ">
                        <label  class="text-capitalize">property type</label>
                        <select class="form-select" required name="p_usage" aria-label="Default select example">
                        <option selected disabled value="">Select Type</option>
                                                        <option value="residential">Residential</option>
                                                        <option value="commercial">Commercial</option>
                                                        <option value="apartment">Apartment</option>
                                                        <option value="apartment-building">Apartment Building</option>
                                                        <option value="office">Office</option>
                        </select>
                    </div>
                    
                    </div>

                    <!-- <div class="col-lg-2">
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1" class="text-capitalize">date</label>
                        <select class="form-select" aria-label="Default select example">
                        <option selected disabled>Any </option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    
                    </div> -->

                    <div class="col-lg-3 mt-4 text-center">
                    <button type="submit" name="filter" class="btn  w-75 nav-btn">Search properties</button>
                    </div>
                </div>
                </div>
            </form>
        </div> 

        <!--/ search form end /-->


    <!-- /  properties Start / -->
    <div class="container-fluid props-page">
        <div class="prop-backgr-props-page">
            <img src="css/1.png" alt="">
        </div>
        <div class="bottom-backgr-props-page">
            <img src="css/2.png" class="w-75" alt="">
        </div>
        <div class="container  py-5">
            <div class="row  ">

                <div class="col-md-12  text-center">
                <h1 class="text-uppercase">properties</h1>
                </div>
                


                <?php 
                        $records = $con->query("select * from property");
                        $nr_of_rows = $records->num_rows;
                    
                        // Setting the number of rows to display in a page.
                        $rows_per_page = 6;
    
                        // calculating the nr of pages.
                        $pages = ceil($nr_of_rows / $rows_per_page);
    
                        // Setting the start from, value.
                        $start = 0;
    
                        // If the user clicks on the pagination buttons.
                        if(isset($_GET['page-nr'])){
                            $page = $_GET['page-nr'] - 1;
                            $start = $page * $rows_per_page;
                        }
    
                        $properties = "SELECT * FROM property where status='0' LIMIT $start, $rows_per_page";
                        $properties_run = mysqli_query($con,$properties);

                        if(mysqli_num_rows($properties_run) > 0){

                            if(mysqli_num_rows($properties_run) > 0){
                                foreach($properties_run as $propertyItems){
                ?>



                <div class="col-md-4 py-5">
                    <div class="prop-item-props-page">
                    <div class="prop-head-props-page">
                    <?php if($propertyItems['image'] != null) :?>
                    <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="w-100 prop-image" height="360px" alt="<?= $propertyItems['name']; ?>"/>
                    <?php endif; ?>
                        <span class="prop-stats-props-page" name="prop-stats">For <?php echo $propertyItems['p_status'];?></span>
                        <span class="featr-span" name="prop-featured"><?php echo $propertyItems['is_featured'] == 1 ? "Fetaured" : "New";?></span>
                        <div class="middle">
                            <a href="property-details.php?title=<?= $propertyItems['p_slug']?>" class="prop-overlay btn nav-btn" style="border-radius: 0;">View property</a>
                        </div>
                    </div>

                    <div class="prop-body mt-2 text-center">
                        <?php if($propertyItems['price'] > 0) :?>
                        <b name="price-props-page" class="price"><?=  number_format($propertyItems ['price']);?>EGP</b> <br>
                        <?php endif; ?>
                        <?php if($propertyItems['name'] != null) :?>
                        <span name="address-props-page" class="address text-uppercase"> <?= $propertyItems['name']?></span> <br>
                        <?php endif; ?>
                        <div class="d-flex justify-content-center">
                        <?php if($propertyItems['size'] > 0) :?>
                        <span class="space mx-1"><i class="fa-regular fa-square mx-2"></i><b><?= $propertyItems['size']?></b>mm </span>
                        <?php endif; ?>
                        <?php if($propertyItems['beds'] > 0) :?>
                        <span class="beds mx-1"><i class="fa-solid fa-bed mx-2"></i><?= $propertyItems['beds']?></span>
                        <?php endif; ?>
                        <?php if($propertyItems['baths'] > 0) :?>
                        <span class="bath mx-1"><i class="fa-solid fa-bath mx-2"></i><?= $propertyItems['baths']?> </span>
                        <?php endif; ?>
                        <?php if($propertyItems['hall'] > 0) :?>
                        <span class="liveng mx-1"><i class="fa-solid fa-couch mx-2"></i><?= $propertyItems['hall']?></span>
                        <?php endif; ?>
                        </div>
                        </div>
                    </div>

                </div>

                <?php
                            }
                            
                        }

                        else {
                            ?>
                            <h4>No such Property found</h4>
                            <?php
                        }
                    }
                ?>

                <div class="pagination d-flex justify-content-center">
                    <!-- Go to the first page -->
                    <!-- <a href="?page-nr=1 ">First</a> -->

                    <!-- Go to the previous page -->
                    <?php 
                        if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){
                            ?> <a href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>"><</a> <?php
                        }else{
                            ?> <a><</a>	<?php
                        }
                    ?>
                    
                    <!-- Output the page numbers -->
                    <div class="page-numbers d-flex justify-content-center">
                        <?php 
                            if(!isset($_GET['page-nr'])){
                                ?> <a class="active" href="?page-nr=1">1</a> <?php
                                $count_from = 2;
                            }else{
                                $count_from = 1;
                            }
                        ?>
                        
                        <?php
                            for ($num = $count_from; $num <= $pages; $num++) {
                                if($num == @$_GET['page-nr']) {
                                    ?> <a class="active" href="?page-nr=<?php echo $num ?>"><?php echo $num ?></a> <?php
                                }else{
                                    ?> <a href="?page-nr=<?php echo $num ?>"><?php echo $num ?></a> <?php
                                }
                            }
                        ?>
                    </div>
                    
                    <!-- Go to the next page -->
                    <?php 
                        if(isset($_GET['page-nr'])){
                            if($_GET['page-nr'] >= $pages){
                                ?> <a>></a> <?php
                            }else{
                                ?> <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">></a> <?php
                            }
                        }else{
                            ?> <a href="?page-nr=2">></a> <?php
                        }
                    ?>
                    
                    <!-- Go to the last page -->
                    <!-- <a href="?page-nr=<?php echo $pages ?>">Last</a> -->
                </div>

            </div>
        </div>

    </div>
    <!-- /  properties end / -->
      




    <!--  Footer start -->
    <?php
    @include('./includes/footer.php')
    ?>
    <!--  Footer end -->