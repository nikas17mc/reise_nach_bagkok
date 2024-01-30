<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nachtmarkt</title>
    <link rel="stylesheet" href="../../../src/style/style.css">
</head>

<body>
    <header>
        <div class="logoC"><a href="../../../index.html"><img src="../../../public/otherImages/page_logo.png" alt=""
                    loading="lazy"></a></div>
        <ul class="hLiF">
            <li class="l"><a href="./golden_tria.php">Golden Triangle</a></li>
            <li class="l"><a href="./orig_thaiM.php">Thaimassage</a></li>
            <li class="l"><a href="./shopping_center.php">Shopping Center</a></li>
            <li class="l"><a href="./optio_ausfluege.php">Optionale Ausflüge</a></li>
            <li class="l"><a href="./"></a></li>
            <li class="l"><a href="./"></a></li>
        </ul>
    </header>
    <div style="margin: 8% 0px 1% 2%">
        <?php
        // Informationen über den Chatuchak Weekend Market
        $marktName = "Chatuchak Weekend Market";
        $beschreibung = "Einer der größten Wochenendmärkte der Welt und ein absolutes Muss bei einem ersten Bangkok Besuch.";

        // Informationen zu den Öffnungszeiten
        $oeffnungszeitenWoche = "Mi-Do von 7-18 Uhr";
        $oeffnungszeitenWochenende = "Sa-So von 9-18 Uhr";
        $freitagNightMarket = "Der Chatuchak Friday Night Market ist am Freitag von 18 Uhr bis Mitternacht geöffnet.";

        // Informationen zum Spazieren
        $bummelnInfo = "Mittlerweile besuchen wir den Chatuchak Weekend Market gerne zum spazieren, zum richtigen Nachtmarkt wird der Chatuchak Market nämlich nur Freitags,
da hat er von 18 Uhr bis Mitternacht geöffnet. Mittwoch, Donnerstags und Samstags kannst du dich ab etwa 9 Uhr ins Shopping-Paradies begeben.";

        // Ausgabe der Informationen
        echo "<h1>$marktName</h1>";
        echo "<p>$beschreibung</p>";

        echo "<h2>Öffnungszeiten:</h2>";
        echo "<p>$oeffnungszeitenWoche</p>";
        echo "<p>$oeffnungszeitenWochenende</p>";
        echo "<p>$freitagNightMarket</p>";

        echo "<h2>Spazieren:</h2>";
        echo "<p>$bummelnInfo</p>";
        ?>
        <?php
        // Informationen über Asiatique The Riverfront
        $ortName = "Asiatique The Riverfront";
        $beschreibung = "Ein Einkaufs- und Unterhaltungsviertel am Ufer des Chao Phraya-Flusses in Bangkok.";

        // Öffnungszeiten
        $oeffnungszeiten = "Täglich von 17:00 Uhr bis 24:00 Uhr";

        // Attraktionen
        $attraktionen = "Asiatique The Riverfront bietet eine Vielzahl von Attraktionen, darunter Einkaufsmöglichkeiten, Restaurants, Bars, Shows und mehr.";

        // Riesenrad
        $riesenrad = "Ein Höhepunkt ist das Riesenrad, das einen atemberaubenden Blick auf den Fluss und die Stadt bietet.";

        // Lage
        $standort = "Lage am Ufer des Chao Phraya-Flusses, leicht erreichbar von verschiedenen Teilen der Stadt.";

        // Ausgabe der Informationen
        echo "<h1>$ortName</h1>";
        echo "<p>$beschreibung</p>";

        echo "<h2>Öffnungszeiten:</h2>";
        echo "<p>$oeffnungszeiten</p>";

        echo "<h2>Attraktionen:</h2>";
        echo "<p>$attraktionen</p>";
        echo "<p>$riesenrad</p>";

        echo "<h2>Lage:</h2>";
        echo "<p>$standort</p>";
        ?>
    </div>
    <footer>
        <p>&copy; 2024 Reise nach Bangkok</p>
    </footer>
</body>

</html>