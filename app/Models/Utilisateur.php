<?php 

// include './../app/Models/Role.php';
// include './Reservation.php';

class Utilisateur {
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

    public function __construct () {
        $this->role = new Role();
    }

    


    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    public function setEmail(string $email) :void {
        $this->email = $email;
    }

    public function setPassword(string $password): void {
        $this->password = $password;
    }
    public function setPhone(string $phone):void {
        $this->phone = $phone;
    }

    public function setRole(Role $role):void {
        $this->role = $role;
    }
    public function setEtat(string $etat):void {
        $this->etat = $etat;
    }

    public function setcours(array $cours):void {
        $this->cours = $cours;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getRole(): Role {
        return $this->role;
    }
    public function getetat(): string {
        return $this->etat;
    }

    public function getcours(): array {
        return $this->cours;
    }

    public function getPhoto(): string {
        return $this->photo;
    }
    public function getRole_ID(): int
    {
        return $this->getRole()->getId();
    }


    public function __toString()
    {
        
    }

    

    
}