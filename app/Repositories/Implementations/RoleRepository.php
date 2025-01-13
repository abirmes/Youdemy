<?php

class RoleRepository
{
    private RoleDAO $roleDAO;


    public function __construct()
    {
        $this->roleDAO = new RoleDAO();
    }


    public function create(Role $role)
    {
        $this->roleDAO->create($role);
    }
}