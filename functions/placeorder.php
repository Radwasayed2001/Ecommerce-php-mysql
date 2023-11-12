<?php
session_start();
include('../admin/config/dbcon.php');
if (isset($_SESSION['auth'])) {
    if (isset($_POST['placeOrderBtn'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $pin_code = mysqli_real_escape_string($con, $_POST['pin_code']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);
        if (empty($name) || empty($email) || empty($phone) || empty($pin_code) || empty($address)) {
            $_SESSION['message'] = "ALL FIELDS ARE REQUIRED";
            header("location: ../checkout.php");
            exit();
        }
        $tracking_no = "Bergascoder".rand(1111,9999).substr($phone,2);
        $total_price = mysqli_real_escape_string($con, $_POST['total_price']);

        $user_id = $_SESSION['auth_user']['user_id'];
        $query = "INSERT INTO `orders`(`name`, `tracking_no`, `user_id`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`) VALUES ('$name','$tracking_no','$user_id','$email','$phone','$address','$pin_code','$total_price','COD','$payment_id')";
        $query_run = mysqli_query($con, $query);
        if (mysqli_affected_rows($con)) {
            $order_id = mysqli_insert_id($con);
            $orderProducts_query = "SELECT p.id , c.product_qty, p.selling_price FROM carts c, products p WHERE c.user_id = $user_id and c.product_id = p.id";
            $row = mysqli_query($con, $orderProducts_query);
        
            //  = mysqli_fetch_array($orderProducts_query_run);
            foreach($row as $item){
                
            $insert_query = "INSERT INTO `order_items`(`product_id`, `order_id`, `qty`, `price`) VALUES ('{$item['id']}','$order_id','{$item['product_qty']}','{$item['selling_price']}')";
            $insert_query_run = mysqli_query($con , $insert_query);

            }
            $deleteCartItems_query = "DELETE FROM `carts` WHERE `user_id` = '$user_id'";
            $deleteCartItems_query_run = mysqli_query($con, $deleteCartItems_query);
            $_SESSION['message'] = "Order Placed Successfully";
            header("location: ../my-orders.php");
            exit();
        }
        else {
            $_SESSION['message'] = "Somethingn Went Wrong!";
            header("location: ../checkout.php");
            exit();
        }
    }
}
else {
    $_SESSION['message'] = "LOGIN TO CONTINUE";
    header("location: ../index.php");
    exit();
}