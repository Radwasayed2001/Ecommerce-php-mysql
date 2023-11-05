<?php
$array = explode("/", $_SERVER['PHP_SELF']);
$result =  end($array);
?>
<?php
session_start();
include('includes/header.php');
include('functions/userFunction.php');
if (!isset($_GET['category'])){
    redirect('categories.php', "missing slug from url");
}
$slug =  $_GET['category'];
$category = getBySlugActive('categories', $slug);
$categories = mysqli_fetch_array($category);
if (mysqli_num_rows($category) <= 0){
    redirect('categories.php', "Not Found Category");
}
?>
<div class="py-3 bg-info">
    <div class="ms-3">
        <h6 class="text-white fw-bold fs-5"><a class="text-white" href="index.php"> Home </a>/<a class="text-white" href="categories.php"> Categories </a>/ <span style="color: #aff;"><?= $categories['name']?></span></h6>
        
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= $categories['name']?></h1>
                <hr>
                <div class="row">
                <?php 
                $products = getProductByCategory($categories['id']);
                if (mysqli_num_rows($products) > 0):
                    foreach($products as $item):
                ?>
                <div class="col-md-3 mb-2">
                    <a href="product-view.php?name=<?= $item['name'] ?>&from=<?= $result ?>">
                    <div class="card shadow" style="min-height: 25rem;">
                        <div class="card-body" style="display: flex; flex-direction:column; justify-content:space-between">
                            <img src="admin/uploads/<?= $item['image'] ?>" alt="category image" class="w-100">
                            <h4 class="text-center"><?= $item['name'] ?></h4>
                        </div>
                    </div>
                    </a>
                </div>
                <?php
                endforeach;
                else :
                    echo "<h4 class='text-danger'>NO Products Available</h4>";
            endif;
                    ?>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
