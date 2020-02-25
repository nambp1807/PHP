<?php


class Controller
{
    public function invoke(){
        if($_GET['route']== ""){
            $this->home();
        }elseif($_GET['route']== 'listing'){
            $this->listing();
        }elseif($_GET['route']== 'login'){
            $this->login();
        }elseif($_GET['route']== 'product'){
            $this->product();
        }elseif($_GET['route']== 'postlogin'){
            $this->postlogin();
        }
        else{
            echo "404 Not Found";
        }
    }

    public function home(){
        include_once("views/home.php");
    }

    public function listing(){
        include_once ("views/demo_database.php");
    }

    public function login(){
        include_once("views/login.php");
    }
    public function product(){
        include_once("views/product.php");
    }public function postlogin(){
        include_once("views/postLogin.php");
    }
}

$controller = new Controller();
$controller->invoke();