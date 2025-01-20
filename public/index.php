<?php

session_start();
include './../app/http/LoginForm.php';
include './../app/http/RegisterForm.php';
include './../app/Core/database.php';
include './../app/Services/UserService.php';
include './../app/Controllers/AuthController.php';
include './../app/Services/AuthService.php';
include './../app/Repositories/Implementations/UserRepository.php';
include './../app/DAOs/UserDAO.php';
include './../app/Services/RoleService.php';
include './../app/Repositories/Implementations/RoleRepository.php';
include './../app/DAOs/RoleDAO.php';
include './../app/Models/Utilisateur.php';
include './../app/Models/Role.php';
include './../app/Models/Cour.php';
include './../app/Models/Caracteristiques.php';
include './../app/Models/Categorie.php';


include './../app/Controllers/CourController.php';
include './../app/DAOs/CourDAO.php';

include './../app/Repositories/Implementations/CourRepository.php';

include './../app/Services/CourService.php';

include './../app/Controllers/CategorieController.php';
include './../app/DAOs/CategorieDAO.php';

include './../app/Repositories/Implementations/CategorieRepository.php';

include './../app/Services/CategorieService.php';


define('PROJECT_ROOT', dirname(dirname(__DIR__ . '/../')));


$path = rtrim($_SERVER['REQUEST_URI']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

switch ($path) {
    case '/login':
        if ($method == 'get') {
            include './../views/auth/login.php';
        }

        if ($method == 'post') {

            $loginForm = new LoginForm();
            $loginForm->instanceWithEmailAndPassword(
                $_REQUEST['email'],
                $_REQUEST['password']
            );

            (new AuthController())->login($loginForm);
        }
        break;
    case '/dash':

        include PROJECT_ROOT . '/views/admin/nice-html/ltr/table-basic.php';
        break;
    case '/':

        include PROJECT_ROOT . '/views/admin/nice-html/ltr/homepage.php';
        break;
    case '/register':
        if ($method == 'get') {
            include './../views/auth/register.php';
        }

        if ($method == 'post') {
            $registerForm = new RegisterForm();

            $registerForm->instanceWithAll(
                $_REQUEST['firstname'],
                $_REQUEST['lastname'],
                $_REQUEST['email'],
                $_REQUEST['password'],
                $_REQUEST['phone'],
                $_REQUEST['photo'],
                $_REQUEST['user']
            );
            (new AuthController())->register($registerForm);
        }
}
