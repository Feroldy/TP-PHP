<?php
class Ninja
{
    // Déclaration des attributs
    public string $nom; //le nom peut etresaie par le ninja lui meme il y a donc accèss et il peut mettre un nom anonyme
    public string $clan; //pareil que pour le nom il peut etre saisie par le ninja lui meme
    private string $rang; //il est déclaré privé car le rang ne se décide pas il se vaut selon certains critères
    private int $chakra; //le chakra il se mésure on le possede on ne peut pas mettre ce que l'on veut 
    private int $missions; //La mission ne dépends pas du ninja elle lui ai attribué par rapport à ses compétences et autres 
    public string  $technique; //Le ninja indique sa technique signature lui meme 

    public function __construct(string $nom, string $clan, string $rang, int $chakra, string $technique)
    {
        $this->nom =  $nom;
        $this->clan = $clan;
        $this->rang = $rang;
        $this->chakra = $chakra;
        $this->technique = $technique;
        $this->missions = 0;
    }
    public function getChakra(): int
    {
        return $this->chakra;
    }
    public function setChakra(int $chakra)
    {
        if ($chakra < 0) {
            throw new Exception("Chakra invalid");
        } else {
            $this->chakra = $chakra;
        }
    }
    public function getRang(): String
    {
        return $this->rang;
    }
    public function getMissions(): int
    {
        return $this->missions;
    }

    public function accomplirMission(): string
    {
        return $this->nom . " a accomplit sa mission";
    }
    public function addMission(): void
    {
        $this->missions++;
    }
}
