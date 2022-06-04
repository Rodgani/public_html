<style>
    .br-blue{border-color:var(--primary-color)!important}
    .text-muted-dul{color:#afafaf}
    .list-custom .list-group-item{border-top:0;border-bottom:0}
    .list-custom .list-group-item:first-child{border-left:0}
    .list-custom .list-group-item:last-child{border-right:0}
    .mycardlink, .card-custom{
    background: #f7f7f7;
    display: block;
    min-height: 531px;
    }
    
    .card-custom .list-custom .list-group-item{
    padding: 12px;
    width: 30.33%;
    margin: auto;
    background: none;
    }
    .card-custom .list-custom .list-group-item h6{
    font-size: 13px;
    margin-top: 6px;
    }
    .mycardlink .card-img-top{
    object-fit: cover;
    max-height: 170px;
    width: auto;
    max-width: 100%;
    }
    .mycardlink, .card-custom {
    transition: all .2s ease-in-out;
    }
    .mycardlink:hover, .card-custom:hover {
    box-shadow: 0 0 16px 3px #efe9e9;
    border-color: #e2e0e0!important
    }
    .mycardlink .card-img-top{
    transition: all .2s ease-in-out;
    }
    .mycardlink:hover .card-img-top{
    transform: scale(1.1);
    }
    @media (max-width: 1199px) {
    .card-custom .card-body{padding:20px 15px 15px 15px!important}
    .mycardlink, .card-custom {min-height: auto;}
    }
    @media (max-width: 991px) {
    .list-custom{display:inline-flex}
    }
    @media (max-width: 767px) {
        .list-custom .list-group-item{padding:6px 14px}
        #carouselExampleFade .carousel-item {
            padding: 0;
            margin-bottom: 25px;
        }
    }
    body{ background-color: #fff !important; }
    .mycardlink:hover{
    text-decoration:none;
    }
    .select2-container {
    border: 0px solid #fff;
    outline: 0px;
    }
    span.select2-selection.select2-selection--single {
    border: 0px solid #fff;
    padding: 4px;
    }
    .select2-container *:focus {
    outline: none;
    }
    .select2{
    height: 37px;
    }

    .primarycolor {
    color: #6667ac;
    }

    .font-weight-light-mb-3 {
        font-weight: 300!important;
    }

    .h5 {
        font-size: 1.25rem;
    }
    .product-slide .card-custom,
    .product-slide .mycardlink {
        min-height: initial;
    }
    .mycardlink .card-img-top{
        max-height:135px;
    }

</style>
<script>
    jQuery( document ).ready(function() {
        jQuery(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();
            jQuery('html, body').animate({
                scrollTop: jQuery($.attr(this, 'href')).offset().top - 100
            }, 500);
        });
    });
</script>
<section id="main">
    <div class="banner"
        style="background-image: url('/assets/front/images/reperaturservice.png')">
        <div class="container h-100">
            <div class="d-flex h-100 align-items-end pb-5">
                <!-- <div class="card">
                    <div class="card-body">
                        <h1>Werkstatt</h1>
                    </div>
                </div> -->
                <div class="banner-content">
                    <h1>Autowerkstatt in Bern für Reparatur, Service & Carrosserie</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-lighhblue">
        <div class="container py-4 py-sm-6">
            <div class="row text-center workshop-menulist">
                <div class="col-md-4 col-lg-4 mbm-4">
                    <a href="#reparatur" class="text-decoration-none text-body">
                        <div class="card d-block border-1 violet-blue-border py-4">
                            <img height="75" src="/assets/front/images/icons/werkstatt-reparatur.svg" alt="Reparatur">
                            <h2 class="h5 font-weight-light mt-4">Autoreparatur</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 mbm-4">
                    <a href="#service" class="text-decoration-none text-body">
                        <div class="card d-block border-1 violet-blue-border py-4">
                            <img height="75" src="/assets/front/images/icons/werkstatt-service.svg" alt="Service">
                            <h2 class="h5 font-weight-light mt-4">Autoservice</h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-lg-4 mbm-4">
                    <a href="#carrosserie" class="text-decoration-none text-body">
                        <div class="card d-block border-1 violet-blue-border py-4">
                            <img height="75" src="/assets/front/images/icons/werkstatt-carrosserie.svg" alt="Carrosserie">
                            <h2 class="h5 font-weight-light mt-4">Carrosserie</h2>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-6 col-lg-3 mbm-4">
                    <a href="/miete-mich-taeglich/peugeot-boxer" class="text-decoration-none text-body">
                        <div class="card d-block border-1 violet-blue-border py-4">
                            <img height="75" src="/assets/front/images/icons/werkstatt-auto.svg" alt="Lieferwagen mieten">
                            <h2 class="h5 font-weight-light mt-4">Lieferwagen mieten</h2>
                        </div>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="bg-grey" id="reparatur">
        <div class="container-fluid">
            <div class="row pt-30">
                <div class="col-lg-6 p-sm-r0 py-4 py-sm-6 order-0 order-lg-0 pr-ie">
                    <div class="inner-content-left">
                        <div class="content-area">
                            <h2 class="primarycolor">Ihre Garage für Autoreparaturen und Autoservice im Grossraum Bern</h2>
                            <h3 class="h5 font-weight-light-mb-3">Lassen Sie Ihr Auto bei der Automobile Wohlensee AG zu fairen Preisen reparieren.</h3>
                            <p>Wir reparieren Autos sämtlicher Automarken. Ambitioniert und mit viel Freude meistern unsere Automechaniker und -mechatroniker jede Herausforderung.
                                 Wir bieten diverse Reparaturen rund um das Auto, zu attraktiven Preisen, an. Unsere Autoreparaturen entsprechen den höchsten Qualitätsstandards und sind dennoch günstig. 
Unsere Mitarbeitenden suchen die beste Lösung für Sie. Bei uns erhalten Sie einen umfassenden Service auf hohem qualitativem Niveau und begleitet von kompetenter Beratung. All das zu fairen Konditionen. 
</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1">
                    <div class="image-right">
                        <div class="image-border-r clipped-image werkstatt-reparatur"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white" id="service">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-0 order-1 order-lg-0">
                    <div class="image-left">
                        <div class="image-border-l clipped-image werkstatt-service"></div>
                    </div>
                </div>
                <div class="col-lg-6 p-sm-l0 py-4 py-sm-6 pl-ie order-0">
                    <div class="inner-content-right">
                        <div class="content-area">
                            <h2 class="primarycolor">Autoservice – leicht gemacht</h2>
                            <h3 class="h5 font-weight-light-mb-3">Ob Ölwechsel, Reifenwechsel oder Bremsenwechsel, bei uns sind Sie richtig!</h3> 
                            <p>Unsere kompetenten Automechaniker erledigen unteranderem folgende Servicearbeiten:</p>
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="checked-list mb-0">
                                        <li>Öl- und Filterwechsel</li>
                                        <li>Zahnriemen und Wasserpumpe</li>
                                        <li>Fahrzeugelektronik</li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <ul class="checked-list">
                                        <li>Bremsenwechsel (inkl. Bremsflüssigkeit)</li>
                                        <li>Klimaservice</li>
                                        <li>Motorfahrzeugkontrolle und vorbereitung</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Selbstverständlich ist diese Aufzählung nicht abschliessend, sondern nur ein kleiner Ausschnitt unseres Angebots an Servicearbeiten. Buchen Sie noch heute einen Wunschtermin für Ihr Auto.</p>
                            <a href="/kontakt" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Termin vereinbaren</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-grey" id="carrosserie">
        <div class="container-fluid">
            <div class="row pb-30">
                <div class="col-lg-6 p-sm-r0 order-0 order-lg-0 py-4 py-sm-6 pr-ie">
                    <div class="inner-content-left">
                        <div class="content-area">
                            <h2 class="primarycolor">Carrosseriewerkstatt für ihr Auto</h2>
                            <h3 class="h5 font-weight-light-mb-3">Autokratzer oder Frontscheibenwechsel? – Carrosseriearbeiten zu besten Konditionen.</h3>
                            <p>Hat Ihr Auto einen Kratzer erlitten, muss Ihre Frontscheibe gewechselt werden oder fehlt Ihnen einfach eine saubere Autopolitur? Dann ist Ihr Auto bei uns bestens aufgehoben.
                                 Durch unsere langjährige Erfahrung bieten wir nebst den gewöhnlichen Carrosseriearbeiten qualitative Restaurationen von Oldtimern an.
                                 Überzeugen Sie sich selbst und kontaktieren Sie uns!</p>
                            <a href="https://www.carrosserie-wohlensee.ch/" target="_blank" class="btn btn-primary px-4 py-2 rounded-pill mt-4 violet-blue-bg">Zu unserem Partner</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 order-1">
                    <div class="image-right">
                        <div class="image-border-r clipped-image werkstatt-carrosserie"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white" id="miete">
        <div class="container py-4 py-sm-6">
            <div class="row display-flex align-items-center">
                <div class="col-sm-5">
                    <div id="carouselExampleFade" class="carousel slide product-slide" data-ride="carousel" data-interval="5000">
                        <!-- <ol class="carousel-indicators">
                            <?php foreach ($mietemichs as $key => $mietemich): ?>
                            <li data-target="#carouselExampleFade" data-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active"' : '' ?>></li>
                            <?php endforeach?>
                        </ol> -->
                        <div class="carousel-inner">
                            <?php foreach ($mietemichs as $key => $mietemich): ?>
                            <?php
                                $images = explode(',', $mietemich['images']);
                                $image = $images[0];
                                ?>
                            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                                <div class="">
                                    <a class="mycardlink" href="<?php echo base_url() ?>miete-mich-taeglich/<?php echo $mietemich['slug']?>">
                                        <div class="card card-custom text-center br-blue">
                                            <?php if ($mietemich['summer_special']) { ?>
                                            <span class="badge badge-danger position-absolute p-2 right rounded-0">Sommeraktion</span>
                                            <?php } else if ($mietemich['one_car_left']) {?>
                                            <span class="badge badge-danger position-absolute p-2 right rounded-0">Nur noch 1 Auto übrig</span>
                                            <?php } else if ($mietemich['winter_special']) {?>
                                            <span class="badge badge-danger position-absolute p-2 right rounded-0">Winteraktion</span>
                                            <?php } else if ($mietemich['brand_new']) {?>
                                            <span class="badge badge-primary position-absolute p-2 right rounded-0">Brandneu</span>
                                            <?php } else if ($mietemich['hybrid']) {?>
                                            <span class="badge badge-primary position-absolute p-2 right rounded-0">Hybrid</span>
                                            <?php } else if ($mietemich['elektro']) {?>
                                            <span class="badge badge-primary position-absolute p-2 right rounded-0">Elektro</span>
                                            <?php } ?>
                                            <div class="card-body p-4">
                                                <h4 class="card-title violet-blue-accent-text text-capitalize"> <b><?php echo $mietemich['vehicle_brand'] ?> <?php echo $mietemich['vehicle_name'] ?></b> </h4>
                                                <img class="card-img-top my-4" src="<?php echo base_url(); ?>uploads/mietemich/<?php echo $image ?>" alt="Image">
                                                <!-- <ul class="list-group list-group-horizontal list-custom mb-2">
                                                    <li class="list-group-item">
                                                        <img src="<?php echo base_url(); ?>assets/front/images/646d5a2e-c825-47aa-a174-727c526e7488.jpg"  alt="" width="40">
                                                        <h6 class="card-title text-muted-dul mb-0"><?php echo $mietemich['vehicle_engine'] ?> </h6>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <img src="<?php echo base_url(); ?>assets/front/images/00024160-9231-4e7a-a2d4-5077dd317185.jpg"  alt="" width="40">
                                                        <h6 class="card-title text-muted-dul mb-0"><?php echo $mietemich['transmision_type'] ?></h6>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <img src="<?php echo base_url(); ?>assets/front/images/46b22966-3c9f-48b8-bb02-feb64db165df.jpg"  alt="" width="40">
                                                        <h6 class="card-title text-muted-dul mb-0"><?php echo $mietemich['vehicle_fuel_type'] ?></h6>
                                                    </li>
                                                </ul> -->
                                                <h5 class="card-title violet-blue-accent-text mb-3"> <b> ab CHF <?php echo $mietemich[$select_price]; ?>.— / Tag </b> </h5>
                                                <h5 class="card-title text-muted-dul"> <b> all Inclusive  </b> </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                        <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a> -->
                    </div>
                </div>
                <div class="col-sm-7">
                    <h2 class="primarycolor">Lieferwagen & Transporter günstig in Bern mieten</h2>
                    <h3 class="h5 font-weight-light">Einfach und unkompliziert Ihr Umzugswagen mieten.</h3>
                    <p class="mt-4">Sind Sie auf der Suche nach einem <a href="https://www.automobile-wohlensee.ch/miete-mich-taeglich/peugeot-boxer" title="Lieferwagen mieten Bern">Lieferwagen in Bern</a>? Planen Sie einen Umzug und brauchen dafür einen Zügelwagen?
                        Wir vermieten diverse Transporter. Die Dauer der Miete reicht von einer Stunde bis zu mehreren Tagen. 
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>