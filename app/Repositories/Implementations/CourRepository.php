<?php

class CourRepository
{
    private CourDAO $courDAO;

    public function __construct()
    {
        $this->courDAO = new CourDAO();
    }

    public function create(Cour $cour)
    {
        return $this->courDAO->create($cour);
    }

    public function findAll()
    {
        return $this->courDAO->findAll();
    }

}