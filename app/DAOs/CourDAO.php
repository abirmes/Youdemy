<?php


class CourDAO
{

    public function create(Cour $cour)
    {
        $query = "INSERT INTO `cours`(titre , description , enseignant , contenu , categorie_id ) VALUES ('" .$cour->getTitre() . "', '" . $cour->getDescription() . "' , '" .$cour->getEnseignant() . "','" . $cour->getContenu() . "', " . $cour->getCategorie()->getId() .")";
        // die($query);
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();

        $cour->setId(Database::getInstance()
            ->getConnection()
            ->lastInsertId());



        return $cour;
    }
}