<?php


class CourController
{
    private CourService $courService;


    public function __construct()
    {
        $this->courService = new CourService();
    }

    public function createCour()
    {
        $titre = "test";
        $description = "test description";
        $enseignant = "test enseignant";
        $contenu = "test contenu";
        $categorie_name = "philosofy";
        $tags = [];
        $categorie = new Categorie();
        $categorie->instanceWithName($categorie_name);

        $cour = new Cour();
        $cour->instanceWithoutId($titre , $description , $enseignant , $contenu , $categorie , $tags );
        return $this->courService->createCour($cour);
        




    }
}
