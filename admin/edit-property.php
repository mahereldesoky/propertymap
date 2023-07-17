<?php 
@include('./authentication.php');
@include('inc/header.php');

@include('inc/navbar.php');

?>


<div class="container-fluid page-body-wrapper">

      <?php

      @include('inc/sidebar.php');
      ?>

    <div class="main-panel ">
        <div class="content-wrapper p-2 ">
                <div class="container-fluid p-0 ">
                    <h4 class="mt-4">Properties</h4>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item active">Properties</li>
                    </ol>
                    <div class="row mt-4 ">
                        <div class="col-md-12 ">
                            <div class="card ">
                                <div class="card-header p-2">
                                    <h4>Add Property
                                    <a href="view-property.php" class="btn btn-danger float-end">BACK</a>
                                    </h4>
                                    
                                </div>
                                <div class="card-body p-1">
                                <?php
                                    if(isset($_GET['id']))
                                    {
                                        $property_id = $_GET['id'];
                                        $propertys = "SELECT * FROM property WHERE id='$property_id' ";
                                        $propertys_run = mysqli_query($con, $propertys);

                                        if(mysqli_num_rows($propertys_run) > 0){
                                            foreach($propertys_run as $property){

                                    
                                    ?>

                                    <form action="code.php" method="POST" enctype="multipart/form-data" class="py-2">
                                    <input type="hidden" name="property_id" value="<?= $property['id'] ?>" >
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab" aria-controls="seo" aria-selected="true">
                                                    SEO
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="false">
                                                    Details
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="features-tab" data-bs-toggle="tab" data-bs-target="#features" type="button" role="tab" aria-controls="features" aria-selected="false">
                                                    Features
                                                </button>
                                            </li> 

                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">
                                                    Payment Details
                                                </button>
                                            </li>

                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div class="tab-pane border py-5 px-2 fade show active" id="seo" role="tabpanel" aria-labelledby="seo-tab" tabindex="0">

                                                <div class="mb-3">
                                                    <label>Property Slug</label>
                                                    <input type="text" name="p-slug" value="<?= $property['p_slug'] ?>" required class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Meta Title</label>
                                                    <input type="text" name="meta_title" value="<?= $property['meta_title'] ?>" required class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label>Meta Description</label>
                                                    <textarea name="meta_description"  required class="form-control" rows="4"><?= $property['meta_description'] ?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Meta KeyWord</label>
                                                    <textarea name="meta_keyword" required class="form-control" rows="4"><?= $property['meta_keyword'] ?></textarea>
                                                </div>

                                            </div>

                                            <div class="tab-pane border py-5 px-2 fade" id="details" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label>Property Name</label>
                                                        <input type="text" name="name" value="<?= $property['name'] ?>" required class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Property Type</label>
                                                            <select class="form-control p-3" value="<?= $property['type'] ?>" required name="type">
                                                                <option value="">Select Type</option>
                                                                <option value="rent">Rent</option>
                                                                <option value="sale">Sale</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Property Status</label>
                                                            <select class="form-control p-3" value="<?= $property['p_status'] ?>" required name="p-status">
                                                                <option value="">Select Status</option>
                                                                <option value="cash">Cash</option>
                                                                <option value="installment">Installment</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Property Usage</label>
                                                            <select class="form-control p-3" value="<?= $property['p_usage'] ?>" required name="p-usage">
                                                                <option value="">Select Usage</option>
                                                                <option value="residential">Residential</option>
                                                                <option value="commercial">Commercial</option>
                                                                <option value="apartment">Apartment</option>
                                                                <option value="apartment-building">Apartment Building</option>
                                                                <option value="office">Office</option>
                                                            </select>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Beds</label>
                                                        <input type="number" name="beds" value="<?= $property['beds'] ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Baths</label>
                                                        <input type="number" name="baths" value="<?= $property['baths'] ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Hall</label>
                                                        <input type="number" name="hall" value="<?= $property['hall'] ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Garage</label>
                                                        <input type="number" name="garage" value="<?= $property['garage'] ?>"  class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Property Size</label>
                                                        <input type="number" name="size" value="<?= number_format( $property ['size'])?>" required class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Property Address</label>
                                                        <input type="text" name="address" value="<?= $property['address'] ?>" required class="form-control">
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>City</label>
                                                        <select class="form-control p-3" value="<?= $property['city'] ?>" required name="city">
                                                            <option value="">Select...</option>
                                                            <option value="cairo">Cairo</option>
                                                            <option value="giza">Giza</option>
                                                            <option value="north_cost">North Cost</option>
                                                            <option value="sokhna">Al Ain Al Shokhna</option>
                                                        </select>	
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label>Area</label>
                                                        <select class="form-control p-3" value="<?= $property['area'] ?>" required name="area">
                                                            <option value="">Select...</option>
                                                            <option value="new-cairo">New Cairo</option>
                                                            <option value="new-capital">New Capital</option>
                                                            <option value="new_giza">New Giza</option>
                                                            <option value="6-october">6 October</option>
                                                            <option value="zayed">Al Shekh Zayed</option>
                                                                                <option value="north_cost">North Cost</option>
                                                        </select>	
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <label>Location in Maps (URL)</label>
                                                    <textarea name="location" class="form-control" rows="4"><?= $property['location'] ?></textarea>

                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                            <label>Is Featured?</label>
                                                                <select class="form-control p-3" value="<?= $property['is_featured'] ?>" required name="is-featured">
                                                                    <option value="">Select...</option>
                                                                    <option value="0">No</option>
                                                                    <option value="1">Yes</option>
                                                                </select>													
                                                    </div>

                                                    <div class="col-md-12 mb-3">
                                                    <label> Description</label>
                                                    <textarea name="descripttion" required class="form-control" rows="4"><?= $property['description'] ?></textarea>
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>Image</label>
                                                        <input type="file" name="image" required class="form-control">
                                                        <img src="./property/<?= $property['image'];?>" alt="image" height="150" width="180">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>Image1</label>
                                                        <input type="file" name="image1" required class="form-control">
                                                        <img src="./property/<?= $property['image1'];?>" alt="image" height="150" width="180">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>Image2</label>
                                                        <input type="file" name="image2" required class="form-control">
                                                        <img src="./property/<?= $property['image2'];?>" alt="image" height="150" width="180">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>Image3</label>
                                                        <input type="file" name="image3"  class="form-control">
                                                        <img src="./property/<?= $property['image3'];?>" alt="image" height="150" width="180">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>Image4</label>
                                                        <input type="file" name="image4"  class="form-control">
                                                        <img src="./property/<?= $property['image4'];?>" alt="image" height="150" width="180">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="tab-pane border py-5 px-2 fade" id="features" role="tabpanel" aria-labelledby="features-tab" tabindex="0">
                                                <div class="container py-1">
                                                    <textarea id="myTextarea" required name="add_features" >
                                                        <?=  $property['add_features']; ?>
                                                    </textarea>
                                                </div>
                                            </div>

                                            <div class="tab-pane border py-5 px-2 fade" id="payment" role="tabpanel" aria-labelledby="payment-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label>Sell Price</label>
                                                        <input type="text" name="price" value="<?= $property ['price'] ?>" required class="form-control">
                                                    </div>

                                                    <!-- <div class="col-md-6 mb-3">
                                                        <label>Land Register Fees</label>
                                                        <input type="text" name="land-fees" value="<?=  $property ['land_fees'] ?>" required class="form-control">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>OQOOD AMOUNT</label>
                                                        <input type="text" name="oqod-amount" value="<?=  $property ['oqod_amount'] ?>" required class="form-control">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>APPLICABLE FEES</label>
                                                        <input type="text" name="app-fees" value="<?=  $property ['app_fees'] ?>" required class="form-control">
                                                    </div> -->

                                                    <div class="col-md-6 mb-3">
                                                        <label>Down payment</label>
                                                        <input type="text" name="first-hand" value="<?=  $property ['first_hand'] ?>" required class="form-control">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>Installment Years</label>
                                                        <input type="text" name="on-hand" value="<?=  $property ['on_hand'] ?>" required class="form-control">
                                                    </div>
                                                    <!-- 
                                                    <div class="col-md-6 mb-3">
                                                        <label>3 months from the Handover Date</label>
                                                        <input type="text" name="three-month" value="<?=  $property ['three_month'] ?>" required class="form-control">
                                                    </div>

                                                    <div class="col-md-6 mb-3">
                                                        <label>6 months from the Handover Date</label>
                                                        <input type="text" name="six-month" value="<?=  $property ['six_month'] ?>" required class="form-control">
                                                    </div> -->

                                                    <div class="col-md-6 mb-3">
                                                        <label for="">Status</label>
                                                        <select class="form-control p-3" value="<?= $property['status'] ?>" required name="status">
                                                                    <option value="">Select...</option>
                                                                    <option value="0">Visible</option>
                                                                    <option value="1">Hidden</option>
                                                        </select>	
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div>
                                            <button type="submit" name="update_property" class="btn btn-primary">Submit</button>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../tinymce/js/tinymce/tinymce.min.js"></script>
<!-- tiny mce script -->
<script>
        tinymce.init({
        selector: '#myTextarea',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [
        { title: 'My page 1', value: 'https://www.codexworld.com' },
        { title: 'My page 2', value: 'http://www.codexqa.com' }
        ],
        image_list: [
        { title: 'My page 1', value: 'https://www.codexworld.com' },
        { title: 'My page 2', value: 'http://www.codexqa.com' }
        ],
        image_class_list: [
        { title: 'None', value: '' },
        { title: 'Some class', value: 'class-name' }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
        /* Provide file and text for the link dialog */
        if (meta.filetype === 'file') {
            callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
        }
    
        /* Provide image and alt text for the image dialog */
        if (meta.filetype === 'image') {
            callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
        }
    
        /* Provide alternative source and posted for the media dialog */
        if (meta.filetype === 'media') {
            callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
        }
        },
        templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
        { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
        { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 400,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
        mobile: {
    menubar: true
  }
    });
</script> 

</div>