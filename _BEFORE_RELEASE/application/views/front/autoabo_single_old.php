    <section id="main">
      <div class="main-bg"></div>
      <div class="container py-5">
        <div class="row">
          <input type="hidden" id="selected_vehicle" value="<?php echo $autoabo[0]['id']; ?>">
          <div class="col-lg-6 col-md-8 pr-4">

            <h5 class="text-primary font-weight-normal mb-0">Fahrzeuge</h5>
            <h4 style="text-transform: capitalize;" class="font-weight-bold mb-0"><?php echo $autoabo[0]['vehicle_brand']; ?></h4>
            <h1 style="text-transform: capitalize;" class="h2 font-weight-bold mb-1"><?php echo $autoabo[0]['vehicle_name']; ?></h1>
              <!-- Swiper -->
              <div class="row">
                <div class="col-md-4">
                  <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                  <?php $images = explode(',', $autoabo[0]['images']); ?>
                  <?php foreach ($images as $key => $image): ?>
                    
                  <div class="swiper-slide" style="background-image:url(../uploads/autoabo/<?php echo $image ?>)"></div>
                  <?php endforeach ?>
                  
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
              </div>
                </div>
              </div>
              <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                   <?php foreach ($images as $key => $image): ?>
                  <div class="swiper-slide" style="background-image:url(../uploads/autoabo/<?php echo $image ?>)"></div>
                   <?php endforeach ?>
                 
                  
                </div>
              </div>
             
            <div class="clearfix py-5"></div> 

          </div>
          
          <div class="col-lg-6 col-md-4">

            <div class="card shadow-sm border-0">
              <div class="card-body">
                <h4 class="mb-3">Konfiguriere dein Abo</h4>
                <div class="row">
                  <div class="col-md-6">
                    <fieldset>
                            <input type="hidden" value="<?php echo $km ?>" id="selected_km_value">
                      <legend class="small mb-0 text-muted">Kilometer pro Monat:</legend>
                        <div class="dropdown">
                          <button id="dLabel" class="dropdown-select selected_km" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $km; ?>
                            <span class="caret"></span>
                          </button>
                          <input type="hidden" name="kpm">
                          <ul  class="dropdown-menu" aria-labelledby="dLabel" id="km">
                            <li id="850km"> 
                              <span class="lg text float-left">850 km</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="1250km"> 
                              <span class="lg text float-left">1250 km</span>  
                              <div class="clearfix"></div>  
                            </li>
                            <li id="1850km"> 
                              <span class="lg text float-left">1850 km</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="3250km">
                              <span class="lg text float-left">3250 km</span>  
                              <div class="clearfix"></div>
                            </li>

                          </ul>
                        </div>
                    </fieldset>

                    <a href="" class="small"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Mehr Infos zu gefahrenen Kilometern</a>

                  </div>
                  <div class="col-md-6">

                    <fieldset>
                            <input type="hidden" value="<?php echo $duration ?>" id="selected_duration_value">
                      <legend class="small mb-0 text-muted">Mindestlaufzeit:</legend>
                        <div class="dropdown">
                          <button id="dLabel" class="dropdown-select selected_duration" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                           <?php echo str_replace('month', ' Monate', $duration); ?>
                            <span class="caret"></span>
                          </button>
                          <input type="hidden" name="mf">
                          <ul class="dropdown-menu" aria-labelledby="dLabel" id="duration">
                            <li id="3month"> 
                              <span class="xl text float-left">3 Monate</span>  
                              <div class="clearfix"></div>
                            </li>

                            <li id="6month"> 
                              <span class="xl text float-left">6 Monate</span> 
                              <div class="clearfix"></div>
                            </li>

                            <li id="12month"> 
                              <span class="xl text float-left">12 Monate</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="24month"> 
                              <span class="xl text float-left">24 Monate</span>  
                              <div class="clearfix"></div>
                            </li>
                            <li id="36month"> 
                              <span class="xl text float-left">36 Monate</span>  
                              <div class="clearfix"></div>
                            </li>

                          </ul>
                        </div>
                    </fieldset> 

                    <span class="small"><i class="fa fa-check text-success" aria-hidden="true"></i> Im Anschluss monatlich kündbar</span>

                  </div>
                </div>

                <h6 class="mt-4 mb-2">Versicherung</h6>
                <div class="row">
                  <div class="col">
                    
                     <fieldset>
                      <legend class="small mb-0 text-muted">Selbstbehalt:</legend>
                        <div class="dropdown">
                          <button id="dLabel" class="dropdown-select" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1000 CHF
                            <span class="caret"></span>
                          </button>
                          <input type="hidden" name="mf">
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li> 
                              <span class="small text float-left">1000 CHF</span>  
                              <div class="clearfix"></div>
                            </li>
                          </ul>
                        </div>
                    </fieldset> 

                    <a href="" class="small"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Mehr Infos zur Versicherung</a>

                  </div>
                </div>
                
                <div class="card violet-blue-bg mt-3 mb-2 px-4 py-0 m-x-40">
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-6 text-white">
                        <h6 class="mb-0">Monatliches Abo</h6>
                        <h3 id="total_price"><strong><?php echo $autoabo[0][$select_price]; ?> CHF</strong></h3>
                      </div>
                      <div class="col-md-6 text-right">
                        
                        <a class="btn btn-success text-white rounded" id="send_request">Jetzt abonnieren</a>

                      </div>
                    </div>
                    
                  </div>
                </div>
                  

                <h6 class="text-primary font-weight-bold mb-0"><i class="fa fa-car " aria-hidden="true"></i> &nbsp;Was ist im Our-Service enthalten?</h6>

              </div>
            </div>

            <p class="mt-4 mb-0 text-center">Frühestens verfügbar: <b><?php echo date('d. F Y', strtotime($autoabo[0]['date_from'])) ?></b></p>
            <p class="text-center">Zzgl. <?php echo $autoabo[0]['36m850km']; ?> CHF Anfangspauschale für Neukunden</p>

          </div>
          
        </div>

<?php /* ?>
        <div class="row mt-5">
          
          <div class="col-lg-6 col-md-8 pr-4">


            <h1 class="font-weight-bold">Jetzt vergleichen und 121 CHF/Monat sparen</h1>
            <p class="pt-2 mb-2">Ford KA+</p> 

            <h6>Vergleichskonditionen</h6> 
            <p>1.0% Leasing • Vertragsdauer 36 Monate • 0 CHF Anzahlung • 10’000 km/Jahr • Neupreis 13’330 CHF • Restwert 6’000 CHF</p>

            <div class="media">
              <img width="32" src="<?php echo base_url()?>assets/front/images/tcs.svg" class="mr-3 align-self-center" alt="Image">
              <div class="media-body">
                <h6 class="mt-2">Vollkosten basieren auf Schätzungen des TCS</h6>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 col-md-4">

            <div class="card border-0 card-br-color-dul">
              <div class="card-body p-0">
                <div class="row violet-blue-bg text-white px-3 m-0">
                  <div class="col-sm-6 py-3 border-right"><h5>Carvolution</h5></div>
                  <div class="col-sm-6 py-3"><h5>Leasing</h5></div>
                </div>

                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Monatliche Kosten</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">289 CHF</p></div>
                </div>


                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Versicherung (Vollkasko und Haftpflicht)</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">91 CHF</p></div>
                </div>


                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Service & Reparaturen</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">33 CHF</p></div>
                </div>


                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Reifenwechsel & -lagerung</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">39 CHF</p></div>
                </div>


                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Steuern</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">14 CHF</p></div>
                </div>

                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Reifenverschleiss</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">14 CHF</p></div>
                </div>

                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Vignette</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">3 CHF</p></div>
                </div>

                <div class="row bg-light px-3 m-0">
                  <div class="col py-2 "><h6 class="mt-1">Tankkarte (-5 Rp./Liter)</h6></div>
                </div>
                <div class="row px-3 m-0">
                  <div class="col-sm-6 py-2 border-right"><img src="<?php echo base_url()?>assets/front/images/check-inclusive.svg" alt="Tick Image"></div>
                  <div class="col-sm-6 py-2 px-4"><p class="mb-0 mt-1">-</p></div>
                </div>

                <div class="row violet-blue-bg text-white px-3 m-0">
                  <div class="col-sm-12 pt-4 pb-2"><h5>Gesamtkosten pro Monat</h5></div>
                  <div class="col-sm-6 py-3 border-right">
                    <h5>362 CHF</h5>
                    <h5><span class="badge badge-success">-121 CHF</span></h5>
                  </div>
                  <div class="col-sm-6 py-3"><h5> 483 CHF </h5></div>
                </div>

                <div class="row bg-light px-3 m-0 text-center">
                  <div class="col py-2 text-center"><p class="mt-1">Du sparst <strong class="text-success big-font">4’356 CHF</strong> in <b>36 Monaten</b></p></div>
                </div>

              </div>
            </div>
          </div>
          
        </div>

        <?php */ ?>

        <div class="row mt-5">
          
          <div class="col-lg-6 col-md-8 pr-4">
            <h4 class="font-weight-bold my-4">Eckdaten</h4>
            
            <ul class="list-group">
              
              <li class="list-group-item border-left-0 border-right-0 px-0 py-2 rounded-0">
                <b>Kategorie</b>
                <span class="float-right"><?php echo $autoabo[0]['vehicle_category'] ?></span>
                <div class="clearfix"></div>
              </li>
              <li class="list-group-item border-left-0 border-right-0 px-0 py-2">
                <b>Motor</b>
                <span class="float-right"><?php echo $autoabo[0]['vehicle_engine']; ?></span>
                <div class="clearfix"></div>
              </li>
              <li class="list-group-item border-left-0 border-right-0 px-0 py-2">
                <b>Getriebe</b>
                <span class="float-right"><?php echo $autoabo[0]['transmision_type']; ?></span>
                <div class="clearfix"></div>
              </li>
              <li class="list-group-item border-left-0 border-right-0 px-0 py-2">
                <b>Antrieb</b>
                <span class="float-right"><?php echo $autoabo[0]['vehicle_drive_type']; ?></span>
                <div class="clearfix"></div>
              </li>


              <li class="list-group-item border-left-0 border-right-0 px-0 rounded-0">
                <b>Treibstoff</b>
                <span class="float-right"><?php echo $autoabo[0]['vehicle_fuel_type']; ?></span>
                <div class="clearfix"></div>
              </li>
            
            </ul> 

          </div>
          <div class="col-lg-6 col-md-4">
            <h4 class="font-weight-bold my-4">Beschreibung</h4>
            <p><?php echo $autoabo[0]['vehicle_description'] ?>.</p>
          </div>
          
        </div>

        <div class="row mt-4">
          <div class="col">
            
            <div class="accordion" id="accordionExample">
              <div class="card border-top-0 border-left-0 border-right-0 border-bottom rounded-0">
                <div class="card-header p-0 bg-white" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link pl-0 w-100 text-left text-primary left-big-arrow" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><h4 class="mb-1"> &nbsp;Ausstattung </h4></button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body small p-2 violet-blue-bg text-white">
                    Natürlich dein neues Auto und die gewählten Kilometer. Das Auto kommt entweder direkt von unserem Lager oder kommt frabrikneu ab Werk.
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        

        
      </div>
    </section>
    <script>
      var prices          = [];
      prices['3m850km']   = <?php echo $autoabo[0]['3m850km'] ?> ;
      prices['3m1250km']  = <?php echo $autoabo[0]['3m1250km'] ?> ;
      prices['3m1850km']  = <?php echo $autoabo[0]['3m1850km'] ?> ;
      prices['3m3250km']  = <?php echo $autoabo[0]['3m3250km'] ?> ;
      prices['6m850km']   = <?php echo $autoabo[0]['6m850km'] ?> ;
      prices['6m1250km']  = <?php echo $autoabo[0]['6m1250km'] ?> ;
      prices['6m1850km']  = <?php echo $autoabo[0]['6m1850km'] ?> ;
      prices['6m3250km']  = <?php echo $autoabo[0]['6m3250km'] ?> ;
      prices['12m850km']  = <?php echo $autoabo[0]['12m850km'] ?> ;
      prices['12m1250km'] = <?php echo $autoabo[0]['12m1250km'] ?> ;
      prices['12m1850km'] = <?php echo $autoabo[0]['12m1850km'] ?> ;
      prices['12m3250km'] = <?php echo $autoabo[0]['12m3250km'] ?> ;
      prices['24m850km']  = <?php echo $autoabo[0]['24m850km'] ?> ;
      prices['24m1250km'] = <?php echo $autoabo[0]['24m1250km'] ?> ;
      prices['24m1850km'] = <?php echo $autoabo[0]['24m1850km'] ?> ;
      prices['24m3250km'] = <?php echo $autoabo[0]['24m3250km'] ?> ;
      prices['36m850km']  = <?php echo $autoabo[0]['36m850km'] ?> ;
      prices['36m1250km'] = <?php echo $autoabo[0]['36m1250km'] ?> ;
      prices['36m1850km'] = <?php echo $autoabo[0]['36m1850km'] ?> ;
      prices['36m3250km'] = <?php echo $autoabo[0]['36m3250km'] ?> ;
    </script>
    <script src="<?php echo base_url(); ?>assets/front/js/autoabo_single.js"></script>
     
    <!-- Initialize Swiper -->