<?php
namespace App\Controllers;
use App\Models\UserModel;


class AuthController {
    public function login($email , $password){
        $userModel = new UserModel();
        $user = $userModel->findUserByEmailAndPassword($email , $password);
        if($user == null){
            echo "user not found please check ...";
        } else {
            $baseUrl = "/src/views/";
            if($user->getRole()=="administrateur"){
                header("location:" . $baseUrl . "Admin/dashboard.php");
            }
            else if($user->getRole()=="candidat"){
                header("location:". $baseUrl . "users/home.php");
            }
            else if($user->getRole()=="recruteurs"){
                header("location:". $baseUrl ."Recruture/home.php");
            }
        }
    }
}

?>