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
            $pathUrl = "/src/views/";
            if($user->getRole()=="administrateur"){
                header("location:" . $pathUrl . "Admin/dashboard.php");
            }
            else if($user->getRole()=="candidat"){
                header("location:". $pathUrl . "users/home.php");
            }
            else if($user->getRole()=="recruteurs"){
                header("location:". $pathUrl ."Recruture/home.php");
            }
        }
    }
}

?>