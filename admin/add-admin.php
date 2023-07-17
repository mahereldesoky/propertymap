<?php 
@include('./authentication.php');
@include('inc/header.php');
@include('inc/navbar.php');

?>

<div class="container-fluid page-body-wrapper">

      <?php

      @include('inc/sidebar.php');
      ?>

<div class="main-panel">
    <div class="content-wrapper">

    
        <div class="container-fluid p-2">
                <h4 class="mt-4">Users</h4>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
                <div class="row mt-4">
                    <div class="com-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Admin / Users
                                <a href="view-admin.php" class="btn btn-danger float-end">BACK</a>
                                </h4>
                                
                            </div>
                            <div class="card-body">

                            <form action="code.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="">Email Address</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Password</label>
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Role as</label>
                                        <select name="role_as" required class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="1">--Admin--</option>
                                            <option value="0">--User--</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status checked=hidden,not-checked=visible</label>
                                        <input type="checkbox" name="status" width="70px" height="70px">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <button type="submit" name="add_user" class="btn btn-primary">Add Admin/User</button>
                                    </div>
                                </div>
                            </form>


                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>




<?php
@include('inc/footer.php')

?>

</div>
