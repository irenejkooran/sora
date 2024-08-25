<?php

namespace Sora\Controllers;
require_once __DIR__ . "../../vendor/autoload.php";


/** Controller class for User Model
 *
 */
class userController {

  /**@var Sora\Models\User $userModel user model object
   */
  private $userModel;
  
  /**Constructor for User Controller
   */

  public function __construct() {
  /** @var mysqli $db object returned from Sora\Config\Database::get_connection()
   */
  $db = Sora\Config\Database::get_connection();
  $this->userModel = Sora\Models\User($db);

    
  }

  public function logout() {
//unimplemented
  }

  public function isLoggedin(){
    //unimplemented``
  }


}
