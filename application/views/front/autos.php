<style>
    body {
        background-color: #fff !important;
    }
    .br-blue{border-color:var(--primary-color)!important}
    .text-muted-dul{color:#afafaf}
    .list-custom .list-group-item{border-top:0;border-bottom:0}
    .list-custom .list-group-item:first-child{border-left:0}
    .list-custom .list-group-item:last-child{border-right:0}
    .mycardlink:hover {
        text-decoration: none;
    }
    .mycardlink, .card-custom{
    background: #f7f7f7;
    display: block;
    min-height: 531px;
    }
    #carouselExampleFade .carousel-item{
        padding:0;
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

<section id="main">
    <div class="top-banner-section">
        <h1>Entdecken Sie unsere Autos</h1>
        <div class="sub-title">Automobile Wohlensee AG</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <iframe id="iFrame1" width="100%" style="height: 1000px;" name="htmlComp-iframe" scrolling="auto"
                    src="https://www.autoscout24.ch/de/hci/list?design=1968&filter=3766"></iframe>
            </div>
            <!-- <div class="col-sm-3 d-none d-lg-block">
                <div id="carouselExampleFade" class="carousel slide product-slide" data-ride="carousel" data-interval="5000">
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
                                            <h5 class="card-title violet-blue-accent-text mb-3"> <b> ab CHF <?php echo $mietemich[$select_price]; ?>.— / Tag </b> </h5>
                                            <h5 class="card-title text-muted-dul"> <b> all Inclusive  </b> </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
  <br /><br />
</section>

<script>
  var iframe = document.getElementById("iFrame1");

  function adjustToContent() {
    const screenHeight = window.innerHeight;
    const navbarHeight = document.querySelector('.navbar').scrollHeight;
    iframe.style.height = (screenHeight - navbarHeight) + 'px';
  }

  // Adjusting the iframe height onload event
  iframe.onload = function () {
    adjustToContent();
  }
</script>
