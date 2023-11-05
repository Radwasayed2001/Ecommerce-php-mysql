<?php
session_start();
include('includes/header.php');
include('functions/userFunction.php');
?>

<div class="py-3 bg-info">
    <div class="ms-3">
        <h6 class="text-white fw-bold fs-5"><a class="text-white" href="index.php"> Home </a>/ <span style="color: #aff;">Categories</span></h6>
    </div>
</div>
<?php if (isset($_SESSION['message'])):?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php unset($_SESSION['message']);
                endif;?>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Collections</h1>
                <hr>
                <div class="row">
                <?php 
                $categories = getAllActive('categories');
                if (mysqli_num_rows($categories) > 0):
                    foreach($categories as $item):
                ?>
                <div class="col-md-3 mb-2">
                    <a href="product.php?category=<?= $item['slug'] ?>">
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
                    echo "<h4 class='text-danger'>NO Category Available</h4>";
            endif;
                    ?>
                    </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
