<?php

class AdminController {
    private $coursService;
    private $UserService;
    private $tagService;
    private $courController;


    public function __construct()
    {
        $this->coursService = new CourService();
        $this->UserService = new UserService();
        $this->tagService = new TagService();
        $this->courController = new CourController();
    }
    public function index() {
        $ObjectList = $this->coursService->findAllCourses();
        $pageName = "Cours";
        include './../views/admin/nice-html/ltr/table-basic.php';
    }

    public function utilisateurs() {
        $ObjectList = $this->UserService->findAllUsers();
        $pageName = "Utilisateurs";
        include './../views/admin/nice-html/ltr/table-basic.php';
    }

    public function tags()
    {
        $ObjectList = $this->tagService->findAll();
        $pageName = "Tags";
        
        include './../views/admin/nice-html/ltr/table-basic.php';
        var_dump($ObjectList);

    }
    public function createCourse()
    {
        $ObjectList = $this->courController->createCour();
        $pageName = "cours";
        include './../views/admin/nice-html/ltr/table-basic.php';
        

    }
}