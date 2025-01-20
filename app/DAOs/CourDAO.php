<?php


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

    public function update(Cour $cour)
    {
        $query = "UPDATE cours SET titre = '" .$cour->getTitre() ."', description = '" .$cour->getDescription() ."', enseignant = '" .$cour->getEnseignant() ."', contenu = '" .$cour->getContenu() ."', categorie_id = '" .$cour->getCategorie_id() ."' WHERE id = '" .$cour->getId() ."'";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,Cour::class);
    
    }
}