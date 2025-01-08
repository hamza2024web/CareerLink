<?php

class offres_tags {
    private $id;
    private $offre_id;
    private $tag_id;

    public function __construct($id , $offre_id ,$tag_id)
    {
        $this->id=$id;
        $this->offre_id=$offre_id;
        $this->tag_id=$tag_id;
    }
    public function getId(){
        return $this->id;
    }
    public function getOffre_id()
    {
        return $this->offre_id;
    }
    public function getTag_id(){
        return $this->tag_id;
    }
}
?>