<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medewerker Portaal/Vluchten invoeren</title>
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
                <h2>Vlucht invoeren</h2>
                <div>
                    <form class="flex-box-Medewerker_invoer" action="Medewerkerportaal.php" method="get">
                        <label for="Vluchtnummer">Vluchtnummer</label>
                        <input id="Vluchtnummer" type="text" placeholder="Bijv. 1234KLM" maxlength="7" required>

                        <label for="Max_zitplaatsen">Max zitplaatsen</label>
                        <input id="Max_zitplaatsen" type="text" placeholder="Bijv. 250 zitplaatsen" required>

                        <label for="Max_gewicht">Max. te behouden gewicht</label>
                        <input id="Max_gewicht" type="number" placeholder="V.B. 20.000kg" min="20" max="100.000"
                            required>

                        <label for="Vliegmaatschappij">Vliegmaatschappij</label>
                        <input id="Vliegmaatschappij" type="text" placeholder="Bijv. PietpukAir" required>

                        <label for="Vertrek-bestemming">Vertrek bestemming</label>
                        <input id="Vertrek-bestemming" type="text" placeholder="Bijv. GLR" maxlength="3" required>

                        <label for="Datumvertrek">Datumvertrek</label>
                        <input id="Datumvertrek" type="date" required>

                        <label for="Vertrektijd"> Vertrektijd</label>
                        <input id="Vertrektijd" type="time" required>

                        <label for="Aankomstbestemming">Aankomstbestemming</label>
                        <input id="Aankomstbestemming" type="text" placeholder="Bijv. BER" required maxlength="3">

                        <label for="Aankomsttijd">Aankomsttijd</label>
                        <input id="Aankomsttijd" type="time" required>

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