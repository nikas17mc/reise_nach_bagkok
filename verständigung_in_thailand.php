
-VERSTÄNDIGUNG IN THAILAND CODE:

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verständigung in Thailand</title>
</head>
<body>

<h1>Verständigung in Thailand</h1>

<?php
// Liste der grundlegenden Thai-Ausdrücke
$thaiAusdruecke = [
    'Hallo' => 'สวัสดี (Sawasdee)',
    'Danke' => 'ขอบคุณ (Khop khun)',
    'Ja' => 'ใช่ (Chai)',
    'Nein' => 'ไม่ (Mai)',
    'Entschuldigung' => 'ขอโทษ (Kho thot)'
];

// Beispieltext für die Verwendung von Englisch
$englischText = "In touristischen Gegenden, Hotels, Restaurants und Geschäften wird häufig Englisch gesprochen. 
Das Hotelpersonal und Mitarbeiter in touristischen Attraktionen haben oft Grundkenntnisse in Englisch.";

// Beispieltext für die Verwendung von Google Translate
$googleTranslateText = "Du kannst auch Google Translate verwenden, um schnell Phrasen zu übersetzen. 
Die App ermöglicht es dir, gesprochene Wörter oder Sätze zu übersetzen, was besonders nützlich sein kann.";

// Beispieltext für visuelle Kommunikation
$visuelleKommunikationText = "Zeichnungen, Symbole oder Karten können nützlich sein, um dich zu verständigen, 
insbesondere wenn du nach bestimmten Orten suchst.";

// Beispieltext für Reise-Apps
$reiseAppsText = "Es gibt viele Reise-Apps, die dir bei der Übersetzung und Kommunikation helfen können. 
Du kannst Apps wie 'Google Translate', 'Thai Translator' oder 'SpeakEasy Thai' verwenden.";

// Beispieltext für respektvolle Kommunikation
$respektvolleKommunikationText = "Thai sind im Allgemeinen freundliche Menschen. 
Ein respektvoller und höflicher Umgang wird sehr geschätzt. Ein Lächeln und eine freundliche Haltung gehen oft weit.";

// Ausgabe der grundlegenden Thai-Ausdrücke
echo '<h2>Grundlegende Thai-Ausdrücke:</h2>';
echo '<ul>';
foreach ($thaiAusdruecke as $deutsch => $thai) {
    echo "<li>$deutsch: $thai</li>";
}
echo '</ul>';

// Ausgabe der Beispieltexte
echo '<h2>Beispieltexte:</h2>';
echo "<p>$englischText</p>";
echo "<p>$googleTranslateText</p>";
echo "<p>$visuelleKommunikationText</p>";
echo "<p>$reiseAppsText</p>";
echo "<p>$respektvolleKommunikationText</p>";
?>

</body>
</html>


