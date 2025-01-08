<?php
namespace App\Models;
use App\Classes\Offre;
use App\Config\Database;
use PDOException;

class AddOffreModel {
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }
    public function addOffreRecrutureDb($offer){
            $query = "INSERT INTO offres (post , description , salary , qualification ,location,recruteur_id, category_id) 
            VALUES (:post , :description , :salary , :qualification , :location , :recruteur_id  , :category_id)";

            $stmt = $this->conn->prepare($query);
           
            $post = $offer->getPost();
            $description = $offer->getDesc();
            $salary = $offer->getSalary();
            $qualification = $offer->getQual();
            $location = $offer->getLocation();
            $recruture = $_SESSION['user_id'];
            $category = $offer->getCat();

            $stmt->bindParam(":post",$post);
            $stmt->bindParam(":description",$description);
            $stmt->bindParam(":salary",$salary);
            $stmt->bindParam(":qualification",$qualification);
            $stmt->bindParam(":location",$location);
            $stmt->bindParam(":recruteur_id",$recruture);
            $stmt->bindParam(":category_id",$category);
            $isOfferInserted = $stmt->execute();

            $offreId = $this->conn->lastInsertId();
            $attachOfferToTag = $this->attachOffreToTag($offreId, $offer->getTag());
            if($isOfferInserted && $offreId && $attachOfferToTag){
                return $offer;
            } else {
                return null;
            }

       
    }
    private function attachOffreToTag($offreId, $tagId){
        $sql = "INSERT INTO offres_tags (offre_id, tag_id) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$offreId, $tagId]);
    }
  
}
?>