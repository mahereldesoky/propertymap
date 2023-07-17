

<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" style="font-size: 16px;" href="../index.php"><img class="w-25 mx-2" src="images/logo-horizontal-white-01-04.png" alt="logo"/>Property Map</a>
          <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="images/logo-horizontal-white-01-04.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">
        <?php if(isset($_SESSION['auth_user'])) {  ?>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">
                Hey <?= $_SESSION['auth_user']['user_name']; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <form action="../logout.php" method="POST">
              <button type="submit" name="logout_btn" class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </button>
            </form>
            </div>
          </li>
          <?php }  ?>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>