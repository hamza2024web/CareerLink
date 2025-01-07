<?php

class OffreController {
    public function AddOffre($post , $salaire , $qualification , $lieu , $discription , $tagOffre , $catOffre){
        $AddOffreRecruture = new AddOffreModel();
        $offre = $AddOffreRecruture->addOffreRecrutureDb($post , $salaire , $qualification , $lieu , $discription , $tagOffre , $catOffre);
    }
}
?>