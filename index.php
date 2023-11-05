<?php
session_start();
include('includes/header.php');
?>
<div class="py-3 bg-info">
    <div class="ms-3">
        <h6 class="text-white fw-bold fs-5"><span style="color: #aff;">Home /</span></h6>
        
    </div>
</div>
    <?php
    if (isset($_SESSION['message'])):?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php unset($_SESSION['message']);
    endif;
include('includes/footer.php');

