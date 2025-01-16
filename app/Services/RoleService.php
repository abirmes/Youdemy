<?php

namespace App\Services;

use App\Models\Role;
use App\Repositories\Implementations\RoleRepository;
use Exception;

class RoleService 
{
    private RoleRepository $roleRepository;

    public function __construct()
    {
        $this->roleRepository = new RoleRepository;
    }


    public function createRole(Role $role)
    {
        if($this->roleRepository->findByName($role->getRoleName()) != null)
        {
            throw new Exception("role already exist");
            
        }
        return $this->roleRepository->create($role);
    }


    public function findRoleByName(string $name)
    {
        if($name == "")
        {
            throw new Exception("role empty");
            
        }

        
        
        $role = $this->roleRepository->findByName($name);
        if($role == null)
        {
            throw new Exception("not found in db");
            
        }
        return $role;
    }

    public function findRoleById(int $id)
    {
        return $this->roleRepository->findByID($id);

    }

    
}