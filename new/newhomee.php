<?php session_start(); ?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Home</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <style>* {
    margin: 0;
    padding: 0
}

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
    border-radius: 20px !important;
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

.btn {
    height: 35px !important;
    width: 170px !important;
    border: none !important;
    border-radius: 20px !important;
    background-color: #4EADAF !important;
    font-size: 14px !important;
    font-weight: 500 !important;
}

.text {
    font-size: 23px;
    font-weight: bold
}

.card {
    height: 130px !important;
    overflow: hidden !important;
    border: none !important;
    border-radius: 15px !important;
}

.imagename {
    font-size: 14px;
    font-weight: bold

}

* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  top:100px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0 !important;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px !important;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}


</style>

                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>


                                <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">


    
        <div class="container-fluid"> <a class="navbar-brand name" href="#">Mona's Pharmacy</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="aboutUs.php">About</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="productlist.php">Categories</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="findUs.php">Find Us</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="contactUs.php">Contact Us</a> </li>
                </ul>
                <form class="d-flex searchitem" action="search.php" method="GET"><input name="name" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> <i class="fa fa-search"></i> </form>
                <div class="flex">
                    <img src="" alt="">
                </div>
                <a href="myProfile.php" > <p class="nav-link">MyProfile </p></a>
            </div>
        </div>
    </nav>
    <?php
        if(empty($_SESSION['id'])) {
            print '
            <div class="d-flex justify-content-center align-items-center mt-3"> <a href="login.php"> <button class="btn btn-dark"> Log in</button>  </a>  <span> &nbsp &nbsp </span></div>
            <div class="d-flex justify-content-center align-items-center mt-5"> <a href="signup.php"> <button class="btn btn-dark">Create an account</button> </a><span> &nbsp &nbsp   </span> </div>
            ';
        }
    ?>

    <div class="d-flex justify-content-center mt-3"> <span class="text text-center">Finding Health-Related Products Now<br> in Your Fingertips</span> </div>

    <div class="row mt-2 g-4">
        <div class="col-md-3">
            <div class="card p-1">
            <a href="productlist.php?category=1"> <div class="d-flex justify-content-between align-items-center p-2">
                 <div class="flex-column lh-1 imagename" style="color:black;"> <span>Hair Care</span> </div>
                    <div> <img src="https://previews.123rf.com/images/luisapuccini/luisapuccini1802/luisapuccini180200008/96109641-white-cosmetic-products-with-argan-fruits-for-skin-care-and-hair-on-a-white-background-space-for-lab.jpg" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
            <a href="productlist.php?category=2">  <div class="d-flex justify-content-between align-items-center p-2">
                 <div class="flex-column lh-1 imagename" style="color:black;"> <span>Skin Care</span> </div> 
                    <div> <img src="https://previews.123rf.com/images/annaanisimova/annaanisimova1812/annaanisimova181200044/133499788-skin-care-products-on-white-background.jpg" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
            <a href="productlist.php?category=3">   <div class="d-flex justify-content-between align-items-center p-2">
               <div class="flex-column lh-1 imagename" style="color:black;"> <span>Drugs</span></div>
                    <div> <img src=" https://thumbs.dreamstime.com/b/medicines-white-background-medical-drugs-38315026.jpg" height="100" width="100" /> </div>
                </div></a> 
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
            <a href="productlist.php?category=4">  <div class="d-flex justify-content-between align-items-center p-2">
                  <div class="flex-column lh-1 imagename" style="color:black;"> <span>Vitamin & Supplements</span> </div>
                    <div> <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/7798/c5a743ce-27ab-4b0e-b3cf-167a7d29e45316207267658642.jpg" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2tr5">
            <a href="productlist.php?category=5"> <div class="d-flex justify-content-between align-items-center p-2">
               <div class="flex-column lh-1 imagename" style="color:black;"> <span>Covid19</span>  </div>
                    <div> <img src="https://image.freepik.com/free-photo/alcohol-gel-bottle-sanitizer-hand-medical-face-masks-surgical-mask-anti-bacteria-virus-protection-white-background_41929-2492.jpg" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
            <a href="productlist.php?category=6"> <div class="d-flex justify-content-between align-items-center p-2">
               <div class="flex-column lh-1 imagename" style="color:black;"> <span>Baby Products</span> </div>
                    <div> <img src="data:image/jpeg;base64,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" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
            <a href="productlist.php?category=7"> <div class="d-flex justify-content-between align-items-center p-2">
                <div class="flex-column lh-1 imagename" style="color:black;"> <span>Beauty</span> </div>
                    <div> <img src=" https://ak.picdn.net/shutterstock/videos/3149356/thumb/1.jpg" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
            <a href="productlist.php?category=8"> <div class="d-flex justify-content-between align-items-center p-2">
                <div class="flex-column lh-1 imagename" style="color:black;"> <span>Oral Care</span> </div>
                    <div> <img src="https://image.shutterstock.com/image-photo/toothbrushes-glass-on-white-background-260nw-534126922.jpg" height="100" width="100" /> </div>
                </div></a>
            </div>
        </div>
    </div>
</div>
<?php
  // include 'footers.php';
    ?>

    <div class="slideshow-container">
      <div class="mySlides1">
    
      <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    </div>
    

    <div class="slideshow-container">
      <div class="mySlides2">
        <img src="https://www.derrystrabane.com/getmedia/8686143f-9dfa-4720-8786-e874120e7fa5/3icons_SubBanner.jpg" style="width:100%; height:300px">
      </div>
    
      <div class="mySlides2">
        <img src="http://4.bp.blogspot.com/-BTyN1Vn1pRU/XllYhwY9pKI/AAAAAAAAl3k/uufeIUH3vVcNFQFhaJzZUR2Ga4z3NRLgACK4BGAYYCw/s1600/blue-3.png" style="width:100%; height:300px">
      </div>
    
      <div class="mySlides2">
        <img src="https://peacekeeping.un.org/sites/default/files/styles/1200x500/public/field/image/6apr20.jpg?itok=uqPptTN2" style="width:100%; height:300px">
      </div>
    
    
    
      <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
    </div>
    
    <script>
    var slideIndex = [1,1];
    var slideId = ["mySlides1", "mySlides2"]
    showSlides(1, 0);
    showSlides(1, 1);
    
    function plusSlides(n, no) {
      showSlides(slideIndex[no] += n, no);
    }
    
    function showSlides(n, no) {
      var i;
      var x = document.getElementsByClassName(slideId[no]);
      if (n > x.length) {slideIndex[no] = 1}    
      if (n < 1) {slideIndex[no] = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      x[slideIndex[no]-1].style.display = "block";  
    }
    </script>
    


                            </body>
                            
                        </html>


                        
                        <?php
   include 'footerhome.php';
    ?>
    <style>
    body{
    background-color:#f2eae3 !important;
    }
    </style>
