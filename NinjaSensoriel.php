<?php
require_once 'Ninja.php';
class NinjaSensoriel extends Ninja
{
    public function __construct(string $nom, string $clan, string $rang, int $chakra, string $technique)
    {
        parent::__construct($nom, $clan, $rang, $chakra, $technique);
    }
    public function Esprit(): string
    {
        $this->addMission();
        return $this->nom . " Detecte les ennemis à l'aide de " . $this->technique;
    }
}
