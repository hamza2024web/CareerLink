<?php
namespace App\Models;

use App\Config\Database;
use App\Classes\Users;
use PDO;

class CandidatAndRecrutureModel
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function setCandidatAndRecture($username, $email, $password, $role, $skills = null, $diplomat = null, $companyName = null)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$username, $email, $hashedPassword, $role]);
            $userId = $this->conn->lastInsertId();

            if ($role === 'Candidat') {
                $this->addCandidat($userId, ['skills' => $skills, 'deplome' => $diplomat]);
            } elseif ($role === 'Recruteur') {
                $this->addRecruteur($userId, ['company_name' => $companyName]);
            }

            $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$userId]);
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);

            return new Users($userData['email'], $userData['password'], $userData['role']);
        } catch (\PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    
    private function addCandidat($userId, $data)
    {
        $sql = "INSERT INTO candidats (skills, deplome, user_id) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['skills'], $data['deplome'], $userId]);
    }

    private function addRecruteur($userId, $data)
    {
        $sql = "INSERT INTO recruteurs (company_name, user_id) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$data['company_name'], $userId]);
    }
}
?>
