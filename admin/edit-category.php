<?php
include('includes/header.php');
include('../functions/myfunction.php');
if((isset($_GET['id']))){
    $id = $_GET['id'];
    $category = getByID('categories',$id);
    if (mysqli_num_rows($category) > 0){
        $data = mysqli_fetch_array($category);
?>
<div class="container py-4">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="fw-bolder fs-3">
                  Edit Category
                  <a href="categories.php" class="btn btn-primary float-end">Back</a>
                    </h4>
                </h4>
              </div>
              <div class="card-body ">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <label for="" >Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $data['name']?>">
                    <input type="hidden" value="<?= $data['id']?>" name="category-id">
                  </div>
                  <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="<?= $data['slug']?>">
                  </div>
                  <div class="col-md-12 my-4 d-flex align-items-center">
                    <label for="" class="me-5 ">Description</label>
                    <textarea id="" cols="90" rows="5" name="description"> value="<?= $data['description']?>"</textarea>
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Image</label>
                    <input type="file" name="image" name="image">
                    <label for="">current image</label>
                    <img src="uploads/<?= $data['image'] ?>" width="50px" height="50px">
                    <input type="hidden" name="old_image" value="<?=$data['image'] ?>">
                  </div>
                  <div class="col-md-12 my-2">
                    <label for="" class="">Metatitle</label>
                    <input type="text" class="form-control" name="meta_title" value="<?= $data['meta_title']?>">
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Description</label>
                    <textarea  id="" cols="90" rows="5" name="meta_description"> value="<?= $data['meta_description']?>"</textarea>
                  </div>
                  <div class="col-md-12 my-2 d-flex align-items-center">
                    <label for="" class="me-5 ">Meta Keywords</label>
                    <textarea  id="" cols="90" rows="5" name="meta_keywords"> value="<?= $data['meta_keywords']?>"</textarea>
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Status</label>
                    <input type="checkbox" name="status" <?= $data['status']?"checked":"" ?>>
                  </div>
                  <div class="col-md-6 my-2">
                    <label for="" class="">Popular</label>
                    <input type="checkbox" name="popular" <?= $data['popular']?"checked":"" ?>>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-secondary" type="submit" name="update-category-btn">Update</button>
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
else{
    echo "<h2 class='ms-md-5'>Category Not Found</h2>";
}
}
else {
    echo "<h2 class='ms-md-5'>'id' Missing From URL</h2>";
}
include('includes/footer.php');