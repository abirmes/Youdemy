<?php


class CategorieRepository
{
    public function findCategorieByName(string $categorie_name)
    {
        $query = "SELECT id , name , description from categories where name = '" .$categorie_name. "';";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchObject(Categorie::class);
        return $result;
    }
}