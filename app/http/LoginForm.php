<?php


class LoginForm
{
    private string $email;
    private string $password;


    public function __construct()
    {
        
    }

    public function __call($name , $args)
    {
        if($name=='instanceWithEmailAndPassword')
        {
            if(count($args) == 2)
            {
                $this->email = $args[0];
                $this->password = $args[1];
            }
        }
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
}