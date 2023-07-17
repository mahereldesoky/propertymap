<?php 


@include('./authentication.php');
@include('inc/header.php');

?>

  <div class="container-scroller">


    <!-- partial:partials/_navbar.html -->
      <?php

      @include('inc/navbar.php');
      ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <?php

      @include('inc/sidebar.php');
      ?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

         <?php include('../message.php'); ?>

          <div class="row">
            <div class="col-md-12 grid-margin">

                <div class="d-flex justify-content-between flex-wrap">

                    <div class="d-flex align-items-end flex-wrap">

                      <div class="me-md-3 me-xl-5">
                        <h2>Welcome <?= $_SESSION['auth_user']['user_name']; ?></h2>
                        <p class="mb-md-0">Your analytics dashboard template.</p>
                      </div>

                      <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                        <!-- <p class="text-primary mb-0 hover-cursor">Analytics</p> -->
                      </div>

                    </div>
                </div>

                <div class="row p-4">

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body text-center">Total Properties</div>
                            <?php
                            $dash_property_query = "SELECT * FROM property";
                              $dash_property_query_run = mysqli_query($con,$dash_property_query);
                              if($property_total = mysqli_num_rows($dash_property_query_run)){
                                  echo '<h4 class=" text-center"> '.$property_total.' </h4>';
                              }
                              else {
                                  echo '<h4 class="mb-1"> No records found </h4>';
                              }
                            ?>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view-property.php">View Properties</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body text-center">Total Admins</div>
                            <?php
                            $dash_admin_query = "SELECT * FROM admin";
                              $dash_admin_query_run = mysqli_query($con,$dash_admin_query);
                              if($admin_total = mysqli_num_rows($dash_admin_query_run)){
                                  echo '<h4 class=" text-center"> '.$admin_total.' </h4>';
                              }
                              else {
                                  echo '<h4 class="mb-1"> No records found </h4>';
                              }
                            ?>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view-admin.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Success Card</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="#">View Details</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                    </div> -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-dark text-white text-center mb-4">
                            <div class="card-body">Subscribed Users</div>
                            <?php
                              $dash_subscribe_query = "SELECT * FROM subscribe";
                              $dash_subscribe_query_run = mysqli_query($con,$dash_subscribe_query);
                              if($subscribe_total = mysqli_num_rows($dash_subscribe_query_run)){
                                  echo '<h4 class=" text-center"> '.$subscribe_total.' </h4>';
                              }
                              else {
                                  echo '<h4 class="mb-1"> No records found </h4>';
                              }
                            ?>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="view-subscribers.php">View subscribers</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
          </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php

          @include('inc/footer.php');
          ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


</body>

</html>


