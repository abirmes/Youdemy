<?php


namespace App\Controllers;

use App\http\LoginForm;
use App\http\RegisterForm;
use App\Services\AuthService;
use Exception;

class AuthController
{
    private AuthService $AuthService;

    public function __construct()
    {
        $this->AuthService = new AuthService();
    }


    public function register(RegisterForm $registerForm)
    {
        
        return $this->AuthService->register($registerForm);
    }

    public function login(LoginForm $loginForm)
    {
        try{
           $user = $this->AuthService->login($loginForm);

        }catch (Exception $e)
        {
            echo "message: ". $e->getMessage();
        }
        return $user;
    }

    public function logout()
    {

    }
}