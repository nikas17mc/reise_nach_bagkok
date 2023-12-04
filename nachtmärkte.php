NACHTMÄRKTE CODE(CHATUCHAK FRIDAY NIGHT MARKET):

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatuchak Weekend Market</title>
</head>
<body>

<?php
// Informationen über den Chatuchak Weekend Market
$marktName = "Chatuchak Weekend Market";
$beschreibung = "Einer der größten Wochenendmärkte der Welt und ein absolutes Muss bei einem ersten Bangkok Besuch.";

// Informationen zu den Öffnungszeiten
$oeffnungszeitenWoche = "Mi-Do von 7-18 Uhr";
$oeffnungszeitenWochenende = "Sa-So von 9-18 Uhr";
$freitagNightMarket = "Der Chatuchak Friday Night Market ist am Freitag von 18 Uhr bis Mitternacht geöffnet.";

// Informationen zum Spazieren
$bummelnInfo = "Mittlerweile besuchen wir den Chatuchak Weekend Market gerne zum spazieren, zum richtigen Nachtmarkt wird der Chatuchak Market nämlich nur freitags, da hat er von 18 Uhr bis Mitternacht geöffnet. Mittwoch, Donnerstags und Samstags kannst du dich ab etwa 9 Uhr ins Shopping-Paradies begeben.";

// Ausgabe der Informationen
echo "<h1>$marktName</h1>";
echo "<p>$beschreibung</p>";

echo "<h2>Öffnungszeiten:</h2>";
echo "<p>$oeffnungszeitenWoche</p>";
echo "<p>$oeffnungszeitenWochenende</p>";
echo "<p>$freitagNightMarket</p>";

echo "<h2>Bummeln:</h2>";
echo "<p>$bummelnInfo</p>";
?>

</body>
</html>
