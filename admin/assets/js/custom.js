$(document).ready(function(){
    $(document).on('click', '.delete-product-btn', function(e){
        e.preventDefault();
        var id = $(this).val();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this product!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if(willDelete) {
            $.ajax({
                method: "POST",
                url:"code.php",
                data: {
                    'product_id':id,
                    'delete-product-btn':true
                },
                success: function(response){
                    if (response == 200) {
                        swal("Success!", "product deleted successfully","success");
                        $('#products-table').load(location.href + " #products-table");
                    } else if (response == 500) {
                        swal("Error!", "Something went wrong", "error");

                    }
                }
            })}
          })
    })
    
        $(document).on('click', '.delete-category-btn', function(e){
        e.preventDefault();
        var id = $(this).val();
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this category!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if(willDelete) {
            $.ajax({
                method: "POST",
                url:"code.php",
                data: {
                    'category_id':id,
                    'delete-category-btn':true
                },
                success: function(response){
                    if (response == 200) {
                        swal("Success!", "Category deleted successfully","success");
                        $('#categories-table').load(location.href + " #categories-table");
                    } else if (response == 500) {
                        swal("Error!", "Something went wrong", "error");

                    }
                }
            })}
          })
    })
})