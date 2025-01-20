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
include './../app/Models/Tag.php';



include './../app/Controllers/CourController.php';
include './../app/DAOs/CourDAO.php';

include './../app/Repositories/Implementations/CourRepository.php';

include './../app/Services/CourService.php';
include './../app/DAOs/TagDAO.php';

include './../app/Repositories/Implementations/TagRepository.php';

include './../app/Controllers/TagController.php';
include './../app/Services/TagService.php';


include './../app/Controllers/CategorieController.php';
include './../app/DAOs/CategorieDAO.php';

include './../app/Repositories/Implementations/CategorieRepository.php';

include './../app/Services/CategorieService.php';

include './../app/Controllers/AdminController.php';
include './../utils/BootstrapUI.php';

include './../views/components/head.php'; //TODO

define('PROJECT_ROOT', dirname(dirname(__DIR__ . '/../')));


$path = rtrim($_SERVER['REQUEST_URI']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

if (substr_count($path, '/') == 3 ) {
    $pathSlashRemoved = substr($path, - (strlen($path)-1));
    $pathList = explode('/', $pathSlashRemoved);

    $controllerName = $pathList[0].'Controller';
    $controller = new $controllerName();

    $controller->{$pathList[1]}($pathList[2]);
}


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
        $adminController = new AdminController();
        $adminController->index();
        break;
    case '/utilisateur':
        $adminController = new AdminController();

        $adminController->utilisateurs();
        break;
    case '/tag':
        $adminController = new AdminController();

        $adminController->tags();
        break;
    case '/':

        include PROJECT_ROOT . '/views/admin/nice-html/ltr/homepage.php';
        break;
    case '/error-403.php':

        include PROJECT_ROOT . '/views/admin/nice-html/ltr/error-403.php';
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
        break;
    case '/form-basic':

        include PROJECT_ROOT . '/views/admin/nice-html/ltr/form-basic.php';
        break;
    case '/pages-profile':

        include PROJECT_ROOT . '/views/admin/nice-html/ltr/pages-profile.php';
        break;
    case 'starter-kit':
        include PROJECT_ROOT . '/views/admin/nice-html/ltr/starter-kit.php';
        break;
    
}


