<?php

namespace App\Classes ;
use App\Controllers\Signup ;

class Users {
    protected $username;
    protected $email; 
    protected $password;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function signupUsers(){
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $Signin = new Signup();
        $Signin->setUser($this->username , $this->email , $this->password);
    }

    public function emptyInput(){
        if (empty($this->username) || empty($this->email) || empty($this->password)) {
            return false;
        }
        return true;
    }

}
?>
