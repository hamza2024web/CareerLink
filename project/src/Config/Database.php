<?php
namespace App\Config ;

class DB{ 
    private $dbHost     = "mysql"; 
    private $dbUsername = "root"; 
    private $dbPassword = "root_password"; 
    private $dbName     = "career_php"; 
    private $conn; 

    public function connect(){ 
            try{ 
                $this->conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);  
                echo('connexion succefully');
                return $this->conn;
            }catch(PDOException $e){ 
                die("Failed to connect with MySQL: " . $e->getMessage()); 
            } 
        } 
    } 

?>