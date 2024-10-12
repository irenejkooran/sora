<?php
namespace Sora\Controllers;

use \Sora\Models\PostModel;
use \Sora\Config\Database;


class PostController {
    private $postModel;
    
    public function __construct(){
        $db = Database::get_connection();
        $this->postModel = new PostModel($db);

    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $user_id = $_SESSION['user_id'];
            $content = $_POST['content'];
            if($this->postModel->create_post($user_id, $content)){
                header("Location: /");
                exit;
            } else{
                $error[] = "Error creating post";
            }
        }
        else{
            $errors[] = "invalid request method";
        }
    }
}