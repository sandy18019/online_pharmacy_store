<?php
REQUIRE_ONCE ("connectionToDataBase.php");
class Users{
    public $userID;
    public $userFName;
    public $userMName;
    public $userLName;
    public $email;
    public $phoneNo;
    public $Age;
    public $Gender;
    public $UserType;

    public function AddAdmin($password){
      $connection =  new connection;
      $conn  = $connection->Connect();
      $query = "INSERT INTO users (`user_id`,`name`,`email`,`phone_num`,`ut`,`pass`,`page`)
      VALUES (null,'$this->userFName','$this->email','$this->phoneno',1,'$password','Admin1.php')";
     $result= mysqli_query($conn,$query);
      return $result;
    }

    public function Addcustomer($password){
      $connection =  new connection;
      $conn  = $connection->Connect();
      $query = "INSERT INTO users (`user_id`,`name`,`email`,`phone_num`,`ut`,`pass`,`page`)
      VALUES (null,'$this->userFName','$this->email','$this->phoneno',2,'$password','customer.php')";
     $result= mysqli_query($conn,$query);
      return $result;
    }

    public function login($email,$password){
      $connection =  new connection;
      $conn  = $connection->Connect();
      $query = "SELECT page FROM users WHERE email='$email' AND pass='$password'";
      $result= mysqli_query($conn,$query);
      $row= mysqli_fetch_array($result);
      $page=$row['page'];
        echo $row['page'];
      return $page;
    }


    public function viewSpecificUserType(){
      $connection =  new connection;
      $conn  = $connection->Connect();
      $query = "SELECT * from users where ut =1";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function GetallUsers(){
      $connection =  new connection;
      $conn  = $connection->Connect();
      $query = "SELECT * from users ";
      $result= mysqli_query($conn,$query);
      return $result;
    }

    public function delete($userID){
      $connection =  new connection;
      $conn  = $connection->Connect();
    $query = "DELETE FROM users WHERE user_id = '$userID'";
    $result= mysqli_query($conn,$query);

    }


}


?>
