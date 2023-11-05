<nav class="navbar navbar-expand-lg text-bg-dark p-0">
  <div class="container">
    <a class="navbar-brand fs-1 fw-bold text-white" href="#">PMS</a>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fs-5 active text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <?php if (!isset($_SESSION['auth'])):?>
        <li class="nav-item">
          <a class="nav-link fs-5 text-white" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 text-white" href="login.php">Login</a>
        </li>
        <?php else:?>
          <li class="nav-item">
          <a class="nav-link fs-5 text-white" href="categories.php">Categories</a>
        </li>
          <li class="nav-item">
          <a class="nav-link fs-5 text-white" href="allProducts.php">All Products</a>
        </li>
        </li>
          <li class="nav-item">
          <a class="nav-link fs-5 text-white" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fs-5 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['name']; ?>
          </a>
          <ul class="dropdown-menu bg-dark ">
            <li><a class="dropdown-item text-danger fw-bold" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
      <?php endif;?>
    </div>
  </div>
</nav>