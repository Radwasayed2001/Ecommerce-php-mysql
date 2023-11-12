<?php
session_start();
include('includes/header.php');
include('functions/userFunction.php');
include('authenticate.php');
$total_price =0;
?>
<div class="py-3 bg-info mt-0">
    <div class="ms-3">
        <h6 class="text-white fw-bold fs-5"><a class="text-white" href="index.php"> Home </a>/ <span style="color: #aff;">Checkout</span></h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card shadow">
            <form action="functions/placeorder.php" method="POST">
        <div class="row px-2">
            <div class="col-md-7">
                <div class="card-body bg-white">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h3>Basic Details</h3>
                        </div>
                    
                    <hr>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold fs-5" for="">Name</label>
                        <input name="name"  type="text" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold fs-5" for="">Email</label>
                        <input name="email"  type="email" class="form-control" placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold fs-5" for="">Phone</label>
                        <input name="phone"  type="phone" class="form-control" placeholder="Enter Your Phone">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold fs-5" for="">Pin Code</label>
                        <input name="pin_code"  type="text" class="form-control" placeholder="Enter The PinCode">
                    </div>
                    <div class="col-md-12">
                    <label class="fw-bold fs-5" for="">Address</label>
                        <textarea class="form-control" name="address" id="" rows="7"></textarea>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-5">
                
                <div class="card-body bg-white">
                    <div class="row align-items-center">
                    <div class="col-md-12">
                        <h3>Order Details</h3>
                    </div>
                
                <hr>
                <?php $items = getCartItems();
                foreach($items as $citem)
                {
                    ?>
                    <div class="card my-3 product-data p-2">
                    <div class="row align-items-center">
                    <div class="col-md-3">
                        <img src="admin/uploads/<?= $citem['image'] ?>" alt="image" class="w-100">
                    </div>
                    <div class="col-md-4">
                        <p><?= $citem['pname'] ?></p>
                    </div>
                    <div class="col-md-3">
                        <p><?= $citem['selling_price'] ?></p>
                    </div>
                    <div class="col-md-2">
                        <p>X<?= $citem['product_qty'] ?></p>
                    </div>
                    
                </div>
                    </div>
                
                    <?php
                $total_price += $citem['selling_price']*$citem['product_qty'];

                }
                ?>
                <hr>
            <h5>Total Price: <span class="float-end fw-bold"><?= $total_price ?></span></h5>
            <div class="">
                <button type="submit" name="placeOrderBtn" class="btn btn-primary w-100">Confirm and place order | COD</button>
            </div>
            </div>
            <input type="hidden" name="total_price" value="<?= $total_price ?>">
            <input type="hidden" name="payment_id" value="">
            </div>
        </div>
        </div>
        </form>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');
