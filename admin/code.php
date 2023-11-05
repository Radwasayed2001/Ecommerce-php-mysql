<?php
include('middleware/adminMiddleware.php');
include('../functions/myfunction.php');
if (isset($_POST['add-category-btn'])) {
    $name = mysqli_real_escape_string($con,$_POST['name']);
    if (empty(trim($name))) {
        redirect("add-category.php", "name is required");
    }
    if (empty($_FILES['image']['name'])) {
        redirect("add-category.php", "image is required");
    }
    $slug = mysqli_real_escape_string($con,$_POST['slug']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $meta_title = mysqli_real_escape_string($con,$_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con,$_POST['meta_description']);
    $meta_keywords = mysqli_real_escape_string($con,$_POST['meta_keywords']);
    $status = isset($_POST['status'])?'1':'0';
    $popular = isset($_POST['popular'])?'1':'0';
    $image = $_FILES['image']['name'];
    $path = "uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    $cat_query = "INSERT INTO `categories`(`name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`) VALUES ('$name','$slug','$description','$status','$popular','$filename','$meta_title','$meta_description','$meta_keywords')";
    $cat_query_run = mysqli_query($con, $cat_query);
    if ($cat_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        redirect("add-category.php", "Category Added Successfully");
    } else {
        redirect("add-category.php", "Something Went Wrong");
    }
}
else if (isset($_POST['update-category-btn'])){
    $id = mysqli_real_escape_string($con,$_POST['category-id']);
    $name = mysqli_real_escape_string($con,$_POST['name']);
    if (empty(trim($name))) {
        redirect("add-category.php", "name is required");
    }
    $slug = mysqli_real_escape_string($con,$_POST['slug']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $meta_title = mysqli_real_escape_string($con,$_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con,$_POST['meta_description']);
    $meta_keywords = mysqli_real_escape_string($con,$_POST['meta_keywords']);
    $status = isset($_POST['status'])?'1':'0';
    $popular = isset($_POST['popular'])?'1':'0';
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    $path = "uploads";
    if ($new_image == ""){
        $update_image = $old_image;
    } else {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
         $update_image = time() . '.' . $image_ext;
    }
    $update_query = "UPDATE `categories` SET `name`='$name',`slug`='$slug',`description`='$description',`status`='$status',`popular`='$popular',`image`='$update_image',`meta_title`='$meta_title',`meta_description`='$meta_description',`meta_keywords`='$meta_keywords' WHERE `id` = $id";
    $update_query_run = mysqli_query($con,$update_query);
    if ($update_query_run){
        if ($new_image != ""){
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_image);
            if (file_exists('uploads/'.$old_image)){
                unlink("uploads/".$old_image);
            }
        }
        redirect("edit-category.php?id=$id", "Category Updated Successfully");
    } else {
        redirect("edit-category.php?id=$id", "Something went Wrong");
    }
}
else if (isset($_POST['add-product-btn'])) {
    
    $category_id = $_POST['category_id'];
    $name = mysqli_real_escape_string($con,$_POST['name']);
    if (empty(trim($name))) {
        redirect("add-product.php", "name is required");
    }
    if (empty($_FILES['image']['name'])) {
        redirect("add-product.php", "image is required");
    }
    $slug = mysqli_real_escape_string($con,$_POST['slug']);
    $description = mysqli_real_escape_string($con,$_POST['small_description']);
    $small_description = mysqli_real_escape_string($con,$_POST['description']);
    $meta_title = mysqli_real_escape_string($con,$_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con,$_POST['meta_description']);
    $meta_keywords = mysqli_real_escape_string($con,$_POST['meta_keywords']);
    $qty = mysqli_real_escape_string($con,$_POST['qty']);
    $status = isset($_POST['status'])?'1':'0';
    $trending = isset($_POST['trending'])?'1':'0';
    $original_price = mysqli_real_escape_string($con,$_POST['original_price']);
    $selling_price = mysqli_real_escape_string($con,$_POST['selling_price']);
    $image = $_FILES['image']['name'];
    $path = "uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    $cat_query = "INSERT INTO `products`(`category_id`, `name`, `small_description`,
     `description`, `slug`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_description`, `meta_keywords`) VALUES ('$category_id', '$name','$small_description','$description','$slug','$original_price', '$selling_price','$filename','$qty','$status','$trending', '$meta_title','$meta_description','$meta_keywords')";
    $cat_query_run = mysqli_query($con, $cat_query);
    if ($cat_query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        redirect("add-product.php", "Product Added Successfully");
    } else {
        redirect("add-product.php", "Something Went Wrong");
    }
}
else if (isset($_POST['update-product-btn'])) {
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $name = mysqli_real_escape_string($con,$_POST['name']);
    if (empty(trim($name))) {
        redirect("add-product.php", "name is required");
    }
    $slug = mysqli_real_escape_string($con,$_POST['slug']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $small_description = mysqli_real_escape_string($con,$_POST['small_description']);
    $meta_title = mysqli_real_escape_string($con,$_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con,$_POST['meta_description']);
    $meta_keywords = mysqli_real_escape_string($con,$_POST['meta_keywords']);
    $qty = mysqli_real_escape_string($con,$_POST['qty']);
    $status = isset($_POST['status'])?'1':'0';
    $trending = isset($_POST['trending'])?'1':'0';
    $original_price = mysqli_real_escape_string($con,$_POST['original_price']);
    $selling_price = mysqli_real_escape_string($con,$_POST['selling_price']);
    $new_image = $_FILES['image']['name'];
    $path = "uploads";
    $old_image = $_POST['old_image'];
    if ($new_image!="") {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_image = time() . '.' . $image_ext;
    }
    else {
        $update_image = $old_image;
    }
    $update_query = "UPDATE `products` SET`category_id`='$category_id',`name`='$name',`small_description`='$small_description',`description`='$description',`slug`='$slug',`original_price`='$original_price',`selling_price`='$selling_price',`image`='$update_image',`qty`='$qty',`status`='$status',`trending`='$trending',`meta_title`='$meta_title',`meta_description`='$meta_description',`meta_keywords`='$meta_keywords',`updated_at`=CURRENT_TIMESTAMP WHERE id = '$product_id'";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run){
        if ($new_image != ""){
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_image);
            if (file_exists('uploads/'.$old_image)){
                unlink("uploads/".$old_image);
            }
        }
        redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
    } else {
        redirect("edit-product.php?id=$product_id", "Something went Wrong");
    }
}
else if (isset($_POST['delete-product-btn'])) {
    $id = $_POST['product_id'];
    $product_query = "SELECT * FROM `products` WHERE `id` = '$id'";
    $product_query_run = mysqli_query($con, $product_query);
        $product_data = mysqli_fetch_array($product_query_run);
        $img = $product_data['image'];
    $delete_query = "DELETE FROM `products` WHERE `id`='$id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if (mysqli_affected_rows($con)){
        if (file_exists('uploads/'.$img)){
            unlink("uploads/".$img);
        }
        echo 200;
    } else{
        echo 500;
    }
}
else if (isset($_POST['delete-category-btn'])) {
    $id = $_POST['category_id'];
    $category_query = "SELECT * FROM `categories` WHERE `id` = '$id'";
    $category_query_run = mysqli_query($con, $category_query);
        $category_data = mysqli_fetch_array($category_query_run);
        $img = $category_data['image'];
    $delete_query = "DELETE FROM `categories` WHERE `id`='$id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if (mysqli_affected_rows($con)){
        if (file_exists('uploads/'.$img)){
            unlink("uploads/".$img);
        }
        echo 200;
    } else{
        echo 500;
    }
}