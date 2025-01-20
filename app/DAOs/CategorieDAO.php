<?php





class CategorieDAO
{
    public function findById(int $id)
    {
        $query = "SELECT id, name , description FROM `categories` WHERE id =" .$id.";";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchObject(Categorie::class);
    }

    public function findAll()
    {
        $query = "SELECT id, name, description FROM `categories` ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,Categorie::class);
    }
}

