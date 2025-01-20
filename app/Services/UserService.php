<?php 



class UserService
{
    private UserRepository $userRepository;
    private RoleService $roleService;
    public function __construct()
    {
        $this->userRepository = new UserRepository;
        $this->roleService = new RoleService;
    }

    public function createUser(Utilisateur $user)
    {
        $roleName = $user->getRole()->getRoleName();
        if($roleName != "admin " && $roleName != "etudiant" && $roleName != "enseignant" )
        {
            throw new Exception("role doesn't exist");
        }
        
        $user->setRole($this->roleService->findRoleByName($user->getRole()->getRoleName()));
        $user = $this->userRepository->createEtudiant($user);
        if ($user == null)
        {
            throw new Exception("database problem");
        }
        return $user;
    }


    public function findAllUsers()
    {
        $users = $this->userRepository->findAll();
        
        foreach($users as $user){
            $user->setRole($this->roleService->findRoleById($user->getRole_ID()));
           
        }
        return $users;
    }


    public function findByEmailAndPassword(string $email , string $password): Utilisateur
    {
        $user = new Utilisateur();
        $user = $this->userRepository->findByEmailAndPassword($email , $password);        
        return $user;


    }
}