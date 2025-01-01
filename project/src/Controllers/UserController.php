<?php
namespace App\Controllers ;
use App\Config\DB ;

class Signup {
    protected function checkUser($username, $email) {
        $db = new DB();
        $conn = $db->connect();
        $stmt = $conn->prepare('SELECT id FROM users WHERE name = ? OR email = ?');

        if (!$stmt->execute([$username, $email])) {
            $stmt = null;
            header("location: ./index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() > 0) {
            return true; // User exists
        }
        return false; // User does not exist
    }
}
?>
