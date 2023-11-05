<?php
include('includes/header.php');
include('../functions/myfunction.php');
?>
<div class="container py-4">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body" id="categories-table">
                <div class="table-responsive">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $category = getAll('categories');
                                if (mysqli_num_rows($category) > 0) :
                                    foreach ($category as $item):
                                ?>
                                <tr>
                                <td><?= $item['id']?></td>
                                <td><?= $item['name']?></td>
                                <td>
                                    <img src="uploads/<?= $item['image'] ?>" width="50px" height="50px" alt="">
                                </td>
                                <td><?= $item['status']?"Visible":"Hidden" ?></d>
                                <td><a href="edit-category.php?id=<?= $item['id'] ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square fs-6"></i></a></td>
                                <td>
                                <button type="button" class="btn btn-sm btn-danger delete-category-btn" value="<?= $item['id'] ?>">
                                    <i class="fa-solid fa-trash-can fs-6"></i>
                                    </td>
                            </tr>
                            <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php
include('includes/footer.php');