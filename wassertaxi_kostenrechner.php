
DAS GÜNSTIGSTE VERKEHRSMITTEL CODE(WASSERTAXI):

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wassertaxi in Bangkok</title>
</head>
<body>

<?php
// Informationen über das Wassertaxi
$verkehrsmittel = "Wassertaxi";
$grundgebuehr = 1.00; // Grundgebühr in Euro
$preisProKilometer =  // Preis pro Kilometer in Euro
$stauGebuehrProMinute = 2.00; // Gebühr im Stau pro Minute in Baht

// Ausgabe der Informationen
echo "<h1>Günstigstes Verkehrsmittel in Bangkok: $verkehrsmittel</h1>";
echo "<p>Der Taxipreis berechnet sich aus einer Grundgebühr von ca. $grundgebuehr Euro und einem Preis von $preisProKilometer Euro pro Kilometer.</p>";
echo "<p>Im Stau, bei einer Geschwindigkeit von weniger als sechs Stundenkilometern, wird zudem eine Gebühr von $stauGebuehrProMinute Baht pro Minute fällig.</p>";
?>

</body>
</html>
