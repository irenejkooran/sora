<?php

namespace Sora\Controllers;
require_once __DIR__ . "../../vendor/autoload.php";


/** Controller class for User Model
 *
 */
class UserController {

  /**@var Sora\Models\User $userModel user model object
   */
  private $userModel;
  
  /**Constructor for User Controller
   */

  public function __construct() {
  /** @var mysqli $db object returned from Sora\Config\Database::get_connection()
   */
  $db = Sora\Config\Database::get_connection();
  $this->userModel = new Sora\Models\UserModel($db);

    
  }

  public function logout() {
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
  }

  public function isLoggedin(): bool{
    return isset($_SESSION['user_id']);
  }


  public function register(): array {
    $response =  $userModel->register($_POST);
    if($respone['success'] === true) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['user_id'] = $response['user']['id'];
      header('Location: index.php');
    }
    else{
      $errors = $response['error'];
      include 'views/register.php';
    }
  }

  public function login() {
    $username = $_POST['username'];
    $passwd = $_POST['password'];
    $this->userModel->authenticate($username, $password);
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['user_id'] = $response['user']['id'];
  }

}
