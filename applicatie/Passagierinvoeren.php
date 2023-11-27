<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medewerker Portaal/Passagier invoeren</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
    <header>
        <section class="header">
            <nav>
                <a href="Homepage.php">
                    <img class="Logo" src="Images/Airport_logo.png" alt="">
                </a>
                <h2>Medewerker Portaal</h2>
                <div class="nav_item">
                    <ul>
                        <li><a href="Homepage.php">HOME</a></li>
                        <li><a href="Vluchten.php">VLUCHTEN</a></li>
                        <li><a href="Parkeerplaats.php">PARKEREN</a></li>
                        <li><a href="#">PLATTEGROND</a></li>
                        <li>Medewerker</li>
                        <li><a href="Homepage.php">Uitloggen</a></li>
                        <li><a href="#">EN | NL</a></li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>
    <main>
        <div class="flex-box-Medewerker">
            <div class="flex-box-medewerker_menu">
                <a href="Medewerkerportaal.php">Homepage Medewerker</a>
                <a href="Vluchtenoverzicht.php">Vlucht overzicht</a>
                <a href="Vluchtinvoer.php">Vlucht invoeren</a>
                <a href="Passagierinvoeren.php">Passagier invoeren</a>
                <a href="Bagage_invoeren.php">Bagage invoeren</a>
            </div>
            <div>
                <h2>Passagier invoeren</h2>
                <div>
                    <form class="flex-box-Medewerker_invoer" action="Medewerkerportaal.php" method="get">
                        <label for="Email">Email adres</label>
                        <input id="Email" type="email" placeholder="bijv. Pietjepuk@gmail.com" required>

                        <label for="Vluchtnummer">Vluchtnummer</label>
                        <input id="Vluchtnummer" type="text" placeholder="Bijv. 1234KLM" maxlength="7" required>

                        <label for="Voornaam">Voornaam</label>
                        <input id="Voornaam" type="text" placeholder="Voornaam" maxlength="15" required>

                        <label for="Tussenvoegsel">Tussenvoegsel</label>
                        <input id="Tussenvoegsel" type="text" placeholder="Bijv. V.d." maxlength="6">

                        <label for="Achternaam">Achternaam</label>
                        <input id="Achternaam" type="text" placeholder="Achternaam" maxlength="20" required>

                        <label for="Verzenden"></label>
                        <input id="Verzenden" type="submit" value="Maak vlucht aan">
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <a href="Privacyverklaring.php">Privacyverklaring</a>
        <p>Contact</p>
    </footer>
</body>

</html>