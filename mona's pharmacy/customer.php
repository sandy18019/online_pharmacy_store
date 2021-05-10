<?php
REQUIRE_ONCE "user.php";
$Users = new Users;

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<title> admin</title>
</head>

<body>
  <style>
    
.topber__profile {
  height: 12.5vh;
  float: right;
  padding-right: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 2rem;
}

.topber__profile--icon {
  color: #4EADAF;
  font-size: 20px;
}

.topber__profile button {
  color: #377A98;
  line-height: 10px;
  font-weight: bold;
}

.topber__profile button:hover {
  color: crimson;
}

.topber__profile .dropdown-menu {
  margin-top: 10px;
  -webkit-box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
          box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
}

.topber__profile .dropdown-menu a:focus,
.topber__profile .dropdown-menu a:active {
  color: crimson;
}

.topber__profile .dropdown-menu a:hover {
  color: crimson;
}

/*-------------------------------- Sideber -------------------------*/
.sideber {
  position: fixed;
  top: 0;
  overflow-y: auto;
  left: 0;
  bottom: 0;
  width: 300px;
  height: 100vh;
  padding: 40px 20px 20px 20px;
  background-color: #69C6AF;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #69C6AF), to(#377A98));
  background-image: linear-gradient(180deg, #69C6AF 10%, #377A98 100%);
  background-size: cover;
  -webkit-transition: left 0.5s ease;
  transition: left 0.5s ease;
  z-index: 999;
}

.sideber__ber {
  list-style: none;
}

.sideber__panel {
  font-size: 20px;
  color: #fff;
  line-height: 1.2rem;
  padding-bottom: 30px;
}

.sideber__panel i {
  color: #fff;
}

.sideber__item {
  padding: 10px;
}

.sideber__item a {
  color: rgba(255, 255, 255, 0.55);
  font-size: 16px;
  letter-spacing: 1px;
  font-weight: 500;
}

.sideber__item a i {
  color: rgba(255, 255, 255, 0.55);
  padding: 0 10px;
}

.sideber__item:hover a,
.sideber__item.active a,
.sideber__item.active i,
.sideber__item:hover i {
  color: #fff;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}

.sideber__item--modify {
  padding: 40px 10px 10px 10px;
}

.sideber footer {
  position: absolute;
  bottom: 0;
  font-size: 16px;
  color: #fff;
}

.sideber footer span {
  font-size: 20px;
}

/*-------------------------------- Sideber -------------------------*/
  </style>

   <!--------------------------------- Secondary Navber -------------------------------->
   <section class="topber">
    <div class="topber__title">
        <span class="topber__title--text">


        </span>
    </div>

    <div class="topber__profile">
      
            <img src="assets/img/<?php echo "$avatar"; ?>" height="25" width="25" class="rounded-circle" alt="profile">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="Admin1.php">Dashboard</a>
                    <a class="dropdown-item" href="Admin1.php?admin=userProfile">Profile</a>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>
            </div>
    </div>
</section>

<section id="sideber" class="sideber">
    <ul class="sideber__ber">
        <h3 class="sideber__panel"><i id="left" class="fas fa-laugh-wink"></i> Mona's Pharmacy</h3>
        <li id="left" class="sideber__item sideber__item--modify<?php if ( 'addManager' == $id ) {
                                                                        echo " active";
                                                                    }?>">
            <a href="home.html"><i id="left" class="fas fa-tachometer-alt"></i>Home</a>
                                                                </li>
            <li id="left" class="sideber__item sideber__item--modify<?php if ( 'addManager' == $id ) {
                                                                        echo " active";
                                                                    }?>">
                <a href="cart.html"><i id="left" class="fas fa-address-card"></i>Cart</i></a>
            </li>
    <footer class="text-center"><span>Pharmacy</span><br>©2020 Pharmacy All right reserved.</footer>
</section>
<section class="main">
  <div class="container" style="top:550px">

  </div>

  </div>

</section>

<!--------------------------------- #Main section -------------------------------->

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "sidetab") {
    x.className += " responsive";
  } else {
    x.className = "sidetab";
  }
}
</script>
<!-- Optional JavaScript -->
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="./assets/js/app.js"></script>

</body>
</html>
<?php

?>