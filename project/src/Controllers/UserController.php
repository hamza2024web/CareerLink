<?php
namespace App\Controllers ;
use App\Config\DB ;

class Signup {
    public $result;

    public function setUser($username, $email , $password) {
        $db = new DB();
        $conn = $db->connect();
        $stmt = $conn->prepare('INSERT INTO users (name , email , password) values (? , ? , ?);');

        $hashedPwd = password_hash($password , PASSWORD_DEFAULT);

        if (!$stmt->execute(array($username, $email , $hashedPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }

    public function checkUser($username, $email) {
        $db = new DB();
        $conn = $db->connect();
        $stmt = $conn->prepare('SELECT id FROM users WHERE name = ? OR email = ?');

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }


        if ($stmt->rowCount() > 0) {
            $result = false; 
        } else {
            $result = true;
        }
        return $result;
    }
}
?>
