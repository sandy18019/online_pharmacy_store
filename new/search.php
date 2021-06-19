<?php
// include('productlist.php');
REQUIRE_ONCE "classes/user.php";
?>
<?php

if(isset($_GET['name'])) {

    $name = $_GET['name'];

    $squl= "SELECT * FROM product WHERE name = '$name'";
    $connection =  new connection;
    $conn  = $connection->Connect();
    $result = $conn->query($squl);

}
  
//   $data=mysqli_query($conn, $squl);
  

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Product Sans Font -->
  <link rel="stylesheet" href="layout/css/productsans.css">
  <!-- Main CSS File -->
  <link rel="stylesheet" href="layout/css/master.css">
  <!-- Favicon  -->
  <link href="layout/svg/logo-mark.svg" rel="shortcut icon" type="image/png">
  <!-- Link To Icons File -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <title> Search</title>
</head>

<style>

    
body {
    background-color: #f2eae3;
}

.name {
    font-size: 16px;
    color: #377A98 !important;
    font-weight: 500
}

.navbar-toggler {
    font-size: 15px
}

.nav-link {
    font-size: 14px;
    color: #000 !important;
    font-weight: bold;
    margin-left: 40px
}


.form-control {
    height: 32px;
    width: 100%;
    border-radius: 20px;
    color: #c7c6cb;
    font-size: 13px;
    border: none
}

.searchitem {
    position: relative
}
a{
    text-decoration:none;
    color:black;
}
.searchitem i {
    position: absolute;
    right: 18px;
    top: 10px;
    font-size: 13px
}
</style>

<body id="review">
  <!-- Header START -->
 <?php
 include('header.php');
 ?>
  <!-- Header END -->

  <!-- Top Banner START -->
  <div class="top-banner">
    <div class="overlay"></div>
    <div class="content">
      <h3 class="text-center">Result Search</h3>
    </div>
  </div>
  <!-- Top Banner END -->

  <!-- Search Body START -->
  <div class="search-body">
    <!-- // TODO: Search Filters -->
    <div class="heading-line">
      <h6 style="color:#777;font-weight:normal;" class="text-center"><?php echo $result->num_rows; ?> results available</h6>
    </div>
    <div class="flex-container j-center wrap">

    <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              

    ?>
        <a href="cart.php?pid=<?php echo $row['id'] ?>">
          <div class="item">
            <div class="image">
              <img src="uploads/<?php echo $row['id'] ?>">
            </div>

            <div class="content">
              <div class="rating" >
              </div>
              <h1><?php echo $row['name']; ?></h1>
              
            </div>
          </div>
        </a>
      <?php
      }
    } ?>
      <div class="item extra"></div>
      <div class="item extra"></div>
      <div class="item extra"></div>
      <div class="item extra"></div>
    </div>
  </div>
  <!-- Search Body END -->

  <!-- Footer START -->
  <!-- Footer END -->
</body>

</html>