<?php
//Maak een array: $eenTMTien die gevuld is met de getallen 1 t/m 10.
$eenTMTien = range(1, 10);

//Maak een array: $zesTMVijftien die gevuld is met de getallen 6 t/m 15.
$zesTMVijftien = range(6, 15);

//Maak een array: $samengevoegd door de array uit onderdeel 1 en 2 samen te voegen (je krijgt dus een array met de getallen 1 t/m 15 en met duplicaten). Kijk of je eruit komt door array_merge te gebruiken.
$samengevoegd = array_merge($eenTMTien, $zesTMVijftien);

// Maak een array: $film met daarin de volgende keys en vul deze array met voorbeeldwaarden:
$film = array(
    'titel' => 'Voorbeeldfilm',
    'jaar' => 2022,
    'regisseur' => 'Regisseur Naam',
    'hoofdrolspelers' => array('Acteur1', 'Acteur2', 'Acteur3')
);

echo "eenTMTien: ";
print_r($eenTMTien);

echo "zesTMVijftien: ";
print_r($zesTMVijftien);

echo "samengevoegd: ";
print_r($samengevoegd);

echo "film: ";
print_r($film);