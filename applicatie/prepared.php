<?php
if(!isset($_GET['genrenaam'])) {return;}
require_once 'db_connectie.php';
$genrenaam = $_GET['genrenaam'];

$sql = "SELECT stuknr, genrenaam FROM Stuk WHERE genrenaam = :genrenaam";

$query = $verbinding->prepare($sql);

$query->execute([':genrenaam' => $genrenaam]);
$result = $query->fetchAll();
var_dump($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $result;
    ?>
</body>
</html>