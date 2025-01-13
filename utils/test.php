<?php
include './../app/Core/database.php';
include_once './../app/Models/Cour.php';
include_once './../app/Models/Caracteristiques.php';
include_once './../app/Models/Categorie.php';
include './../app/Repositories/Implementations/CategorieRepository.php';
include './../app/Services/CategorieService.php';

include './../app/DAOs/CourDao.php';
include './../app/Repositories/Implementations/CourRepository.php';
include './../app/Services/CourService.php';
include './../app/Controllers/CourController.php';



class Test 
{
    public function testCategorie()
    {
        // $categorie = new Categorie();
        // $categorie->instanceWithName("philosofy");
        $cour = new Cour();
        // $cour->instanceWithoutId("test" , "test description , test enseignant , test contentu , philosofy");
        $courController = new CourController();
        $cour = $courController->createCour();
        die($cour);
    }
}