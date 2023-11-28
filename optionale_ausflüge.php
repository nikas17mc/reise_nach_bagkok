OPTIONALE AUSFLÜGE CODE

!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optionale Ausflüge</title>
</head>
<body>

<?php

// Funktion zur Ausgabe von Informationen zu optionalen Ausflügen
function displayExcursion($name, $description) {
    echo "<h2>$name</h2>";
    echo "<p>$description</p>";
}

// Optionale Ausflüge Informationen
$ayutthayaTempleCity = array(
    'name' => 'Ayutthaya-Tempelstadt',
    'description' => 'Eine Tagesreise nach Ayutthaya, der alten Hauptstadt von Thailand, ist eine beliebte Option. Dort kannst du beeindruckende Tempelruinen erkunden und mehr über die Geschichte des Landes erfahren.'
);

$damnoenSaduakMarket = array(
    'name' => 'Damnoen Saduak Floating Market',
    'description' => 'Besuche einen der schwimmenden Märkte in der Nähe von Bangkok, wie den Damnoen Saduak Floating Market. Hier kannst du frische Produkte und lokale Spezialitäten direkt von Booten kaufen.'
);

$jimThompsonHouse = array(
    'name' => 'Jim Thompson House',
    'description' => 'Das Jim Thompson House ist ein Museum, das dem amerikanischen Unternehmer Jim Thompson gewidmet ist. Es präsentiert eine beeindruckende Sammlung von Kunstwerken und Artefakten aus Thailand.'
);

$erawanNationalPark = array(
    'name' => 'Erawan-Nationalpark',
    'description' => 'Wenn du die Natur liebst, bietet der Erawan-Nationalpark mit seinen sieben atemberaubenden Wasserfällen und Wanderwegen eine großartige Gelegenheit für einen Tagesausflug.'
);

$maeklongRailwayMarket = array(
    'name' => 'Maeklong Railway Market',
    'description' => 'Erlebe den faszinierenden Maeklong Railway Market, auf dem Händler ihre Stände direkt neben den Bahngleisen aufbauen. Wenn der Zug kommt, werden die Stände schnell zur Seite geschoben.'
);

$bangkokArtsAndCultureCenter = array(
    'name' => 'Bangkok Arts and Culture Center',
    'description' => 'Tauche in die zeitgenössische Kunstszene Thailands im Bangkok Arts and Culture Center ein. Hier findest du wechselnde Ausstellungen, Performances und kulturelle Veranstaltungen.'
);

$chinatown = array(
    'name' => 'Chinatown',
    'description' => 'Verbringe einen Tag in Bangkoks Chinatown, wo du köstliche chinesische Gerichte probieren, Tempel besuchen und durch die lebhaften Straßen schlendern kannst.'
);

$khaoSokNationalPark = array(
    'name' => 'Khao Sok Nationalpark',
    'description' => 'Wenn du bereit bist, etwas weiter zu reisen, bietet der Khao Sok Nationalpark mit seinem beeindruckenden Dschungel, dem Cheow Lan See und der vielfältigen Tierwelt eine beeindruckende Naturkulisse.'
);

// Optionale Ausflüge anzeigen
displayExcursion($ayutthayaTempleCity['name'], $ayutthayaTempleCity['description']);
displayExcursion($damnoenSaduakMarket['name'], $damnoenSaduakMarket['description']);
displayExcursion($jimThompsonHouse['name'], $jimThompsonHouse['description']);
displayExcursion($erawanNationalPark['name'], $erawanNationalPark['description']);
displayExcursion($maeklongRailwayMarket['name'], $maeklongRailwayMarket['description']);
displayExcursion($bangkokArtsAndCultureCenter['name'], $bangkokArtsAndCultureCenter['description']);
displayExcursion($chinatown['name'], $chinatown['description']);
displayExcursion($khaoSokNationalPark['name'], $khaoSokNationalPark['description']);

?>

</body>
</html>
