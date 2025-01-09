<?php

namespace App\Models;

use App\Config\Database;
use App\Classes\Offre;
use PDO;
use PDOException;

class AddOffreModel
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function addOffreRecrutureDb($offer)
    {
        try {
            $recruteurs_id = $_SESSION['user_id'];
            $recruteurQuery = "SELECT id FROM recruteurs WHERE user_id = :user_id";
            $recruteurStmt = $this->conn->prepare($recruteurQuery);
            $recruteurStmt->bindParam(":user_id", $recruteurs_id);
            $recruteurStmt->execute();
            $recruteur = $recruteurStmt->fetch();
            if (!$recruteur) {
                echo "Recruiter not found. Please ensure your account is registered as a recruiter.";
                return null;
            }
            $recruteur_id = $recruteur['id'];
            $category_id = $offer->getCat();
            $categoryQuery = "SELECT id FROM categories WHERE id = :id";
            $categoryStmt = $this->conn->prepare($categoryQuery);
            $categoryStmt->bindParam("id", $category_id);
            $categoryStmt->execute();
            $category_offre_id = $categoryStmt->fetch();
            if (!$category_offre_id) {
                echo "Category not found.";
                return null;
            }
            $category_id_offer = $category_offre_id['id'];
            $query = "INSERT INTO offres (post , description , salary , qualification ,location,recruteur_id, category_id) 
            VALUES (:post , :description , :salary , :qualification , :location , :recruteur_id  , :category_id)";
            $post = $offer->getPost();
            $description = $offer->getDesc();
            $salary = $offer->getSalary();
            $qualification = $offer->getQual();
            $location = $offer->getLocation();
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":post", $post);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":salary", $salary);
            $stmt->bindParam(":qualification", $qualification);
            $stmt->bindParam(":location", $location);
            $stmt->bindParam(":recruteur_id", $recruteur_id);
            $stmt->bindParam(":category_id", $category_id_offer);
            $isOfferInserted = $stmt->execute();
            $offreId = $this->conn->lastInsertId();
            if ($isOfferInserted && $offreId) {
                $attachOfferToTag = $this->attachOffreToTag($offreId, $offer->getTag());
                if ($attachOfferToTag) {
                    return $offer;
                }
            }
            return null;
        } catch (PDOException $e) {
            // Handle database error
            echo "Error adding offer: " . $e->getMessage();
            return null;
        }
    }
    private function attachOffreToTag($offreId, $tagId)
    {
        try {
            $sql = "INSERT INTO offres_tags (offre_id, tag_id) VALUES (:offre_id, :tag_id)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":offre_id", $offreId);
            $stmt->bindParam(":tag_id", $tagId);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error attaching tag to offer: " . $e->getMessage();
            return false;
        }
    }

    public function getOffers(){
        $categoryQuery = "SELECT id FROM categories WHERE id = :id";
        $categoryStmt = $this->conn->prepare($categoryQuery);
        $categoryStmt->bindParam("id", $category_id);
        $categoryStmt->execute();
        $category_offre_id = $categoryStmt->fetch();
        if (!$category_offre_id) {
            echo "Category not found.";
            return null;
        }
        $category_id_offer = $category_offre_id['id'];
        $query = "SELECT offres.post , offres.description , offres.salary ,offres.qualification,offres.location , offres.recruteur_id , offres.category_id FROM offres 
        INNER JOIN categories ON offres.category_id = categories.id 
        INNER JOIN recruteurs ON recruteurs.id = offres.recruteur_id
        INNER JOIN offres_tags ON offres_tags.offre_id = offres.id
        INNER JOIN tags ON offres_tags.tag_id = tags.id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":category_id", $category_id_offer);
        $stmt->execute();
        $offreFetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $offreFetch;
    }
}
