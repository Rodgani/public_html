 <style>
legend,.small {
  font-size: 10px !important;
}
.tick{
  color: #66b22a; font-size: 30px;
  margin-right: 20px;
}
.accordion .card-header button:after {
  color: var(--primary-color);
}
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
          .mcontroler{
      padding-left: 0  !important;
    }
    .mcontroler2{
      padding-right: 16px ;
    }

    .vehile_slider{
      min-height: 534px;
    }


      @media (max-width: 991px) {
          .slider-image{
              width: 268px !important;
          }
          .mcontroler{
              padding-left: 0  !important;
              padding-right: 0  !important;
          }
          .vehile_slider{
              min-height: auto;
          }
      }
  </style>

    <section id="main">
      <div class="top-banner-section single-page">
          <h1>Lieferwagen & Transporter günstig in Bern mieten</h1>
          <div class="sub-title"><h2>Flexibel und unkompliziert bereits ab CHF 79.- Ihr Umzugswagen mieten.</h2></div>
      </div>
      <div class="container py-3">
        <div class="row">
                    <input type="hidden" id="selected_vehicle" value="<?php echo $mietemich[0]['id']; ?>">
          <div class="col-md-8 mcontroler mcontroler2">
              <div class=" p-4 bg-white vehile_slider">
                 <div class="text-primary font-weight-normal mb-0 text-capitalize h5"><?php echo $mietemich[0]['vehicle_brand']; ?></div>
            <div class="h2 font-roboto font-weight-bold text-capitalize "><?php echo $mietemich[0]['vehicle_name']; ?></div>
                   <div class="swiper-container mt-5 gallery-top">
                <div class="swiper-wrapper">
                  <?php $images = explode(',', $mietemich[0]['images']); ?>

                      <?php foreach ($images as $key => $image): ?>
                  <div class="swiper-slide">
                    <div class="w-100 slider-image" style="overflow: hidden;">
                    <img class="slider-image" src="/uploads/mietemich/<?php echo $image ?>" alt="">
                    </div>
                  </div>
                  <?php endforeach ?>
                </div>
                 <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                  <!-- Add Pagination -->
                  <br>
                  <br>
                  <div class="swiper-pagination mt-2"></div>
              </div>
              </div>
              <div class="p-4 bg-white mt-3 mb-3">
                <h2 class="mb-3 h4 font-weight-bold">Umzugswagen in Bern mieten – schnell und einfach</h2>
                <p>Sind Sie auf der Suche nach einem Transporter oder Lieferwagen in Bern? Planen Sie einen Umzug und brauchen dafür einen Zügelwagen? Wir vermieten diverse Fahrzeuge zu günstigen Preisen.</p>
                <p>Sie entscheiden, wie viele Kilometer Sie hinterlegen und wie lange sie den Lieferwagen benötigen. Den Rest erledigen wir für Sie. Die Mietdauer reicht von drei Stunden bis zu zwei Tagen. Bei den Kilometern wählen Sie zwischen 100-, 200- und 300km.</p>
              </div>
          </div>
          <div class="col-md-4 mcontroler">
            <div class=" bg-white ">
                       <div class="card shadow-sm border-0">
              <div class="card-body">
                <h4 class="mb-3 h6">Passe die Miete an</h4>
                <div class="row">
                  <div class="col-md-6 mb-3">
                  <fieldset>
                            <input type="hidden" value="<?php echo $km ?>" id="selected_km_value">
                      <legend class="small mb-0 text-muted">Kilometer</legend>
                        <div class="dropdown">
                          <button id="dLabel" class="dropdown-select selected_km" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $km; ?>
                            <span class="caret"></span>
                          </button>
                          <input type="hidden" name="kpm">
                          <ul  class="dropdown-menu" aria-labelledby="dLabel" id="km">
                            <li id="100km"> 
                              <span class="lg text float-left">100 km</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="200km"> 
                              <span class="lg text float-left">200 km</span>  
                              <div class="clearfix"></div>  
                            </li>
                            <li id="300km"> 
                              <span class="lg text float-left">300 km</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="400km">
                              <span class="lg text float-left">400 km</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="500km">
                              <span class="lg text float-left">500 km</span>  
                              <div class="clearfix"></div>
                            </li>


                          </ul>
                        </div>
                    </fieldset>
                <!--     <a href="" class="small"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Mehr Infos zu gefahrenen Kilometern</a> -->
                  </div>
                  <div class="col-md-6 mb-2">
                                      <fieldset>
                            <input type="hidden" value="<?php echo $duration ?>" id="selected_duration_value">
                      <legend class="small  mb-0 text-muted">Mindestlaufzeit:</legend>
                        <div class="dropdown">
                          <button id="dLabel" class="dropdown-select selected_duration" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                           <?php echo str_replace('h', ' Stunden', $duration); ?>
                            <span class="caret"></span>
                          </button>
                          <input type="hidden" name="mf">
                          <ul class="dropdown-menu" aria-labelledby="dLabel" id="duration">
                            <li id="3hour"> 
                              <span class="lg text float-left">3 Stunden</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="6hour"> 
                              <span class="lg text float-left">6 Stunden</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="9hour"> 
                              <span class="lg text float-left">9 Stunden</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="12hour"> 
                              <span class="lg text float-left">12 Stunden</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="24hour"> 
                              <span class="lg text float-left">24 Stunden</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="48hour"> 
                              <span class="lg text float-left">48 Stunden</span>  
                              <div class="clearfix"></div>
                            </li>
                          </ul>
                        </div>
                    </fieldset> 
                  </div>
                </div>
                <div class="card mt-3 border-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col text-center" style="color: var(--primary-accent-color); line-height: 0px;">
                        <!-- <h6 class="mb-0">Monatliches Abo</h6> -->
                        <div class="h3 font-roboto" id="total_price"><strong><?php echo $mietemich[0][$select_price]; ?> CHF</strong></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col text-center">
                        <button class="btn btn-primary px-4 py-2 rounded-pill violet-blue-bg" style="margin-top: 11px;" id="send_request">Jetzt buchen</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

 <div class="card shadow-sm border-0 mt-3">
   <div class="card-body">
     
       <div class=" mcontroler">
            <div class=" bg-white px-2 py-2 h-100">
               <h4 class="font-weight-bold my-2 h5">Lieferwagen mieten</h4>
            <p><?php echo nl2br($mietemich[0]['vehicle_description']); ?></p>
            </div>
          </div>
   </div>
 </div>
          </div>
        </div>
      </div>
    </section>





    <script>
    var prices         = [];
    prices['3h100km']  = <?php echo $mietemich[0]['3h100km'] ?>;
    prices['3h200km']  = <?php echo $mietemich[0]['3h200km'] ?>;
    prices['3h300km']  = <?php echo $mietemich[0]['3h300km'] ?>;
    prices['3h400km']  = <?php echo $mietemich[0]['3h400km'] ?>;
    prices['3h500km']  = <?php echo $mietemich[0]['3h500km'] ?>;
    prices['6h100km']  = <?php echo $mietemich[0]['6h100km'] ?>;
    prices['6h200km']  = <?php echo $mietemich[0]['6h200km'] ?>;
    prices['6h300km']  = <?php echo $mietemich[0]['6h300km'] ?>;
    prices['6h400km']  = <?php echo $mietemich[0]['6h400km'] ?>;
    prices['6h500km']  = <?php echo $mietemich[0]['6h500km'] ?>;
    prices['9h100km']  = <?php echo $mietemich[0]['9h100km'] ?>;
    prices['9h200km']  = <?php echo $mietemich[0]['9h200km'] ?>;
    prices['9h300km']  = <?php echo $mietemich[0]['9h300km'] ?>;
    prices['9h400km']  = <?php echo $mietemich[0]['9h400km'] ?>;
    prices['9h500km']  = <?php echo $mietemich[0]['9h500km'] ?>;
    prices['12h100km'] = <?php echo $mietemich[0]['12h100km'] ?>;
    prices['12h200km'] = <?php echo $mietemich[0]['12h200km'] ?>;
    prices['12h300km'] = <?php echo $mietemich[0]['12h300km'] ?>;
    prices['12h400km'] = <?php echo $mietemich[0]['12h400km'] ?>;
    prices['12h500km'] = <?php echo $mietemich[0]['12h500km'] ?>;
    prices['24h100km'] = <?php echo $mietemich[0]['24h100km'] ?>;
    prices['24h200km'] = <?php echo $mietemich[0]['24h200km'] ?>;
    prices['24h300km'] = <?php echo $mietemich[0]['24h300km'] ?>;
    prices['24h400km'] = <?php echo $mietemich[0]['24h400km'] ?>;
    prices['24h500km'] = <?php echo $mietemich[0]['24h500km'] ?>;
    prices['48h100km'] = <?php echo $mietemich[0]['48h100km'] ?>;
    prices['48h200km'] = <?php echo $mietemich[0]['48h200km'] ?>;
    prices['48h300km'] = <?php echo $mietemich[0]['48h300km'] ?>;
    prices['48h400km'] = <?php echo $mietemich[0]['48h400km'] ?>;
    prices['48h500km'] = <?php echo $mietemich[0]['48h500km'] ?>;
    </script>
    <script src="<?php echo base_url(); ?>assets/front/js/mietemich_single.js"></script>
     
    <!-- Initialize Swiper -->
