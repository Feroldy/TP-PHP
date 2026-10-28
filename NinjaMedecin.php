<?php
require_once 'Ninja.php';
class NinjaMedecin extends Ninja
{
    #[Override]
    public function __construct(string $nom, string $clan, string $rang, int $chakra, string $technique)
    {
        parent::__construct($nom, $clan, $rang, $chakra, $technique);
    }
    public function Soigner(): string
    {
        $this->addMission();
        return $this->nom . "Soigne les bléssés en utilisant " . $this->technique;
    }
}
