
SCHWIMMENDE MÄRKTE CODE:

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Schwimmende Märkte in Bangkok</title>
</head>
<body>

<h1>Schwimmende Märkte in Bangkok</h1>

<?php
// Array mit Informationen zu den schwimmenden Märkten
$maerkte = array(
    "Damnoen Saduak Floating Market" => "Dies ist der berühmteste schwimmende Markt in Bangkok und liegt etwa 100 Kilometer südwestlich der Stadt. 
    Hier können Besucher mit kleinen Booten zwischen den Ständen fahren und lokale Produkte, Lebensmittel und Handwerkskunst kaufen.",
    
    "Amphawa Floating Market" => "Dieser Markt liegt etwas außerhalb von Bangkok und ist besonders beliebt für seine abendlichen Öffnungszeiten am Wochenende. 
    Die Atmosphäre ist entspannter als in Damnoen Saduak, und es gibt viele Restaurants am Flussufer, die frisch zubereitete Meeresfrüchte und lokale Köstlichkeiten anbieten.",
    
    "Taling Chan Floating Market" => "Dieser Markt liegt näher am Stadtzentrum von Bangkok und bietet eine authentische Erfahrung. 
    Hier können Besucher frische Meeresfrüchte, Thai-Gerichte und lokale Produkte direkt von den Booten der Händler kaufen.",
    
    "Khlong Lat Mayom Floating Market" => "Dieser Markt ist ebenfalls näher an Bangkok gelegen und weniger touristisch. 
    Er bietet eine entspannte Atmosphäre und die Möglichkeit, lokale Spezialitäten zu probieren."
);

// Ausgabe der Informationen
foreach ($maerkte as $markt => $beschreibung) {
    echo "<h2>$markt</h2>";
    echo "<p>$beschreibung</p>";
}
?>

</body>
</html>


