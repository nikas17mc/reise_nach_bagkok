
SEHENSWÜRDIGKEITEN CODE

<!DOCTYPE html>
<html>
<head>
    <title>Bangkok Reiseinformationen</title>
</head>
<body>

<?php
// Funktion zum Anzeigen von Ortsinformationen
function displayLocationInfo($location, $details) {
    echo "<h2>$location</h2>";
    echo "<ul>";
    foreach ($details as $detail) {
        echo "<li>$detail</li>";
    }
    echo "</ul>";
}

// Bangkok Orte und Details
$locations = [
    "Lumphini Park" => [
        "Früher Morgen" => "Der Park ist ruhig und ideal für Spaziergänge und Joggen.",
        "Abend" => "Beliebt für Sport, Yoga und Entspannung während des Sonnenuntergangs.",
        "Vermeidung der Mittagshitze" => "Besuche den Park in den Morgen- oder Abendstunden, um die Mittagshitze zu vermeiden."
    ],
    "Großer Palast" => [
        "Früher Morgen" => "Öffnet normalerweise um 8:30 Uhr. Besuche früh, um den Andrang zu minimieren.",
        "Wochentage" => "Besuche an Wochentagen, um Menschenmassen zu vermeiden.",
        "Saisonalität beachten" => "Reise außerhalb der touristischen Hochsaison für eine angenehmere Erfahrung.",
        "Respektiere die Öffnungszeiten" => "Beachte die offiziellen Öffnungszeiten und Feiertage."
    ],
    "Wat Pho" => [
        "Weniger Menschenmassen" => "Besuche frühmorgens, um große Menschenmengen zu vermeiden.",
        "Angenehmere Temperaturen" => "Die Morgenstunden sind kühler für ein angenehmes Erkunden.",
        "Besseres Fotografieren" => "Nutze das natürliche Licht am Morgen für bessere Fotos.",
        "Ruhe und Frieden" => "Genieße die ruhige Atmosphäre vor dem Ansturm des Tages."
    ],
    "Wat Arun" => [
        "Lage" => "Am westlichen Ufer des Chao Phraya-Flusses, gegenüber dem Großen Königspalast.",
        "Architektur" => "Beeindruckender Hauptprang mit Porzellanskulpturen und Keramikmosaiken.",
        "Bedeutung" => "Dem Hindugott Aruna und der Morgenröte gewidmet.",
        "Geschichte" => "Bau begann in der Ayutthaya-Periode und wurde in der Rattanakosin-Periode fortgesetzt.",
        "Besuchererlebnis" => "Besteige den Prang für einen atemberaubenden Blick auf den Fluss und die Stadt.",
        "Öffnungszeiten" => "Täglich von 08:30 Uhr bis 17:30 Uhr (Öffnungszeiten können variieren)."
    ],
    "Chatuchak Weekend Market" => [
        "Lage" => "Norden von Bangkok, Kamphaeng Phet 2 Road.",
        "Größe und Angebot" => "Über 8.000 Stände mit vielfältigen Waren.",
        "Öffnungszeiten" => "Normalerweise samstags und sonntags, 9:00 Uhr bis 18:00 Uhr."
    ],
    "Wat Phra Kaew" => [
        "Lage" => "Im Großen Königspalastkomplex am Chao Phraya-Fluss.",
        "Bedeutung" => "Heiligster Tempel mit dem Smaragd-Buddha.",
        "Architektur" => "Beeindruckende Gebäude mit Goldverzierungen und Keramikfliesen.",
        "Kleiderordnung" => "Angemessene Kleidung erforderlich. Keine kurzen Hosen oder ärmellosen Hemden.",
        "Öffnungszeiten" => "Täglich geöffnet (Öffnungszeiten können variieren)."
    ],
    "Siam Paragon" => [
        "Lage" => "Im Siam-Gebiet, 991 Rama I Rd, Pathum Wan.",
        "Einkaufsmöglichkeiten" => "Hochwertige Einzelhandelsgeschäfte mit internationalen und Designermarken.",
        "Unterhaltung" => "Kino, SEA LIFE Bangkok Ocean World, KidZania.",
        "Essen und Trinken" => "Vielfältige Restaurants von gehobener Küche bis zwanglos.",
        "Veranstaltungsräume" => "Regelmäßige Events, Ausstellungen und Werbeaktionen.",
        "Öffnungszeiten" => "Täglich von 10:00 Uhr bis 22:00 Uhr (Öffnungszeiten können variieren)."
    ],
    "Jim Thompson House" => [
        "Lage" => "Pathum Wan, 6 Soi Kasemsan 2, Rama 1 Road.",
        "Geschichte von Jim Thompson" => "Unternehmer und Förderer der thailändischen Seidenindustrie.",
        "Architektur und Design" => "Traditionelle thailändische Architektur mit Teakhäusern und Kunstwerken.",
        "Sammlungen und Ausstellungen" => "Kunstwerke, Antiquitäten und Seidenstoffe.",
        "Gartenanlage" => "Tropischer Garten mit Teichen und Pavillons.",
        "Führungen" => "Regelmäßige Führungen in verschiedenen Sprachen.",
        "Öffnungszeiten" => "Täglich von 09:00 Uhr bis 18:00 Uhr (Öffnungszeiten können variieren)."
    ],
    "Wat Traimit" => [
        "Lage" => "Chinatown, 661 Tri Mit Rd, Talat Noi.",
        "Bedeutung" => "Bekannt für den Goldenen Buddha, Phra Sukhothai Traimit.",
        "Der Goldene Buddha" => "Massive Goldstatue aus der Sukhothai-Ära.",
        "Tempelarchitektur" => "Traditionelle thailändische Architektur.",
        "Kleiderordnung" => "Angemessene Kleidung erforderlich. Keine kurzen Hosen oder ärmellosen Hemden.",
        "Öffnungszeiten" => "Täglich von 08:00 Uhr bis 17:00 Uhr (Öffnungszeiten können variieren)."
    ],
    "Wat Saket" => [
        "Lage" => "Pom Prap Sattru Phai, 344 Thanon Chakkraphatdiphong.",
        "Bedeutung" => "Bekannt für den Goldenen Berg und den Chedi.",
        "Chedi" => "Goldener Chedi mit Panoramablick auf die Stadt.",
        "Geschichte" => "Im 18. Jahrhundert erbaut, Chedi im 19. Jahrhundert hinzugefügt.",
        "Bangkok City Pillar Shrine" => "Heiliger Ort in Verbindung mit der Gründung von Bangkok.",
        "Festivals" => "Teilnahme am Loy Krathong Festival.",
        "Kleiderordnung" => "Angemessene Kleidung erforderlich. Keine kurzen Hosen oder ärmellosen Hemden.",
        "Öffnungszeiten" => "Täglich von 09:00 Uhr bis 17:00 Uhr (Öffnungszeiten können variieren)."
    ]
];

// Anzeigen der Ortsinformationen
foreach ($locations as $location => $details) {
    displayLocationInfo($location, $details);
}
?>

</body>
</html>
