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

<?php
$huidigeDag = date("w");

if ($huidigeDag == 1  ||  $huidigeDag == 2) {
    echo "Maandag, dinsdag: 'Nee, nog lang niet.'";
} elseif ($huidigeDag == 3 || $huidigeDag == 4) {
    echo "Woensdag, donderdag: 'Nog even wachten.'";
} elseif ($huidigeDag == 5) {
    echo "Vrijdag: 'Bijna!'";
} elseif ($huidigeDag == 6 || $huidigeDag == 0) {
    echo "Zaterdag, zondag: 'Jaaaaa, het is weekend!'";
} else {
    echo "Fout: Ongeldige dag.";
}
?>