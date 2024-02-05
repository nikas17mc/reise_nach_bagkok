<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Originale Thaimassage</title>
    <link rel="stylesheet" href="../../../src/style/style.css">
    <style>
        .container {
            max-width: 800px;
            margin: 8% 0 1% 2%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1,
        h2,
        p {
            color: #333;
        }

        h1 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }

        h2 {
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
        }

        .spa-info {
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 1.8em;
            }

            h2 {
                font-size: 1.5em;
            }

            p {
                font-size: 1em;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logoC"><a href="../../../index.html"><img src="../../../public/otherImages/page_logo.png" alt=""
                    loading="lazy"></a></div>
        <ul class="hLiF">
            <li class="l"><a href="./night_market.php">Night Market</a></li>
            <li class="l"><a href="./golden_tria.php">Golden Triangle</a></li>
            <li class="l"><a href="./shopping_center.php">Shopping Center</a></li>
            <li class="l"><a href="./optio_ausfluege.php">Optionale Ausflüge</a></li>
        </ul>
    </header>
    <div class="container">
        <?php
        // Informationen zu den Massageeinrichtungen
        $massageSpas = [
            "Wat Pho Traditional Thai Massage School" => "Wat Pho ist nicht nur einer der wichtigsten Tempel in Bangkok, sondern beherbergt auch eine renommierte Massage-Schule. Die Masseure hier werden gründlich ausgebildet und bieten traditionelle Thai-Massagen von hoher Qualität an.",

            "Health Land Spa & Massage" => "Health Land ist eine bekannte Kette von Spas in Bangkok, die für ihre professionellen Dienstleistungen und entspannende Atmosphäre bekannt ist. Sie bieten verschiedene Arten von Massagen, einschließlich traditioneller Thai-Massage, in einer sauberen und komfortablen Umgebung an.",

            "Asia Herb Association" => "Dies ist eine beliebte Wahl für Einheimische und Touristen gleichermaßen. Die Asia Herb Association ist für ihre qualifizierten Therapeuten und authentischen Thai-Massagen bekannt. Die Einrichtungen sind sauber und entspannend.",

            "Lek Massage Bangkok" => "Lek Massage ist eine etablierte Einrichtung in Bangkok, die sich auf traditionelle Thai-Massagen spezialisiert hat. Die Masseure sind gut ausgebildet, und die Preise sind in der Regel angemessen."
        ];

        // Informationen zu den Massagepreisen und Öffnungszeiten
        $massagePrices = "Der Preis für eine Stunde Thaimassage liegt durchschnittlich bei 200 Baht bis 350 Baht (5 bis 8,70 Euro)";
        $openingHours = "Die Öffnungszeiten können variieren. Grundsätzlich sind die Öffnungszeiten von 10:00 bis 23:00 oder 0:00 Uhr.";

        // Ausgabe der Informationen
        echo "<h1>Thai-Massage in Bangkok</h1>";

        foreach ($massageSpas as $spaName => $spaInfo) {
            echo "<div class='spa-info'>";
            echo "<h2>{$spaName}</h2>";
            echo "<p>{$spaInfo}</p>";
            echo "</div>";
        }

        echo "<div class='spa-info'>";
        echo "<h2>Massagepreise</h2>";
        echo "<p>{$massagePrices}</p>";
        echo "</div>";

        echo "<div class='spa-info'>";
        echo "<h2>Öffnungszeiten</h2>";
        echo "<p>{$openingHours}</p>";
        echo "</div>";
        ?>
    </div>
    <footer>
        <p>&copy; 2024 Reise nach Bangkok</p>
    </footer>
</body>

</html>