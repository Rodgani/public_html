<style> 
  .br-blue{border-color:#3B3C95!important}
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

  
</style>


  <section id="main">

    <div class="jumbotron">
      <br><br><br><br><br><br><br><br>
    </div>
<form class="auto_submit_item" method="get" action="<?php echo base_url(); ?>miete-mich-taeglich">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-3 col-md-4"></div>
        <div class="col-lg-9 col-md-8">
          
          <div class="row">
            <div class="col-md-6 mb-4"> 
              
              <fieldset  class="br-blue">
                <input type="hidden" value="850km" id="selected_km_value">
                <legend class="small mb-0 text-muted">Kilometer pro Monat:</legend>
                                   <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" id="km" name="km">
                      <option <?php echo ($km == '850km') ? 'selected' : ''; ?> value="850km">850 km</option>
                      <option <?php echo ($km == '1250km') ? 'selected' : ''; ?> value="1250km">1250 km</option>
                      <option <?php echo ($km == '1850km') ? 'selected' : ''; ?> value="1850km">1850 km</option>
                      <option <?php echo ($km == '3250km') ? 'selected' : ''; ?> value="3250km">3250 km</option>
                      
                    </select>
                  </div>
              </fieldset>

            </div>

            <div class="col-md-6"> 
              <fieldset  class="br-blue">
                <input type="hidden" value="36month" id="selected_duration_value">
                <legend class="small mb-0 text-muted">Mindestlaufzeit:</legend>
                                   <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" id="duration" name="duration">
                      <option <?php echo ($duration == '3month') ? 'selected' : ''; ?> value="3month">3 Monate</option>
                      <option <?php echo ($duration == '6month') ? 'selected' : ''; ?> value="6month">6 Monate</option>
                      <option <?php echo ($duration == '12month') ? 'selected' : ''; ?> value="12month">12 Monate</option>
                      <option <?php echo ($duration == '24month') ? 'selected' : ''; ?> value="24month">24 Monate</option>
                      <option <?php echo ($duration == '36month') ? 'selected' : ''; ?> value="36month">36 Monate</option>
                    </select>
                  </div>
              </fieldset>
            </div>
          </div>

        </div>        
      </div>  
      <div class="row">
        <div class="col-lg-3 col-md-4">
          
            <ul class="list-group">

              <li class="list-group-item border-0 p-0 pb-3 mb-1">
                <fieldset  class="br-blue">
                <legend class="small mb-0 text-muted"> &nbsp; <b>Treibstoff</b> &nbsp; </legend>
                  <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" id="fuel" name="fuel">
                    <option <?php echo ($fuel == 'all') ? 'selected' :''; ?> value="all">Alle</option>
                    <option <?php echo ($fuel == 'benzin') ? 'selected' :''; ?> value="benzin">Benzin</option>
                    <option <?php echo ($fuel == 'diesel') ? 'selected' :''; ?> value="diesel">Diesel</option>
                    <option <?php echo ($fuel == 'electro') ? 'selected' :''; ?> value="electro">Elektro</option>
                    <option <?php echo ($fuel == 'hybrid') ? 'selected' :''; ?> value="hybrid">Hybrid</option>
                    </select>
                  </div>
                </fieldset>
              </li>

              <li class="list-group-item border-0 p-0 pb-3 mb-1">
                <fieldset  class="br-blue">
                <legend class="small mb-0 text-muted"> &nbsp; <b>Getriebe</b> &nbsp; </legend>
                  <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" id="transmission" name="transmission">
                    <option <?php echo ($transmission == 'all') ? 'selected' :''; ?> value="all">Alle</option>
                    <option <?php echo ($transmission == 'Automatik') ? 'selected' :''; ?> value="Automatik">Automatik</option>
                    <option <?php echo ($transmission == 'Manuell') ? 'selected' :''; ?> value="Manuell">Manuell</option>
                    </select>
                  </div>
                </fieldset>
              </li>
<?php /* ?>
              <li class="list-group-item border-0 p-0 pb-3 mb-1">
                <fieldset  class="br-blue">
                <legend class="small mb-0 text-muted"> &nbsp; <b>Aufbau</b> &nbsp; </legend>
                  <div class="form-group mb-2">
                    <select class="form-control border-0 px-2" id="aufbau" name="aufbau">
                    <option selected>Aufbau</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    </select>
                  </div>
                </fieldset>
              </li>
<?php */ ?>

            </ul>
          </form>
        </div>
        <div class="col-lg-9 col-md-8"> 
          <div class="row"> 
              <?php 
                 $querystring = http_build_query($config);
               ?>

<?php foreach ($mietemichs as $key => $mietemich): ?>
                      <?php
                        $images = explode(',', $mietemich['images']);
                       $image  = $images[0];  
                       ?>


            <div class="col-lg-6 mb-2">
              <a class="mycardlink" href="<?php echo base_url() ?>miete-mich-taeglich/<?php echo $mietemich['slug']?>?<?php echo trim($querystring) ?>">
              <div class="card card-custom text-center br-blue mb-4">
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
                    <?php } ?>
                <div class="card-body px-5 pt-5 pb-4">
                  <h4 class="card-title violet-blue-text text-capitalize"> <b><?php echo $mietemich['vehicle_brand'] ?> <?php echo $mietemich['vehicle_name'] ?></b> </h4>
                  <img class="card-img-top my-4" src="<?php echo base_url(); ?>uploads/mietemich/<?php echo $image ?>" alt="Image">
                  <ul class="list-group list-group-horizontal list-custom mb-2">
                    <li class="list-group-item">
                      <img src="<?php   echo base_url(); ?>assets/front/images/646d5a2e-c825-47aa-a174-727c526e7488.jpg"  alt="" width="40">
                      <h6 class="card-title text-muted-dul mb-0"><?php echo $mietemich['vehicle_engine'] ?> </h6>
                    </li>
                    <li class="list-group-item">
                        <img src="<?php   echo base_url(); ?>assets/front/images/00024160-9231-4e7a-a2d4-5077dd317185.jpg"  alt="" width="40">
                      <h6 class="card-title text-muted-dul mb-0"><?php echo $mietemich['transmision_type'] ?></h6>
                    </li>
                    <li class="list-group-item">
                      <img src="<?php   echo base_url(); ?>assets/front/images/46b22966-3c9f-48b8-bb02-feb64db165df.jpg"  alt="" width="40">
                      <h6 class="card-title text-muted-dul mb-0"><?php echo $mietemich['vehicle_fuel_type'] ?></h6>
                    </li>
                  </ul> 
                  <h5 class="card-title violet-blue-text mb-3"> <b> CHF <?php echo $mietemich[$select_price]; ?>.- / Monat </b> </h5>
                  <h5 class="card-title text-muted-dul"> <b> all Inclusive  </b> </h5>
                </div>
              </div> 
              </a>
            </div>
<?php endforeach ?>


          </div>  

        </div>
      </div>
    </div>
  </section>
