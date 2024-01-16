
ORIGINALE THAIMASSAGE CODE:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thai-Massage in Bangkok</title>
</head>
<body>

<?php

echo "<h1>Thai-Massage in Bangkok</h1>";

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
echo "<h2>1. Wat Pho Traditional Thai Massage School</h2>";
echo "<p>{$massageSpas['Wat Pho Traditional Thai Massage School']}</p>";

echo "<h2>2. Health Land Spa & Massage</h2>";
echo "<p>{$massageSpas['Health Land Spa & Massage']}</p>";

echo "<h2>3. Asia Herb Association</h2>";
echo "<p>{$massageSpas['Asia Herb Association']}</p>";

echo "<h2>4. Lek Massage Bangkok</h2>";
echo "<p>{$massageSpas['Lek Massage Bangkok']}</p>";

echo "<h2>5. Massagepreise</h2>";
echo "<p>{$massagePrices}</p>";

echo "<h2>6. Öffnungszeiten</h2>";
echo "<p>{$openingHours}</p>";

?>

</body>
</html>
