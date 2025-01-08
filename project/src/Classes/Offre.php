<?php
namespace App\Classes;

class Offre {
    private $post ;
    private $description;
    private $salary;
    private $qualification;
    private $location;
    private $recruteur_id;
    private $category_id;
    private $tag;


    public function __construct($post , $description ,$salary ,$qualification ,$location ,$recruteur_id ,$category_id ,$tag)
    {
        $this->post=$post;
        $this->description=$description;
        $this->salary=$salary;
        $this->qualification=$qualification;
        $this->location=$location;
        $this->recruteur_id=$recruteur_id;
        $this->category_id=$category_id;
        $this->tag=$tag;
    }

    public function getPost(){
        return $this->post;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getQual(){
        return $this->qualification;
    }
    public function getLocation(){
        return $this->location;
    }
    public function getRecr(){
        return $this->recruteur_id;
    }
    public function getCat(){
        return $this->category_id;
    }
    public function getTag(){
        return $this->tag;
    }

}
?>