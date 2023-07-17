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
                <li class="breadcrumb-item active">Users</li>
            </ol>
            
            <div class="row">
                <div class="com-md-12">
                    <?php include('../message.php'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Registered Users</h4>
                                <a href="add-admin.php" class="btn btn-primary float-end">Add Admin</a>
                        </div>
                        <div class="card-body table-responsive" id="users_table">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $query = "SELECT * FROM admin";
                                    $query_run = mysqli_query($con,$query);
                                    if (mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td>
                                                    <?php 
                                                    if($row['role_as'] == '1'){
                                                        echo 'Admin';
                                                    }
                                                    elseif($row['role_as'] == '0'){
                                                        echo 'User';
                                                    }
                                                    ?>
                                                </td>
                                                <td><a href="edit-admin.php?id=<?= $row['id'] ?>"  class="btn btn-success">Edit</a></td>
                                                <td>
                                                        <button type="submit"  value="<?= $row['id'] ?>"  class="btn btn-danger user_delete">delete</button>
                                                </td>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    $(document).ready(function(){
        $('.user_delete').click(function(e){ 
            e.preventDefault();
            var id= $(this).val();
            // alert(id);
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type:"POST",
                    url:"code.php",
                    data: {
                        'user_id':id,
                        'user_delete':true,
                    },
                    success: function (response) {
                        if (response == 200)
                        {
                            swal("Success!", "You have successfully deleted this user", "success");
                            $("#users_table").load(location.href + " #users_table");
                        }else if (response == 500){
                            swal("Error!", "Something went wrong", "error");
                        }
                    }  
                });
            } else {
                swal("Your user is safe!");
            }
            });
    });
    });
</script>