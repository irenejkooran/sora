<?php
namespace Sora\Models;

class PostModel{
    private \mysqli $db;
    public function __construct(\mysqli $db){
        $this->db = $db;

    }

    public function createPost($user_id, $content): bool{

        
        $stmt =  "INSERT INTO posts (user_id, content) VALUES (?, ?)";
        $stmt->bind_param("is", $user_id, $content);
        return $stmt->execute();

    }
}