<?php



class Utilisateur
{
    private int $id = 0;
    private string $firstname = "";
    private string $lastname = "";
    private string $email = "";
    private string $password = "";
    private string $phone = "";
    private string $photo = "";
    private Role $role;
    private string $etat = "";
    private $cours = [];
    private int $role_id = 0;

    public function __construct()
    {
        $this->role = new Role();
    }


    public function __call($name , $args)
    {
        if($name == "instanceEtudiantWithoutId")
        {
            if(count($args) == 9)
            {
                $this->firstname = $args[0];
                $this->lastname = $args[1];
                $this->email = $args[2];
                $this->password = $args[3];
                $this->phone = $args[4];
                $this->photo = $args[5];
                $this->role = $args[6];
                $this->etat = $args[7];
                $this->cours = $args[8];
            }
        }
        if($name == "instanceEnseignantWithoutId")
        {
            if(count($args) == 8)
            {
                $this->firstname = $args[0];
                $this->lastname = $args[1];
                $this->email = $args[2];
                $this->password = $args[3];
                $this->phone = $args[4];
                $this->photo = $args[5];
                $this->role = $args[6];
                $this->cours = $args[8];
            }
        }

        if($name == "instanceWithEmailAndPassword")
        {
            if(count($args) == 2)
            {
                $this->email = $args[0];
                $this->password = $args[1];
            }
        }
        if($name == 'instanceForRegister')
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

    public function getAttributes() : array {
        return [
            'id',
            'firstname',
            'lastname',
            'email',
            'password',
            'phone',
            'photo',
            'role',
            'etat',
            'role_id'
        ];
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setRole(Role $role): void
    {
        $this->role = $role;
    }
    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    public function setCours(array $cours): void
    {
        $this->cours = $cours;
    }

    public function setRole_id(int $id)
    {
        $this->role_id = $id; 
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): Role
    {
        return $this->role;
    }
    public function getetat(): string
    {
        return $this->etat;
    }

    public function getcours(): array
    {
        return $this->cours;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }
    public function getRole_id(): int
    {
        return $this->role_id;
    }


    public function __toString()
    {
        return "(Utilisateur) => id : " . $this->id .
         " , firstname : " . $this->firstname .
          " , lastname : " . $this->lastname .
           " , phone : " . $this->phone .
            " , email : " . $this->email  . 
            " , password : " . $this->password . 
            " photo : " . $this->photo .
             " , Role : " . $this->role .
              " , rours : [" . implode(",", $this->cours) . 
              "] , Role_ID : " . $this->role_id . "";;
    }
}

