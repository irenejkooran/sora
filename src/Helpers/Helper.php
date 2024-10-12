<?php
namespace Sora\Helpers;

class Helper{
    public static function generate_token(): string {
        return bin2hex(random_bytes(32));
    }

    public static function validate_user(){
        if(!isset($_SESSION['user_id'])){
            header("Location: /login");
            exit;
        }
    }
}

?>

