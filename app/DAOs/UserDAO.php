<?php 



class UserDAO
{
    public function findAll()
    {
        $query = "SELECT id ,firstname , lastname , email , password , phone ,etat, role_id , photo FROM `utilisateurs` ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,Utilisateur::class);
        return $result;
    }
}