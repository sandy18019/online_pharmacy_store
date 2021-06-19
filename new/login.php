<?php
    session_start();
    
    REQUIRE_ONCE "classes/user.php";

if($_POST)
{
 
    $Users = new Users;
    $result = $Users->login($_POST["email"],$_POST["password"]);
   if( $row = mysqli_fetch_assoc($result)){
    $_SESSION['id']=$row['user_id'];
    echo $_SESSION['id'];
    header("Location: ".$row['page']);
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Dashboard</title>
</head>

<body>

    <!--------------------------------- Main section -------------------------------->
    <section class="main">
        <div class="container">

        <div class="pharmacyname text-center">Mona's Pharmacy</div>
        
            <div class="main__form">
                <div class="main__form--title text-center">Log In</div>
                <form method="POST">
               
                    <div class="form-row">
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-envelope left"></i>
                                <input type="email" name="email" placeholder="Email" required>
                            </label>
                        </div>
                        <div class="col col-12">
                            <label class="input">
                                <i id="left" class="fas fa-key"></i>
                                <input id="pwdinput" type="password" name="password" placeholder="Password" required>
                                <i id="pwd" class="fas fa-eye right"></i>
                            </label>
                        </div>
                      
 
                        <div class="col col-12">
                        <input name="submit" type="submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--------------------------------- #Main section -------------------------------->



    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/js/app.js"></script>
</body>

</html>
<style>
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  font-family: "Raleway", sans-serif;
 
}

a {
  text-decoration: none !important;
}

button:focus,
button:active .btn:active .btn.active {
  outline: 0px !important;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
}

.main {
  height: 100vh;
  width: 100%;
  background: #4EADAF;
  background: #f2eae3;
}

.main__form {
  position: absolute;
  width: 650px;
  padding: 5rem 3rem;
  -webkit-box-shadow: 0 0.25rem 2.75rem 0 #88DEB0;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  left: 50%;
}

.main__form--title {
  font-size: 30px;
  font-weight: bold;
  padding: 10px 0;
  color: #000000;
 text-align: middle;
}

.pharmacyname {
  font-size: 30px;
  font-weight: bold;
  padding: 10px 0;
  color: #000000;
  text-align: center;
  top:100px;
}
.main__form .input {
  position: relative;
  display: block;
}

.main__form .input #left {
  color: #4e73df;
  border-color: #ccc;
  -webkit-transition: border-color 0.5s;
  transition: border-color 0.5s;
  left: 5px;
  padding-right: 3px;
  border-right-width: 1px;
  border-right-style: solid;
  position: absolute;
  top: 5px;
  width: 40px;
  height: 40px;
  font-size: 18px;
  line-height: 40px;
  text-align: center;
}

.main__form .input .right {
  color: #4e73df;
  border-color: #ccc;
  -webkit-transition: border-color 0.5s;
  transition: border-color 0.5s;
  right: 5px;
  padding-right: 3px;
  border-left-width: 1px;
  border-left-style: solid;
  position: absolute;
  top: 5px;
  width: 40px;
  height: 40px;
  cursor: pointer;
  font-size: 18px;
  line-height: 40px;
  text-align: center;
}

.main__form .input input,
.main__form .input select {
  padding-left: 50px !important;
  display: block;
  width: 100%;
  height: 50px !important;
  padding: 8px 10px;
  margin: 10px 0;
  outline: none;
  border: 2px solid #ccc;
  background: #f4f4f4;
  color: #384047;
  -webkit-appearance: normal;
     -moz-appearance: normal;
          appearance: normal;
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease;
  color: #384047;
  font-weight: 500;
  letter-spacing: 1px;
}

.main__form .input input::-webkit-input-placeholder,
.main__form .input select::-webkit-input-placeholder {
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease;
  color: #384047;
  font-weight: 500;
  letter-spacing: 1px;
}

.main__form .input input:-ms-input-placeholder,
.main__form .input select:-ms-input-placeholder {
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease;
  color: #384047;
  font-weight: 500;
  letter-spacing: 1px;
}

.main__form .input input::-ms-input-placeholder,
.main__form .input select::-ms-input-placeholder {
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease;
  color: #384047;
  font-weight: 500;
  letter-spacing: 1px;
}




.main__form input[type="submit"] {
  width: 100%;
  letter-spacing: 1px;
  font-weight: bold;
  font-size: 20px;
  color: #fff;
  text-align: center;
  margin-top: 10px;
  padding: 14px 0;
  -webkit-transition: 0.5s ease;
  transition: 0.5s ease;
  border: 1px solid #4e73df;
  background-color: #4EADAF;
}

.main__form input[type="submit"]:hover {
  color: #36b9cc;
  background-color: #fff;
  font-weight: 800;
  letter-spacing: 3px;
}
</style>