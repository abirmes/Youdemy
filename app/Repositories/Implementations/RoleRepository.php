<?php


class RoleRepository
{
    private RoleDAO $roleDAO;


    public function __construct()
    {
        return $this->roleDAO = new RoleDAO();
    }


    public function create(Role $role)
    {
        $this->roleDAO->create($role);
    }

    public function findByName(string $roleName)
    {
        $query = "SELECT id , role_name , description FROM `roles` where role_name = '" .$roleName. "';";
        $stmt = Database::getInstance()->getConnection()->prepare($query) ;
        $stmt->execute();
        return $stmt->fetchObject(Role::class);
    }

    public function findByID(int $id)
    {
        return $this->roleDAO->findByID($id);
    }


}