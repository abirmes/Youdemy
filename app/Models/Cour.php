<?php
namespace App\Models;

class Cour
{
    private int $id = 0;
    private string $titre;
    private string $description;
    private string $enseignant;
    private string $contenu;
    private Categorie $categorie;
    private array $utilisateurs = [];
    private array $tags = [];
    private int $categorie_id = 0;


    public function __construct() {
        $this->categorie = new Categorie();
    }

    public function __call($name, $args)
    {
        if ($name == "instanceWithoutId") {
            if (count($args) == 7) {

                $this->titre = $args[0];
                $this->description = $args[1];
                $this->enseignant = $args[2];
                $this->contenu = $args[3];
                $this->categorie = $args[4];
                $this->utilisateurs = $args[5];
                $this->tags = $args[6];


            }
        }
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function setEnseignant(string $enseignant): void
    {
        $this->enseignant = $enseignant;
    }
    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }
    public function setTag(array $tags): void
    {
        $this->tags = $tags;
    }
    public function setUtilisateur(array $utilisateurs): void
    {
        $this->utilisateurs = $utilisateurs;
    }
    public function setCategorie(Categorie $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getTitre(): string
    {
        return $this->titre;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getEnseignant(): string
    {
        return $this->enseignant;
    }
    public function getContenu(): string
    {
        return $this->contenu;
    }
    public function getTags(): array
    {
        return $this->tags;
    }
    public function getUtilisateur(): array
    {
        return $this->utilisateurs;
    }
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }
    public function getCategorie_id()
    {
        return $this->categorie_id;
    }


    public function __toString()
    {
        return "(Livre) => id : " . $this->id . " , titre : "
            . $this->titre . " , description: "
            . $this->description . " , enseignant: " . $this->enseignant .
            " , contenu: " . $this->contenu . " , categorie: " . $this->categorie . " , tags: " . implode(" , ", $this->tags) 
            . " , utilisateurs: " . implode(" , ", $this->utilisateurs). " .";
    }
}
