<?php
require_once 'db.connectie.php';


$melding = '';
$fouten = [];


if(isset($_POST['opslaan'])){
    $naam           = $_POST['naam'];
    $geboortedatum  = $_POST['geboortedatum'];
    $schoolId       = $_POST['schoolId'];
    $componistId    = $_POST['componistId'];

    // Controleer op lege velden en valideer componistId
    if (empty($componistId)) {
        $fouten[] = 'componistId is verplicht om in te vullen.';
    }

    if (empty($geboortedatum)) {
        $geboortedatum = null;
    }

    if (empty($schoolId)) {
        $schoolId = null;
    }

    if (!is_numeric($componistId)) {
        $fouten[] = 'componistId moet een numerieke waarde zijn.';
    }

    // Naam (not null, text)
    if (empty($naam)) {
        $fouten[] = 'naam is verplicht om in te vullen.';
    }

    if (count($fouten) === 0) {
        // Insert query
        $sql = 'INSERT INTO componist (naam, geboortedatum, schoolId, componistId)
                VALUES (:naam, :geboortedatum, :schoolId, :componistId)';

        $query = $verbinding->prepare($sql);

        $success = $query->execute([
            ':naam' => $naam,
            ':geboortedatum' => $geboortedatum,
            ':schoolId' => $schoolId,
            ':componistId' => $componistId 
        ]);
        $componistId = '';
        $naam = '';
        $geboortedatum = '';
        $schoolId='';

        if ($success) {
            $melding = 'Gegevens zijn opgeslagen in de database.';

            // Selecteer alle componisten
            $selectQuery = "SELECT * FROM componist";
            $result = $verbinding->query($selectQuery);

            if ($result) {
                echo '<h2>Alle componisten in de database:</h2>';
                echo '<table border="1">';
                echo '<tr><th>Componist ID</th><th>Naam</th><th>Geboortedatum</th><th>School ID</th></tr>';

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['componistId'] . '</td>';
                    echo '<td>' . $row['naam'] . '</td>';
                    echo '<td>' . $row['geboortedatum'] . '</td>';
                    echo '<td>' . $row['schoolId'] . '</td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo 'Er ging iets fout bij het ophalen van gegevens.';
            }
        } else {
            $melding = 'Er ging iets fout bij het opslaan.';
        }
    } else {
        // Fouten: maak een melding
        $melding = '<ul class="error">';
        foreach($fouten as $fout) {
            $melding .= '<li>'.$fout.'</li>';
        }
        $melding .= '</ul>';
    }
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componist - nieuw</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="#" method="post">
        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" values = "<?= $naam ?>" required><br>

        <label for="geboortedatum">Geboortedatum</label>
        <input type="date" id="geboortedatum" name="geboortedatum" value = "<?= $geboortedatum ?>"><br>

        <label for="schoolId">School ID</label>
        <input type="text" id="schoolId" name="schoolId" value = "<?= $schoolId ?>" ><br>

        <label for="componistId">Componist ID</label>
        <input type="text" id="componistId" name="componistId" value = " <?= $componistId ?>"required><br>

        <input type="reset" id="reset" name="reset" value="Wissen">
        <input type="submit" id="opslaan" name="opslaan" value="Opslaan">
    </form>

    <?php echo $melding; ?>
</body>

</html>
