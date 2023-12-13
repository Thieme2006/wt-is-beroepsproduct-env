<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <input type="text" placeholder="componistId" id="componistId" name="componistId" required>
</label>
<label for="">Naam
        <input type="text" placeholder="naam" id="naam" name="naam" required>
        </label>
        <input type="date" placeholder="geboortedatum" id="geboortedatum" name="geboortedatum">
        <input type="text" placeholder="schoolId" id="schoolId" name="schoolId">
        <input type= "reset" id="reset" name="reset" value="reset">
        <input type="submit" id="opslaan" name="opslaan" value="opslaan">
    </form>
</body>
</html>