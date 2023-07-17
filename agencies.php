<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo horizontal  white-01-04.png">
    <title>Property Map / Agencies</title>
</head>
<body>



  <header>



    <?php

    @include('./includes/navbar.php');
    ?>


    <!--/ Carousel Star /-->
    <div class="intro intro-carousel">
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(css/Untitled-5.png) ; background-repeat: no-repeat;
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
    <div class="search" > 
            <div class=" text-center ">
              <h2 class="text-uppercase srch-reslt">Search properties</h2>
            </div>
            <form action="compare.php" method="POST">
                <div class="container top-search">
                <div class="form-row py-3 row align-items-center justify-content-center text-light rounded  me-auto">
                    
                    <div class="col-lg-2">
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1" class="text-capitalize">Location</label>
                        <select class="form-select" required name="city" aria-label="Default select example">
                        <option value="" selected disabled>Select Location</option>
                        <option value="cairo">Cairo</option>
                        <option value="new-cairo">New Cairo</option>
                        <option value="giza">Giza</option>
                        <option value="6-october">6 October</option>
                        </select>
                    </div>
                    
                    </div>
                    <div class="col-lg-2">
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1" class="text-capitalize">property status</label>
                        <select class="form-select" required  name="p_status"  aria-label="Default select example">
                        <option selected disabled value="">Select Status</option>
                        <option value="cash">Cash</option>
                        <option value="installment">Installment</option>
                        </select>
                    </div>
                    
                    </div>
                    <div class="col-lg-2">
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1" class="text-capitalize">property type</label>
                        <select class="form-select" required name="p_usage" aria-label="Default select example">
                        <option selected disabled value="">Select Type</option>
                        <option value="apartment">Apartment</option>
                        <option value="office">office</option>
                        <option value="apartment-building">Building</option>
                        <option value="vila">Vila</option>
                        <option value="studio">Studio</option>
                        </select>
                    </div>
                    
                    </div>

                    <div class="col-lg-2">
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
                    
                    </div>

                    <div class="col-lg-3 mt-4 text-center">
                    <button type="submit" name="filter" class="btn  w-75 nav-btn">Search properties</button>
                    </div>
                </div>
                </div>
            </form>
    </div> 
    <!--/ search form end /-->


    <!-- Agencies-sec start -->

    <div class="container-fluid agencies-sec py-5">
        <div class="container ">
            <h1 class="text-uppercase text-center mb-4">agencies</h1>

            <div class="row  shadow bg-white p-3 acenc-item mt-5 ">
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <img src="img/agenc-1.png" class="mb-3" alt="">
                </div>
                <div class="col-md-10 ">
                    <h5>MISR ITALIA</h5>
                    <p>Orascom Development Holding “ODH” is a leading developer of fully integrated destinations, with more than 30 years of experience and a proven track record of sustainable development, including hotels, real estate units, and leisure facilities such as golf courses, marinas and supporting infrastructure. ODH’s diversified portfolio is spread over 7 countries (Egypt, UAE, Oman, Switzerland, Morocco, Montenegro and UK. ODH currently operates 9 destinations; 4 in Egypt (El Gouna, Taba Heights, Makadi Heights, and Byoum), The Cove in the UAE, Jebel Sifah and Hawana Salalah in Oman, Luštica Bay in Montenegro and Andermatt in Switzerland. ODH recently launched O West, the latest addition to its portfolio and its first project in Cairo-Egypt, located in the heart of 6th of October City.ODH currently owns a land bank of 101 million sqm and a comprehensive hospitality of 7,205 rooms. ODH is listed in the SIX Swiss Exchange.
                    </p>
                    <hr>

                </div>
                <div class="col-md-12 text-center agen-data">
                    <span>Mobile:</span> <b>01101355055</b>
                    <span>WhatsApp:</span> <b>01101355055</b>
                    <span>Email:</span> <b>info@propertymap.com.eg</b>
                </div>
            </div>

            <div class="row  shadow bg-white p-3 acenc-item mt-5 ">
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <img src="img/orascom-logo-210x210.png.png" class="mb-3" alt="">
                </div>
                <div class="col-md-10 ">
                    <h5>ORASCOM</h5>
                    <p>Orascom Development Holding “ODH” is a leading developer of fully integrated destinations, with more than 30 years of experience and a proven track record of sustainable development, including hotels, real estate units, and leisure facilities such as golf courses, marinas and supporting infrastructure. ODH’s diversified portfolio is spread over 7 countries (Egypt, UAE, Oman, Switzerland, Morocco, Montenegro and UK. ODH currently operates 9 destinations; 4 in Egypt (El Gouna, Taba Heights, Makadi Heights, and Byoum), The Cove in the UAE, Jebel Sifah and Hawana Salalah in Oman, Luštica Bay in Montenegro and Andermatt in Switzerland. ODH recently launched O West, the latest addition to its portfolio and its first project in Cairo-Egypt, located in the heart of 6th of October City.ODH currently owns a land bank of 101 million sqm and a comprehensive hospitality of 7,205 rooms. ODH is listed in the SIX Swiss Exchange.
                    </p>
                    <hr>

                </div>
                <div class="col-md-12 text-center agen-data">
                    <span>Mobile:</span> <b>01101355055</b>
                    <span>WhatsApp:</span> <b>01101355055</b>
                    <span>Email:</span> <b>info@propertymap.com.eg</b>
                </div>
            </div>

            <div class="row  shadow bg-white p-3 acenc-item mt-5 ">
                <div class="col-md-2 d-flex align-items-center justify-content-center">
                    <img src="img/lmd-logo-210x210.webp.png" class="mb-3" alt="">
                </div>
                <div class="col-md-10 ">
                    <h5>LMD</h5>
                    <p>Orascom Development Holding “ODH” is a leading developer of fully integrated destinations, with more than 30 years of experience and a proven track record of sustainable development, including hotels, real estate units, and leisure facilities such as golf courses, marinas and supporting infrastructure. ODH’s diversified portfolio is spread over 7 countries (Egypt, UAE, Oman, Switzerland, Morocco, Montenegro and UK. ODH currently operates 9 destinations; 4 in Egypt (El Gouna, Taba Heights, Makadi Heights, and Byoum), The Cove in the UAE, Jebel Sifah and Hawana Salalah in Oman, Luštica Bay in Montenegro and Andermatt in Switzerland. ODH recently launched O West, the latest addition to its portfolio and its first project in Cairo-Egypt, located in the heart of 6th of October City.ODH currently owns a land bank of 101 million sqm and a comprehensive hospitality of 7,205 rooms. ODH is listed in the SIX Swiss Exchange.
                    </p>
                    <hr>

                </div>
                <div class="col-md-12 text-center agen-data">
                    <span>Mobile:</span> <b>01101355055</b>
                    <span>WhatsApp:</span> <b>01101355055</b>
                    <span>Email:</span> <b>info@propertymap.com.eg</b>
                </div>
            </div>

        </div>
    </div>


    <!-- Agencies-sec end -->

    
    <!-- featured properties start -->

    <div class="container-fluid py-5 prop-">
        <div class="container">
            <h5 class="main-title mt-2 mb-3">Properties</h5>
            <h1 class="sec-title mt-3 ">Featured Properties</h1>

            <div class="owl-carousel owl-theme   py-5" >

                <div class="prop-item" >
                
                <img style="height: 400px;" src="img/PALACE_RESIDENCES_NORTH_DCH_WEBSITE_MAIN_HERO_2-706x385.jpg.png">

                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                    <span class="material-symbols-outlined">
                        favorite
                        </span>
                    </a>
                    <a href="">

                        <span class="material-symbols-outlined">
                        compare_arrows
                        </span>
                    </a>

                    </div>
                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div>

                <div class="prop-item" >
                    <img style="height: 400px;" src="img/property-06-exterior-1-818x417.jpg.png">

                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>
                    </div>  
                    
                    <div class="bot-icn">
                    <a href="">
                    <span class="material-symbols-outlined">
                        favorite
                        </span>
                    </a>
                    <a href="">

                        <span class="material-symbols-outlined">
                        compare_arrows
                        </span>
                    </a>
                    </div>

                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div>

                <div class="prop-item"  >
                    <img style="height: 400px;" src="img/Untitled-3.png">

                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                    <span class="material-symbols-outlined">
                        favorite
                        </span>
                    </a>
                    <a href="">

                        <span class="material-symbols-outlined">
                        compare_arrows
                        </span>
                    </a>
                    </div>
                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div>

                <div class="prop-item"  >
                    <img style="height: 400px;" src="img/Untitled-4 1.png">
                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                        <span class="material-symbols-outlined">
                        favorite
                        </span>
                        </a>
                        <a href="">

                        <span class="material-symbols-outlined">
                            compare_arrows
                            </span>
                        </a>
                    </div>

                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div>

                <div class="prop-item" >
                    <img style="height: 400px;" src="img/Untitled-5 1 (1).png">
                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                    <span class="material-symbols-outlined">
                        favorite
                        </span>
                    </a>
                    <a href="">

                        <span class="material-symbols-outlined">
                        compare_arrows
                        </span>
                    </a>
                    </div>

                <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                </div>
                </div>


                <div class="prop-item" >
                    <img style="height: 400px;" src="img/Untitled-5 1.png">
                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                        <span class="material-symbols-outlined">
                        favorite
                        </span>
                        </a>
                        <a href="">

                        <span class="material-symbols-outlined">
                            compare_arrows
                            </span>
                        </a>
                    </div>

                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div>


                <div class="prop-item" >
                    <img style="height: 400px;" src="img/Untitled-5 1.png">
                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                    <span class="material-symbols-outlined">
                        favorite
                        </span>
                    </a>
                    <a href="">

                        <span class="material-symbols-outlined">
                        compare_arrows
                        </span>
                    </a>
                    </div>

                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div>


                <div class="prop-item" >

                    <img style="height: 400px;" src="img/Untitled-5 1.png">
                    <a href=""><label class="stat" >Featured</label></a>
                    <div class="icn">
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        photo_camera 
                        <span style="font-size: 11px;" class="mx-1">3</span>
                        </span>

                    </a>
                    <a href="">
                        <span class="material-symbols-outlined icn-span">
                        videocam 
                        <span style="font-size: 11px;" class="mx-1">2</span>
                        </span>
                    </a>

                    </div>

                    <div class="bot-icn">
                    <a href="">
                    <span class="material-symbols-outlined">
                        favorite
                        </span>
                    </a>
                    <a href="">

                        <span class="material-symbols-outlined">
                        compare_arrows
                        </span>
                        </a>
                    </div>

                    <div class="pro-details d-block">
                    <p class="title">OFFICE IN ONE-NINETY</p>
                    <p class="price">1,007,986Egp</p>
                    </div>
                </div> 
            

            <!-- <div class=" text-center">
                <div class="pagination owl-dots">
                <a class="arro owl-next" href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a class="owl-dot" href="#" >2</a>
                <a class="owl-dot" href="#">3</a>
                <a class="owl-dot" href="#">4</a>
                <a class="owl-dot" href="#">5</a>
                <a class="owl-dot" href="#">6</a>
                <a class="arro" href="#">&raquo;</a>
                </div>
            </div> -->
            </div>

        </div>
    </div>
        
    <!-- featured properties end -->


    <!--  Rent or Buy start -->

    <div class="container-fluid mt-5 rent-sec"          
          style="background-image: url('img/Get\ In\ Touch.jpg');
          background-repeat: no-repeat;
          background-position:top center;
          height: 500px;" >
        <div class="overlayy overlayy-a"></div>

        <div class="container">
        <div class="row">
            <div class="col-md-12 text-center rnt-txt">
            <h4>Rent or Buy</h4>
            <p>Looking to Buy a new property or Sell an existing one? <br> <span>Property Map</span> provides an awesome solution!</p>
            <div class=" text-center mb-3">
                <!-- <a href="" class="btn nav-btn">submit property</a> -->
                <a href="" class="btn rent-btn ">Browse properties</a>
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