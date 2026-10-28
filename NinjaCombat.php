<?php
require_once 'Ninja.php';
class NinjaCombat extends Ninja
{
    #[Override]
    public function __construct(string $nom, string $clan, string $rang, int $chakra, string $technique)
    {
        parent::__construct($nom, $clan, $rang, $chakra, $technique);
    }
    public function Combatre(): string
    {
        $this->addMission();
        return $this->nom . "Attaque les enemis en utilisant " . $this->technique;
    }
}
