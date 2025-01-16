<?php

namespace App\Repositories\Implementations;

use App\Core\Database ;
use App\DAOs\UserDAO;
use App\Models\Utilisateur;

class UserRepository
{
    private UserDAO $userDAO;
    public function __construct()
    {
        $this->userDAO = new UserDAO();
    }

    public function createEtudiant(Utilisateur $user)
    {
        $query = "INSERT INTO `utilisateurs`(firstname , lastname , email , password , phone , etat , role_id ,photo) VALUES ('" .$user->getFirstname() .
         "' , '" .$user->getLastname() .
          "' , '" . $user->getEmail() . 
          "','" .$user->getPassword() . 
          "', '". $user->getPhone() .
          "','" .$user->getetat() .
           "' , " .$user->getRole()->getId().
            ", '" .$user->getPhoto()."'); ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        $user->setId(Database::getInstance()
            ->getConnection()
            ->lastInsertId());
            
        return $user;
    }

    public function findAll()
    {
        return $this->userDAO->findAll();
    }


    public function findByEmailAndPassword(string $email , string $password)
    {
        $query = "SELECT id , firstname , lastname , email , password , phone , etat , role_id ,photo from `utilisateurs` WHERE email =  '" .$email. "' AND  password ='" .$password ."';";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();
        return $stmt->fetchObject(Utilisateur::class);
        

    }
}