
<style>
.primarycolor {
    color: #6667ac;
  }
</style>
<script>
    $(document).ready(function() {
        $(".set > a").on("click", function() {
            if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this)
                .siblings(".content")
                .slideUp(200);
            $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            } else {
            $(".set > a i")
                .removeClass("fa-minus")
                .addClass("fa-plus");
            $(this)
                .find("i")
                .removeClass("fa-plus")
                .addClass("fa-minus");
            $(".set > a").removeClass("active");
            $(this).addClass("active");
            $(".content").slideUp(200);
            $(this)
                .siblings(".content")
                .slideDown(200);
            }
        });

        $('[data-toggle="tooltip"]').tooltip()
    });

</script>

<section id="main">
    <div class="banner"
        style="background-image: url('/assets/front/images/headers/fahrzeugverkauf.jpg'); background-position: center;">
        <div class="container h-100">
            <div class="d-flex h-100 align-items-end pb-5">
                <!-- <div class="card">
                    <div class="card-body">
                      <h1>Autoverkauf</h1>
                    </div>
                    </div> -->
                <div class="banner-content">
                    <h1>Autoverkauf – gepflegte Occasionen zu Top Preisen</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-grey first-row mt-0">
        <div class="container-fluid">
            <div class="row pt-30 pb-30">
                <div class="col-lg-6 p-sm-r0 py-4 py-sm-6 order-0 order-lg-0 pr-ie">
                    <div class="inner-content-left">
                        <div class="content-area">
                            <h2 class="primarycolor">Ihr Partner für Autoverkauf im Raum Bern</h2>
                            <h3 class="h5 font-weight-light mb-3">Bei uns finden Sie Ihr Traumauto!</h3>
                            <p>
                            Sie möchten ein neues Auto kaufen? Dann sind Sie bei uns genau richtig! Wir verfügen über ein breites Angebot an diversen Qualitätsoccasionen — von kompakten Kleinwagen
                             bis hin zu sportlichen Elektrofahrzeugen. Unser Versprechen ist das Streben nach höchstem Qualitätsniveau für unsere Kunden. 
                             Deshalb begleiten wir Sie auf dem Weg zu Ihrem Wunschauto und prüfen unsere Lagerwagen auf Herz und Nieren, bevor die Fahrzeuge verkauft werden.  
                            <br /><br />
                            Überzeugen Sie sich selbst und werfen Sie einen Blick auf unser Angebot. 

                            </p>
                            <a href="/autos" title="Unsere Auto Auswahl" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Zu unseren Autos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1 order-lg-1">
                    <div class="image-right">
                        <div class="image-border-r clipped-image fahrzeugverkauf-ocassionfahrzeuge"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white">
        <div class="container py-4 py-sm-6">
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 px-4 mb-4">
                    <img height="101" src="/assets/front/images/icons/fahrzeugverkauf-qualitaet.svg" alt="Qualität">
                    <h3 class="h5 font-weight-light mt-5">Qualitätsgeprüfte Autos</h3>
                    <hr class="my-4 mx-5"/>
                    <p class="font-weight-light text-muted">Wir streben nach vollkommener
                        Perfektion, weshalb alle unsere Fahrzeuge einem Qualitätscheck unterzogen werden. 
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 px-4 mb-4">
                    <img height="101" src="/assets/front/images/icons/fahrzeugverkauf-preis.svg" alt="Faire Preise">
                    <h3 class="h5 font-weight-light mt-5">Faire und marktkonforme Preise</h3>
                    <hr class="my-4 mx-5"/>
                    <p class="font-weight-light text-muted">Bei uns finden Sie eine grosse Auswahl an Fahrzeugen mit dem besten
                        Preis-Leistungs-Verhältnis. 
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 px-4 mb-4">
                    <img height="101" src="/assets/front/images/icons/fahrzeugverkauf-beratung.svg" alt="Beratung">
                    <h3 class="h5 font-weight-light mt-5">Ehrliche und freundliche Beratung</h3>
                    <hr class="my-4 mx-5"/>
                    <p class="font-weight-light text-muted">Bei der Automobile Wohlensee AG werden Sie kompetent und persönlich
                        beraten. Wir stehen für Transparenz und Zuverlässigkeit.
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 px-4 mb-4">
                    <img height="101" src="/assets/front/images/icons/fahrzeugverkauf-finanzierung.svg" alt="Finanzierung">
                    <h3 class="h5 font-weight-light mt-5">Finanzierungen die passen</h3>
                    <hr class="my-4 mx-5"/>
                    <p class="font-weight-light text-muted">Wir bieten Ihnen massgeschneiderte Finanzierungsmöglichkeiten an, die
                        sich Ihrer individuellen Lebenssituation anpassen.
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 px-4 mb-4">
                    <img height="101" src="/assets/front/images/icons/fahrzeugverkauf-garantie.svg" alt="Garantie">
                    <h3 class="h5 font-weight-light mt-5">Garantie</h3>
                    <hr class="my-4 mx-5"/>
                    <p class="font-weight-light text-muted">In Zusammenarbeit mit unserem Partner SuisseFox erhalten Sie auf
                        Wunsch eine umfassende Garantie auf Ihr Auto.
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 px-4 mb-4">
                    <img height="101" src="/assets/front/images/icons/fahrzeugverkauf-nachhaltigkeit.svg" alt="Nachhaltigkeit">
                    <h3 class="h5 font-weight-light mt-5">Nachhaltigkeit</h3>
                    <hr class="my-4 mx-5"/>
                    <p class="font-weight-light text-muted">Wir setzen uns bewusst für Nachhaltigkeit ein und erweitern gezielt
                        unser Angebot an Elektrofahrzeugen.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="text-center primarycolor mb-4"><b>Häufige Fragen zum Verkauf </b></h4>
                    <div class="accordion-container">
                        <div class="set">
                            <a href="javascript:void(0);">Kann ich ein Auto online kaufen? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Ein Online-Kauf ist möglich. Sie können Ihr Wunschauto bequem von zuhause aus mittels VideoCall (WhatsApp, Facetime, Skype etc.) besichtigen. Unsere Verkaufsberater präsentieren Ihnen das Auto von aussen, wie auch von Innen und ermöglichen Ihnen eine virtuelle Probefahrt. Bei Kaufabschluss besteht die Möglichkeit gegen einen kleinen Aufpreis von CHF 180.00.- das Auto bis vor Ihre Tür nach Hause zu liefern.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Besteht eine zusätzliche Ablieferungspauschale beim Kauf eines Autos?<i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Nein, bei uns werden die Autos zum ausgeschriebenen Preis verkauft.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Werden die Fahrzeuge vor der Abholung gereinigt? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Ja, die Autos werden sowohl vor dem Besichtigungstermin wie auch vor der Abgabe professionell gereinigt. Zudem werden die Autos bei der Automobile Wohlensee AG mit einer gültigen Autobahnvignette abgeliefert.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Kann ich mein altes Auto eintauschen? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Selbstverständlich tauschen wir Ihr altes Auto zum besten Preis ein.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Bieten Sie Ratenzahlungen ohne Bankverpflichtungen an? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Nein, leider bieten wir keine Ratenzahlungen ohne Bank an. </p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Kann ich das Auto leasen oder finanzieren? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Ja, wir bieten Ihnen optimale Leasing oder Finanzierungsangebote über unsere Partnerbanken an.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Welche Bezahlmöglichkeiten bietet die Automobile Wohlensee AG an? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <ul>
                                    <li>Barzahlung</li>
                                    <li>Banküberweisung</li>
                                    <li>Kartenzahlung (vor Ort)</li>
                                    <li>Twint</li>
                                    <li>Kreditkarte</li>
                                </ul>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Wann wird mein neues Auto zur Abholung bereit sein?<i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Im Normalfall zehn Arbeitstage nach Vertragsunterzeichnung.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Ist beim Kauf eine Garantie auf das Auto vorhanden? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Auf Wunsch bieten wir Ihnen Garantien über unsere Versicherungspartner an. Hier wird zwischen drei verschiedenen Schadendeckungen gewählt.</p>
                                <ul>
                                    <li>Grundgarantie (Motor, Turbo und Getriebe)</li>
                                    <li>1-Stern Garantie (Zusätzlich Kraftübertragung und Lenkung)</li>
                                    <li>2-Stern Garantie (Alles bis und mit Elektronik)</li>
                                    <li>3-Stern Garantie (Komplette Deckung)</li>
                                </ul>
                                <p>Die Garantie wird in der Regel für 12 Monate oder 20’000km gewährleistet, wobei die Materialbeteiligung seitens Kunde je nach Kilometerstand beim Schadenfall zwischen 0 – 50% variiert.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Kann ich in Zukunft bei Ihnen den Service für mein Auto erledigen lassen? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Selbstverständlich können Sie bei uns oder bei unseren Partnern zu speziellen Konditionen Ihr Auto in den Service bringen.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>