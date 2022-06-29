<?php
$server="localhost";
$username="root";
$password="";
$database="login-app";

$db = mysqli_connect($server,$username,$password,$database);

if($db->connect_error){
    die("Connection failed " . $db->connect_error);
}
echo "Connected successfully";
?>