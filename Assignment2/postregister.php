<?php
  session_start();
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $age = $_POST["age"];
  $address = $_POST["address"];
  $telephone = $_POST["telephone"];

//sever info
$severName = "localhost";
$severUser = "root";
$severPassword = "";
$database = "php_sever";
// connect databasse
$conn = new mysqli($severName,$severUser,$severPassword,$database);
// check connection
if ($conn->connect_error){
    die("Connection fail");
}
var_dump($_POST);
$sql = "INSERT INTO users (username,email,password,age,address,telephone) VALUES('$username','$email','$password',$age,'$address',$telephone); ";
$result = $conn ->query($sql);
if ($result){
    header('location: index.php');
} else {
    header('location: register.php');

}