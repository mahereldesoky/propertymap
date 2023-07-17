
    <div class="container-fluid footer mt-5">
        <div class="container py-4">
        <div class="row align-items-center">

            <div class="col-md-4 mb-2">
            <a class="" href="index.php"><img src="img/logo horizontal  white-01-04-final.png" class="mx-2 logo-img"  /></a>
            </div>
            <div class="col-md-4 mb-2  links">
            <a class="" href="https://www.facebook.com/property.map.investments?mibextid=LQQJ4d">
                <i class="fab fa-facebook-f"></i>
            </a>
            <!-- <a class="" href="#">
                <i class="fab fa-twitter"></i>
            </a> -->
            <a class="" href="https://youtube.com/@propertymapinvestments">
                <i class="fab fa-youtube"></i>
            </a>
            <a class="" href="https://instagram.com/property.map.investments?igshid=YmMyMTA2M2Y=">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="" href="https://www.linkedin.com/company/property-map/">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </div>

            <div class="col-md-4 mb-2 subscibe">
                <form action="" method="POST" >
                <?php 
                    $userEmail = ""; //first we leave email field blank
                    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
                    $userEmail = $_POST['email']; //getting user entered email
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
                        $subject = "Thanks for Subscribing us - PropertyMap";
                        $message = "Thanks for subscribing to our WebSite. You'll always receive updates from us. And we won't share and sell your information.";
                        $sender = "From: info@propertymap.com.eg";
                        //php function to send mail
                        if(mail($userEmail, $subject, $message, $sender)){
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
                            title: 'Registration Success'
                            })
                        </script>
                        <?php   
                        $query = "INSERT INTO subscribe (email) VALUES ('$userEmail')";
                        $query_run = mysqli_query($con, $query);
                        ?>
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
                    <input type="email" name="email" placeholder="Enter Email" required value="<?php echo $userEmail ?>">
                    <button type="submit" class="btn sub-btn" name="subscribe">SUBSCRIBE</button>
                </form>

            </div>

        </div>
        <hr>

        <div class="row">

            <div class="col-md-8 d-flex flex-column justify-content-start">
            <h5 class=" text-uppercase mb-2 mt-4" >About property Map</h5>
            <a class="mb-2 mt-2" href="about-us.php">Who We Are</a>
            <a class="mb-2" href="contact.php">Contact Us</a>
            <!-- <a class="mb-2" href="#">We Care</a> -->
            <!-- <a class="mb-2" href="#">FAQ</a>
            <a class="mb-2" href="#">Careers</a>
            <a class="mb-2" href="#">Whistleblower Line</a>
            <a class="mb-2" href="#">Investor Relations</a>
            <a class="mb-2" href="#">Press Releases</a>
            <a class="mb-2" href="#">Blog</a> -->
            </div>

            <!-- <div class="col-md-4 d-flex flex-column justify-content-start">
            <h5 class=" text-uppercase mb-2 mt-4" >Property Features</h5>
            <a class="mb-2 mt-2" href="#">5  Stories</a>
            <a class="mb-2" href="#">Central Heating</a>
            <a class="mb-2" href="#">Emergency Exit</a>
            <a class="mb-2" href="#">Garden</a>
            <a class="mb-2" href="#">Marble Floors</a>
            <a class="mb-2" href="#">Swimming Pool</a>
            <a class="mb-2" href="#">Next to busy way</a>
            <a class="mb-2" href="#">Bike Path</a>
            <a class="mb-2" href="#">Dual Sinks</a>
            </div> -->

            <div class="col-md-4 d-flex flex-column justify-content-start" >
            <h5 class=" text-uppercase mb-2 mt-4" >Contact Info</h5>
            <a class="mb-4 mt-2" href="#"><i class="fa-solid fa-location-dot"></i> Galaxy mall 306, South 90 Industrial Area, New Cairo, Egypt</a>
            <a class="mb-4" href="#"><i class="fa-solid fa-phone"></i> 01103616140</a>
            <a class="mb-4" href="#"><i class="fa-solid fa-envelope"></i> info@propertymap.com.eg</a>
            </div>

        </div>
        <hr>
        <div class="text-center">
            <span><script>document.write(new Date().getFullYear())</script>&copy;</span><a href="index.php"><span class="property-fo">Property Map</span></a> <br>
            <span>Powred By<a class="crowd" href="https://crowd.com.eg" target="_blank">Crowd Digital</a></span>
        </div>
        </div>
    </div>
        
        <!--  Footer end -->
    <script src="js/bootstrap.min.js"></script>
    <script src="css/aos/aos.js"></script>

      <script>
            /**
                * Animation on scroll
            */
        window.addEventListener('load', () => {
            AOS.init({
            duration: 2000,
            easing: 'ease-in-out',
            once: false,
            mirror: true
            })
        });
      </script>
      
      <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
      <script src="js/main.js"></script>


    <!-- carousel -->
    <script>

        // owl carousel

        $(document).ready(function(){
        $(".owl-carousel").owlCarousel();


            $(".prop-").owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            paginationNumbers:false,
            pagination : true,
            dots: false,
            nav: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
            });

            $(".s-property").owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            pagination : false,
            dots: false,
            nav: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
            });

        });
        
    </script>

    <!-- back to top button -->
    <script>
        window.onscroll = () => {
        toggleTopButton();
        }
        function scrollToTop(){
        window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function toggleTopButton() {
        if (document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20) {
            document.getElementById('back-to-up').classList.remove('d-none');
        } else {
            document.getElementById('back-to-up').classList.add('d-none');
        }
        }
    </script>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXVXH88"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>
</html>