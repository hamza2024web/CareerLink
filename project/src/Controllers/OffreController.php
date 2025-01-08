<?php
namespace App\Controllers;

use App\Classes\Offre;
use App\Models\AddOffreModel;

class OffreController {
    public function AddOffre($post , $salary , $qualification , $location , $description ,$recruteur_id , $category , $tagOffre){
        $offer = new Offre($post , $description ,$salary, $qualification , $location , $recruteur_id ,$category, $tagOffre);
        $AddOffreRecruture = new AddOffreModel();
        $offre = $AddOffreRecruture->addOffreRecrutureDb($offer);
        if(!$offre){
            echo "traitemnt error";
        } else{
            $pathUrl = "/src/views/";
            header("location:" .$pathUrl. "Recruture/home.php");
            exit();            
        }
    }
}
?>
