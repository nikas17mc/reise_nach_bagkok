NACHTMÄRKTE CODE

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangkok Nachtmärkte</title>
</head>
<body>

<?php

// Funktion zur Ausgabe von Informationen zu Nachtmärkten
function displayNightMarket($name, $description, $openingHours) {
    echo "<h2>$name</h2>";
    echo "<p>$description</p>";
    echo "<p><strong>Öffnungszeiten:</strong> $openingHours</p>";
}

// Chatuchak Friday Night Market Informationen
$chatuchakFridayNightMarket = array(
    'name' => 'Chatuchak Friday Night Market',
    'description' => 'Der Chatuchak Friday Night Market ist am Freitag von 18 Uhr bis Mitternacht geöffnet.',
    'openingHours' => 'Mi-Do: 7-18 Uhr, Sa-So: 9-18 Uhr'
);

// Jodd Fairs Night Market Informationen
$joddFairsNightMarket = array(
    'name' => 'Jodd Fairs Night Market',
    'description' => 'Der Jodd Fairs Nightmarket ist der wohl hippste und aktuell angesagteste Nachtmarkt Bangkoks. Auf dem Jodd Fairs Nightmarket findest du eine geniale Auswahl an leckeren Köstlichkeiten und ein modernes Ambiente.',
    'openingHours' => 'Öffnungszeiten variieren. Bitte überprüfen Sie die aktuellen Zeiten vor dem Besuch.'
);

// Nachtmärkte anzeigen
displayNightMarket($chatuchakFridayNightMarket['name'], $chatuchakFridayNightMarket['description'], $chatuchakFridayNightMarket['openingHours']);
displayNightMarket($joddFairsNightMarket['name'], $joddFairsNightMarket['description'], $joddFairsNightMarket['openingHours']);

?>

</body>
</html>
