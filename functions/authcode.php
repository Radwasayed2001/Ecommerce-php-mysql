<?php
include('../admin/config/dbcon.php');
include('myfunction.php');
session_start();
if (isset($_POST['register-btn'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $check_email_query = "SELECT `email` FROM `users` WHERE email = '$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);
    if (mysqli_num_rows($check_email_query_run) > 0) {
        redirect('../register.php',"Email already registered");
    }
    else {
    if($password == $cpassword) {
        $insert_query = "INSERT INTO `users`(`name`, `phone`, `email`, `password`) VALUES ('$username','$phone','$email','$password')";
        $insert_query_run = mysqli_query($con, $insert_query);
        if($insert_query_run) {
            redirect('../login.php',"Registered Successfully");
        } else {
            redirect('../register.php',"Something went wrong");
        }
    }
    else {
        redirect('../register.php',"passwords don't match");
    }
}
}
else if (isset($_POST['login-btn'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $login_query = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'";
    $login_query_run = mysqli_query($con, $login_query);
    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;
        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];
        $_SESSION['role_as'] = $role_as;
        $_SESSION['auth_user'] = [
            'user_id' => $userdata['id'],
            'name' => $username,
            'email' => $useremail
        ];
        if ($role_as == 1){
            redirect('../admin',"Logged In Successfully");
        }else{
            redirect('../index.php',"Logged In Successfully");
    }
    }
    else {
        redirect('../login.php',"Invalid Credentials");
    }
}