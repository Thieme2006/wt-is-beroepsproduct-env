<?php
require_once 'db_connectie.php';

$db = maakverbinding();

$query = "select c.naam, format (c.geboortedatum, 'dd/MM/yyyy') as geboortedatum, m.naam as Schoolnaam, m.plaatsnaam 
from Componist c left outer join  Muziekschool m on c.schoolId = m.schoolId";
$data = $db->query($query);

$html_table = '<table>';
$html_table = $html_table . '<tr><th>c.naam</th><th>c.geboortedatum</th><th>Schoolnaam</th><th>m.plaatsnaam</th></tr>';

// HUISWERK OPDRACHT 1 -----------------------------
while($rij = $data->fetch()) {
    $C_naam = $rij['naam'];
    $geboortedatum = $rij['geboortedatum'];
    $M_naam = $rij['Schoolnaam'];
    $plaatsnaam = $rij['plaatsnaam'];
    $html_table = $html_table . "<tr><td>$C_naam</td><td>$geboortedatum</td><td>$M_naam</td><td>$plaatsnaam</td></tr>";
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

