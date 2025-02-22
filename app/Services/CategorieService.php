<?php


class CategorieService
{
    private CategorieRepository $categorieRepository;

    public function __construct() {
        $this->categorieRepository = new CategorieRepository;
    }


    public function findCategorieByName(string $categorie_name)
    {
        return $this->categorieRepository->findCategorieByName($categorie_name);
    }


    public function findCategorieById(int $id)
    {
        return $this->categorieRepository->findCategorieById($id);
    }
    public function findAll()
    {
        return $this->categorieRepository->findAll();
    }
    








}