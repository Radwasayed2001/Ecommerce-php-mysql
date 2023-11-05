<?php
session_start();
include('includes/header.php');
include('functions/userFunction.php');
include('authenticate.php');
?>

<div class="py-3 bg-info">
    <div class="ms-3">
        <h6 class="text-white fw-bold fs-5"><a class="text-white" href="index.php"> Home </a>/ <span style="color: #aff;">Cart</span></h6>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="card shadow">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card-header">
                    <div class="row align-items-center">
                    <div class="col-md-5 ">
                        <h5>Product</h5>
                    </div>
                    <div class="col-md-2">
                    <h5>Price</h5>
                        </div>
                    <div class="col-md-3">
                    <h5>Quantity</h5>
                        </div>
                        <div class="col-md-2">
                            <h5>Remove</h5>
                        </div>
                </div>
                </div>
                <div class="card-body" id="cartItems">
                <?php $items = getCartItems();
                foreach($items as $citem)
                {
                    ?>
                    <div class="card my-3 product-data p-2">
                    <div class="row align-items-center">
                    <div class="col-md-2">
                        <img src="admin/uploads/<?= $citem['image'] ?>" alt="image" class="w-50">
                    </div>
                    <input type="hidden" value="<?= $citem['product_id'] ?>" class="product_id">
                    <div class="col-md-3">
                        <h5><?= $citem['pname'] ?></h5>
                    </div>
                    <div class="col-md-2">
                    <h5>$<?= $citem['selling_price'] ?></h5>
                    </div>
                    <div class="col-md-3">
                    <div class="input-group mb-3 w-75">
                        <button class="input-group-text increment-btn update-btn">+</button>
                        <input type="text" class="form-control bg-white text-center input-qty" disabled value="<?= $citem['product_qty'] ?>">
                        <button class="input-group-text decrement-btn update-btn">-</button>
                    </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                </div>
                    </div>
                
                    <?php
                }
                ?>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');
