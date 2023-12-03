<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET['omschrijving']) && isset($_GET['datum'])) {
    $omschrijving = $_GET['omschrijving'];
    $datum = $_GET['datum'];
    $huidigeDatum = new DateTime('now');
    $opgegevenDatum = new DateTime($datum);
    $verschil = $huidigeDatum->diff($opgegevenDatum);

    echo "Het duurt nog " . $verschil->days . " dagen en " . $verschil->h . " uur tot " . $omschrijving;
} else {
    echo "Fout: Omschrijving en/of datum ontbreekt in de URL.";
}
?>

opdracht 2
<?php
$huidigeDag = date("w");

if ($huidigeDag == 1  $huidigeDag == 2) {
    echo "Maandag, dinsdag: 'Nee, nog lang niet.'";
} elseif ($huidigeDag == 3  $huidigeDag == 4) {
    echo "Woensdag, donderdag: 'Nog even wachten.'";
} elseif ($huidigeDag == 5) {
    echo "Vrijdag: 'Bijna!'";
} elseif ($huidigeDag == 6 || $huidigeDag == 0) {
    echo "Zaterdag, zondag: 'Jaaaaa, het is weekend!'";
} else {
    echo "Fout: Ongeldige dag.";
}
?>
voorbereiding les 3
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
?>


</body>
</html>