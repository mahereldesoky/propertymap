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
                <li class="breadcrumb-item active">Subscribers</li>
            </ol>
            
            <div class="row">
                <div class="com-md-12">
                    <?php include('../message.php'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Subscribed Users</h4>
                        </div>
                        <div class="card-body table-responsive" id="users_table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $query = "SELECT * FROM subscribe";
                                    $query_run = mysqli_query($con,$query);
                                    if (mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <td colspan="6">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
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