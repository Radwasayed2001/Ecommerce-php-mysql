$(document).ready(function () {
    $(document).on('click', '.increment-btn', function(e){
        e.preventDefault();
        var qty = $(this).closest('.product-data').find('.input-qty').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value < 10){
            value++;
            $(this).closest('.product-data').find('.input-qty').val(value);
        }
    });
    $(document).on('click', '.decrement-btn', function(e){
        e.preventDefault();
        var qty = $(this).closest('.product-data').find('.input-qty').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1){
            value--;
            $(this).closest('.product-data').find('.input-qty').val(value);
        }
    });
    $(document).on('click', '.addToCart_btn', function(e){
        e.preventDefault();
        var qty = $(this).closest('.product-data').find('.input-qty').val();
        var product_id = $(this).val();
        $.ajax({
            method: "POST",
            url:"functions/handleCart.php",
            data: {
                "product_id": product_id,
                "product_qty": qty,
                "scope": "add"
            },
            success: function(response) {
                console.log(response);
                if (response == 201) {
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Product Added Successfully");

                }
                else if (response == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Something Went Wrong");

                }
                else if (response == "existed"){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Already Existed");

                }
                else if (response == 401){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Login To Continue");
                }
            }

        })
    });
    $(document).on('click', '.update-btn', function(e){
        e.preventDefault();
        var qty = $(this).closest('.product-data').find('.input-qty').val();
        var product_id = $(this).closest('.product-data').find('.product_id').val();
        $.ajax({
            method: "POST",
            url:"functions/handleCart.php",
            data: {
                "product_id": product_id,
                "product_qty": qty,
                "scope": "update"
            },
            success: function(response) {
                console.log(response);
                if (response == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Something Went Wrong");

                }
                else if (response == "notFound"){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Product Not Found");

                }
                else if (response == 401){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Login To Continue");
                }
            }

        })
    });
    $(document).on('click', '.delete-btn', function(e){
        e.preventDefault();
        var product_id = $(this).closest('.product-data').find('.product_id').val();
        $.ajax({
            method: "POST",
            url:"functions/handleCart.php",
            data: {
                "product_id": product_id,
                "scope": "delete"
            },
            success: function(response) {
                if (response == 201){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Product Deleted Successfully");
                    $('#cartItems').load(location.href + " #cartItems");

                }
                else if (response == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Something Went Wrong");

                }
                else if (response == "notFound"){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Product Not Found");

                }
                else if (response == 401){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success("Login To Continue");
                }
            }

        })
    });
});