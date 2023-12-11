<?php
require_once 'db_connectie.php';

$db = maakverbinding();

$genrenaam = $_GET['genrenaam'];

$query = 'SELECT * FROM Stuk WHERE genrenaam = '.$genrenaam;

$data = $db->query($query);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'hoi';
    ?>
</body>
</html>