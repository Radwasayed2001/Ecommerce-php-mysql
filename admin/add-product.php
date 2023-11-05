<?php
include('../functions/myfunction.php');
include('includes/header.php');
?>
<div class="container py-4">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="fw-bolder fs-3">Add Product</h4>
              </div>
              <div class="card-body ">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-8">
                    <label for="">Select Category</label>
                    <select name="category_id" class="form-select mb-4 fs-6" style="cursor: pointer;">
                      <option selected>Select Category</option>
                      <?php
                    $categories = getAll('categories');
                    if(mysqli_num_rows($categories) > 0){
                      foreach($categories as $category){
                        
                    ?>
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
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
                    <input required name="name" type="text" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Slug</label>
                    <input required name="slug" type="text" class="form-control">
                  </div>
                  <div class="col-md-12 my-4 d-flex align-items-center">
                    <label for="" class="me-5 ">Small Description</label>
                    <textarea required name="small_description" id="" cols="90" rows="5"></textarea>
                  </div>
                  <div class="col-md-12 my-4 d-flex align-items-center">
                    <label for="" class="me-5 ">Description</label>
                    <textarea required name="description" id="" cols="90" rows="5"></textarea>
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Image</label>
                    <input  required type="file" name="image" name="image">
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Metatitle</label>
                    <input required type="text" class="form-control" name="meta_title">
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Description</label>
                    <textarea required  id="" cols="90" rows="5" name="meta_description"></textarea>
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Keywords</label>
                    <textarea required  id="" cols="90" rows="5" name="meta_keywords"></textarea>
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Original Price</label>
                    <input required type="text" class="form-control" name="original_price">
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Selling Price</label>
                    <input required type="text" class="form-control" name="selling_price">
                  </div>
                  <div class="col-md-4 my-2">
                    <label for="" class="">Quantity</label>
                    <input required type="number" class="form-control" name="qty">
                  </div>
                  <div class="col-md-4 mt-3">
                    <label for="" class="">Status</label><br>
                    <input type="checkbox" name="status">
                  </div>
                  <div class="col-md-4 mt-3">
                    <label for="" class="">Trending</label><br>
                    <input type="checkbox" name="trending">
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="submit" name="add-product-btn">Add</button>
                  </div>
                </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
<?php
include('includes/footer.php');