<?php

use App\Config\Database;

class AddOffreModel {
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }
    public function addOffreRecrutureDb($tagOffre , $catOffre , $post , $salaire , $qualification , $lieu , $discription){
        try {
            $query = "INSERT INTO offres (post , description , salary , qualification ,location) 
            VALUES :post"
        }
    }
}
?>