<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gefahren in Bangkok</title>
</head>
<body>

<?php

// Gefahren in Bangkok als Array
$gefahren = [
    "Verkehrsstaus" => "Bangkok ist bekannt für seine starken Verkehrsstaus, insbesondere während der Stoßzeiten. Der Verkehr kann sich sehr langsam bewegen, und es kann viel Zeit in Anspruch nehmen, von einem Ort zum anderen zu gelangen.",
    "Motorradverkehr" => "Motorräder und Mopeds sind eine sehr beliebte Form der Fortbewegung in Bangkok. Manchmal können sie unvorhersehbar und dicht am Verkehr vorbeifahren. Reisende sollten beim Überqueren von Straßen besonders vorsichtig sein.",
    "Luftverschmutzung" => "Bangkok hat mit Luftverschmutzung zu kämpfen, insbesondere während der Trockenzeit. Dies kann für Menschen mit Atemproblemen problematisch sein.",
    "Hitze und Luftfeuchtigkeit" => "Bangkok hat ein tropisches Klima mit hoher Hitze und Luftfeuchtigkeit. Reisende sollten ausreichend Wasser trinken und sich vor der intensiven Sonne schützen.",
    "Unvorhersehbare Straßenverhältnisse" => "Straßen in Bangkok können in unterschiedlichem Zustand sein. Es gibt moderne, gut gepflegte Straßen, aber auch engere Gassen mit unebenen Oberflächen.",
    "Sprachbarriere" => "Viele Straßenschilder und Verkehrsanweisungen sind in Thai. Es kann hilfreich sein, einige grundlegende thailändische Verkehrszeichen zu verstehen oder eine Navigations-App zu verwenden.",
    "Wassertaxis" => "Obwohl Wassertaxis eine beliebte und kostengünstige Transportmöglichkeit sind, können sie manchmal überfüllt sein, und die Sicherheitsstandards können variieren."
];

// Ausgabe als HTML-Liste
echo "<h2>Gefahren in Bangkok:</h2>";
echo "<ul>";
foreach ($gefahren as $gefahr => $beschreibung) {
    echo "<li><strong>$gefahr:</strong> $beschreibung</li>";
}
echo "</ul>";

?>

</body>
</html>                                                                                      
