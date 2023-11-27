<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reise nach Bangkok</title>
    <link rel="shortcut icon" href="./src/" src="./src/icons/my_picture.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #007BFF;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>Reise nach Bangkok</h1>

    <h2>Kosten und Transportmittel</h2>
    <p>Kosten: Möglichst preiswert (2 Personen)</p>
    <p>Transportmittel: Auto, Zug, Bus, Fahrrad, Schiff(Fähre), Flugzeug (möglichst wenig Zwischenstopps)</p>
    <p>Übernachtung / Überfährten sind separat auszuweisen</p>
    <p>Cooles 4 Sterne Hotel in Bangkok (zentral)</p>

    <?php
        // Beispiel PHP-Abschnitt für Hotelinformationen
        $hotelName = "Cool Hotel Bangkok";
        $hotelSterne = 4;
        $hotelLage = "Zentral";

        echo "<h2>Hotelinformationen</h2>";
        echo "<p>Name: $hotelName</p>";
        echo "<p>Sterne: $hotelSterne</p>";
        echo "<p>Lage: $hotelLage</p>";
    ?>

    <h2>Besichtigungen in Bangkok</h2>
    <ul>
        <li>Die wichtigsten Wats (bezogen auf die unterschiedlichen Religionen)</li>
        <li>Die wichtigsten Sehenswürdigkeiten der Stadt (Eintrittspreise, günstige Fortbewegung)</li>
        <li>Wie komme ich vom Flughafen in mein Hotel?</li>
    </ul>

    <h2>Verhaltensregeln und Tipps</h2>
    <ul>
        <li>Was darf ich in Thailand unter keinen Umständen tun?</li>
        <li>An welche Verhaltensregeln sollte ich mich halten? (Womit muss ich rechnen?)</li>
        <li>Trinkgeld?</li>
        <li>Original Thai-Massage</li>
    </ul>

    <!-- Weitere Abschnitte hier einfügen -->
Willkommen auf unsere Seite 

<form action="index.php" method="post"></form>
    <select name="drive" id="">
        <option value="1">Auto</option>
        <option value="2">Bus</option>
        <option value="3">Schiff (Fähre)</option>
        <option value="4">Zug</option>
        <option value="5">Flugzeug</option>
        <option value="6">Fahrrad</option>
    </select>
    <select name="star" id="">
        <option value="1">⭐</option>
        <option value="2">⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
    </select>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

}
?>

</body>
</html>
