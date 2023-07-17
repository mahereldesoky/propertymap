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

$page_title = "PropertyMap";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <title>Search</title>
    <meta name="descreption" content="property map properties">
    <meta name="kerwords" content="for sale for rent property properties vila office apartment building">

</head>
<body>
        <header >



            <?php
            @include('./includes/navbar.php');
            ?>


                <!--/ Carousel Star /-->
                <div class="intro intro-carousel">
                    <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/Compare.jpg) ; background-repeat: no-repeat;
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
        
        <?php    
        if(isset($_REQUEST['filter'])){

        ?>
        <div class="container py-5">
                  <div class="row  ">

                    <div class="col-md-12  text-center">
                      <h1 class="text-uppercase">properties Result</h1>
                      <p>Browse through some of our most exclusive listings in our areas.</p>
                    </div>

                    <?php 
							
                            if(isset($_REQUEST['filter']))
                            {

                            $location=$_REQUEST['city'];
                            $p_status=$_REQUEST['p_status'];
                            $p_usage=$_REQUEST['p_usage'];
                            
                            $sql="SELECT * FROM property  WHERE  city='{$location}' or area='{$location}' and p_status='{$p_status}' and p_usage='{$p_usage}'";
                            $result=mysqli_query($con,$sql);
                        
                            if(mysqli_num_rows($result)>0)
                            {
                                if($result == true)
                                {
                                    while($row=mysqli_fetch_array($result))
                                    {
                    ?>
                        
                    <div class="col-md-4 py-5">
                        <div class="prop-item">
                        <div class="prop-head">
                        <?php if($row['image'] != null) :?>
                            <a href="property-details.php?title=<?= $row['p_slug']?>">
                        <img src="<?= ('./admin/property/'.$row['image']);?>" class="img-a" style="height: 300px; width: 100%;" alt="<?= $row['name']; ?>"/>
                            </a>
                        <?php endif; ?>
                            <span name="prop-stats" class="text-uppercase">FOR <?php echo $row['p_status'];?></span>
                        </div>

                            <div class="prop-body mt-2">
                            <span name="price" class="price"><?= number_format( $row ['price']) ?> EGP</span> <br>
                            <span name="address" class="address"> <?= $row['name']?></span> <br>
                            <span class="feat"><?php if($row['beds'] > 0) :?> <?= $row['beds']?> BEDS| <?php endif; ?>
                                <?php if($row['baths'] > 0) :?> <?= $row['baths']?> BATHS | <?php endif; ?>
                                  <?php if($row['size'] > 0) :?> <?= $row['size']?> Sq.Ft. <?php endif; ?>
                            </span>
                            </div>
                        </div>
                    </div>


                    <?php 		
                                    } 
                
                                }
                            }
                            else {
                                
                                echo "<h1 class='mb-5'><center>No Property Available</center></h1>";
                            }
                                
                        }

                    ?>
                            

                      <div class="col-md-12 text-center">
                        <a href="properties.php" class="nav-btn btn ">View More</a>
                      </div>

                  </div>
        </div>
        <?php } ?>





        <!--  Footer start -->
        <?php
        @include('./includes/footer.php')
        ?>
        <!--  Footer end -->

