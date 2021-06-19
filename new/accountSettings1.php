<?php
 REQUIRE_ONCE "classes/user.php";

$connection =  new connection;
$conn  = $connection->Connect();
// $Users = new Users;

if(isset($_GET['user_id'])) 
{
    $editID = $_GET['user_id'];

    $query = "SELECT * FROM users WHERE user_id='$editID' LIMIT 1";
    $data= mysqli_query($conn,$query);

    // $row = $data->mysql_fetch_assoc($data);
    // $data = Users::viewSpecificUserType($editID);
}
 else {
    die("Not Valid");
}

?>
<head>
<link rel="stylesheet" href="accountSettings.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>


<div class="wrapper bg-white mt-sm-5">
    <form action="accountSettings1.php?user_id=<?php echo $editID; ?>" method="POST" enctype="multipart/form-data">

    
    <h4 class="pb-4 border-bottom">Account settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> 
        <div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
        <div style="width:70px; height:70px;">
            <img src="./assets/profiles/" style="width:100%;height:100%;object-fit:cover;" />
        </div>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border" type="button" onclick="getFile()"><b>Upload</b></button>
            <input type="file" name="img" id="image" >
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-6">
                <label for="name"> Name</label> 
                <input type="text" name="name" class="bg-light form-control" placeholder="enter new name" value="<?php echo $data['name']; ?>">
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="password">Password</label>
                <input type="password" name="pass" class="bg-light form-control" placeholder="enter new password"> 
            </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6">
                <label for="email">Email Address</label> 
                <input type="email" name="email" class="bg-light form-control" placeholder="enter new email">
            </div>
            <div class="col-md-6 pt-md-0 pt-3">
                <label for="phone_num">Phone Number</label>
                <input type="number" name="phone_num" class="bg-light form-control" placeholder="enter new number" >
            </div>
        </div>
       
        <div class="py-3 pb-4 border-bottom"> 
            <button type="submit" name="save" class="btn border button">Save Changes</button> 
            <button type="reset" class="btn border button">Reset</button>
        </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div>
                <b>Deactivate your account</b>
                <p>Details about your company account and password</p>
            </div>
            <div class="ml-auto"> 
                <button class="btn danger">Deactivate</button> 
            </div>
        </div>
    </div>
    </form>
</div>
<script>
    function getFile(){
     document.getElementById("image").click();
    }
</script>
<!-- 
<?php 

if(isset($_POST['save'])) 
{
    $fname = $_POST['name'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone_num'];
   // $uaserT = $_POST['ut'];
    //$address = $_POST['address'];
    // if(isset($_POST['image']))
    // {
    //     $file_name = $_FILES['image']['name'];
    //     $file_size = $_FILES['image']['size'];
    //     $file_tmp = $_FILES['image']['tmp_name'];
    //     $file_type = $_FILES['image']['type'];
    //     $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
    //     $extensions= array("jpeg","jpg","png");
        
    //     if(in_array($file_ext,$extensions)=== false){
    //         echo "extension not allowed, please choose a JPEG or PNG file.";
    //     }
        
    //     if($file_size > 2097152){
    //         echo 'File size must be excately 2 MB';
    //     }

    //     move_uploaded_file($file_tmp,"assets/profiles/".$file_name);
    //     DB::query("UPDATE users SET image=:image WHERE id=:id",array(":image"=>$file_name,":id"=>$editID));
    // }
        // if(isset($_FILES['img']))
        // {
        //     $filename = rand().$_FILES['img']['name'];

        //     $destination = 'assets/profiles/' . $filename;
        //     $isUploaded = false;

        //     $file = $_FILES['img']['tmp_name'];
        //     $size = $_FILES['img']['size'];
            
        //     if ($_FILES['img']['size'] > 1000000)
        //     { 
        //         echo '<script>alert("File Too Large")</script>';
        //     } 
        //     else 
        //     { 
        //         if (move_uploaded_file($file, $destination)) 
        //         {
        //             $isUploaded = true;
        //             $query = "UPDATE users SET img='$image' WHERE id='$editID'";
        //             $result= mysqli_query($conn,$query);
        
        //             echo '<script>alert("Uploaded Successfully")</script>';
        //         }
        //         else
        //         {
        //             $isUploaded = false;
        //             $filename = "";
        //             echo '<script>alert("Failed To Upload Image")</script>';
        //         }
        //     }

        // }
        
    
    
        if(strlen($fname) > 2 && strlen($fname) < 32 && ctype_alpha($fname))
        {
            $query = "UPDATE users SET name='.$fname.' WHERE id='.$editID.'";
            $result= mysqli_query($conn,$query);
        }else{
            echo '<script>alert("First Name Invalid")</script>';
        }
        if(strlen($password) > 2 && strlen($password) < 32 && ctype_alpha($password))
        {
            $query = "UPDATE users SET pass='.$password.' WHERE id='.$editID.'";
            $result= mysqli_query($conn,$query);
        }else{
            echo '<script>alert("password Invalid")</script>';
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $query = "UPDATE users SET email='.$email.' WHERE id='.$editID.'";
            $result= mysqli_query($conn,$query);

        }else{
            echo '<script>alert("Email Invalid")</script>';
        }
        if(strlen($phone) > 8 && strlen($phone) < 12)
        {
            $query = "UPDATE users SET phone_num='.$phone.' WHERE id='.$editID.'";
            $result= mysqli_query($conn,$query);

        }else{
            echo '<script>alert("Phone Invalid")</script>';
        }
       
        // if(strlen($userT) > 7 && strlen($userT) < 10)
        // {
        //     $query = "UPDATE users SET telphone='$userT' WHERE id='$editID'";
        //     $result= mysqli_query($conn,$query);

        // }else{
        //     echo '<script>alert("Telphone Invalid")</script>';
        // }
            
        // if(!empty($address))
        // {
        //     $query = "UPDATE users SET address='$address' WHERE id='$editID'";
        //     $result= mysqli_query($conn,$query);

        // }else{
        //     echo '<script>alert("Address Invalid")</script>';
        // }
        

        // $query = "SELECT * FROM users WHERE id='$editID'";
        // $data= mysqli_query($conn,$query);
    
}
?> -->