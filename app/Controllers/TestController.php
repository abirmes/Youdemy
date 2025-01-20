<?php 


class TestController {
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();   
    }

    public function index() {
        $userList = $this->userService->findAllUSers();
        include './../views/testView.php';
    }
}