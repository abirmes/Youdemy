<?php


class RoleService 
{
    private RoleRepository $roleRepository;

    public function __construct()
    {
        $this->roleRepository = new RoleRepository;
    }


    public function createRole(Role $role)
    {
        $this->roleRepository->create($role);
    }

    
}