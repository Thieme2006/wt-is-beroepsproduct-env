<?php

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    <?php
$naam = 'Thieme';
$vandaag = new DateTime();
$target = new DateTimeImmutable('2023-12-05');

$verschil = $vandaag->diff($target);

$sintdatum = date_diff($vandaag, $target);
$datum = $vandaag->format('d-m-Y');
$omschrijving = $sintdatum = GEENDATUM;



    echo 'Het duurt nog ' . $verschil->days . ' dagen en ' . $verschil->h . ' uur tot pakjesavond!';
    ?> 
</body>
</html>

