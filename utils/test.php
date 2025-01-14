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
        $categorieService = new CategorieService();
        $categorie = new Categorie;
        $categorie->instanceWithName("philosophy");
        // $categorie = $categorieService->findCategorieByName($categorie->getName());
        $cour = new Cour();
        $cour->instanceWithoutId("test" , "test description" , "test enseignant" , "test contentu" , $categorie , [] ); 
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

        die ($categorie);

    }
}