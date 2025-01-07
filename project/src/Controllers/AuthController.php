<?php
namespace App\Controllers;
use App\Models\UserModel;


class AuthController {
    public function login($email , $password){
        $userModel = new UserModel();
        $user = $userModel->loginSession($email , $password);
        if ($user){
            $pathUrl = "/src/views/";
            if($user['role']=="administrateur"){
                header("location:" . $pathUrl . "Admin/dashboard.php");
            }
            else if($user['role']=="candidat"){
                header("location:". $pathUrl . "users/home.php");
            }
            else if($user['role']=="recruteurs"){
                header("location:". $pathUrl ."Recruture/home.php");
            }
            exit();
        } else {
            session_start();
            $_SESSION['login_error'] = "Invalid email or password .";
            header("Location: /src/views/auth/login.php");
            exit();
        }
    }
}

?>