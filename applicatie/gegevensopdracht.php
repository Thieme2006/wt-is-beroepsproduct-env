<?php

require_once 'db_connectie.php';
function maakDatabase()
{
    $fouten = [];
    $db = maakVerbinding();

    if (isset($_POST['componistId']) && isset($_POST['naam']) && isset($_POST['geboortedatum']) && isset($_POST['schoolId'])) {
        $componistId = $_POST['componistId'];
        $naam = $_POST['naam'];
        $geboortedatum = $_POST['geboortedatum'];
        $schoolId = $_POST['schoolId'];
        $sql = 'INSERT INTO componist (componistId, naam, geboortedatum, schoolId)
     VALUES (:componistId, :naam, :geboortedatum, :schoolId)';
     

     if (empty($componistId)) {
        $fouten[] = 'ComponistId is verplicht om in te vullen.';
    }
    
    if (!is_numeric($componistId)) {
        $fouten[] = 'ComponistId moet een numerieke waarde zijn.';
    }
    
    // Naam (not null, text)
    if (empty($naam)) {
        $fouten[] = 'Naam is verplicht om in te vullen.';
    }

    if(preg_match('/^[a-zA-Z]+/',$naam)){
        $fouten[] = 'Naam mag geen nummers bevatten.';
    }
    
     if(empty($geboortedatum)){
         $geboortedatum = null;
     }
    if (empty($schoolId)){
         $schoolId = null;
     }

     if (count($fouten) > 0) {
        // Fouten: maak een melding
        $melding = '<ul class="error">';
    
        foreach($fouten as $fout)
        {
            $melding .= '<li>'.$fout.'</li>';
    
        }
        $melding .= '</ul>';
    } else
    {
        $gegevensInvoeren = $db->prepare($sql);
        $gegevensInvoeren->execute(['componistId' => $componistId, 'naam' => $naam, 'geboortedatum' => $geboortedatum, 'schoolId' => $schoolId]);
        $melding = 'Er ging iets fout met het invoeren van de gegevens.';

        if($gegevensInvoeren){
            $melding = 'De gegevens zijn succesvol ingevoerd.';
        }   
     }

        echo $melding;
    }

    $query = 'SELECT * FROM Componist';
    $data = $db->prepare($query);
    $data->execute();
    return $data;
}

function maakTabel() {
    $data = maakDatabase();
    $html_table = '<table>';
    $html_table = $html_table . '<tr><th>componistId</th><th>Naam</th><th>Geboortedatum</th><th>SchoolId</th></tr>';

    while ($rij = $data->fetch()) {
        $componistId = $rij['componistId'];
        $naam = $rij['naam'];
        $geboortedatum = $rij['geboortedatum'];
        $schoolId = $rij['schoolId'];

        $html_table = $html_table . "<tr><td>$componistId</td><td>$naam</td><td>$geboortedatum</td><td>$schoolId</td></tr>";
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
<style>
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input{
        margin: auto 1rem;
    }
</style>
<h1>Muziek database</h1>
    <form action="gegevensopdracht.php" method="post">
        <label for="componistId">ComponistId
        <input type="text" placeholder="ComponistID" id="componistId" name="componistId" value="<?= $componistId ?>">
</label>
<label for="">Naam
        <input type="text" placeholder="naam" id="naam" name="naam" value="<?= $naam?>" required>
        </label>
        <input type="date" placeholder="geboortedatum" id="geboortedatum" name="geboortedatum" value="<?= $geboortedatum?>">
        <input type="text" placeholder="schoolId" id="schoolId" name="schoolId" value="<?= $schoolId?>">
        <input type= "reset" id="reset" name="reset" value="reset">
        <input type="submit" id="opslaan" name="opslaan" value="opslaan">
    </form>
        <?php
        echo (maakTabel());
        ?>
</body>
</html>