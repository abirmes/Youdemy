<?php


class Role
{
    private int $id;
    private string $role_name;
    private string $description = "";

    public function __construct() {}


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setRoleName(string $role_name): void
    {
        $this->role_name = $role_name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getRoleName(): string
    {
        return $this->role_name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }


    public function __toString()
    {
        $id = $this->id ?? 0;
        $name = $this->role_name ?? "";
        $description = $this->description ?? "";
        return "(Role) => id : " . $id . " , name : " . $name . " , description : " . $description;
    }
}
