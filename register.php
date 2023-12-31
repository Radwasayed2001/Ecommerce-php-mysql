<?php
session_start();
include('includes/header.php');
if (isset($_SESSION['auth'])){
    $_SESSION['message'] = "you are already Logged in";
    header('location:index.php');
    exit();
}
?>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if (isset($_SESSION['message'])):?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php unset($_SESSION['message']);
                endif;?>
                <div class="card">
                    <div class="card-header text-white bg-dark">
                        <h4>Registeration Form</h4>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="functions/authcode.php">
                        <div class="mb-3">
                            <label for="exampleInputname" class="form-label">Name</label>
                            <input name="username" type="text" class="form-control" id="exampleInputname" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputphone" class="form-label">Phone</label>
                            <input name="phone" type="number" class="form-control" id="exampleInputphone" placeholder="Enter Phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCPassword1" class="form-label">Confirm Password</label>
                            <input name="cpassword" type="password" class="form-control" id="exampleInputCPassword1" required>
                        </div>
                        <button name="register-btn" type="submit" class="btn btn-dark">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');