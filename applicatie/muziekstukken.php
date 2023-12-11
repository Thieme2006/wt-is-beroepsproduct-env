
<?php
require_once 'db_connectie.php';


$genrenaam = $_GET['genrenaam'];

function maakDatabase()
{

    $db = maakVerbinding();

    $sql = $query = "SELECT stuknr, titel, genrenaam, omschrijving FROM muziekstukken INNER JOIN 
    genres ON muziekstukken.genre = genres.genrenaam ORDER BY stuknr ASC WHERE genrenaam = :genrenaam";
     
     $data = $db->prepare($sql);

    return $data;
}

function maakTabel(){

    $html_table = '<table>';
    $html_table = $html_table . '<tr><th>Stuknummer</th><th>Titel</th><th>Genrenaam</th><th>Omschrijving</th></tr>';

    $data = maakDatabase();

    if (isset($_GET['genrenaam'])) {
        $filter = $_GET['genrenaam'];
      } else {
        $filter = '';
      }

      while ($rij = $data->fetch()) {
        $stuknr = $rij['stuknr'];
        $titel = $rij['titel'];
        $genrenaam = $rij['genrenaam'];
        $omschrijving = $rij['omschrijving'];
        if ($filter == $genrenaam || empty($filter)) {

        $html_table = $html_table . "<tr><td>$stuknr</td><td>$titel</td><td>$genrenaam</td><td>$omschrijving</td></tr>";
    }
}
    $html_table = $html_table . "</table>";
    return $html_table;
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        td,
        th {
            text-align: center;
            padding: 10px 20px 10px 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <title>Titels</title>
</head>

<body>
    <h1>Muziek database</h1>
    <?php
    echo(maakTabel());
    ?>
</body>
</html>