<?php

use App\Controllers\RoleController;
use App\Controllers\TagController;
use App\Controllers\UserController;
use App\DAOs\CourDAO;
use App\Models\Categorie;
use App\Models\Cour;
use App\Services\CategorieService;
use App\Services\CourService;
use App\Services\UserService;



require __DIR__ . "\\..\\vendor\\autoload.php";










class Test 
{
    public function testCategorie()
    {
        $categorieService = new CategorieService();
        $categorie = new Categorie;
        $categorie->instanceWithName("philosophy");
        // $categorie = $categorieService->findCategorieByName($categorie->getName());
        $cour = new Cour();
        $cour->instanceWithoutId("test" , "test description" , "test enseignant" , "test contentu" , $categorie , [] ,[]); 
        $courService = new CourService();
        
        $courService->createCour($cour);
        die($cour);

    }

    public function testCat()
    {
        $categorieService = new CategorieService();
        $categorie = new Categorie;
        $categorie->instanceWithName("philosophy");
        $categorie = $categorieService->findCategorieByName($categorie->getName());
        if($categorie == NULL)
        {
            echo "null";
        }

        return $categorie;

    }

    public function testTag()
    {
        $tagController = new TagController;
        $tagController->createTag();

    }

    public function testRole()
    {

        $roleController = new RoleController();
        $roleController->createRole();
        // die($roleController->getRoleByName("admin"));
    }

    public function testUtilisateur()
    {
        // $userController = new UserController();
        // $user = $userController->createEtudiant();
        // die($user);
        // $userService = new UserService();
        // $results = $userService->findAllUsers();

        // foreach($results as $result)
        // {
        //     print($result);
            
        // }


        $courService = new CourService();
        var_dump($courService->findAllCourses());



    }

    
}