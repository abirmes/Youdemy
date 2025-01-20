<?php




class AuthController
{
    private AuthService $AuthService;

    public function __construct()
    {
        session_start();
        $this->AuthService = new AuthService();
    }


    public function register(RegisterForm $registerForm)
    {
        try {
            $user = $this->AuthService->register($registerForm);
            $_SESSION['userRole'] = $user->getRole()->getRoleName();
            $_SESSION['userEmail'] = $user->getEmail();
            $_SESSION['loggedIn'] = true;
            header('location: dashboard');
        } catch (Exception $e) {
            echo "message: " . $e->getMessage();
        }
    }

    public function login(LoginForm $loginForm)
    {




        try {
            $user = $this->AuthService->login($loginForm);
            $_SESSION['userRole'] = $user->getRole()->getRoleName();
            $_SESSION['userEmail'] = $user->getEmail();
            $_SESSION['loggedIn'] = true;
        } catch (Exception $e) {
            echo "message: " . $e->getMessage();
        }

        header('location: /dash');
        // exit();
    }

    public function logout()
    {

        session_unset();
        session_destroy();
        header('location: login');
    }
}
