<?php
require_once 'db_connectie.php';

$db = maakverbinding();

$query = 'SELECT stuknr, titel, genrenaam, n.omschrijving
FROM stuk s LEFT OUTER JOIN niveau n ON s.niveaucode = n.niveaucode';

$data = $db->query($query);

$html_table = '<table>';
$html_table = $html_table . '<tr><th>stuknr</th><th>titel</th><th>genrenaam</th><th>n.omschrijving</th></tr>';


while($rij = $data->fetch()) {
    $titel = $rij['titel'];
    $stuknr = $rij['stuknr'];
    $genre = $rij['genrenaam'];
    $niveau = $rij['omschrijving'];
    $html_table = $html_table . "<tr><td>$stuknr</td><td>$titel</td><td>$genre</td><td>$niveau</td></tr>";
}

$html_table = $html_table . "</table>";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoi</title>
</head>
<body>
    <style>
        table,
        td,
        th {
            padding: 0px 2px 0px 5px;
            border: 1px solid black;
        }
    </style>
    <h1>Muzieknummerss</h1>
    <?php
    echo ($html_table);
    ?>
</body>
</html>

