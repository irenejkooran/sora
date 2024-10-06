<?php 
namespace Sora\Controllers;

class HomeController{
  

  
  public function home(){
    if (!isset($_SESSION['user_id'])){
    require "../src/Views/home.php";
    }
    else{
      require "../src/Views/login.php";
    }
  }

  public function login(){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      
    }
    else{
      require_once __DIR__."/../Views/login.html";
    }
  }
}
