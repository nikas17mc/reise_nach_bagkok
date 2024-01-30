<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../src/style/style.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        section {
            margin: 30px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #3498db;
        }

        p {
            line-height: 1.8;
            font-size: 19px;
            color: #3d3d3d;
        }


        ul {
            list-style: disc inside;
            padding: 0;
            margin-left: 25px;
        }

        li {
            margin-bottom: 15px;
            background-color: #cce5ff;
        }

        footer p {
            color: azure;
        }
    </style>
    <title>Information</title>
</head>

<body>
    <header>
        <div class="logoC"><a href="./../../index.html"><img src="../../../public/otherImages/page_logo.png" alt=""
                    loading="lazy"></a></div>
        <ul class="hLiF">
            <li class="l"><a href="./info.php">Info</a></li>
            <li class="l"><a href="./rule.html">Regeln</a></li>
            <li class="l"><a href="./hotel.html">Hotel</a></li>
            <li class="l"><a href="./flight.html">Flug</a></li>
        </ul>
    </header>
    <section style="margin-top: 8%;">
        <h2>Klima</h2>
        <p>Thailand erlebt tropisches Klima. Während der Regenzeit von Mai bis Oktober kommt es häufig zu großflächigen
            Überschwemmungen und Erdrutschen, denen oft Menschen zum Opfer fallen. Insbesondere im Südosten der
            Thai-Halbinsel, einschließlich Koh Samui, gibt es von November bis Januar Starkregen und vereinzelte
            Tropenstürme.</p>
        <p>Thailand befindet sich in einer seismisch aktiven Zone, was Erd- und Seebeben einschließt. Es ist wichtig,
            auf Warnmeldungen des thailändischen Meteorological Department zu achten. Beachten Sie Verbote,
            Hinweisschilder und Warnungen sowie die Anweisungen lokaler Behörden. Im Fall einer Sturmwarnung beachten
            Sie bitte die Hinweise zu Wirbelstürmen im Ausland.</p>
        <p>Machen Sie sich mit Verhaltenshinweisen bei Erdbeben, Vulkanen und Tsunamis vertraut. Diese bieten die
            Merkblätter des Deutschen Geo Forschungs Zentrums.</p>
    </section>

    <section>
        <h2>Religion und Tempel</h2>
        <p>In Thailand gibt es viele beeindruckende Tempel, die als "Wat" bezeichnet werden. Die meisten Tempel in
            Thailand sind buddhistisch, aber es gibt auch einige Hindu-Tempel.</p>

        <h3>Buddhistische Tempel (Wat):</h3>
        <ul>
            <li><strong>Wat Phra Kaew (Tempel des Smaragd-Buddha):</strong> Dieser Tempel befindet sich im Großen
                Palastkomplex und beherbergt den berühmten Smaragd-Buddha, eine der wichtigsten buddhistischen Statuen
                in Thailand.</li>
            <li><strong>Wat Arun (Tempel der Morgenröte):</strong> Bekannt für seine beeindruckende zentrale Prang
                (Turm) und seine Lage am Ufer des Chao Phraya-Flusses.</li>
            <li><strong>Wat Pho (Tempel des liegenden Buddha):</strong> Hier befindet sich die imposante liegende
                Buddha-Statue, die eine Länge von 46 Metern hat.</li>
            <li><strong>Wat Saket (Goldener Berg):</strong> Dieser Tempel liegt auf einem Hügel und bietet einen
                großartigen Blick auf Bangkok. Er ist bekannt für seine goldene Stupa.</li>
            <li><strong>Wat Traimit (Tempel des Goldenen Buddha):</strong> Beherbergt eine massive goldene
                Buddha-Statue, die als weltweit größte goldene Buddha-Statue gilt.</li>
        </ul>

        <h3>Hindu-Tempel:</h3>
        <ul>
            <li><strong>Erawan-Schrein:</strong> Obwohl es kein hinduistischer Tempel ist, ist der Erawan-Schrein ein
                wichtiger hinduistischer Schrein in Bangkok. Er ist dem hinduistischen Gott Brahma gewidmet.</li>
        </ul>

        <p>Es ist wichtig zu beachten, dass die überwiegende Mehrheit der Tempel in Thailand buddhistisch ist, da der
            Buddhismus die vorherrschende Religion im Land ist. Diese Tempel sind wichtige religiöse Stätten und auch
            touristische Attraktionen. Bevor Sie Tempel besuchen, ist es ratsam, sich über die örtlichen Bräuche und
            Regeln zu informieren, um angemessen zu handeln und Respekt zu zeigen.</p>
    </section>

    <section>
        <h2>Gefahren auf der Straße</h2>
        <?php
        // Informationen über die Gefahren in Bangkok
        $verkehrInfo = "Der Verkehr in Bangkok kann sehr chaotisch sein, besonders zu Stoßzeiten. Es gibt viele Motorräder, Tuk-Tuks, Autos und öffentliche Verkehrsmittel. Sei vorsichtig beim Überqueren von Straßen und nutze Fußgängerüberwege, wenn möglich.";

        $taschendiebstahlInfo = "In belebten Touristengebieten besteht die Gefahr von Taschendiebstählen. Halte deine Wertsachen sicher und achte besonders in überfüllten Bereichen auf deine Taschen.";

        $gesundheitsrisikenInfo = "In tropischen Regionen wie Bangkok gibt es bestimmte Gesundheitsrisiken, einschließlich Mückenübertragener Krankheiten wie Dengue-Fieber. Verwende Mückenschutzmittel und informiere dich über notwendige Impfungen vor deiner Reise.";

        $kulturelleSensibilitaetInfo = "Respektiere die lokale Kultur und die Sitten. Vermeide es, heilige Stätten ohne angemessene Kleidung zu betreten, und respektiere lokale Bräuche und Traditionen.";

        $natuerlicheKatastrophenInfo = "Thailand liegt in einer seismisch aktiven Zone, und es besteht ein geringes Risiko für Erdbeben. Es ist ratsam, sich über die lokalen Notfallverfahren zu informieren.";

        $luftqualitaetInfo = "In manchen Perioden kann die Luftqualität in Bangkok aufgrund von Smog und Luftverschmutzung beeinträchtigt sein. Menschen mit Atemproblemen sollten dies berücksichtigen.";

        // Ausgabe der Informationen
        echo "<h3>Verkehr:</h3>";
        echo "<p>$verkehrInfo</p>";

        echo "<h3>Taschendiebstahl:</h3>";
        echo "<p>$taschendiebstahlInfo</p>";

        echo "<h3>Gesundheitsrisiken:</h3>";
        echo "<p>$gesundheitsrisikenInfo</p>";

        echo "<h3>Kulturelle Sensibilität:</h3>";
        echo "<p>$kulturelleSensibilitaetInfo</p>";

        echo "<h3>Natürliche Katastrophen:</h3>";
        echo "<p>$natuerlicheKatastrophenInfo</p>";

        echo "<h3>Luftqualität:</h3>";
        echo "<p>$luftqualitaetInfo</p>";
        ?>
    </section>

    <section>
        <h2>Trinkgeld</h2>
        <?php
        // Funktion zur Anzeige von Informationen zu Trinkgeldpraktiken
        function zeigeTrinkgeldInfo($situation, $beschreibung)
        {
            echo "<h3>$situation</h3>";
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
    </section>

    <section>
        <h2>Währungstauschautomaten</h2>
        <p>Entdecke, wo du Währungstauschautomaten findest und wie du sie am besten nutzt.</p>
        <?php
        echo "<p>In Bangkok gibt es verschiedene Orte, an denen du Geld tauschen kannst.</p>";

        $options = [
            "<strong>Wechselstuben:</strong> Es gibt zahlreiche Wechselstuben in Bangkok, insbesondere in touristischen Gebieten, Einkaufszentren und Flughäfen. Diese bieten oft wettbewerbsfähige Wechselkurse.",
            "<strong>Banken:</strong> Banken in Bangkok bieten auch Währungsumtauschdienste an. Dies kann in größeren Bankfilialen oder an speziellen Schaltern für Devisengeschäfte erfolgen.",
            "<strong>Automatische Geldautomaten (ATMs):</strong> Du kannst auch Geld an Geldautomaten abheben. Dies ist oft eine bequeme Option. Beachte jedoch, dass einige Banken Gebühren für internationale Abhebungen erheben können. Informiere dich bei deiner eigenen Bank über die Gebührenstruktur.",
            "<strong>Hotelrezeptionen:</strong> Einige Hotels bieten auch Geldwechselservices an, aber die Wechselkurse könnten hier weniger vorteilhaft sein als an anderen.",
            "<strong>Online-Währungsumtausch:</strong> Es gibt auch Online-Plattformen, die Währungsumtausch anbieten. Beachte jedoch, dass Online-Transaktionen zusätzliche Gebühren und möglicherweise nicht die besten Wechselkurse haben könnten."
        ];

        echo "<ul>\n";
        foreach ($options as $option) {
            echo "  <li>$option</li>\n";
        }
        echo "</ul>\n";
        ?>
        <h3>Hier können Sie die wichtige Dinge schnell überprüfen:</h3>
        <label style="text-align:left;" for="amount">Betrag:</label>
        <input oninput="numberValidate(this)" style="margin-bottom: 3px; width:20%;" type="number" id="amount"
            placeholder="Geben Sie hier den Betrag ein"><span style="font-size:22px;font-weight:600;">
            €</span><br />
        <small>Das heutige Kurs ist: <em id="cur"></em></small>
        <div class="result_box">
            <p id="result">Endergebnis: </p>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Reise nach Bangkok</p>
    </footer>
</body>
<script>
    const body = document.body;

    let info;
    let cur = document.getElementById('cur');
    let url = "https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/eur/thb.json?" + Math.random();
    let downB = document.getElementById('downB');
    let upB = document.getElementById('upB');
    function numberValidate(number) {
        number.value = number.value.replace(/[^0-9,.]/g, "");
    };

    window.addEventListener("load", function () {
        fetchCurrency()
    });
    function fetchCurrency() {
        fetch(url).then(response => response.json()).then(data => {
            info = data.thb;
            cur.innerHTML = info.toFixed(4) + " ฿";
        }).catch(error => console.error(error, "Couldn't fetch currency of THB!"));
    };
    document.getElementById("amount").onkeyup = function () {
        let put = document.getElementById("amount");
        let res = document.getElementById("result");
        put.value == 0 ? res.innerHTML = "Endergebnis:" + " " : res.innerHTML = "Endergebnis:" + " " + (parseFloat(put.value) * info).toFixed(2) + " ฿";
    };
</script>
<script src="./../../../src/script/script.js"></script>
</html>