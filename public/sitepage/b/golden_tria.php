<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Triangle</title>
    <link rel="stylesheet" href="../../../src/style/style.css">
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 8%;
        }

        h1, h2 {
            color: #333;
        }

        h1 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }

        p, b {
            color: #555;
        }

        b {
            margin-top: 10px;
            display: block;
        }

        .info-section {
            margin-top: 20px;
        }

        .route-section {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logoC"><a href="../../../index.html"><img src="../../../public/otherImages/page_logo.png" alt=""
                    loading="lazy"></a></div>
        <ul class="hLiF">
            <li class="l"><a href="./night_market.php">Night Market</a></li>
            <li class="l"><a href="./orig_thaiM.php">Thaimassage</a></li>
            <li class="l"><a href="./shopping_center.php">Shopping Center</a></li>
            <li class="l"><a href="./optio_ausfluege.php">Optionale Ausflüge</a></li>
        </ul>
    </header>
    <div class="container">
    <?php
    echo "<h1>Das Goldene Dreieck</h1>";

    echo "<p>Das Goldene Dreieck ist eine Region in Südostasien, die sich über Teile von Thailand, Laos und Myanmar erstreckt. Historisch gesehen wurde der Begriff 'Goldenes Dreieck' mit dem illegalen Opiumhandel in Verbindung gebracht, der in dieser Region weit verbreitet war. Heutzutage hat sich die Region jedoch weiterentwickelt, und Tourismus ist zu einem wichtigen wirtschaftlichen Faktor geworden.</p>";

    echo "<div class='info-section'>";
    echo "<h2>Informationen zum Goldenen Dreieck:</h2>";

    echo "<b>Lage:</b> Das Goldene Dreieck liegt im Grenzgebiet von Thailand, Laos und Myanmar. Die wichtigsten Städte in der Nähe sind Chiang Rai in Thailand, Tachileik in Myanmar und Houayxay in Laos.";
    echo "<b>Tourismus:</b> Die Region zieht Touristen aufgrund ihrer einzigartigen kulturellen Vielfalt, Landschaften und traditionellen Dörfern an. Touristen können Bootsfahrten auf dem Mekong-Fluss unternehmen, lokale Märkte besuchen und die reiche Kultur der Bergvölker erleben.";
    echo "</div>";

    echo "<div class='route-section'>";
    echo "<h2>Beste Route:</h2>";

    echo "<b>Startpunkt: Chiang Rai, Thailand:</b> Chiang Rai ist eine häufige Ausgangsbasis für Reisen ins Goldene Dreieck. Besuchen Sie den Weißen Tempel (Wat Rong Khun) und den Blauen Tempel (Wat Rong Suea Ten) in Chiang Rai.";
    echo "<b>Houayxay, Laos:</b> Nehmen Sie einen Flussübergang von Chiang Khong in Thailand nach Houayxay in Laos. Das Visum für Laos kann an der Grenze erworben werden. Erkunden Sie das Dorf und besuchen Sie den Wat Chom Khao Manilat-Tempel.";
    echo "<b>Tachileik, Myanmar:</b> Fahren Sie nach Tachileik in Myanmar. Beachten Sie, dass für die Einreise nach Myanmar ein Visum erforderlich ist. Besuchen Sie lokale Märkte und Sehenswürdigkeiten.";
    echo "<b>Bootstour auf dem Mekong:</b> Machen Sie eine Bootsfahrt auf dem Mekong-Fluss, um die atemberaubende Landschaft zu genießen. Unterwegs können Sie auf kleine Inseln und traditionelle Dörfer stoßen.";
    echo "<b>Rückkehr nach Chiang Rai:</b> Kehren Sie nach Chiang Rai zurück, um Ihre Reise zu beenden.";
    echo "</div>";
    ?>
</div>


    <footer>
        <p>&copy; 2024 Reise nach Bangkok</p>
    </footer>
</body>

</html>