<?php

class CategorieRepository
{
    private CategorieDAO $categorieDAO;
    public function __construct()
    {
        $this->categorieDAO = new CategorieDAO;
    }
    
    public function findCategorieByName(string $categorie_name)
    {
        $query = "SELECT id , name , description from categories where name = '".$categorie_name."';";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchObject(Categorie::class);
        return $result;
    }

    public function findCategorieById(int $id)
    {
        return $this->categorieDAO->findById($id);
    }
}