SEHENSWÜRDIGKEITEN CODE
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehenswürdigkeiten in Bangkok</title>
</head>
<body>

<?php

// Funktion zur Ausgabe von Informationen zu Sehenswürdigkeiten
function displayAttraction($name, $cost, $recommendations) {
    echo "<h2>$name</h2>";
    echo "<p><strong>Kosten:</strong> $cost</p>";
    echo "<h3>Empfehlungen:</h3>";
    echo "<ul>";
    foreach ($recommendations as $recommendation) {
        echo "<li>$recommendation</li>";
    }
    echo "</ul>";
}

// Lumphini Park Informationen
$lumphiniPark = array(
    'name' => 'Lumphini Park',
    'cost' => 'Kostenlos',
    'recommendations' => array(
        'Früher Morgen: Ideal für Spaziergänge und Joggen.',
        'Abend: Beliebt für Sport, Yoga und Entspannung.',
        'Vermeidung der Mittagshitze: Besuche den Park in den Morgen- oder Abendstunden.'
    )
);

// Großer Palast Informationen
$grandPalace = array(
    'name' => 'Der Große Palast',
    'cost' => '200 Baht (etwa 6 Euro) pro Person',
    'recommendations' => array(
        'Früher Morgen: Vermeide den Andrang und genieße die Morgenluft.',
        'Wochentage: Besuche an Wochentagen für weniger Besucher.',
        'Saisonalität beachten: Vermeide die touristische Hochsaison und die Regenzeit.',
        'Respektiere die Öffnungszeiten und Kleidungsvorschriften.'
    )
);

// Wat Pho Informationen
$watPho = array(
    'name' => 'Wat Pho',
    'cost' => '200 Baht (etwa 6 Euro) pro Person',
    'recommendations' => array(
        'Weniger Menschenmassen: Besuche frühmorgens für ein angenehmes Erlebnis.',
        'Angenehmere Temperaturen: Erkunde den Tempel in kühleren Morgenstunden.',
        'Besseres Fotografieren: Nutze das natürliche Licht des frühen Morgens.',
        'Ruhe und Frieden: Genieße die ruhige Atmosphäre vor der Hektik des Tages.'
    )
);

// Sehenswürdigkeiten anzeigen
displayAttraction($lumphiniPark['name'], $lumphiniPark['cost'], $lumphiniPark['recommendations']);
displayAttraction($grandPalace['name'], $grandPalace['cost'], $grandPalace['recommendations']);
displayAttraction($watPho['name'], $watPho['cost'], $watPho['recommendations']);

?>

</body>
</html>
