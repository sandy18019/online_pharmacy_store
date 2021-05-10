<?php
$userID = $_GET['uid'];
REQUIRE_ONCE ("user.php");

$Users = new Users;
$result = $Users->delete($userID);
header('Location:addAdmin.php');

?>
