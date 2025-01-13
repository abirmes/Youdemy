<?php

class Cour
{
    private int $id;
    private string $titre;
    private string $description;
    private string $enseignant;
    private string $contenu;
    private Categorie $categorie;
    // private array $utilisateurs = [];
    private array $tags = [];


    public function __construct() {}

    public function __call($name , $args)
    {
        if ($name == "instanceWithoutId")
        {
            $this->titre = $args[0];
            $this->description = $args[1];
            $this->enseignant = $args[2];
            $this->contenu = $args[3];
            $this->categorie = $args[4];
            $this->tags = $args[5];
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
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }


    public function __toString()
    {
        
    }
}
