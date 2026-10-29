<?php
require_once 'Ninja.php';
require_once 'NinjaCombat.php';
require_once 'NinjaMedecin.php';
require_once 'NinjaSensoriel.php';
echo "Debut de la simulation de 2 missions consécutives " . PHP_EOL;
$Combattant = new NinjaCombat("Cader", "Namikaze", "Jaunin", 1000, "Destroyeur");
$soigneur = new NinjaMedecin("Lehande", "UZUMAKI", "Jaunin", 1000, "Guerison");
$Spirit = new NinjaSensoriel("Soma", "YUKIIRA", "JAUNIN", 1000, "Detection");

echo "Implémentation\n";
for ($i = 1; $i <= 2; $i++) {
    echo $Combattant->Combatre() . PHP_EOL;
    echo "\n";
    echo $soigneur->Soigner() . PHP_EOL;
    echo "\n";
    echo $Spirit->Esprit() . PHP_EOL;
    echo "\n";
}
//ACOMPLISSEMENT MISION
echo $Combattant->accomplirMission() . PHP_EOL;
echo "Nombre total de missions accomplies " . $Combattant->getMissions() . PHP_EOL;
echo "Chakra initiale : " . $Combattant->getChakra() . PHP_EOL;
echo "\n";
//Soigneur
echo $soigneur->accomplirMission() . PHP_EOL;
echo "Nombre total de missions accomplies " . $soigneur->getMissions() . PHP_EOL;
echo "Chakra initiale : " . $soigneur->getChakra() . PHP_EOL;
echo "\n";
//Spirit
echo $Spirit->accomplirMission() . PHP_EOL;
echo "Nombre total de missions accomplies " . $Spirit->getMissions() . PHP_EOL;
echo "Chakra initiale : " . $Spirit->getChakra() . PHP_EOL;
