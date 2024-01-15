
TRINKGELD BANGKOK CODE:

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trinkgeld in Bangkok</title>
</head>
<body>

<?php
// Funktion zur Anzeige von Informationen zu Trinkgeldpraktiken
function zeigeTrinkgeldInfo($situation, $beschreibung) {
    echo "<h2>$situation</h2>";
    echo "<p>$beschreibung</p>";
}

// Informationen zu Trinkgeldpraktiken
$trinkgeldPraktiken = [
    "Restaurants und Cafés" => "Trinkgeld ist in vielen Restaurants und Cafés in Bangkok nicht unbedingt erforderlich, da oft bereits eine Servicegebühr von 10% in der Rechnung enthalten ist. Falls keine Servicegebühr aufgeführt ist, ist es üblich, etwa 5-10% Trinkgeld zu geben.",
    "Taxifahrer" => "Es ist normal, den Betrag aufzurunden, wenn du ein Taxi benutzt. Zum Beispiel, wenn die Fahrt 49 Baht kostet, könntest du 50 Baht bezahlen. In teureren Taxis oder bei längeren Fahrten könntest du großzügiger sein.",
    "Hotels" => "In Hotels ist es üblich, Trinkgeld für den Zimmerservice, das Reinigungspersonal und den Gepäckträger zu geben. Einige Reisende geben etwa 20-50 Baht pro Tag für das Reinigungspersonal und 20-100 Baht für Gepäckträger, abhängig von der Hotelklasse und dem Service.",
    "Spa und Wellness" => "Wenn du Wellnessdienstleistungen in Anspruch nimmst, ist es gängig, etwa 10% Trinkgeld zu geben, wenn der Service nicht bereits in der Rechnung enthalten ist."
];

// Alle Informationen anzeigen
foreach ($trinkgeldPraktiken as $situation => $beschreibung) {
    zeigeTrinkgeldInfo($situation, $beschreibung);
    echo "<hr>";
}
?>

</body>
</html>
