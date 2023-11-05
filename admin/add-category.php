<?php

include('includes/header.php');
?>
<div class="container py-4">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="fw-bolder fs-3">Add Category</h4>
              </div>
              <div class="card-body ">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" >Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                  <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
                  </div>
                  <div class="col-md-12 my-4 d-flex align-items-center">
                    <label for="" class="me-5 ">Description</label>
                    <textarea id="" cols="90" rows="5" name="description"></textarea>
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Image</label>
                    <input type="file" name="image" name="image">
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Metatitle</label>
                    <input type="text" class="form-control" name="meta_title">
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Description</label>
                    <textarea  id="" cols="90" rows="5" name="meta_description"></textarea>
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Keywords</label>
                    <textarea  id="" cols="90" rows="5" name="meta_keywords"></textarea>
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Status</label>
                    <input type="checkbox" name="status">
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Popular</label>
                    <input type="checkbox" name="popular">
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="submit" name="add-category-btn">Save</button>
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