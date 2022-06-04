<style>
    .br-blue {
        border-color: var(--primary-color) !important
    }

    .primarycolor {
        color: #6667ac;
    }

    .text-muted-dul {
        color: #afafaf
    }
    .list-custom .list-group-item {
        border-top: 0;
        border-bottom: 0
    }
    .list-custom .list-group-item:first-child {
        border-left: 0
    }
    .list-custom .list-group-item:last-child {
        border-right: 0
    }
    .mycardlink,
    .card-custom {
        background: #f7f7f7;
        display: block;
    }
    .card-custom .list-custom .list-group-item {
        padding: 12px;
        width: 30.33%;
        margin: auto;
        background: none;
    }
    .card-custom .list-custom .list-group-item h6 {
        font-size: 13px;
        margin-top: 6px;
    }
    .mycardlink .card-img-top {
        object-fit: cover;
        max-height: 170px;
        width: auto;
        max-width: 100%;
    }
    .mycardlink,
    .card-custom {
        transition: all .2s ease-in-out;
    }
    .mycardlink:hover,
    .card-custom:hover {
        box-shadow: 0 0 16px 3px #efe9e9;
        border-color: #e2e0e0 !important
    }
    .mycardlink .card-img-top {
        transition: all .2s ease-in-out;
    }
    .mycardlink:hover .card-img-top {
        transform: scale(1.1);
    }
    @media (max-width: 1199px) {
        .card-custom .card-body {
            padding: 25px 15px 15px 15px !important
        }
        .mycardlink,
        .card-custom {
            min-height: auto;
        }
    }
    @media (max-width: 991px) {
        .list-custom {
            display: inline-flex
        }
    }
    @media (max-width: 767px) {
        .list-custom .list-group-item {
            padding: 6px 14px
        }
    }
    body {
        background-color: #fff !important;
    }
    .mycardlink:hover {
        text-decoration: none;
    }
    .video-header {
        min-height: 100%;
        position: relative;
        background-position: bottom center;
        z-index: 10;
        padding: 0;
        background: none;
        width: 100%;
        /* max-width: 177.78vh; */
        /* 16/9 = 1.778 */
        height: calc(100vh - 250px);
        /* height:width ratio = 9/16 = .5625  */
        max-height: 100vh;
        
    }
    .video-header .video {
        overflow: hidden;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        display: block;
    }
    .video-header .video .banner {
        display: flex;
        z-index: 2;
        text-align: center;
        justify-content: center;
        margin-top: 150px;
        height: auto;
    }
    .video-header .video .banner::before {
        background: none;
    }
    .video-header .video .banner .card {
        padding: 0.5em 2em 0.5em 2em;
        background: rgba(59, 60, 149, .8);
    }
    #ytplayer{
        height: calc(100% + 110px);
        min-height: 100vw;
        width: 100%;
        position: absolute;
        overflow: hidden;
        z-index: 0;
        pointer-events: none;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    video#video_player {
        position: absolute;
        right: 0;
        bottom: 0;
        top:50%;
        left:50%;
        min-width: 100%;
        min-height: 100%;
        z-index: -100;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        object-fit:cover;
    }
    @media(max-width: 534px) {
        .video-header {
            height: 400px;
        }

        #ytplayer {
            width: 533.33px;
            height: 410px;
        }
    }
    .player-background-overlay {
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        position: absolute;
    }
    .player-placeholder {
        background: url('/assets/front/images/headers/startseite.jpg');
        background-position: center;
        background-size: cover;
        height: calc(100% + 110px);
        width: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .banner-arrow-down {
        width: 100%;
        position: absolute;
        z-index: 2;
        top: 450px;
    }
    .banner-arrow-down i {
        font-size: 24px;
    }
    .banner-arrow-down button {
        width: 50px;
        height: 50px;
        background-color: rgba(59, 60, 149, .8);
    }
    .banner-start-stop {
        position: absolute;
        z-index: 2;
        bottom: 15px;
        right: 15px;
        display: none;
    }
    .banner-start-stop button {
        background-color: rgba(59, 60, 149, .8);
    }
    @media (max-width: 991px) {
        .banner {
            margin-top: 40px !important;
            margin-left: 30px;
            margin-right: 30px;
        }
        .banner .card {
            padding: 0.5em 0.5em 0.5em 0.5em;
        }
        .banner .card h2 {
            font-size: 1rem;
            margin-top: 10px;
        }
    }
    .home-slide-block .car-list-slider .car-item .image-block img{
        max-width: 150px;
    }
</style>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<section id="main">
    <div class="video-header">
        <div class="video">
            <!-- <div class="banner d-flex">
                <div class="card">
                    <div class="card-body">
                        <h1>Ihr schweizweiter Partner in Sachen Autoankauf und Autoverkauf</h1>
                    </div>
                </div>
            </div>
            <div class="banner-arrow-down d-none d-xl-flex justify-content-center">
                <button class="btn btn-primary rounded-pill violet-blue-bg" aria-label="Nach unten scrollen"><i class="fa fa-arrow-down"></i></button>
            </div> -->
            <div class="banner-start-stop justify-content-center">
                <button class="btn btn-primary rounded-pill violet-blue-bg" aria-label="Start/Stopp"><i id="banner-start-stop-icon" class="fa fa-play"></i></button>
            </div>
            <video id="video_player" poster="/assets/front/videos/IGaPPh_MQxg-HD.png" controlsList="nodownload" autoplay="autoplay" loop muted playsinline width="100%">
                <source src="/assets/front/videos/AutomobileWohlenseeAG2.mp4" type="video/mp4">
            </video>
            <div class="video-slide-container">
                <div class="slide-content">
                    <div class="main-title">Herzlich Willkommen bei<br>Automobile Wohlensee AG</div>
                    <h1>Ihr schweizweiter Partner in Sachen Autoankauf und Autoverkauf.</h1>
                    <div class="buttons-block">
                        <a href="/autos">Auto kaufen</a>
                        <a href="/autoankauf">Auto verkaufen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey first-row mt-0 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-sm-r0 py-4 py-sm-6 order-0 order-lg-0 pr-ie">
                    <div class="inner-content-left">
                    <div class="content-area">
                        <h2 class="primarycolor">Autoankauf schweizweit leicht gemacht</h2>
                            <h3 class="h5 font-weight-light mb-3">Verkaufen Sie Ihr Auto zum besten Preis.</h3>
                            <p>
                            Sie möchten Ihr Fahrzeug verkaufen und wissen nicht welchen Wert es hat? Das können Sie uns überlassen. Wir kaufen Autos online und zu besten Konditionen an. 
                            Einfach und bequem über unser Ankaufsformular eine kostenlose Oferte einholen.
                            </p>
                            <a href="/autoankauf" title="Auto Ankauf Bern" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Zum Autoankauf </a>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1 order-lg-1"  style="margin-top: 30px;">
                    <div class="image-right">
                        <div class="image-border-r clipped-image home-fahrzeugankauf"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="bg-grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0 order-1 order-lg-0 ">
                    <div class="image-left">
                        <div class="image-border-l clipped-image home-fahrzeugverkauf"></div>
                    </div>
                </div>
                <div class="col-lg-6 p-sm-l0 py-4 py-sm-6 pl-ie order-0 order-lg-1">
                    <div class="inner-content-right">
                    <div class="content-area">
                            <h2 class="primarycolor">Ihr Autohaus für Qualitäts-Occasionen</h2>
                            <h3 class="h5 font-weight-light mb-3">Kaufen Sie Ihr Auto bei der Automobile Wohlensee AG.</h3>
                            <p>
                                Wir bieten ein breites Angebot an Occasionautos an: Ob Audi, VW oder Mercedes - kompakte Kleinwagen,
                                geräumige Familienwagen oder sportliche Elektroautos. Bei uns finden Sie alles was das Herz begehrt. Verschaffen Sie sich
                                selber einen Eindruck von unseren Autos.
                            </p>
                            <a href="/autoverkauf" title="Auto verkaufen Bern" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Erfahren Sie mehr</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-sm-r0 py-4 py-sm-6 order-0 order-lg-0 pr-ie">
                    <div class="inner-content-left">
                        <div class="content-area">
                        <h2 class="primarycolor">Autogarage und Carrosseriewerkstatt</h2>
                            <h3 class="h5 font-weight-light mb-3">Ihre Vertrauensgarage für Autoservice & Carrosserie.</h3>
                            <p>
                            Wir verfügen über eine eigene Autowerkstatt. Mit viel Freude und Begeisterung meistern unsere Automechaniker jede Herausforderung.
                            Bei uns erhalten Sie einen umfassenden Service auf hohem qualitativem Niveau — gewohnt zu fairen Konditionen und begleitet von kompetenter Beratung.
                            </p>
                            <a href="/werkstatt" title="Auto Garage und Werkstatt Bern" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Zur Werkstatt
                            </a>    
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1 order-lg-1">
                    <div class="image-right">
                        <div class="image-border-r clipped-image home-werkstatt"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0 order-1 order-lg-0 ">
                    <div class="image-left">
                        <div class="image-border-l clipped-image home-beratung"></div>
                    </div>
                </div>
                <div class="col-lg-6 p-sm-l0 py-4 py-sm-6 pl-ie order-0 order-lg-1">
                    <div class="inner-content-right">
                        <div class="content-area">
                        <h2 class="primarycolor">Persönliche Beratung</h2>
                            <h3 class="h5 font-weight-light mb-3">Kompetente Beratung für Kauf, Verkauf und Reparatur Ihres Autos.</h3>
                            <p>
                                Zögern Sie nicht uns bei Fragen rund um Ihr Auto zu kontaktieren. Wir beraten Sie transparent, freundlich und unkompliziert beim Autokauf oder helfen Ihnen beim Verkauf Ihres alten Autos.
                            </p>
                            <a href="/kontakt" title="Kontakt Automobile Wohlensee AG" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Kontaktieren Sie uns</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-sm-r0 py-4 py-sm-6 order-0 order-lg-0 pr-ie">
                    <div class="inner-content-left">
                    <div class="content-area">
                            <h2 class="primarycolor">Ihr Auto im Abo bei SimpCar AG</h2>
                            <h3 class="h5 font-weight-light mb-3">Bleib flexibel, abonniere günstig dein Auto im Grossraum Bern.</h3>
                            <p>
                                Geniesse grenzenlose Freiheit und Flexibilität. Bei unserem Partner SimpCar AG abonnierst du dein eigenes
                                Auto im Rundum-sorglos-Paket – keine Extrakosten! Laufzeit und Anzahl Kilometer bestimmst du. Überzeug dich
                                selbst von den Vorteilen des Auto Abos (ebenfalls im Angebot – Hybrid- und Elektroautos).
                            </p>
                            <a href="https://www.simpcar.ch" title="Auto Abo SimpCar" target="_blank" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Zu SimpCar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1 order-lg-1"  style="margin-bottom: 30px;">
                    <div class="image-right">
                        <div class="image-border-r clipped-image home-autoabo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<div class="bg-grey padding-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0 order-1 order-lg-0">
                    <div class="image-border-r clipped-image home-autoabo"></div>
                </div>
                <div class="col-lg-6 p-sm-l0 order-0 order-lg-1 py-4 py-sm-6 pl-ie">
                    <div class="inner-content-right">
                        <div class="content-area">
                            <h2 class="primarycolor">Ihr Auto im Abo bei SimpCar AG</h2>
                            <h3 class="h5 font-weight-light mb-3">Bleib flexibel, abonniere günstig dein Auto im Grossraum Bern.</h3>
                            <p>
                                Geniesse grenzenlose Freiheit und Flexibilität. Bei unserem Partner SimpCar AG abonnierst du dein eigenes
                                Auto im Rundum-sorglos-Paket – keine Extrakosten! Laufzeit und Anzahl Kilometer bestimmst du. Überzeug dich
                                selbst von den Vorteilen des Auto Abos (ebenfalls im Angebot – Hybrid- und Elektroautos).
                            </p>
                            <a href="https://www.simpcar.ch" title="Auto Abo SimpCar" target="_blank" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Zu SimpCar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    

    <div class="bg-white">
        <div class="container py-4 py-sm-6">
            <h2 class="text-center primarycolor">Unsere Partner</h2>
            <div class="mt-5 home-slide-block">
                <div class="car-list-slider">
                    <div class="car-item">
                        <div class="image-block">
                            <a href="https://www.simpcar.ch/" title="SimpCar AG" target="_blank">
                                <img src="/assets/front/images/partner/simpcar.svg" alt="SimpCar AG"/>
                            </a>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <a href="https://www.carrosserie-wohlensee.ch/" title="Carrosserie Wohlensee GmbH" target="_blank">
                                <img src="/assets/front/images/partner/carrosserie-wohlensee.png" alt="Carrosserie Wohlensee GmbH"/>
                            </a>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/migrol.jpg" alt="Migrol Auto Service AG"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/cembra.png" height="80" alt="Cembra" style="max-height: 80px;" />
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/garage-vetter.jpg" alt="Garage Daniel Vetter"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/auto-capital.png" alt="Auto Capital AG"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/jauagbern.png" alt="Jau AG"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/suissefox.png" alt="SuisseFox"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/marcel-gilgen-gmbh.png" alt="Marcel Gilgen GmbH"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/urs-muenger-garage.png" alt="Urs Münger Garage"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/quality-1.png" alt="Quality 1"/>
                        </div>
                    </div>
                    <div class="car-item">
                        <div class="image-block">
                            <img src="/assets/front/images/partner/arca-it.png" alt="ArCa-IT AG"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $('.banner-arrow-down button').on('click', function() {
      $('.first-row')[0].scrollIntoView({
        behavior: 'smooth',
        block: 'start',
      });
    });

    var video = document.getElementById("video_player");
    video.addEventListener("canplay", function() {
        setTimeout(function() {
            video.play();
            //alert(123);
        }, 2000);
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