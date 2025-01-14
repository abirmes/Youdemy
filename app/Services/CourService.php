<?php

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

}