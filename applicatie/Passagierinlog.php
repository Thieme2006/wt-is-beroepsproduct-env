<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagiers inlog</title>
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
            <H1>Inloggen als Passagier</H1>
        </section>
        <section class="Inlog">
            <form class="Inlogborder" action="Passagiersportaal.php" method="get">
                <label for="Email">Email</label>
                <input id="Email" type="email" placeholder="Bijv. Piet1@gmail.com" required>

                <label for="Passagiersnummer">Passagiersnummer</label>
                <input id="Passagiersnummer" type="text" placeholder="Bijv. U123456789" maxlength="10" required>

                <label for="Vluchtnummer">Vluchtnummer</label>
                <input id="Vluchtnummer" type="text" placeholder="Bijv. 1234KLM" maxlength="7" required>

                <label for="Log-in"></label>
                <input id="Log-in" type="submit" value="Log in">
            </form>
        </section>
        <section class="DoorverwijzingInlog">
            <a href="Medewerkerninlog.php">
                <h3>Medewerker log in</h3>
            </a>
        </section>
    </main>
    <footer>
        <a href="Privacyverklaring.php">Privacyverklaring</a>
        <p>Contact</p>
    </footer>
</body>

</html>