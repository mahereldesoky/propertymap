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
                <li class="breadcrumb-item active">Properties</li>
            </ol>
            
            <div class="row">
                <div class="com-md-12">
                    <?php include('../message.php'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Properties</h4>
                                <a href="add-property.php" class="btn btn-primary float-end">Add property</a>
                        </div>
                        <div class="card-body table-responsive filter" id="property_table">
                            <table class="table  table-responsive " id="example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Property Type</th>
                                        <th>Property Status</th>
                                        <th>Property Usage</th>
                                        <th>City</th>
                                        <th>Area</th>
                                        <th>Is Featured?</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                    $query = "SELECT * FROM property";
                                    $query_run = mysqli_query($con,$query);
                                    if (mysqli_num_rows($query_run) > 0){
                                        foreach($query_run as $row) {
                                            ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['type'] ?></td>
                                                <td><?= $row['p_status'] ?></td>
                                                <td><?= $row['p_usage'] ?></td>
                                                <td><?= $row['city'] ?></td>
                                                <td><?= $row['area'] ?></td>
                                                <td><?= $row['is_featured']== true ? 'Featured' : 'Not Featured' ?></td>
                                                
                                                <td><img src="property/<?= $row['image'] ?>" width="90px" height="90px" alt="img"></td>

                                                <td> <?= number_format($row['price']);?></td>
                                                <td><?= $row['status'] == true ? 'Hidden' : 'Visible' ?></td>

                                                <td><a href="edit-property.php?id=<?= $row['id'] ?>"  class="btn btn-success py-2 px-3">Edit</a></td>
                                                <td>
                                                        <button type="submit"  value="<?= $row['id'] ?>" class="btn btn-danger property_delete py-2 px-3">delete</button>
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
        $('.property_delete').click(function(e){ 
            e.preventDefault();
            var id= $(this).val();
            // alert(id);
            swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover? Better Make it Hidden in Status!",
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
                        'property_id':id,
                        'property_delete':true,
                    },
                    success: function (response) {
                        if (response == 200)
                        {
                            swal("Success!", "You have successfully deleted this property", "success");
                            $("#property_table").load(location.href + " #property_table");
                        }else if (response == 500){
                            swal("Error!", "Something went wrong", "error");
                        }
                    }  
                });
            } else {
                swal("Your Property is safe!");
            }
            });
    });
    });
</script>

<script>
     /**
   * Initiate Datatables
   */
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>