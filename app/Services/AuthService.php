<?php



class AuthService
{
    private UserService $userService;
    private RoleService $roleService;
    public function __construct()
    {
        $this->userService = new UserService();
        $this->roleService = new RoleService();
    }


    public function login(LoginForm $loginForm)
    {
        $user = new Utilisateur();
        $user->instanceWithEmailAndPassword($loginForm->getEmail(), $loginForm->getPassword());

        $user = $this->userService->findByEmailAndPassword($user->getEmail(), $user->getPassword());
        $user->setRole($this->roleService->findRoleById($user->getRole_ID()));



        if ($user->getId() == 0) {
            throw new Exception("email ou password incorrecte");
        }
        return $user;
    }


    public function register(RegisterForm $registerForm)
    {
        $role = new Role();
        $role->setRoleName($registerForm->getRoleName());
        $role = $this->roleService->findRoleByName($role->getRoleName());
        $user = new Utilisateur();
        $user->instanceForRegister(
            $registerForm->getFirstname(),
            $registerForm->getLastname(),
            $registerForm->getEmail(),
            $registerForm->getPassword(),
            $registerForm->getPhone(),
            $registerForm->getPhoto(),
            $role
        );
        
        $user = $this->userService->createUser($user);

        
        return $user;


        



    }
}
