<?php
namespace App\Models;
use App\Classes\Offre;
use App\Config\Database;
use PDO;
class AddOffreModel {
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }
    public function addOffreRecrutureDb($offer){
        try {
            $query = "INSERT INTO offres (post , description , salary , qualification ,location,recruteur_id, category_id) 
            VALUES :post , :description , :salary , :qualification , :location , :recruteur_id  , :catOffre";
            $stmt = $this->conn->prepare($query);

            $post = $offer->getPost();
            $description = $offer->getDesc();
            $salary = $offer->getSalary();
            $qualification = $offer->getQual();
            $location = $offer->getLocation();
            $recruture = $offer->getRecr();
            $category = $offer->getCat();
            $stmt->bindParam(":post",$post);
            $stmt->bindParam(":description",$description);
            $stmt->bindParam(":salary",$salary);
            $stmt->bindParam(":qualification",$qualification);
            $stmt->bindParam(":location",$location);
            $stmt->bindParam(":recruteur_id",$recruture);
            $stmt->bindParam(":category_id",$category);
            $stmt->execute();
            $offreId = $this->conn->lastInsertId();
            $this->addOffreId($offreId);
            $this->addOffreTag($offer->getTag());
            $offreData = $stmt->fetch(PDO::FETCH_ASSOC);
            return new Offre($offreData['post'],$offreData['description'],$offreData['salary'],$offreData['qualification'],$offreData['location'],$offreData['recruteur'],$offreData['category_id'],$offreData['tag']);
        } catch (\PDOException $e) {
            error_log("Database error: " . $e->getMessage());
            return null;
        }
    }
    private function addOffreId($offreId){
        $sql = "INSERT INTO offres_tags (offre_id) VALUES (:offreId)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$offreId]);
    }
    private function addOffreTag($tagOffre){
        $sql = "INSERT INTO offres_tags (tag_id) VALUES (:tagOffre)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$tagOffre]);
    }
}
?>