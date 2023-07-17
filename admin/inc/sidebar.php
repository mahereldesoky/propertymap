
<?php  $page = substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <!-- <i class="mdi mdi-circle-outline menu-icon"></i> -->
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Admins</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item " > <a class="nav-link"  href="add-admin.php">Add Admin</a></li>
                <li class="nav-item "> <a class="nav-link" href="view-admin.php">View Admins</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Properties</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add-property.php"> Add Property </a></li>
                <li class="nav-item"> <a class="nav-link" href="view-property.php"> View Property </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="view-subscribers.php">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Subscribers</span>
            </a>
          </li>



          <!-- <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
          
        </ul>
      </nav>