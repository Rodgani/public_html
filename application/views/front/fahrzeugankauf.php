<style>
  .circle {
    padding: 13px 20px;
    border-radius: 50%;
    background-color: var(--primary-color);
    color: #fff;
    max-height: 50px;
    z-index: 2;
  }

  .how-it-works.row .col-2 {
    align-self: stretch;
  }

  .how-it-works.row .col-2::after {
    content: "";
    position: absolute;
    border-left: 3px solid var(--primary-color);
    z-index: 1;
    top: 0;
    right: 0;
  }

  .how-it-works.row .col-2.bottom::after {
    height: 50%;
    left: 50%;
    top: 50%;
  }

  .how-it-works.row .col-2.full::after {
    height: 100%;
    left: calc(50% - 3px);
    top: 0;
  }

  @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .how-it-works.row .col-2.full::after {
      left: calc(50% - 3.8px);
    }
  }

  .how-it-works.row .col-2.full-left::after {
    height: 100%;
    left: 50%;
  }

  .how-it-works.row .col-2.top::after {
    height: 50%;
    left: 50%;
    top: 0;
  }


  .timeline div {
    padding: 0;
    height: 40px;
  }

  .timeline hr {
    border-top: 3px solid var(--primary-color);
    margin: 0;
    top: 17px;
    position: relative;
  }

  .timeline .col-2 {
    display: flex;
    overflow: hidden;
  }

  .timeline .corner {
    border: 3px solid var(--primary-color);
    width: 100%;
    position: relative;
    border-radius: 15px;
  }

  .timeline .top-right {
    left: 50%;
    top: -50%;
  }

  .timeline .left-bottom {
    left: -50%;
    top: calc(50% - 3px);
  }

  .timeline .top-left {
    left: -50%;
    top: -50%;
  }

  .timeline .right-bottom {
    left: 50%;
    top: calc(50% - 3px);
  }

  .subline {
    font-size: 15px;
  }

  .stepstitle {
    color: #6667ac;
    font-weight: 800;
  }

  .primarycolor {
    color: #6667ac;
  }

  .benefits {
  font-weight: 300!important;
    font-size: 1.25rem;
  }

  .h3size {
  font-size: 1.5rem;
  }

  .circleicon {
      width: 6%;
      margin-bottom: 17px;
  }

  .circleicon-nb {
      width: 84px;
      margin-bottom: 17px;
  }

  .width-5p {
      width: 5%;
  }
  @media(max-width:767px){
      .circleicon,
      .circleicon-nb{
          width:60px;
      }
      footer.py-4{
        padding-bottom:50px !important;
    }
  }

</style>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
        style="background-image: url('/assets/front/images/autoankauf/auto-ankauf.jpg'); background-position: center;" title="Auto Ankauf;" alt="Auto Ankauf;">
        <div class="container h-100">
            <div class="d-flex h-100 align-items-end pb-5">
                <!-- <div class="card">
                    <div class="card-body">
                        <h1>Autoankauf zum besten Preis</h1>
                    </div>
                </div> -->
                <div class="banner-content">
                    <h1>Autoankauf Schweiz – Auto verkaufen zum besten Preis</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white first-row mt-0" style="padding-top: 30px;">
        <div class="container-fluid">
            <div class="row banner-after-content">
                <div class="col-lg-6 p-sm-r0 py-4 py-sm-6 order-1 order-lg-0 pr-ie">
                    <div class="inner-content-left">
                        <div class="content-area">
                            <h2 class="primarycolor">Wir kaufen Ihr Auto – schnell & unkompliziert</h2>
                            <p class="h5 font-weight-light mb-3">Verkaufen Sie uns Ihr Auto und profitieren Sie vom besten
                                Preis. Auf Wunsch findet die Bezahlung direkt beim kostenlosen Abtransport statt. Einfacher und schneller geht es nicht!</p>
                            <p>Wollen Sie Ihr Auto schnell, einfach und online verkaufen? Ihr vertrauenswürdiger Händler in der Nähe regelt das. Wollen Sie mühsame und zeitraubende Besichtigungen bzw. unübersichtliche Vertragsverhandlungen vermeiden? Dann hat die Automobile Wohlensee AG die beste Lösung für Sie. Der gesamte Verkaufsprozess läuft online ab.
                            <br /><br />Das fairste Angebot schweizweit: Bei Ihrem Autohändler in der Nähe, der Automobile Wohlensee AG oder bei Ihnen zu Hause, wir unterbreiten Ihnen ein faires und transparentes Angebot für Ihr Auto. Aufgrund unserer langjährigen Erfahrung und einer eigenen <a href="/werkstatt" title="Auto Werkstatt">Autowerkstatt</a> sowie <a href="https://www.carrosserie-wohlensee.ch/" target="_blank" title="Auto Carrosserie">Carrosserie</a>, sind wir in der Lage Ihnen den fairsten und besten Preis für Ihr Auto anzubieten. 

                            </p>
                            <div class="">
                                <a href="/autoankauf/formular" title="Auto Ankauf Online Formular" class="btn btn-primary px-4 py-2 rounded-pill mt-3 mb-4 violet-blue-bg">Autoankauf Formular</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1 order-lg-1">
                    <div class="image-right">
                        <div class="image-border-r clipped-image fahrzeugankauf-fahrzeugankauf"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-4 py-sm-6">
            <div class="container-80">
                <div class="text-center">
                    <img class="circleicon-nb" src="/assets/front/images/autoankauf/auto-ankauf-bern.png" title="Auto Ankauf Bern" alt="Auto Ankauf Bern">
                </div>
                <h2 class="text-center primarycolor">Auto Ankauf, schweizweit und binnen Stunden</h2>
                <p class="mt-4 text-center">
                Sie haben es satt stundenlang unterwegs zu sein, bis Sie Ihr Auto verkauft haben? Einige Bilder und Angaben über Ihr Auto und schon sind Sie mit wenigen Klicks einen Schritt näher, Ihr Auto zu verkaufen. Nachdem Sie uns Ihre Fahrzeugdaten zugesandt haben, erstellen wir Ihnen
                    innerhalb von wenigen Stunden ein verbindliches Angebot für den <b>Auto Ankauf</b>, das Sie annehmen oder auch ablehnen können. Bei
                    Annahme des Ankaufspreises, können Sie wahlweise das Fahrzeug an unserem Standort in Säriswil (Bern) vorbeibringen oder
                    wir holen es bei Ihnen zu Hause ab.
                </p>

                <p class="text-center">Holen Sie sich innert 24 Stunden eine Offerte für Ihr Auto ein:</p>

                <div class="text-center">
                    <a href="/autoankauf/formular" title="Auto Ankauf Formular Schweiz" class="btn btn-primary px-4 py-2 rounded-pill mb-4 violet-blue-bg">Online Auto Ankauf</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <div class="container py-4 py-sm-6">
            <h2 class="text-center primarycolor">Vorteile des Autoverkaufs an uns</h2>
            <div class="mt-4 row justify-content-center advantage-sec">
                <div class="col-md-6 col-lg-4 my-3 text-center">
                    <div class="text-center mb-2"><i class="fa fa-check-circle-o pr-2 violet-blue-text" style="font-size: 40px;"></i></div>
                    <h3 class="h5 font-weight-light d-inline-block">Online Abwicklung des Verkaufs <span class="d-inline-block pointer ml-1" data-toggle="tooltip" data-placement="top" title="Sie können über unsere Website Ihr altes Auto zur Überprüfung einsenden und zum besten Preis verkaufen und erhalten unser Angebot per E-Mail oder auf Wunsch auch per Post."><i class="fa fa-info-circle violet-blue-text" style="font-size:18px;"></i></span></h3>

                </div>

                <div class="col-md-6 col-lg-4 my-3 text-center">
                    <div class="text-center mb-2"><i class="fa fa-check-circle-o pr-2 violet-blue-text" style="font-size: 40px;"></i></div>
                    <h3 class="h5 font-weight-light d-inline-block benefits">Schnelles & verbindliches Angebot einholen <span class="d-inline-block pointer ml-1" data-toggle="tooltip" data-placement="top" title="In wenigen Schritten sind Sie Ihr altes Auto los. Einfach online unser Ankaufsformular ausfüllen und innert 24 Stunden eine Offerte erhalten."><i class="fa fa-info-circle violet-blue-text" style="font-size:18px;"></i></span></h3>
                </div>

                <div class="col-md-6 col-lg-4 my-3 text-center">
                    <div class="text-center mb-2"><i class="fa fa-check-circle-o pr-2 violet-blue-text" style="font-size: 40px;"></i></div>
                    <h3 class="h5 font-weight-light d-inline-block benefits">Vertrauter Autohändler in der Nähe <span class="d-inline-block pointer ml-1" data-toggle="tooltip" data-placement="top" title="Ob Ankauf oder Verkauf, wir begleiten unsere Kunden auf dem Weg Ihrer Mobilität. Vertrauen basiert auf Gegenseitigkeit: die Automobile Wohlensee AG beratet und unterstützt Sie gerne beim Verkauf Ihres Autos. Kundenbeziehungen werden bei der Automobile Wohlensee AG seit ihren Anfängen im Jahre 2015 gepflegt."><i class="fa fa-info-circle violet-blue-text" style="font-size:18px;"></i></span></h3>
                </div>

                <div class="col-md-6 col-lg-4 my-3 text-center">
                    <div class="text-center mb-2"><i class="fa fa-check-circle-o pr-2 violet-blue-text" style="font-size: 40px;"></i></div>
                    <h3 class="h5 font-weight-light d-inline-block benefits">Keine mühsamen Verhandlungen<span class="d-inline-block pointer ml-1" data-toggle="tooltip" data-placement="top" title="Ankaufsformular einfach und online ausfüllen und ein Angebot ohne Papierkram erhalten. Wir ersparen unseren Kunden stundenlange Verhandlungen. Der fairste Preis wird Ihnen in kürzester Zeit angeboten."><i class="fa fa-info-circle violet-blue-text" style="font-size:18px;"></i></span></h3>
                </div>

                <div class="col-md-6 col-lg-4 my-3 text-center">
                    <div class="text-center mb-2"><i class="fa fa-check-circle-o pr-2 violet-blue-text" style="font-size: 40px;"></i></div>
                    <h3 class="h5 font-weight-light d-inline-block benefits">Abholen des Autos bei Ihnen zu Hause<span class="d-inline-block pointer ml-1" data-toggle="tooltip" data-placement="top" title="Auf Wunsch können Sie Ihr altes Auto einfach und unkompliziert von uns abholen lassen. Sie wollen sich eine lange Fahrt mit Ihrem Auto ersparen? Lassen Sie uns zu Ihnen nach Hause kommen und Ihr altes Auto kaufen."><i class="fa fa-info-circle violet-blue-text" style="font-size:18px;"></i></span></h3>
                </div>

                <div class="col-md-6 col-lg-4 my-3 text-center">
                    <div class="text-center mb-2"><i class="fa fa-check-circle-o pr-2 violet-blue-text" style="font-size: 40px;"></i></div>
                    <h3 class="h5 font-weight-light d-inline-block benefits">Äusserst faire & transparente Preise<span class="d-inline-block pointer ml-1" data-toggle="tooltip" data-placement="top" title="Transparenz ist für uns sehr wichtig. Ob Sie an unserem Standort oder wir bei Ihnen vor Ort Ihr Auto kaufen spielt keine Rolle. Bei der Automobile Wohlensee AG erhält jeder Kunde einen fairen und transparenten Preis."><i class="fa fa-info-circle violet-blue-text" style="font-size:18px;"></i></span></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container py-5">
            <div class="text-center">
                <img class="circleicon" src="/assets/front/images/autoankauf/auto-ankauf-schweiz.png" title="Auto Ankauf Schweiz" alt="Auto Ankauf Schweiz">
            </div>
            <h2 class="text-center primarycolor">So funktioniert der Autoankauf</h2>
            <h3 class="text-center subline">In wenigen Schritten zur Ankaufsofferte</h3>
            <br />
            <div class="mt-5">
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">1</div>
                    </div>
                    <div class="col-8 col-lg-6">
                        <h4 class="stepstitle h3size">Angaben zu Ihrem Auto eingeben </h4>
                        <p class="mb-0">Marke, Modell, Getriebe etc. Ihres Autos angeben. Unser Online-Formular ermöglicht Ihnen sämtliche Spezifikationen Ihres Autos einzugeben. Erleichtern Sie sich den Verkauf Ihres Autos, indem Sie alle nötigen Fahrzeugdaten online ausfüllen.</p>
                    </div>
                </div>
                <!--path between 1-2-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                <!--second section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-8 col-lg-6 text-right">
                        <h4 class="stepstitle h3size">Fotos Ihres Autos hochladen </h4>
                        <p class="mb-0">Laden Sie ein paar Bilder Ihres Autos im Onlineankaufsformular hoch. Damit wir uns einen möglichst präzisen Eindruck Ihres Autos verschaffen können, bitten wir Sie genügend qualitative Fotos Ihres Autos hochzuladen. Qualitative Fotos erleichtern die präzise Bewertung Ihres Autos.</p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">2</div>
                    </div>
                </div>
                <!--path between 2-3-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>
                <!--third section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center full-left d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">3</div>
                    </div>
                    <div class="col-8 col-lg-6">
                        <h4 class="stepstitle h3size">Wer verkauft das Auto? </h4>
                        <p class="mb-0">Einige persönliche Angaben werden über das Onlineankaufsformular erhoben. Diese Angaben benötigen wir, um Ihnen eine Offerte bzw. Ihren allfälligen Verkaufsvertrag vorzulegen.</p>
                    </div>
                </div>
                <!--path between 3-4-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>
                <!--fourth section-->
                <div class="row align-items-center justify-content-end how-it-works d-flex">
                    <div class="col-8 col-lg-6 text-right">
                        <h3 class="stepstitle h3size">Preisangebot innert Stunden erhalten</h3>
                        <p class="mb-0">Auto-Ankauf auf einfache und unkomplizierte Weise. Die Abwicklung erfolgt schnell und präzise. Innert 24 Stunden erhalten Sie von der Automobile Wohlensee AG ein Angebot für das Auto, das Sie verkaufen wollen.</p>
                    </div>
                    <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">4</div>
                    </div>
                </div>
                <!--path between 4-5-->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr/>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>
                <!--fifth section-->
                <div class="row align-items-center how-it-works d-flex">
                    <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
                        <div class="circle font-weight-bold">5</div>
                    </div>
                    <div class="col-8 col-lg-6">
                        <h3 class="stepstitle h3size">Ihr Auto zum besten Preis verkauft </h3>
                        <p class="mb-0">Falls Sie mit dem Angebot zufrieden sind, bereiten unsere Mitarbeitenden den Verkaufsvertrag vor und vereinbaren den schnellstmöglichen Termin für die Übergabe Ihres alten Autos. Gratulation, Sie haben Ihr Auto erfolgreich online verkauft!</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="/autoankauf/formular" title="Autoankauf in Bern" class="btn btn-primary px-4 py-2 rounded-pill violet-blue-bg">Zum Ankaufsformular</a>
            </div>
        </div>
    </div>

    <div class="bg-gray">
        <div class="container-60">
            <div class="text-center">
                <img class="circleicon-nb width-5p" src="/assets/front/images/autoankauf/autoankauf.png" title="Autoankauf Bern" alt="Autoankauf Bern">
            </div>
            <br />
            <p class="text-center mb-0">Bevorzugen Sie den traditionellen Verkauf über einen unserer Mitarbeitenden? Dann kontaktieren Sie sich
            ganz unverbindlich unter der Nummer <a href="tel:+41315031012" class="violet-blue-text">+41 31 503 10 12</a> oder senden Sie uns eine E-Mail an <a href="mailto:info@automobile-wohlensee.ch"
            class="violet-blue-text">info@automobile-wohlensee.ch</a>
            </p>
        </div>
    </div>

    <div class="bg-white">
        <div class="container">
            <div class="review-section">
                <div class="container">
                    <div class="py-5">
                        <h2 class="text-center primarycolor">Das sagen unsere Kunden über unseren Ankaufsdienst</h2>
                        <div class="container my-4">
                            <div class="row testimonial-slider">
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Wir haben einen sehr schönen Mini Clubman Cooper S gekauft. Die Beschreibung bei autoscout24 stimmte perfekt und hat unsere Erwartungen vollumfänglich erfüllt.
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a/AATXAJwSuzo6PaclyNodRiPg7iENoKscFKvFzYGDT7TS=s80-c-c0x00000000-cc-rp-mo-br100" alt="wir kaufen dein auto">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Lukas Beglinger</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Von A-Z einfach ein top Service. Man merkt die Leidenschaft für die Autos bei den Mitarbeitern und null Aufdringlichkeit. Mein Passat ist ein Traum und es wird ganz sicher nicht das letzte Auto sein, welches ich von dort kaufe.
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a/AATXAJzqssn6RlZgWf-HPC99WQXqTd4V2RlZGgXpxes1=s80-c-c0x00000000-cc-rp-mo-br100" alt="auto ankauf schweiz">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Julia De Falco</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Herr Ismajli ist sehr professionell und zuvorkommend. Allgemein war der Kontakt von Anfang bis Ende unkompliziert und angenehm. Das Auto wurde in perfektem Zustand abgeliefert...
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a-/AOh14GhS9n89wX_T9Le7MwYoRTCfKPeAoC6T_CVknSGjcA=s80-c-c0x00000000-cc-rp-mo-br100" alt="autoankauf in bern">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Andi Hohler</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Ich kann diese Garage jedem empfehlen. Sehr qualitative Arbeit. Man wird ernst genommen. Danke Ismail und Arlind!
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a/AATXAJwnX_-8ztz7K1OCyp4llM5d4G1d0OXdSvro5zPC=s80-c-c0x00000000-cc-rp-mo-br100" alt="auto ankauf in bern">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Rina Dulaj</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                            Autoankauf: habe Auto via Video Call gekauft. Alles tipptopp. Sehr kulant. Das gekaufte Fahrzeug konnte wegen eines Defektes an der Heizung nicht sofort ausgeliefert werden. Händler hat uns kostenlos einen gleichwert...
                                                <!-- igen Ersatzwagen zur Verfügung gestellt. Der Defekt wurde behoben. Auto ist einwandfrei. Zustellung nach Winterthur war auch gegen kleinen Aufpreis möglich. -->
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a-/AOh14Gi19Uf5culKyrvI_JAY3nnJ_OF0_h7ppDKB5lifhw=s80-c-c0x00000000-cc-rp-mo-ba3-br100" alt="autoankauf in der schweiz">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Malte Naumi</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Wir haben einen Mercedes Benz bei der Automobile Wohlensee AG gekauft. Sie haben uns sehr gut betreut, Fragen offen und ehrlich beantwortet und transparent mit uns kommuniziert. Von meiner Seite kann ich die Automobile...
                                                <!-- Wohlensee AG wärmstens empfehlen. Die Firma schaut zu Ihren Kunden und versucht auf sämtliche Wünsche einzugehen. Vorbildlicher Autohändler. -->
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a/AATXAJwYeqqK_EPQmUs8X52MZWkjaY1ZretiWPRtM9TC=s80-c-c0x00000000-cc-rp-mo-br100" alt="Autoankauf online">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Manuel Liechti</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Autoverkauf: Habe mein Auto an die Automobile Wohlensee AG verkauft.  Herr Ismajli war von Anfang an sehr zuvorkommend und fair. Das Auto wurde schnell und unkompliziert von Ihm persönlich abgeholt.
                                            </div>
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a-/AOh14GhYTLHEwcmfs0ui7ndQTozclex9wXfM7utmYyTz=s80-c-c0x00000000-cc-rp-mo-br100" alt="Wir verkaufe ich mein Auto=">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Maik Weber</div>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-container">
                                        <div class="testimonial-text">
                                            <div class="testimonial-text-box">
                                                Gutes gebrauchtes Fahrzeug gesucht? Wir können Automobile Wohlensee AG wärmstens empfehlen. Man merkt, dass hier sowohl der Service als auch die Fahrzeuge einem hohen Qualitätsstandard entsprechen. Kundenzufriedenheit...
                                            </div> 
                                        </div>
                                        <div class="testimonial-info">
                                            <div class="testimonial-info-img">
                                                <img src="https://lh3.googleusercontent.com/a/AATXAJxoYe2iu3S0s-aubBCa-0P9eOwqPscNkIHqvpmI=s80-c-c0x00000000-cc-rp-mo-br100" alt="Auto verkaufen Schweiz">
                                            </div>
                                            <div class="testimonial-info-text">
                                                <div class="testimonials-name" itemprop="headline">Susanna</d>
                                                <div class="testimonials-star">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-12">
                    <h4 class="text-center primarycolor mb-4"><b>Häufige Fragen zum Autoankauf</b></h4>
                    <div class="accordion-container">
                        <div class="set">
                            <a href="javascript:void(0);">Wieso sollte ich der Automobile Wohlensee AG mein Auto verkaufen? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Wir sind ein modernes Familienunternehmen, welches sich auf den qualitativen Ankauf von Neuwagen und Gebrauchtautos spezialisiert hat. Durch unsere langjährige Erfahrung, unserer Präsenz und unserer professionellen Vorgehensweise sind wir in der Lage Ihnen ein bestmögliches Angebot zu unterbreiten.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Wie wird der Auto-Ankauf der Automobile Wohlensee AG gehandhabt? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Nach dem Ausfüllen unseres <a href="/autoankauf/formular" title="Autoankauf Online Formular">Autoankaufsformulars</a> bewerten wir Ihr Auto mit der Eurotax Autobewertungssoftware und richten uns in erster Linie an den Einkaufs- und Verkaufswerten. Im nächsten Schritt vergleichen wir Ihr Auto mit den Internetplattformen wie autoscout24.ch, car4you.ch, autolina.ch etc. und ermitteln den realistischen Verkaufswert Ihres Autos. Wird der Marktpreis Ihres Autos überproportional höher gehandelt als der es Eurotax Verkaufswertes, setzen wir unsere Preisvorstellung höher an. Wird der Autowert Ihres Autos tiefer gehandelt, wird die Preisvorstellung dementsprechend tiefer angesetzt. Die von Ihnen aufgezählten Mängel werden berücksichtigt und in die Bewertung miteinbezogen. Selbstverständlich werden die Kosten für die Reparatur der vorhandenen Mängel zu einem tieferen Tarif angerechnet, da uns die Autoreparaturen intern geringere Kosten verursachen.</p>
                                <p>Nachdem wir unsere Preisvorstellung eruiert haben, kontaktieren wir Sie entweder telefonisch oder per Mail und teilen Ihnen unser Angebot mit. Sollten Ihnen unser Angebot passen, vereinbaren wir mit Ihnen ein Abholtermin und holen Ihr Auto in der Regel innert 24 Stunden ab. Selbstverständlich bezahlen wir bar vor Ort oder überweisen Ihnen den Betrag innert zwei Tagen auf Ihr Bankkonto.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Was passiert, wenn bei bei der Abholung Mängel entdeckt werden, welche nicht auf dem Ankaufsformular aufgeführt wurden? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Wir unterscheiden zwischen Gebrauchsspuren, Kratzern/Dellen und schwerwiegenden Mängeln.</p>
                                <ul>
                                    <li><b>Gebrauchsspuren</b>: Handelt es sich um altersbedingte Gebrauchsspuren, wird der Preis in der Regel gar nicht angepasst und der Autoankaufsprozess wird wie gehabt, durchgeführt.</li>
                                    <li><b>Kratzer, Beulen und Dellen</b>: Bei den Kratzern, Beulen und Dellen wägen wir ab, wie hoch der Preis des zu verkaufenden Autos im Verhältnis zu den Schäden ist. Auch hier wird alters- und preisbedingt entschieden, inwiefern eine Anpassung des Preises notwendig ist. Es ist nochmals zu erwähnen, dass die Anpassung der Preise mit internen Kosten erfolgt. Alles in allem sind die internen Kosten durchschnittlich 30-40% tiefer als die herkömmlichen Kosten.</li>
                                    <li><b>Schwerwiegende Mängel</b>: Schwerwiegende Mängel am Auto sind Arbeiten wie beispielsweise grössere Carrosserieschäden, unruhig laufender Motor oder ein nicht sauber schaltendes Getriebe. In solchen Fällen passen wir vorwiegend den Preis an oder verzichten komplett auf den Ankauf.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Wieso erhalten Sie bei uns die besten Preise? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Das Klischee mit den besten Preisangeboten ist in der Marketingsprache ein Oberbegriff. Generell ist ein profiorientiertes Autohandelsunternehmen interessiert einen tiefen Einkaufspreis zu erzielen. Durch unser langjähriges Know-How und unserem Qualitätsstandard versuchen wir den Kunden für uns zu gewinnen und eine langfristige Zusammenarbeit aufzubauen und zu pflegen. Ausserdem haben wir eine eigene Autowerkstatt und eine Carrosserie, wodurch wir interne Preisberechnungen tätigen können.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Ist das Einholen einer Offerte kostenlos? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Selbstverständlich machen wir Ihnen innert 24 Stunden eine kostenlose Ankaufsofferte. </p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Wie erfolgt die Bezahlung beim Verkauf meines Autos? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Sie erhalten das Geld bei der Abholung bar oder nach Absprache überweisen wir Ihnen den Betrag innert ein bis zwei Tagen auf Ihr Bankkonto.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Muss ich der Eigentümer des Autos sein, damit ich das Auto verkaufen kann? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Ja, das Auto muss Ihnen gehören, damit wir Ihr Auto kaufen können. Eine Alternative mit einer Vollmacht ist in Ausnahmefällen möglich.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Das Fahrzeug ist annulliert und kann nicht mehr eingelöst werden, kann eine Abholung trotzdem gewährleistet werden? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Ja, wir verfügen über einen eigenen Abschlepptransport und besitzen Händlerschilder.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Muss ich für den Verkauf meines Autos garantieren? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Nein. Sobald es zum Kaufvertrag kommt, wird jegliche Gewährleistung Ihrer Seite ausgeschlossen. Wir kaufen das Auto ohne Garantie.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Das Auto ist in einem laufenden Leasing, kauft ihr mein Auto dennoch? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <ul>
                                    <li>Nein, wenn das Auto in einem laufenden Leasing ist, kaufen wir es erst nachdem Ihr Auto von Ihnen aus dem Leasing rausgekauft worden ist. </li>
                                    <li>In Ausnahmefällen regeln wir die Vorfinanzierung mit der Bank selbst.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Kaufen Sie auch Unfallautos, bzw. Autos, die von der Versicherung als nicht mehr reparierbar eingestuft werden, an? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                            <p>Nein. Unfallautos als solche lehnen wir dankend ab. Wir pflegen jedoch eine Partnerschaft mit verschiedenen Exportunternehmen und holen für Sie das bestmögliche Angebot. </li>
                            </p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Ich bereue meinen Verkauf und möchte mein Auto zurück. Kann ich den Verkauf rückgängig machen? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Prinzipiell ist ein Rückkauf nicht möglich. In Ausnahmefällen können wir situativ über einen Rückkauf sprechen. Dieser ist jedoch mit Kosten verbunden. </li>
                                </p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Welche Faktoren spielen für einen höheren Ankaufspreis eine Rolle? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <ul>
                                    <li>Mechanischer Zustand
                                        <ul>
                                            <li> Servicefälligkeiten insbesondere Zahnriemenwechsel</li>
                                            <li> Zustand der Kupplung</li>
                                            <li> Klimakontrolle</li>
                                            <li> Bremsanlage</li>
                                            <li> Reifenzustand und 8-fach Bereifung</li>
                                        </ul>
                                    </li>
                                    <br />
                                    <li> Carrosserie- / Interieur- und allgemeiner Zustand
                                        <ul>
                                            <li> Carrosseriezustand</li>
                                            <li> Schlüsselbestand (ein oder zwei Autoschlüssel)</li>
                                            <li> Zustand des Innenraums</li>
                                            <li> Vollständigkeit der Servicedokumente</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="set">
                            <a href="javascript:void(0);">Ich finde mein Servicebuch/Wartungsbuch nicht mehr, welche Folgen bezüglich des Autoverkaufs hat dies? <i class="fa fa-plus"></i> </a>
                            <div class="content">
                                <p>Falls der Servicenachweis alternativ vorgelegt werden kann, hat dies keine Folgen. Sollte Ihr Auto keine Servicenachweise haben, holen wir für Sie die bestmögliche Ankaufsofferte von Partnergaragen ein. </li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white pb-5">
                <div class="container">
                    <div class="container">
                        <h2 class="text-center primarycolor">Ankauf aller Marken</h2>
                        <div class="car-list-slider">
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Alfa-Romeo-Logo.jpg" alt="">
                                </div>
                                <span>ALFA ROMEO</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Alpina-Logo.jpg" alt="">
                                </div>
                                <span>ALPINA</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Alpine-Logo.jpg" alt="">
                                </div>
                                <span>Alpine</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Aston-Martin-Logo.jpg" alt="">
                                </div>
                                <span>Aston Martin</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Audi-Logo.jpg" alt="">
                                </div>
                                <span>Audi</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Bentley-Logo.jpg" alt="">
                                </div>
                                <span>Bentley</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/BMW-Logo.jpg" alt="">
                                </div>
                                <span>BMW</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Bugatti-Logo.jpg" alt="">
                                </div>
                                <span>BUGATTI</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Cadillac-Logo.jpg" alt="">
                                </div>
                                <span>Cadillac</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Chevrolet-Logo.jpg" alt="">
                                </div>
                                <span>Chevrolet</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Citroen-Logo.jpg" alt="">
                                </div>
                                <span>Citroen</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Cupra-Logo.jpg" alt="">
                                </div>
                                <span>Cupra</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Dacia-Logo.jpg" alt="">
                                </div>
                                <span>Dacia</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/DS-Logo.jpg" alt="">
                                </div>
                                <span>DS</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Ferrari-Logo.jpg" alt="">
                                </div>
                                <span>Ferrari</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Fiat-Logo.jpg" alt="">
                                </div>
                                <span>Fiat</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Ford-Logo.jpg" alt="">
                                </div>
                                <span>Ford</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Honda-Logo.jpg" alt="">
                                </div>
                                <span>Honda</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Hyundai-Logo.jpg" alt="">
                                </div>
                                <span>Hyundai</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Infiniti-Logo.jpg" alt="">
                                </div>
                                <span>Infiniti</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Isuzu-Logo.jpg" alt="">
                                </div>
                                <span>Isuzu</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Jaguar-Logo.jpg" alt="">
                                </div>
                                <span>Jaguar</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Jeep-Logo.jpg" alt="">
                                </div>
                                <span>Jeep</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Kia-Logo.jpg" alt="">
                                </div>
                                <span>Kia</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Lada-Logo.jpg" alt="">
                                </div>
                                <span>Lada</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Lamborghini-Logo.jpg" alt="">
                                </div>
                                <span>Lamborghini</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Land-Rover-Logo.jpg" alt="">
                                </div>
                                <span>Land Rover</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Lexus-Logo.jpg" alt="">
                                </div>
                                <span>Lexus</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Lotus-Logo.jpg" alt="">
                                </div>
                                <span>Lotus</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Maserati-Logo.jpg" alt="">
                                </div>
                                <span>Maserati</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Mazda-Logo.jpg" alt="">
                                </div>
                                <span>Mazda</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Mercedes-Logo.jpg" alt="">
                                </div>
                                <span>Mercedes</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Mini-Logo" alt="">
                                </div>
                                <span>Mini</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Mitsubishi-Logo" alt="">
                                </div>
                                <span>Mitsubishi</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Nissan-Logo.jpg" alt="">
                                </div>
                                <span>Nissan</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Opel-Logo.jpg" alt="">
                                </div>
                                <span>Opel</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Peugeot-Logo.jpg" alt="">
                                </div>
                                <span>Peugeot</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Porsche-Logo" alt="">
                                </div>
                                <span>Porsche</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Renault-Logo.jpg" alt="">
                                </div>
                                <span>Renault</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Rolls-Royce-Logo.jpg" alt="">
                                </div>
                                <span>Rolls Royce</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Seat-Logo.jpg" alt="">
                                </div>
                                <span>Seat</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Skoda-Logo.jpg" alt="">
                                </div>
                                <span>Skoda</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Subaru-Logo.jpg" alt="">
                                </div>
                                <span>Subaru</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Suzuki-Logo.jpg" alt="">
                                </div>
                                <span>Suzuki</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Tesla-Logo.jpg" alt="">
                                </div>
                                <span>Tesla</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Toyota-Logo.jpg" alt="">
                                </div>
                                <span>Toyota</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/Volvo-Logo.jpg" alt="">
                                </div>
                                <span>Volvo</span>
                            </div>
                            <div class="car-item">
                                <div class="image-block">
                                    <img src="/assets/front/images/cars/VW-Logo.jpg" alt="">
                                </div>
                                <span>VW</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="footer-fix-section">
    <a href="/autoankauf/formular">Auto anbieten</a>
    <a href="/kontakt">Kontakt</a>
</div>

<script>
    $('.testimonial-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });

    $('.car-list-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });
</script>