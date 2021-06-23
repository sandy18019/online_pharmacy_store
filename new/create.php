<?php
include("adminSide.php");
?>
<?php
require_once("Product.php");
require_once("ProductController.php");
$product = new Product;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>




    </style>
    <title>Add Product</title>
</head>

    <body>
        <div class='container' style="position:absolute;left:350px;top: 100px;">
            <h1>Add Product</h1>
            <form action='' method='post'>
                <div class='form-group'>
                    <label>Name: <input type='text' name='name' class='form-control' /></label>
                </div>
                <div class='form-group'>
                <label>Description: <input type='text' name='Description' class='form-control' /></label>
                </div>
                <div class='form-group'>
                    <label>Price: <input type='text' name='price' class='form-control' /></label>
                </div>
                    <input type='submit' name='action' value='Create' class='btn btn-primary' />
                    <a href='/monaa/index.php' class='btn btn-secondary'>Cancel</a>
</form>


    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->

</html>

<?php
if(isset($_POST['action']))
{
    $controller = new ProductController;
    $controller->create();  
   
}
?>