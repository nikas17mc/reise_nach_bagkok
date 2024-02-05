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
            margin: 8% auto;
            padding: 20px;
            background-color: #1c1c1c;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        h1 {
            color: #ffcc00;
            font-size: 2.5em;
            text-align: center;
        }

        .destination {
            margin: 20px 0;
            padding: 15px;
            background-color: #333;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .destination p {
            font-size: 1.2em;
            line-height: 1.6;
            margin: 0;
            color:white;
        }

        .destination::before {
            content: "🌍";
            font-size: 2em;
            display: block;
            text-align: center;
            margin-bottom: 10px;
        }

        .destination:hover {
            background-color: #555;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }

            .destination p {
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
            <li class="l"><a href="./orig_thaiM.php">Thaimassage</a></li>
        </ul>
    </header>
    <div class="container">
        <?php
        // Informationen über die Reiseziele
        $ayutthaya = "Ayutthaya-Tempelstadt: Eine Tagesreise nach Ayutthaya, der alten Hauptstadt von Thailand, ist eine beliebte Option. Dort kannst du beeindruckende Tempelruinen erkunden und mehr über die Geschichte des Landes erfahren.";

        $floatingMarket = "Damnoen Saduak Floating Market: Besuche einen der schwimmenden Märkte in der Nähe von Bangkok, wie den Damnoen Saduak Floating Market. Hier kannst du frische Produkte und lokale Spezialitäten direkt von Booten kaufen.";

        $jimThompsonHouse = "Jim Thompson House: Das Jim Thompson House ist ein Museum, das dem amerikanischen Unternehmer Jim Thompson gewidmet ist. Es präsentiert eine beeindruckende Sammlung von Kunstwerken und Artefakten aus Thailand.";

        $erawanNationalpark = "Erawan-Nationalpark: Wenn du die Natur liebst, bietet der Erawan-Nationalpark mit seinen sieben atemberaubenden Wasserfällen und Wanderwegen eine großartige Gelegenheit für einen Tagesausflug.";

        $maeklongRailwayMarket = "Maeklong Railway Market: Erlebe den faszinierenden Maeklong Railway Market, auf dem Händler ihre Stände direkt neben den Bahngleisen aufbauen. Wenn der Zug kommt, werden die Stände schnell zur Seite geschoben.";

        $artsAndCultureCenter = "Bangkok Arts and Culture Center: Tauche in die zeitgenössische Kunstszene Thailands im Bangkok Arts and Culture Center ein. Hier findest du wechselnde Ausstellungen, Performances und kulturelle Veranstaltungen.";

        $chinatown = "Chinatown: Verbringe einen Tag in Bangkoks Chinatown, wo du köstliche chinesische Gerichte probieren, Tempel besuchen und durch die lebhaften Straßen schlendern kannst.";

        $khaoSokNationalpark = "Khao Sok Nationalpark: Wenn du bereit bist, etwas weiter zu reisen, bietet der Khao Sok Nationalpark mit seinem beeindruckenden Dschungel, dem Cheow Lan See und der vielfältigen Tierwelt eine beeindruckende Naturkulisse.";

        // Ausgabe der Informationen
        echo "<h1>Beliebte Reiseziele in Thailand</h1>";

        echo "<div class='destination'>";
        echo "<p>$ayutthaya</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$floatingMarket</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$jimThompsonHouse</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$erawanNationalpark</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$maeklongRailwayMarket</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$artsAndCultureCenter</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$chinatown</p>";
        echo "</div>";

        echo "<div class='destination'>";
        echo "<p>$khaoSokNationalpark</p>";
        echo "</div>";
        ?>
    </div>
    <footer>
        <p>&copy; 2024 Reise nach Bangkok</p>
    </footer>
</body>

</html>