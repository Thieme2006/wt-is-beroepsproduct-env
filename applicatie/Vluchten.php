<!DOCTYPE html>
<html lang="NL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vluchten</title>
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
        <div class="flex-box-Medewerker">
            <div class="Vluchtenmenu">
                <form class="Vluchtmenu" action="#" method="post">
                    <label for="Vluchtnummer">Vluchtnummer</label>
                    <input id="Vluchtnummer" type="text" placeholder="Bijv. 1234KLM" maxlength="8">

                    <label for="Datum">Datum</label>
                    <input id="Datum" type="date">

                    <label for="Vertrektijd"></label>
                    <input id="Vertrektijd" type="time">

                    <label for="Luchthaven">Luchthaven</label>
                    <input id="Luchthaven" type="text" maxlength="4" required>

                    <label for="ArrivesGLR">Arrives at GLR</label>
                    <input id="ArrivesGLR" type="checkbox">

                    <label for="DepartsGLR">Departs from GLR</label>
                    <input id="DepartsGLR" type="checkbox">

                    <label for="Refresh"></label>
                    <input id="Refresh" type="submit" value="Refresh">
                </form>
            </div>
            <div>
                <section class="Vluchten">
                    <h1>Vluchten</h1>
                    <div class="row">
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - BER</h3>
                                <h4>Departs 10:10</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - POS</h3>
                                <h4>Departs 11:05</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - LGW</h3>
                                <h4>Departs 14:50</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - MUC</h3>
                                <h4>Departs 18:00</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>MUC - GLR</h3>
                                <h4>Departs 10:10</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>POS - GLR</h3>
                                <h4>Departs 11:05</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>BER - GLR</h3>
                                <h4>Departs 14:50</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>LGW - GLR</h3>
                                <h4>Departs 18:00</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - BER</h3>
                                <h4>Departs 10:10</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - POS</h3>
                                <h4>Departs 11:05</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - LGW</h3>
                                <h4>Departs 14:50</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>GLR - MUC</h3>
                                <h4>Departs 18:00</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>MUC - GLR</h3>
                                <h4>Departs 10:10</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>POS - GLR</h3>
                                <h4>Departs 11:05</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>BER - GLR</h3>
                                <h4>Departs 14:50</h4>
                            </a>
                        </div>
                        <div class="Vlucht-col">
                            <a href="VluchtenDetailpag.php">
                                <img src="Images/PlaceholderKlein.png" alt="">
                                <h3>LGW - GLR</h3>
                                <h4>Departs 18:00</h4>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer>
        <a href="Privacyverklaring.php">Privacyverklaring</a>
        <p>Contact</p>
    </footer>
</body>

</html>