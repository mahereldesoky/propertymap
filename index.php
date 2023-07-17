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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">
    <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/sweetalert.js"></script>
    <link href="css/aos/aos.css" rel="stylesheet">
    <title>Property Map</title>
    <meta name="descreption" content="property map properties">
    <meta name="kerwords" content="for sale for rent property properties vila office apartment building">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NXVXH88');</script>
    <!-- End Google Tag Manager -->
    
</head>
<body>
  <header >



    <?php
    @include('./includes/navbar.php');
    ?>


        <!--/ Carousel Star /-->
        <div class="intro intro-carousel">
            <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/Home.jpg) ; background-repeat: no-repeat;
              background-size: cover; background-position: center;">
              <div class="overlay overlay-a"></div>
              <div class="intro-content display-table">
                <div class="table-cell">
                  <div class="container">
                    <div class="row justify-content-center align-items-center">
                      <div class="col-lg-12 ">
                        <div class="intro-body">
                          <p class="intro-title-top" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1000" >More than <span style="color:#ca992ee1;">500</span> House Avilable For Sell & Rent In Each Country</p>
                          <h1 class="intro-title mb-4">
                            <span class="color-b" >Make you dreams a reality <br> with our estate</h1>
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


        <!-- / New properties Start / -->
        <div class="container-fluid new-props" >
          
              <div class="prop-backgr">
                  <img src="css/1.png" alt="">
              </div>

              <div class="container py-4">
                  <div class="row  ">

                    <div class="col-md-12 pt-3 text-center" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1500" >
                      <h2 class="text-uppercase" style="font-weight:400; font-size:28px;">New properties</h2>
                      <p>Browse through some of our most exclusive listings in our areas.</p>
                    </div>
                    <?php 
                      $properties = "SELECT * FROM property WHERE status='0'";
                      $properties_run = mysqli_query($con,$properties);

                      if(mysqli_num_rows($properties_run) > 0){

                          if(mysqli_num_rows($properties_run) > 0){
                              foreach($properties_run as $propertyItems){
                    ?>
                        
                      <div class="col-md-4 pt-4 " data-aos="fade-up"data-aos-easing="linear" data-aos-duration="1500">
                        <div class="prop-item">
                          <div class="prop-head">
                          <?php if($propertyItems['image'] != null) :?>
                            <a href="property-details.php?title=<?= $propertyItems['p_slug']?>">
                          <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="img-a" style="height: 310px; width: 100%;" alt="<?= $propertyItems['name']; ?>"/>
                            </a>
                          <?php endif; ?>
                          <?php if($propertyItems['p_status'] != null) :?>
                            <span name="prop-stats" class="text-uppercase">FOR <?php echo $propertyItems['p_status'];?></span>
                          <?php endif; ?>

                          </div>
                            <div class="prop-body mt-2">
                            <?php if($propertyItems['price'] != null) :?>
                            <span name="price" class="price"><?=  number_format($propertyItems ['price']); ?> EGP</span> <br>
                            <?php endif; ?>
                            <?php if($propertyItems['name'] != null) :?>
                            <span name="address" class="address"> <?= $propertyItems['name']?></span> <br>
                            <?php endif; ?>
                              <span class="feat"><?php if($propertyItems['beds'] > 0) :?> <?= $propertyItems['beds']?> BEDS| <?php endif; ?>
                                <?php if($propertyItems['baths'] > 0) :?> <?= $propertyItems['baths']?> BATHS | <?php endif; ?>
                                  <?php if($propertyItems['size'] > 0) :?> <?= $propertyItems['size']?> Sq.Ft. <?php endif; ?>
                            </span>
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

                      <div class="col-md-12 text-center" >
                        <a href="properties.php" class="nav-btn btn mt-4">View More</a>
                      </div>

                  </div>
              </div>

        </div>
        <!-- / New properties end / -->


        <!-- / Search And Compare Section Start / -->
      
        <div class="container-fluid py-5 srch-sec " >
          <div class="sear-backgr">
            <img src="css/2.png" alt="" width="80%">
          </div>
          
          <div class="container" >

            <div class="row" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1500" >

              <div class="col-md-12 text-center">
                <p class="sec-title">Search and compare among 5000+ properties <br>
                  and 300+ compounds, or list your property for sale
                </p>
              </div>
                
            </div>

            <div class="row text-center  " data-aos="fade-up"data-aos-easing="linear" data-aos-duration="1500" >
              
                    <div class="col-md-4 py-4 ser-item mt-3  ">

                        <div class="col-head mb-4 p-0">
                        <img class="mb-1" src="img/Buyhome_HP.svg.png" alt="">
                            <span>Buy a home</span>
                        </div>
                        <div class="col-txt">
                          <p>Looking for a new home? Search properties and compounds,Compare between them and find your new home.</p>
                        </div>
                          <a href="properties.php" class="btn srch-btn mt-3">Search</a>
                    </div>

                    <div class="col-md-4 py-4 mt-3 ser-item ">
                      <div class="col-head mb-4">
                        <img class="mb-1" src="img/sellhome_HP.svg.png" alt="">
                        <span>Buy Commercial</span>
                      </div>

                      <div class="col-txt">
                        <p style="font-size: 14px;">Easily find your ideal commercial spaces on Property Map, featuring a diverse range of options including offices,clinics,and retail spaces that meet your 
                          requirements and exceed your expectations.
                        </p>
                      </div> 
                      <a href="contact.php" class="btn srch-btn  ">Start listing</a>
                    </div>

                    <div class="col-md-4  py-4 mt-3 ser-item ">
                      <div class="col-head mb-4">
                      <img class="mb-1" src="img/move-now-icon.svg.png" height="45px" alt="">
                        <span>Move in now</span>
                      </div>
                      <div class="col-txt">
                        <p class="mb-4">Are you looking for a buy now pay later option? click here to browse our ready-to-move-in homes.</p>
                      </div>
                      <a href="properties.php" class="btn srch-btn mt-4">Move now</a>
                    </div>
                  
                </div>
            
            </div>
          </div>
        </div>

        <!-- / Search And Compare end / -->


        <!-- featured properties start -->

        <div class="container-fluid py-5 propertiess" >

          <div class="container prop-">
            <h5 class="main-title mt-2 mb-3" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1500" >Properties</h5>
            <h2 class="sec-title mt-3 rec-h2"  data-aos="fade-up"data-aos-easing="linear" data-aos-duration="1500">Residential properties </h2>

              <div class="owl-carousel owl-theme  py-2"  >

                <?php 
                          $properties = "SELECT * FROM property WHERE is_featured='1' and p_usage='residential' and status='0' ";
                          $properties_run = mysqli_query($con,$properties);

                          if(mysqli_num_rows($properties_run) > 0){

                              if(mysqli_num_rows($properties_run) > 0){
                                  foreach($properties_run as $propertyItems){
                ?>

                <div class="prop-item  text-center" >
                  
                    <?php if($propertyItems['image'] != null) :?>
                      <a href="property-details.php?title=<?= $propertyItems['p_slug']?>">
                      <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="w-100 pro-image" height="360px" alt="<?= $propertyItems['name']; ?>"/>
                      </a>
                    <?php endif; ?>
                    <?php if($propertyItems['is_featured'] != null) :?>
                    <label class="stat" ><?php echo $propertyItems['is_featured'] == 1 ? "Fetaured" : "";?></label>
                    <?php endif; ?>

                     <?php if($propertyItems['name'] || $propertyItems['price'] != null) :?>
                    <div class="pro-details py-2">
                      <b class="title "><?= $propertyItems['name']?></b>
                      <p class="price text-dark"><?=  number_format($propertyItems ['price']); ?>Egp</p>
                    </div>
                    <?php endif; ?>
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

              </div>


          </div>
        </div>
        
        <!-- featured properties end -->


        <!-- commercial properties start -->

        <!-- <div class="container-fluid py-5 propertiess" >

          <div class="container prop-">
            <h5 class="main-title mt-2 mb-3" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1500" >Properties</h5>
            <h2 class="sec-title mt-3 rec-h2"  data-aos="fade-up"data-aos-easing="linear" data-aos-duration="1500">Commercial properties </h2>

              <div class="owl-carousel owl-theme  py-2"  >

                <?php 
                          $properties = "SELECT * FROM property WHERE is_featured='1' and p_usage='commercial' and status='0' ";
                          $properties_run = mysqli_query($con,$properties);

                          if(mysqli_num_rows($properties_run) > 0){

                              if(mysqli_num_rows($properties_run) > 0){
                                  foreach($properties_run as $propertyItems){
                ?>

                <div class="prop-item  text-center" >
                  
                    <?php if($propertyItems['image'] != null) :?>
                      <a href="property-details.php?title=<?= $propertyItems['p_slug']?>">
                      <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="w-100 pro-image" height="360px" alt="<?= $propertyItems['name']; ?>"/>
                      </a>
                    <?php endif; ?>
                    <?php if($propertyItems['is_featured'] != null) :?>
                    <label class="stat" ><?php echo $propertyItems['is_featured'] == 1 ? "Fetaured" : "";?></label>
                    <?php endif; ?>

                     <?php if($propertyItems['name'] || $propertyItems['price'] != null) :?>
                    <div class="pro-details py-2">
                      <b class="title "><?= $propertyItems['name']?></b>
                      <p class="price text-dark"><?=  number_format($propertyItems ['price']); ?>Egp</p>
                    </div>
                    <?php endif; ?>
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

              </div>


          </div>
        </div> -->
        
        <!-- commercial properties end -->


        <!-- properties sale start -->
        <div class="container mt-4">
          <h5 class="main-title mb-5"  data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1500">properties</h5>
          <h2 class="sec-title mt-3 text-uppercase " style="font-weight:400; font-size:28px;" data-aos="fade-up"data-aos-easing="linear" data-aos-duration="1500" > properties for <span style="color:#986F67;">sale</span></h2>
          <div class="s-property" >
            <div class="owl-carousel owl-theme py-5" >
              <?php 
                        $properties = "SELECT * FROM property WHERE type='sale' and status='0'";
                        $properties_run = mysqli_query($con,$properties);

                        if(mysqli_num_rows($properties_run) > 0){

                            if(mysqli_num_rows($properties_run) > 0){
                                foreach($properties_run as $propertyItems){
              ?>
              <div class="item" >
                <div class="card" >
                  <div class="card-head">
                  <?php if($propertyItems['image'] != null) :?>
                      <a href="property-details.php?title=<?= $propertyItems['p_slug']?>">
                      <img src="<?= ('./admin/property/'.$propertyItems['image']);?>" class="w-100" height="300px" alt="<?= $propertyItems['name']; ?>"/>
                      </a>
                    <?php endif; ?>
                  </div>
                  
                  <div class="card-body  mb-3" style="height: 200px;">
                  <?php if($propertyItems['p_slug'] || $propertyItems['name'] != null) :?>
                    <a href="property-details.php?title=<?= $propertyItems['p_slug']?>"><small class="text-uppercase" style="color: #986F67; font-weight: 500;"><?= $propertyItems['name']?></small></a> <br>
                    <a href="property-details.php?title=<?= $propertyItems['p_slug']?>"><i class="fa fa-location"></i> <span class="text-capitalize"> <?= $propertyItems['city'] ?>, <?= $propertyItems['area']?>,egypt</span></a>
                    <?php endif; ?>

                    <div class="p-details mt-3">
                      <div class="d-flex   ">
                        <?php if($propertyItems['size']  > 0) :?>
                          <small class="flex-fill border-end py-2"><i class="fa fa-ruler-combined  me-2 mx-1"></i> <?= $propertyItems['size']?>mm</small>
                        <?php endif; ?>
                        <?php if($propertyItems['beds']  > 0) :?>
                        <small class="flex-fill border-end py-2"><i class="bx bx-bed bx-flip-horizontal me-2 mx-1" style="font-size: 17px;" ></i><?= $propertyItems['beds']?> </small>
                        <?php endif; ?>
                        <?php if($propertyItems['garage']   > 0) :?>
                        <small class="flex-fill py-2"><i class="bx bxs-car-garage bx-flip-horizontal me-2 mx-1" style="font-size: 17px;" ></i><?= $propertyItems['garage']?> </small>
                        <?php endif; ?>
                        <?php if($propertyItems['baths']   > 0) :?>
                        <small class="flex-fill py-2"><i class="bx bx-bath bx-flip-horizontal  me-2 mx-1" style="font-size: 17px;"></i><?= $propertyItems['baths']?> </small>
                        <?php endif; ?>
                        
                    </div>
                    <div class="d-flex justify-content-between border-top ">
                      <a class="mt-2" href="property-details.php?title=<?= $propertyItems['p_slug']?>"><b> <?=number_format($propertyItems ['price']); ?> egp</b></a>
                    </div> 

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

            </div>
          </div>

        </div>
        <!-- properties sale end -->


        <!--  sale Home start -->

        <div class="container-fluid sale-home-sec"  >

          <div class="layer-5">
            <img src="css/5.png" alt="" style="height: 400px;">
          </div>
          <div class="layer-1">
            <img src="css/1 (1).png" alt="" style="height: 400px;">
          </div>

          <div class="container py-3">
            <div class="row ">

              <div class="col-md-6 py-4" data-aos="fade-up"data-aos-easing="linear" data-aos-delay="400" data-aos-duration="2000" >
                <img class="w-100 h-100" src="img/Untitled-5 1.png" alt="img">
              </div>

              <div class="col-md-6 sal-txt mt-4" data-aos="fade-down"data-aos-easing="linear" data-aos-delay="400" data-aos-duration="2000" >
                <h4>Sell Your Home and Pay Less</h4>
                <!-- <h4>All we do is sell homes.</h4> -->
                <p>Our track record is unquestionable, our results outstanding, and our clients thrilled. Working with Glass House demonstrates that you are a seller that will leave nothing to chance. You’ll get expert market analysis, soup to nuts home improvements, and make a big splash in the market. Let's have a conversation. We’ll show you exactly what we do and how.</p>
                <span ><i class="fa-solid fa-hand-holding-dollar"></i> Over $750,000,000 Sold</span> <br> <br>
                <span ><i class="fa-regular fa-calendar-check"></i> 7 Days on Market on Average</span> <br> <br>
                <span ><i class="fa-solid fa-percent"></i> 100%+ of Asking Price</span> <br> <br>

                <button type="button" class="btn nav-btn">LEARN MORE</button>
              </div>

            </div>
          </div>
        </div>

        <!-- sale Home start -->


        <!--  Rent or Buy start -->

        <div class="container-fluid mt-5 rent-sec"          
          style="background-image: url('img/Get\ In\ Touch.jpg');
          background-repeat: no-repeat;
          background-position:top center;
          height: 500px;">
          <div class="overlayy overlayy-a"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center rnt-txt" data-aos="fade-up"data-aos-easing="linear" data-aos-delay="300" data-aos-duration="2000" >
                <h4 > Buy a home </h4>
                <p  >Looking to Buy a new property or Sell an existing one? <br> <span>Property Map</span> provides an awesome solution!</p>
                <div class=" text-center mb-3" >
                  <a href="contact.php" class="btn nav-btn">Request a call</a>
                  <a href="properties.php" class="btn rent-btn ">Browse properties</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!--  Rent or Buy end -->



        <!--  Footer start -->
        <?php
        @include('./includes/footer.php')
        ?>
        <!--  Footer end -->
