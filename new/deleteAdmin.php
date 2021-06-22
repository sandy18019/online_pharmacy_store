<?php
$userID = $_GET['uid'];
REQUIRE_ONCE ("classes/user.php");

$Users = new Users;
$result = $Users->delete($userID);
header('Location:addAdmin.php');

?>
