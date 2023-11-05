<?php
$array = explode("/", $_SERVER['PHP_SELF']);
$result =  end($array);
?>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href="#" target="_blank">
      <i class="fa-solid fa-screwdriver-wrench fw-bold text-dark fs-5"></i>
        <span class="ms-1 fw-bolder fs-6 text-dark">Admin dashboard</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $result=="index.php"?"active":"" ?> d-flex align-items-end" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-house  text-dark fw-bold fs-5"></i>
            </div>
            <span class="nav-link-text ms-1 fw-bold text-secondary fs-6">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $result=="add-category.php"?"active":"" ?> d-flex align-items-end" href="add-category.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-plus text-dark fw-bold fs-5"></i>
            </div>
            <span class="nav-link-text ms-1 fw-bold text-secondary fs-6">Add Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $result=="categories.php"?"active":"" ?> d-flex align-items-end" href="categories.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-rectangle-list  text-dark fw-bold fs-5"></i>
            </div>
            <span class="nav-link-text ms-1 fw-bold text-secondary fs-6">All Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $result=="add-product.php"?"active":"" ?> d-flex align-items-end" href="add-product.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-square-plus  text-dark fw-bold fs-5"></i>
            </div>
            <span class="nav-link-text ms-1 fw-bold text-secondary fs-6">Add Product</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $result=="products.php"?"active":"" ?> d-flex align-items-end" href="products.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-border-all  text-dark fw-bold fs-5"></i>
            </div>
            <span class="nav-link-text ms-1 fw-bold text-secondary fs-6">All Products</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <a class="btn btn-primary btn-sm mb-0 w-100 fw-bolder fs-6" href="logout.php" type="button">Logout</a>
    </div>
  </aside>