<?php
namespace App\Controllers;

use App\Models\Role;
use App\Services\RoleService;
use Exception;

class RoleController
{
    private RoleService $roleService;
    public function __construct()
    {
        $this->roleService = new RoleService;
    }

    public function createRole()
    {
        $roleName = "etudiant";
        $roleDescription = "can learn and watch courses";
        $role = new Role();
        $role->instanceWithoutId($roleName , $roleDescription);
        try{
            $role = $this->roleService->createRole($role);
        }catch (Exception $e){
            echo "message: ".$e->getMessage();
        }
        
    }

    public function getRoleByName(string $roleName)
    {
        try{
            $role = $this->roleService->findRoleByName($roleName);
            return $role;
        }catch (Exception $e)
        {
            echo "message: " . $e->getMessage();
        }
        
    }


}