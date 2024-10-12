<?php
namespace Sora\Models;

class PostModel{
    private \mysqli $db;
    public function __construct(\mysqli $db){
        $this->db = $db;

    }

    public function create_post($user_id, $content): bool{

        
        $stmt =  $this->db->prepare("INSERT INTO posts (user_id, content) VALUES (?, ?)");

        $stmt->bind_param("is", $user_id, $content);
        return $stmt->execute();

    }

    public function view_posts(): array{
        $stmt = $this->db->prepare("Select * from posts");
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;

        }
        else {
            return [
                'error' => 'NO_RESULT'  
            ];
        }
    }

    
}