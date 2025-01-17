<?php

namespace App\Controllers;

use App\Models\Role;
use App\Models\Utilisateur;
use App\Services\UserService;
use Exception;

class UserController
{
    private UserService $userService;
    private Utilisateur $user;
    private Role $role;

    public function __construct()
    {
        $this->userService = new UserService();
        $this->role= new Role();
        $this->user = new Utilisateur();

    }

    public function createEtudiant()
    {
        
        $firstname = "test";
        $lastname = "test2";
        $email = "testttt@gmail.comm";
        $password = "123456";
        $phone = "+212652314895";
        $photo = "test.png";
        $rolename = "etudiant";
        $etat = "suspension";
        $cours = [];


        $role = new Role();


        $role->instanceWithName($rolename);
        $user = new Utilisateur();
        $user->instanceEtudiantWithoutId($firstname,
        $lastname,
        $email,
        $password,
        $phone,
        $photo,
        $role,
        $etat,
        $cours);
        
        try{
            return $this->userService->createUser($user);
        }catch (Exception $e)
        {
            echo "message: ". $e->getMessage();
        }



        

    }
}
