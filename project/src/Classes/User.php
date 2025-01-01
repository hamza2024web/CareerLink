<?php

class Users {
    protected $nom ;
    protected $email ;
    protected $password;
    protected $role;

    public function getNom(){
        return $this -> nom;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getPassword(){
        return $this -> password;
    }
    public function getRole(){
        return $this -> role;
    }

    public function setNom($nom){
        $this -> nom = $nom;
    }
    public function setEmail($email){
        $this -> email = $email
    }
    public function setPassword($password){
        $this -> password = $password;
    }
    public function setRole($role){
        $this -> role = $role;
    }

    
    public function __construct($nom , $email , $password , $role)
    {
        $this -> nom = $nom;
        $this -> email = $email;
        $this -> password = $password;
        $this -> role = $role;
    }
}
?>