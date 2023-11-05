<?php
include('admin/config/dbcon.php');
function redirect($url, $message) {
    $_SESSION['message'] = $message;
    header('location: '.$url);
    exit();
}
function getAll($table) {
    global $con;
    $query = "SELECT * FROM `$table`";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getAllActive($table) {
    global $con;
    $query = "SELECT * FROM `$table` WHERE `status`='1'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getByID($table,$id) {
    global $con;
    $query = "SELECT * FROM `$table` WHERE `id` = '$id'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getByIDActive($table,$id) {
    global $con;
    $query = "SELECT * FROM `$table` WHERE `id` = '$id' and `status`='1'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getBySlugActive($table,$slug) {
    global $con;
    $query = "SELECT * FROM `$table` WHERE `slug` = '$slug' and `status`='1' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getByNameActive($table,$name) {
    global $con;
    $query = "SELECT * FROM `$table` WHERE `name` = '$name' and `status`='1' LIMIT 1";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getProductByCategory($catID) {
    global $con;
    $query = "SELECT * FROM `products` WHERE `category_id` = '$catID' and `status`='1'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}
function getCategoryByProduct($productID) {
    global $con;
    $query = "SELECT * FROM `categories` WHERE `id` = '$productID' and `status`='1'";
    $query_run = mysqli_query($con, $query);
    return $query_run;
}

function getCartItems() {
    $user_id = $_SESSION['auth_user']['user_id'];
    global $con;
    $query = "SELECT c.id as cid, c.product_id, c.product_qty, p.id as pid, p.name as pname, p.image, p.selling_price FROM carts c, products p WHERE c.product_id = p.id AND c.user_id = $user_id ORDER BY c.id DESC";
    $query_run = mysqli_query($con, $query);
    return $query_run;

}