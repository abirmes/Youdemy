<?php


namespace App\http;

class RegisterForm
{
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private string $phone;
    private string $photo;
    private string $role;



    public function __construct() {}

    public function __call($name, $args)
    {
        if ($name == 'instanceWithEmailAndPassword') {
            if (count($args) == 2) {
                $this->firstname = $args[0];
                $this->lastname = $args[1];
            }
        }

        if($name == 'instanceWithAll')
        {
            if(count($args) == 7)
            {
                $this->firstname = $args[0];
                $this->lastname = $args[1];
                $this->email = $args[2];
                $this->password = $args[3];
                $this->phone = $args[4];
                $this->photo = $args[5];
                $this->role = $args[6];
            }
        }
    }

    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getPhoto()
    {
        return $this->photo;
    }
    public function getRoleName()
    {
        return $this->role;
    }
}
