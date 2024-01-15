
FEIERTAGE CODE:

!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangkok Feiertage</title>
</head>
<body>

<?php
// Funktion zur Anzeige von Festivalinformationen
function zeigeFestivalInfo($name, $wann, $wie) {
    echo "<h2>$name</h2>";
    echo "<p><strong>Wann:</strong> $wann</p>";
    echo "<p><strong>Wie:</strong> $wie</p>";
}

// Festivalinformationen
$feste = [
    "Songkran" => [
        "Wann" => "13. bis 15. April jeden Jahres",
        "Wie" => "Songkran ist bekannt für das Wasserfest, bei dem die Menschen sich gegenseitig mit Wasser bespritzen, um Reinigung und Neuanfang zu symbolisieren. Es ist auch eine Zeit des Respekts gegenüber Älteren, bei dem Wasser mit duftenden Blüten oder Puder versetzt sein kann."
    ],
    "Loy Krathong" => [
        "Wann" => "Normalerweise im November",
        "Wie" => "Während Loy Krathong setzen die Menschen kleine, mit Blumen geschmückte Krathongs (schwimmende Laternen) auf Flüsse und Seen, um sich für das vergangene Jahr zu bedanken und Glück und Erfolg für die Zukunft zu wünschen. In Bangkok finden oft Paraden, Lichtshows und kulturelle Veranstaltungen statt."
    ],
    "Magha Puja" => [
        "Wann" => "Im Vollmondmonat des dritten Monats im thailändischen Mondkalender (normalerweise im Februar)",
        "Wie" => "Dieser buddhistische Feiertag erinnert an die spontane Zusammenkunft von 1.250 Mönchen, die der Buddha ohne vorherige Ankündigung versammelt haben soll. Gläubige besuchen Tempel, um Kerzen anzuzünden, zu beten und den Lehren des Buddha zu lauschen."
    ],
    "Asarnha Bucha" => [
        "Wann" => "Am Vollmondtag im achten Monat des thailändischen Mondkalenders (normalerweise im Juli)",
        "Wie" => "Dieser Tag erinnert an den ersten Predigttag des Buddha. Gläubige besuchen Tempel, nehmen an Prozessionen teil und hören buddhistische Lehren."
    ],
    "Chakri-Tag" => [
        "Wann" => "6. April jeden Jahres",
        "Wie" => "Dieser Tag feiert die Gründung der Chakri-Dynastie, der königlichen Linie Thailands. Es gibt oft Parade und Veranstaltungen rund um den Grand Palace in Bangkok."
    ]
];

// Alle Feste anzeigen
foreach ($feste as $name => $info) {
    zeigeFestivalInfo($name, $info["Wann"], $info["Wie"]);
    echo "<hr>";
}
?>

</body>
</html>
