<?php
namespace App\Daos;

use App\Core\Database;
use App\Models\Categorie;




class CategorieDAO
{
    public function findById(int $id)
    {
        $query = "SELECT id, name , description FROM `categories` WHERE id =" .$id.";";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchObject(Categorie::class);
    }
}