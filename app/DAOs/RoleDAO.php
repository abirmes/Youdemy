<?php


class RoleDAO
{
    public function create(Role $role)
    {
        $query = "INSERT INTO `roles`(role_name , description) VALUES ( '" .$role->getRoleName() ."','" . $role->getDescription()."'); ";
        $stmt = Database::getInstance()->getConnection()->prepare($query);
        $stmt->execute();

        $role->setId(Database::getInstance()
            ->getConnection()
            ->lastInsertId());
            



        return $role;
    }

    
}
