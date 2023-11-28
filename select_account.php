<?php

if(isset($_COOKIE['username'])) {

$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$server = "vlamp.cs.uleth.ca";
$database = "gilm3660";
$account_number = $_POST['account_number'];


try {
$con = new mysqli($server, $username, $password, $database);
}catch (Exception $e) {
echo $e->getMessage();
}

$sql = "select * from ACCOUNT_OWNER where account_number='$account_number'";





}

?>
