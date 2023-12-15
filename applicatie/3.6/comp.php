<?php
require_once 'db.connectie.php';


if(isset($_POST['opslaan'])){
    $naam           = $_POST['naam'];
    $geboortedatum  = $_POST['geboortedatum'];
    $schoolId       = $_POST['schoolId'];
    $componistId    = $_POST['componistId'];

    // Insert query
    $sql = 'INSERT INTO componist (naam, geboortedatum, schoolId, componistId)
            VALUES ( :naam, :geboortedatum, :schoolId, :componistId)';

    $query = $verbinding->prepare($sql);

    $success = $query->execute([
        ':naam' => $naam,
        ':geboortedatum' => $geboortedatum,
        ':schoolId' => $schoolId,
        ':componistId' => $componistId
    ]);

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
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componinst - nieuw</title>
    <link href="css/normalize.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?= $melding ?>
</body>
</html>