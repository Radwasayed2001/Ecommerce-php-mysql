<?php
include('includes/header.php');
include('../functions/myfunction.php');
if (!isset($_GET['id'])) {
    echo "<h2 class='ms-md-5'>'id' Missing From URL</h2>";
    exit();
}
$id = $_GET['id'];
$product = getByID('products', $id);
if (mysqli_num_rows($product) > 0){
    $data = mysqli_fetch_array($product);
?>
<div class="container py-4">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="fw-bolder fs-3">
                  Edit Product
                  <a href="products.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </h4>
              </div>
              <div class="card-body ">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-8">
                    <label for="">Select Category</label>
                    <select name="category_id" class="form-select mb-4 fs-6" style="cursor: pointer;">
                      <?php
                    $categories = getAll('categories');
                    if(mysqli_num_rows($categories) > 0){
                      foreach($categories as $category){
                        
                    ?>
                    <option <?= $data['category_id']==$category['id']?"selected":"" ?> value="<?=$category['id']?>"><?=$category['name']?></option>
                    <?php 
                    
                  }
                }
                else{
                  echo "no category available";
                }
                ?>
                    </select>
                    
                  </div>
                  <div class="col-md-6">
                    <label for="" >Name</label>
                    <input value="<?= $data['name'] ?>" required name="name" type="text" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Slug</label>
                    <input value="<?= $data['slug'] ?>" required name="slug" type="text" class="form-control">
                  </div>
                  <div class="col-md-12 my-4 d-flex align-items-center">
                    <label for="" class="me-5 ">Small Description</label>
                    <textarea  required name="small_description" id="" cols="90" rows="5"><?= $data['small_description'] ?></textarea>
                  </div>
                  <div class="col-md-12 my-4 d-flex align-items-center">
                    <label for="" class="me-5 ">Description</label>
                    <textarea required name="description" id="" cols="90" rows="5"><?= $data['description'] ?></textarea>
                  </div>
                  <div class="col-md-12 my-2">
                    <input type="hidden" value="<?= $data['image'] ?>" name="old_image">
                    <label for="" class="">Image</label>
                    <input type="file" name="image" name="image">
                    <label class="me-2">Current Image</label>
                    <img src="uploads/<?= $data['image'] ?>" width="50px" height="50px" alt="">
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Metatitle</label>
                    <input value="<?= $data['meta_title'] ?>" required type="text" class="form-control" name="meta_title">
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Description</label>
                    <textarea required  id="" cols="90" rows="5" name="meta_description"><?= $data['meta_description'] ?></textarea>
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Keywords</label>
                    <textarea required  id="" cols="90" rows="5" name="meta_keywords"><?= $data['meta_keywords'] ?></textarea>
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Original Price</label>
                    <input value="<?= $data['original_price'] ?>" required type="text" class="form-control" name="original_price">
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Selling Price</label>
                    <input value="<?= $data['selling_price'] ?>" required type="text" class="form-control" name="selling_price">
                  </div>
                  <div class="col-md-4 my-2">
                    <label for="" class="">Quantity</label>
                    <input value="<?= $data['qty'] ?>" required type="number" class="form-control" name="qty">
                  </div>
                  <div class="col-md-4 mt-3">
                    <label for="" class="">Status</label><br>
                    <input <?= $data['status']?"checked":"" ?> type="checkbox" name="status">
                  </div>
                  <div class="col-md-4 mt-3">
                    <label for="" class="">Trending</label><br>
                    <input <?= $data['trending']?"checked":"" ?> type="checkbox" name="trending">
                  </div>
                  <input type="hidden" name="product_id" value="<?= $id ?>">
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="submit" name="update-product-btn">Update</button>
                  </div>
                </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
<?php
}
include('includes/footer.php');