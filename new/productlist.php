<?php
    session_start();   
    REQUIRE_ONCE "classes/user.php";
    $Users = new Users;
    $categoryyy = 1;

    if (isset($_GET['category'])) {
        $categoryyy = $_GET['category'];
        $result = $Users->productType($categoryyy);
    } else {
        $result = $Users->productType($categoryyy);
    }
   
    
?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Product Listing</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <style>body {
    background-color: #f2eae3
}

.sidebar {

  width: 180px;
  background-color: #f1f1f1;
  position: absolute;
  height: 80%;
  overflow: auto;
      background-color: #4EADAF;
    color: #fff;
    z-index:1;
    top: 0;note
    left:0;
    overflow-x:hidden;
    padding-top:20px;
    border-radius: 3px
}

.sidebar a {
  display: block;
  color: white;
  padding: 12px;
  font-size:20px;
  text-decoration: none;
}
 
.sidebar a.active {

  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #69c6a4;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: static;
    position: absolute;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}



.product {
    padding: 10px;
    background-color: #fff;
    border-radius: 5px;
    position: relative
}

.about span {
    color: #4EADAF;
    font-size: 16px
}

.cart-button button {
    font-size: 12px;
    color: #fff;
    background-color: #4EADAF;
    height: 38px
}

.cart-button button:focus,
button:active {
    font-size: 12px;
    color: #fff;
    background-color: #4EADAF;
    box-shadow: none
}

.product_fav i {
    line-height: 40px;
    color: #4EADAF;
    font-size: 15px
}

.product_fav {
    display: inline-block;
    width: 36px;
    height: 39px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.product_fav:hover {
    background: #4EADAF
}

.product_fav:hover i {
    color: #fff
}

.about {
    margin-top: 12px
}

.off {
    position: absolute;
    left: 65%;
    top: 6%;
    width: 80px;
    text-align: center;
    height: 30px;
    line-height: 8px;
    border-radius: 5px;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff
}</style>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <!-- header  -->
                            <?php
 include('header.php');
 ?>
                            <div class="container-fluid mt-5 mb-5">
    <div class="row g-2">
        <div class="col-md-3">
            <div class="t-products p-2">
                <div class="sidebar">
                                <h6 class="text-uppercase" style=text-align:center;font-size:20px;><b>Categories</b></h6>

                    <div class="d-flex justify-content-between mt-2">   <a href="productlist.php?category=1">Hair Care</a>
  </div>
                    <div class="d-flex justify-content-between mt-2">  <a href="productlist.php?category=2">Skin Care</a> </div>
                    <div class="d-flex justify-content-between mt-2">  <a href="productlist.php?category=3">Drugs</a> </div>
                    <div class="d-flex justify-content-between mt-2">  <a href="productlist.php?category=4">Vitamin & Supplements</a> </div>
                    <div class="d-flex justify-content-between mt-2">  <a href="productlist.php?category=5">Covid19</a> </div>
                    <div class="d-flex justify-content-between mt-2">  <a href="productlist.php?category=7">Baby Products</a>
 </div>
                    <div class="d-flex justify-content-between mt-2">   <a href="productlist.php?category=6">Beauty</a>
 </div>
                    <div class="d-flex justify-content-between mt-2">  <a href="productlist.php?category=8">Oral Care</a>
 </div>
                </div>
            </div>

        </div>  
        <div class="col-md-9">
            <div class="row g-2">
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
      
                <div class="col-md-4">
                    <div class="product py-4">
                        <div class="text-center"> <img src="<?php echo $row['image'];?>"></div>
                        <div class="about text-center">
                            <h5><?php echo $row['name'];?></h5> <span>EGP <?php echo $row['Price'];?></span>
                        </div>
                        <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <a href="cart.php?pid=<?php echo $row['id']; ?>"> <button class="btn btn-primary text-uppercase">Add to cart</button> </a>
                            <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
             
            </div>
        </div>
    </div>
</div>
                            </body>
                        </html>


                        <style>
    body{
    background-color:#f2eae3 !important;
    }
    </style>
<?php
include 'footers.php';
?>