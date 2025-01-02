<?php
namespace App\Models;

use App\Classes\Users;
use App\Config\Database;
use PDO;

class UserModel {
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function findUserByEmailAndPassword($email, $password) {
        $query = "SELECT users.id, users.email, users.password, users.role 
                  FROM users 
                  WHERE users.email = :email AND users.password = :password";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        } else {
            return new Users($row["email"], $row["password"], $row["role"]);
        }
    }
}
?>
