<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medewerker inlog</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <header>
        <section class="header">
            <nav>
                <a href="Homepage.php"><img class="Logo" src="Images/Airport_logo.png" alt=""></a>
                <div class="nav_item">
                    <ul>
                        <li><a href="Homepage.php">HOME</a></li>
                        <li><a href="Vluchten.php">VLUCHTEN</a></li>
                        <li><a href="Parkeerplaats.php">PARKEREN</a></li>
                        <li><a href="#">PLATTEGROND</a></li>
                        <li><a href="Passagierinlog.php">INLOGGEN</a></li>
                        <li><a href="#">EN | NL</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <main>
        <section class="Inloggen">
            <H1>Inloggen als Medewerker</H1>
        </section>
        <section class="Inlog">
            <form class="center" action="Medewerkerportaal.php" method="get">
                <label for="Gebruikersnaam">Gebruikersnaam</label>
                <input id="Gebruikersnaam" type="text" placeholder="Bijv. Piet1234" maxlength="15" required>

                <label for="Wachtwoord">Wachtwoord</label>
                <input id="Wachtwoord" type="password" placeholder="Wachtwoord" maxlength="15"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                    required>
                <!-- Tutorial die ik hiervoor heb gebruikt is: https://www.w3schools.com/TAGS/att_input_pattern.asp-->

                <label for="Log-in"></label>
                <input id="Log-in" type="submit" value="Log in">
            </form>
        </section>
        <section class="DoorverwijzingInlog">
            <a href="Passagierinlog.php">
                <h3>Passagier log in</h3>
            </a>
        </section>
    </main>
    <footer>
        <a href="Privacyverklaring.php">Privacyverklaring</a>
        <p>Contact</p>
    </footer>
</body>

</html>