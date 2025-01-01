<?php
class DB{ 
    private $dbHost     = "mysql"; 
    private $dbUsername = "root"; 
    private $dbPassword = "root_password"; 
    private $dbName     = "career_php"; 

    public function __construct(){ 
            try{ 
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);  
                echo('connexion succefully');
            }catch(PDOException $e){ 
                die("Failed to connect with MySQL: " . $e->getMessage()); 
            } 
        } 
    } 
$hamza = new DB();

?>