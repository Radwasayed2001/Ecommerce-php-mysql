<?php
session_start();
include('includes/header.php');
include('functions/userFunction.php');
if (isset($_GET['name'])){
    $product_name =  $_GET['name'];
    $product = getByNameActive('products', $product_name);
    $products = mysqli_fetch_array($product);
}
?>
<div class="py-3 bg-info">
    <div class="ms-3">
        <h6 class="text-white fw-bold fs-5">
            <a class="text-white" href="index.php"> Home </a>
            <?php if (isset($_GET['from']) && isset($_GET['name']) && $_GET['from'] == 'product.php'):
            $category = getCategoryByProduct($products['category_id']);
            $categories = mysqli_fetch_array($category);
            ?>
            / <a class="text-white" href="categories.php">Categories</a>
            / <a class="text-white" href="product.php?category=<?= $categories['slug'] ?>"><?=$categories['name']?></a>
            <?php else: ?>
            / <a class="text-white" href="allProducts.php">All Products</a>
            <?php endif; ?>
             / <span style="color: #aff;"><?= isset($_GET['name'])?$_GET['name']:"" ?></span>
            </h6>
        
    </div>
</div>
<?php
if (!isset($_GET['name'])){
    echo "<h4 class='text-danger mt-3 ms-3'>Missing 'name' From url</h4>";
    exit();
}
$product_name =  $_GET['name'];
$product = getByNameActive('products', $product_name);
$products = mysqli_fetch_array($product);
if (mysqli_num_rows($product) <= 0){
    echo "<h4 class='text-danger mt-3 ms-3'>Product Not Found</h4>";
    exit();
}
?>
<div class="py-5 bg-light">
    <div class="container product-data">
        <div class="row ">
                <div class="col-md-4 mb-2">
                    <div class="card shadow" style="min-height: 25rem;">
                        <div class="card-body" style="display: flex; flex-direction:column; justify-content:space-between">
                            <img src="admin/uploads/<?= $products['image'] ?>" alt="category image" class="w-100">
                        </div>
                    </div>
            </div>
            <div class="col-md-7 mb-2">
                <h2><?= $products['name'] ?></h2>
                <hr>
                <p><?= $products['small_description'] ?></p>
                <div class="d-flex justify-content-between fs-5 w-50">
                <div class="selling-price">
                    RS <span class="fw-bold text-success"><?= $products['selling_price'] ?></span>
                </div>
                <div class="old-price">
                    RS <span class="text-danger" style="text-decoration: line-through;"><?= $products['original_price'] ?></span>
                </div>
                </div>
                <div class="col-md-4 col-sm-6 my-3">
                    <div class="input-group mb-3 w-75">
                        <button class="input-group-text increment-btn">+</button>
                        <input type="text" class="form-control bg-white text-center input-qty" disabled value="1">
                        <button class="input-group-text decrement-btn">-</button>
                    </div>
                </div>
                <div class="btns mt-3 d-md-flex justify-content-between col-md-12">
                <button class="btn btn-primary fs-5 fw-bold addToCart_btn" value="<?= $products['id'] ?>"><i class="fa-solid fa-cart-shopping me-2"></i>Add To Cart</button>
                <div class="my-1"></div>
                <button class="btn btn-danger fs-5 fw-bold"><i class="fa-solid fa-heart me-2"></i>Add To Wishlist</button>
                </div>
                <hr>
                <p><?= $products['description'] ?></p>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
