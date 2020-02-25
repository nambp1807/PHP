<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
var_dump($username);
var_dump($password);

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
$sql = "SELECT *FROM users WHERE username LIKE '".$username."'AND password LIKE'".$password."'";
$result = $conn ->query($sql);
if ($result ->num_rows > 0 ){
    echo "Login successfully";
    $user = null;
    while ($row = $result ->fetch_assoc()){
        $user = $row;
    }
    $_SESSION["user"] = $user;
    header("location: ?route=product");
}else{
    $_SESSION['login_err'] = "Username or Password is wrong";
    header("location:?route=login");
}