<?php  
@include('./authentication.php');


if(isset($_POST['property_delete'])){
    $property_id = $_POST['property_id'];

    $check_img_query = "SELECT * FROM property WHERE id='$property_id' LIMIT 1";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_array($img_res);
    $img = $res_data = ['image'];

    $query = "DELETE FROM property WHERE id='$property_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        if(file_exists('property/'.$img)){
            unlink("property/".$img);
        }
        echo 200;
        // $_SESSION['message'] = " property Deleted Successfully";
        // header('Location: view-property.php');
        // exit(0);
    }
    else {
        // $_SESSION['message'] = "Something went wrong";
        // header('Location: view-property.php');
        // exit(0);
        echo 500;
    }

}


if(isset($_POST['update_property'])){
    $property_id = $_POST['property_id'];

    $string = preg_replace('/[^A-Za-z0-9\-]/', '-',$_POST['p-slug']); //remove spiceal characters
    $final_string = preg_replace('/-+/','-',$string);
    $slug = $string;
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $p_status = $_POST['p-status'];
    $p_usage = $_POST['p-usage'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $hall = $_POST['hall'];
    $garage = $_POST['garage'];
    $size = $_POST['size'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    $descriptions = $_POST['descripttion'];
    $price = $_POST['price'];
    // $land_fees = $_POST['land-fees'];
    // $oqod_amount = $_POST['oqod-amount'];
    // $app_fees = $_POST['app-fees'];
    $first_hand = $_POST['first-hand'];
    $on_hand = $_POST['on-hand'];
    // $three_month = $_POST['three-month'];
    // $six_month = $_POST['six-month'];

    $image=$_FILES['image']['name'];
    $temp_name  =$_FILES['image']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image");
    $image1=$_FILES['image1']['name'];
    $temp_name  =$_FILES['image1']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image1");
    $image2=$_FILES['image2']['name'];
    $temp_name  =$_FILES['image2']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image2");
    $image3=$_FILES['image3']['name'];
    $temp_name  =$_FILES['image3']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image3");
    $image4=$_FILES['image4']['name'];
    $temp_name  =$_FILES['image4']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image4");

    $add_featureess = $_POST['add_features'];
    $status = $_POST['status'] == true ? '1' : '0';
    $is_featured = $_POST['is-featured'] == true ? '1' : '0';

    $query = "UPDATE property SET p_slug='{$slug}', meta_title='{$meta_title}',meta_description='{$meta_description}',
    meta_keyword='{$meta_keyword}',name='{$name}',type='{$type}',p_status='{$p_status}',
    p_usage='{$p_usage}',beds='{$beds}',baths='{$baths}',hall='{$hall}',garage='{$garage}',
    size='{$size}',address='{$address}',city='{$city}',area='{$area}',location='{$location}',
    description='{$descriptions}',price='{$price}',land_fees='{$land_fees}',oqod_amount='{$oqod_amount}',
    app_fees='{$app_fees}',first_hand='{$first_hand}',on_hand='{$on_hand}',three_month='{$three_month}',
    six_month='{$six_month}',image='{$image}',image1='{$image1}',image2='{$image2}',image3='{$image3}',image4='{$image4}',add_features='$add_featureess',status='{$status}',is_featured='{$is_featured}' WHERE id='{$property_id}' ";

    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Property Updated Successfully";
        header("Location: view-property.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Something went wrong";
        header("Location: view-property.php");
        exit(0);
    }

}



if(isset($_POST['add_property'])){
    $string = preg_replace('/[^A-Za-z0-9\-]/', '-',$_POST['p-slug']); //remove spiceal characters
    $final_string = preg_replace('/-+/','-',$string);
    $slug = $string;
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $p_status = $_POST['p-status'];
    $p_usage = $_POST['p-usage'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $hall = $_POST['hall'];
    $garage = $_POST['garage'];
    $size = $_POST['size'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $location = $_POST['location'];
    $descriptions = $_POST['descriptions'];
    $price = $_POST['price'];
    $land_fees = $_POST['land-fees'];
    $oqod_amount = $_POST['oqod-amount'];
    $app_fees = $_POST['app-fees'];
    $first_hand = $_POST['first-hand'];
    $on_hand = $_POST['on-hand'];
    $three_month = $_POST['three-month'];
    $six_month = $_POST['six-month'];
    $image=$_FILES['image']['name'];
    $temp_name  =$_FILES['image']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image");
    $image1=$_FILES['image1']['name'];
    $temp_name  =$_FILES['image1']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image1");
    $image2=$_FILES['image2']['name'];
    $temp_name  =$_FILES['image2']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image2");
    $image3=$_FILES['image3']['name'];
    $temp_name  =$_FILES['image3']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image3");
    $image4=$_FILES['image4']['name'];
    $temp_name  =$_FILES['image4']['tmp_name'];
    move_uploaded_file($temp_name,"property/$image4");

    $add_featuresss = $_POST['add_features'];

    $status = $_POST['status'] == true ? '1' : '0';
    $is_featured = $_POST['is-featured'] == true ? '1' : '0';



         
 

    $query = "INSERT INTO property (p_slug, meta_title,meta_description,meta_keyword,name,type,p_status,
    p_usage,beds,baths,hall,garage,size,address,city,area,location,description,price,land_fees,oqod_amount,
    app_fees,first_hand,on_hand,three_month,six_month,image,image1,image2,image3,image4,add_features,status,is_featured)
    VALUES ('$slug','$meta_title','$meta_description', '$meta_keyword', '$name', '$type', '$p_status', '$p_usage',
    '$beds', '$baths', '$hall', '$garage', '$size', '$address', '$city', '$area', '$location', '$descriptions',
    '$price', '$land_fees', '$oqod_amount', '$app_fees', '$first_hand', '$on_hand', '$three_month', '$six_month',
    '$image','$image1','$image2','$image3','$image4', '$add_featuresss', '$status', '$is_featured')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Property Added Successfully";
        header("Location: view-property.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Something went wrong";
        header("Location: view-property.php");
        exit(0);
    }

}



if(isset($_POST['user_delete'])){

    $user_id = $_POST['user_id'];

    $query = "DELETE FROM admin WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        // $_SESSION['message'] = "Admin / User deleted successfully";
        echo 200;
        // header("Location: view-admin.php");
        // exit(0);
    }
    else{
        // $_SESSION['message'] = "Something went wrong";
        echo 500;
        // header("Location: view-admin.php");
        // exit(0);
    }

    
}



if(isset($_POST['update_user'])){
    $user_id = $_POST['user_id'];
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    $query = "UPDATE admin SET name='$fname',email='$email', password='$password', role_as='$role_as', status='$status' WHERE id='$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "User updated successfully";
        header('Location: view-admin.php');
        exit(0);
    }

}




if(isset($_POST['add_user'])){
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    $query = "INSERT INTO admin (name, email,password,role_as,status) VALUES ('$fname','$email','$password', '$role_as', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Admin / User added successfully";
        header("Location: view-admin.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Something went wrong";
        header("Location: view-admin.php");
        exit(0);
    }

}



















?>