<?php
namespace App\Services;

use App\Models\Cour;
use App\Repositories\Implementations\CourRepository;

class CourService
{

    private CourRepository $courRepository;
    private CategorieService $categorieService;

    public function __construct()
    {
        $this->courRepository = new CourRepository;
        $this->categorieService = new CategorieService();
    }


    public function createCour(Cour $cour)
    {
        $cour->setCategorie($this->categorieService->findCategorieByName($cour->getCategorie()->getName()));

        return $this->courRepository->create($cour);
    }


    public function findAllCourses()
    {
        $cours = $this->courRepository->findAll();
        
        foreach($cours as $cour){
            $cour->setCategorie($this->categorieService->findCategorieById($cour->getcategorie_id()));
            print ($cour);
           
        }
        die();
        return $cours;
    }

}