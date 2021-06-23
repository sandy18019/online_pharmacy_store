<?php
include("adminSide.php");
?>
<?php
require_once("Product.php");
$product = new product;
$product->id=$_GET['id'];
$multiArr=$product->find($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Product Details</title>
</head>

    <body>
        <div class='container'style="position:absolute;left:350px;top: 100px;">
            <h1>Product Details</h1>
            <dl>
                <dt>Name</dt>
                <dd><?php
                foreach($multiArr as $data)
{ echo $data->name; ?></dd>

    <dt>Description</dt>
    <dd><?php echo $data->description; ?></dd>

    <dt>Price</dt>
    <dd><?php echo $data->Price;
} ?></dd>
</dl>
<a href='index.php' class='btn btn-secondary'>Back to list</a>

</div>