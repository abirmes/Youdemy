<?php

namespace App\DAOs;

use App\Core\Database;
use App\Models\Cour;
use PDO;

class CourDAO
{

    public function create(Cour $cour)
    {
        $query = "INSERT INTO `cours`(titre , description , enseignant , contenu , categorie_id )
         VALUES ('" .$cour->getTitre() . "', '" . $cour->getDescription() . "'
          , '" .$cour->getEnseignant() . "','" . $cour->getContenu() . "', " . $cour->getCategorie()->getId() .")";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        $cour->setId(Database::getInstance()
            ->getConnection()
            ->lastInsertId());



        return $cour;
    }

    public function findAll()
    {
        $query = "SELECT id ,titre , description , enseignant , contenu , categorie_id  FROM `cours` ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,Cour::class);
        return $result;
    }
}