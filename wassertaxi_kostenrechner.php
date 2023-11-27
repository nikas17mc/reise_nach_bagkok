<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wassertaxi Kostenrechner</title>
</head>
<body>

<?php

// Funktion zur Berechnung der Wassertaxi-Kosten
function berechneWassertaxiKosten($kilometer, $geschwindigkeit, $stauzeit) {
    $grundgebuehr = 1;  // in Euro
    $preisProKilometer = 2;  // in Euro
    $stauGebuehrProMinute = 2;  // in Baht

    // Berechnung der Kosten ohne Stau
    $kostenOhneStau = $grundgebuehr + ($kilometer * $preisProKilometer);

    // Berechnung der Kosten mit Stau
    if ($geschwindigkeit < 6) {
        $stauGebuehr = $stauzeit * $stauGebuehrProMinute;
        $kostenMitStau = $kostenOhneStau + $stauGebuehr;
    } else {
        $kostenMitStau = $kostenOhneStau;
    }

    return $kostenMitStau;
}

// Beispielwerte für die Wassertaxi-Fahrt
$kilometer = 10;
$geschwindigkeit = 8;  // in Stundenkilometern
$stauzeit = 15;  // in Minuten

// Kosten berechnen
$wassertaxiKosten = berechneWassertaxiKosten($kilometer, $geschwindigkeit, $stauzeit);

// Ausgabe
echo "<h2>Wassertaxi Kostenrechner</h2>";
echo "<p>Strecke: $kilometer Kilometer</p>";
echo "<p>Geschwindigkeit: $geschwindigkeit km/h</p>";
echo "<p>Stauzeit: $stauzeit Minuten</p>";
echo "<p>Gesamtkosten: $wassertaxiKosten Baht</p>";

?>

</body>
</html>
