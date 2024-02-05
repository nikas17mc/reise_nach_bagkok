<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Center</title>
    <link rel="stylesheet" href="../../../src/style/style.css">
    <link rel="stylesheet" href="../../../src/style/style.php.css">
</head>

<body>
    <header>
        <div class="logoC"><a href="../../../index.html"><img src="../../../public/otherImages/page_logo.png" alt=""
                    loading="lazy"></a></div>
        <ul class="hLiF">
            <li class="l"><a href="./night_market.php">Night Market</a></li>
            <li class="l"><a href="./orig_thaiM.php">Thaimassage</a></li>
            <li class="l"><a href="./golden_tria.php">Golden Triangle</a></li>
            <li class="l"><a href="./optio_ausfluege.php">Optionale Ausflüge</a></li>
        </ul>
    </header>
    <main>
        <?php
        // Informationen über CentralWorld
        $e1 = "CentralWorld";
        $s1 = "Herz von Bangkoks Geschäftsviertel Ratchaprasong";
        $b1 = "Eines der größten Einkaufszentren in Südostasien";

        // Allgemeine Merkmale
        $e1m = "CentralWorld beherbergt eine breite Palette von Einzelhandelsgeschäften, darunter internationale und lokale Marken, Modeboutiquen, Elektronikgeschäfte und vieles mehr.";
        $u1 = "Der Komplex bietet Unterhaltungsmöglichkeiten wie ein Kino, eine Bowlingbahn und andere Freizeiteinrichtungen.";
        $e1u = "Zahlreiche Restaurants und Lebensmittelgeschäfte bieten eine Vielzahl von Gerichten für unterschiedliche Geschmäcker und Vorlieben an.";
        $v1 = "In CentralWorld finden häufig Veranstaltungen, Ausstellungen und festliche Feiern statt, vor allem während großer Feiertage und Festivals.";

        // Standortinformationen
        $b1s = "In der Nähe beliebter Sehenswürdigkeiten wie dem Erawan-Schrein, dem Siam Paragon und dem MBK Center";
        ?>


        <?php
        // Informationen über das MBK Center
        $c2 = "MBK Center";
        $b2 = "Bekannt für umfangreiche Einkaufsmöglichkeiten mit einer breiten Palette an Produkten.";

        // Einkaufsmöglichkeiten
        $e2 = "Das MBK Center ist bekannt für seine umfangreichen Einkaufsmöglichkeiten mit einer breiten Palette an Produkten, darunter Kleidung, Accessoires, Elektronik, Mobiltelefone, Kosmetika, Souvenirs und vieles mehr. Es ist vor allem für seine erschwinglichen Preise und seine Feilschkultur bekannt.";

        // Elektronik-Zone
        $e2z = "Einer der Höhepunkte des MBK ist die spezielle Elektronik-Zone, in der Sie eine Vielzahl von Gadgets, Mobiltelefonen, Kameras und Zubehör finden können.";

        // Food Court
        $f2 = "Das Einkaufszentrum verfügt über einen abwechslungsreichen Food Court, der eine Vielzahl von lokalen und internationalen Gerichten zu günstigen Preisen anbietet.";

        // Unterhaltung
        $u2 = "Das MBK Center verfügt über einen Unterhaltungs- und Freizeitkomplex, der ein Kino, Karaoke und Spielmöglichkeiten umfasst.";

        // Standortinformationen
        $s2 = "Das MBK Center liegt zentral im Siam-Einkaufsviertel und ist daher von verschiedenen Teilen Bangkoks aus leicht zu erreichen. Es befindet sich in der Nähe anderer beliebter Einkaufsziele wie Siam Paragon, CentralWorld und Siam Discovery.";
        ?>


        <?php
        // Informationen über das Siam Paragon Einkaufszentrum
        $e3 = "<strong>Einkaufen:</strong> Siam Paragon ist bekannt für seine hochwertigen und luxuriösen Einzelhandelsgeschäfte, die eine große Auswahl an internationalen und Designermarken anbieten. Das Einkaufszentrum bietet ein vielfältiges Einkaufserlebnis, darunter Mode, Schmuck, Elektronik, Schönheitsprodukte und vieles mehr.";

        $u3 = "<strong>Unterhaltung:</strong> Das Einkaufszentrum beherbergt verschiedene Unterhaltungsmöglichkeiten, darunter einen großen Kinokomplex, ein Aquarium mit dem Thema Ozean namens SEA LIFE Bangkok Ocean World und eine KidZania-Filiale - ein Unterhaltungszentrum für Kinder.";

        $e3f = "<strong>Essen und Trinken:</strong> Siam Paragon verfügt über eine große Auswahl an Restaurants und Cafés, die von gehobener Küche bis hin zu zwanglosen Lokalen reichen. Besucher finden hier eine Vielzahl von Gerichten für unterschiedliche Geschmäcker.";

        $v3 = "<strong>Veranstaltungsräume:</strong> Im Siam Paragon finden häufig Veranstaltungen, Ausstellungen und Werbeaktionen statt. In den Veranstaltungsräumen des Einkaufszentrums können Modeschauen, Produkteinführungen und andere kulturelle Aktivitäten stattfinden.";

        $s3 = "<strong>Standort:</strong> Siam Paragon befindet sich im Siam-Gebiet, einem bekannten Einkaufs- und Unterhaltungsviertel in Bangkok. Es befindet sich in der Nähe anderer beliebter Einkaufszentren wie MBK Center, CentralWorld und Siam Discovery.";

        // Ausgabe der Informationen
        // echo "<h1>$einkaufszentrumName</h1>";
        // echo "<p>Standort: $standort</p>";
        // echo "<p>$beschreibung</p>";
        
        // echo "<h2>Allgemeine Merkmale:</h2>";
        // echo "<p>$einkaufen</p>";
        // echo "<p>$unterhaltung</p>";
        // echo "<p>$essenTrinken</p>";
        // echo "<p>$veranstaltungen</p>";
        
        // echo "<h2>Standortinformationen:</h2>";
        // echo "<p>$beliebteSehenswuerdigkeiten</p>";        
        ?>

        <div class="rOe flex_bTw">
            <div class="cBoItP">
                <div class="iBp">
                    <img src="../../otherImages/shop_cen_siamparangon.png" alt="">
                    <h1 class="tAnC mToR">Siam Paragon <br>Einkaufszentrum</h1>
                </div>
                <div class="flex-row-a0">
                    <div class="tBp ">
                        <p>
                            <?php echo $e3; ?>
                            <?php echo $u3; ?>
                            <?php echo $e3f; ?>
                        </p>
                    </div>
                    <div class="eAb">
                        <p>
                            <?php echo $v3; ?>
                            <?php echo $s3; ?>
                        </p>
                    </div>
                </div>
                <div class="mShB">
                    <em>Hover me!</em>
                </div>
                <div class="mSiE">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.540506056303!2d100.53216527347622!3d13.746246297425339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ecde3aee521%3A0x9f43939a2caf2963!2sSiam%20Paragon!5e0!3m2!1sen!2sde!4v1705608793472!5m2!1sen!2sde"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="cBoItP">
                <div class="iBp">
                    <img src="../../otherImages/mbk-center.png" alt="">
                    <h1 class="tAnC mToR">
                        <?php echo $c2 ?><br>Einkaufszentrum
                    </h1>
                </div>
                <div class="flex-row-a0">
                    <div class="tBp ">
                        <p>
                            <?php echo $b2; ?>
                            <?php echo $e2 ?>
                            <?php echo $e2z ?>
                        </p>
                    </div>
                    <div class="eAb">
                        <p>
                            <?php echo $f2; ?>
                            <?php echo $u2; ?>
                            <?php echo $s2; ?>
                        </p>
                    </div>
                </div>
                <div class="mShB">
                    <em>Hover me!</em>
                </div>
                <div class="mSiE">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5671070398143!2d100.52745677347612!3d13.744638597462545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f93237736ed%3A0x405eb31f977656de!2sMBK%20Center!5e0!3m2!1sen!2sde!4v1705608844157!5m2!1sen!2sde"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="rTo flex-row-a0">
            <div class="cBoItP">
                <div class="iBp">
                    <img src="../../otherImages/centralworld.png" alt="">
                    <h1 class="tAnC mToR">
                        <?php echo $e1; ?> <br>Einkaufszentrum
                    </h1>
                </div>
                <div class="flex-row-a0">
                    <div class="tBp ">
                        <p>
                            <?php echo $s1; ?>
                            <?php echo $b1; ?>
                            <?php echo $e1m; ?>
                            <?php echo $u1; ?>
                            <?php echo $e1u; ?>
                        </p>
                    </div>
                    <div class="eAb">
                        <p>
                            <?php echo $v1; ?>
                            <?php echo $b1s; ?>
                        </p>
                    </div>
                </div>
                <div class="mShB">
                    <em>Hover me!</em>
                </div>
                <div class="mSiE">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.5356643722553!2d100.5365738734762!3d13.746538897418617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29ecfc2f455e1%3A0xc4ad0280d8906604!2scentralwOrld!5e0!3m2!1sen!2sde!4v1705597818913!5m2!1sen!2sde"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </main>
    <footer>
            <p>&copy; 2024 Reise nach Bangkok</p>
        </footer>
</body>

</html>