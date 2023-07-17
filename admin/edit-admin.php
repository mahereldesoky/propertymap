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

        <div class="container-fluid px-2">
            <h4 class="mt-4">Users</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
                <li class="breadcrumb-item active">Edit Users</li>
            </ol>
            <div class="row">
                <div class="com-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Admin / Users
                            <a href="view-admin.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $user_id = $_GET['id'];
                                $users = "SELECT * FROM admin WHERE id='$user_id' ";
                                $users_run = mysqli_query($con, $users);

                                if(mysqli_num_rows($users_run) > 0){
                                    foreach($users_run as $user){

                                    
                                    ?>



                        <form action="code.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>" >
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="<?=$user['name'];?>" class="form-control">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Email Address</label>
                                    <input type="text" name="email" value="<?=$user['email'];?>" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Role as</label>
                                    <select name="role_as" required class="form-control">
                                        <option value="">--Select Role--</option>
                                        <option value="1" <?= $user['role_as'] =='1' ? 'selected': '' ?> >--Admin--</option>
                                        <option value="0" <?= $user['role_as'] =='0' ? 'selected': '' ?>>--User--</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Status checked=hidden,not-checked=visible</label>
                                    <input type="checkbox" name="status" <?= $user['status'] =='1' ? 'checked': '' ?> width="70px" height="70px">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                                </div>
                            </div>
                        </form>

                        <?php
                                    }
                                }
                                else {
                                    ?>
                                    <h4>No Record Found</h4>
                                    <?php
                                }

                            } 
                            ?>




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