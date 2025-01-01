<?php

namespace App\Classes ;

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

    public function emptyInput(){
        if (empty($this->username) || empty($this->email) || empty($this->password)) {
            return false;
        }
        return true;
    }
}
?>
