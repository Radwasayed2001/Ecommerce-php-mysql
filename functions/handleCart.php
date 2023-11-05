<?php
if(session_status() === PHP_SESSION_NONE) session_start();
include('../admin/config/dbcon.php');

if (isset($_SESSION['auth'])) {
    $scope = $_POST['scope'];
    if (isset($_POST['scope'])){
        switch($scope) {
        case "add":
            $product_id = $_POST['product_id'];
            $product_qty = $_POST['product_qty'];
            $user_id = $_SESSION['auth_user']['user_id'];
            $exist_query = "SELECT * FROM `carts` WHERE `user_id`='$user_id' AND `product_id` = '$product_id'";
            $exist_query_run = mysqli_query($con, $exist_query);
            if (mysqli_num_rows($exist_query_run) > 0){
                echo "existed";
            }
            else{
                $insert_query = "INSERT INTO `carts`(`user_id`, `product_id`, `product_qty`) VALUES ('$user_id','$product_id','$product_qty')";
                $insert_query_run = mysqli_query($con, $insert_query);
                if($insert_query_run) {
                    echo 201;
                }
                else {
                    echo 500;
                }
            }
            break;
        case "update":
            $product_id = $_POST['product_id'];
            $product_qty = $_POST['product_qty'];
            $user_id = $_SESSION['auth_user']['user_id'];
            $exist_query = "SELECT * FROM `carts` WHERE `user_id`='$user_id' AND `product_id` = '$product_id'";
            $exist_query_run = mysqli_query($con, $exist_query);
            if (mysqli_num_rows($exist_query_run) > 0){
                $update_query = "UPDATE `carts` SET `product_qty`='$product_qty' WHERE `product_id` = '$product_id' AND `user_id` = '$user_id'";
                $update_query_run = mysqli_query($con, $update_query);
                if($update_query_run) {
                    echo 201;
                }
                else {
                    echo 500;
                }
            }
            else{
                echo "notFound";
            }
            break;
        case "delete":
            $product_id = $_POST['product_id'];
            $user_id = $_SESSION['auth_user']['user_id'];
            $exist_query = "SELECT * FROM `carts` WHERE `user_id`='$user_id' AND `product_id` = '$product_id'";
            $exist_query_run = mysqli_query($con, $exist_query);
            if (mysqli_num_rows($exist_query_run) > 0){
                $delete_query = "DELETE FROM `carts` WHERE `user_id`='$user_id' AND `product_id` = '$product_id'";
                $delete_query_run = mysqli_query($con, $delete_query);
                if($delete_query_run) {
                    echo 201;
                }
                else {
                    echo 500;
                }
            }
            else{
                echo "notFound";
            }
            break;
        default:
            echo 500;
     }
    }
    
} else{
    echo 401;
}
?>