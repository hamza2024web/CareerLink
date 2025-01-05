<?php
namespace App\Controllers;
use App\Models\CandidatAndRecrutureModel;

class AuthContrRegistre{
    public function Signup($username , $email , $password , $role ,$skils = null ,$diplomat = null ,$companyName = null){
        $condidatAndRecruture = new CandidatAndRecrutureModel();
        $utilisateur = $condidatAndRecruture->setCandidatAndRecture($username, $email, $password, $role, $skills = null, $diplomat = null, $companyName = null);
        if($utilisateur == null){
                echo "please fields inputs and create your account ...";
        } else {
            $pathUrl = "/src/views/";
            if($utilisateur->getRole()=="administrateur"){
                header("location:" . $pathUrl . "Admin/dashboard.php");
            }
            else if($utilisateur->getRole()=="candidat"){
                header("location:". $pathUrl . "users/home.php");
            }
            else if($utilisateur->getRole()=="recruteurs"){
                header("location:". $pathUrl ."Recruture/home.php");
            }
        }
    }
}

?>