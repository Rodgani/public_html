<style>
  #los:focus,#anfrage:focus{
    background-color: #262663 !important;
    outline: none !important;
    box-shadow: none;
  }
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
.animation-image{
  width: 100%;
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
.select2-container{
  width: 100% !important;
}
.select2-selection__rendered{
  margin-top: 5px;
}
</style>
  <section id="main" class="mt-2">
    <div class="jumbotron bg-white m-0 p-0 ">
      <div class="container"> 
      <div class="row m-0 p-0">
        <div class="col-md-12 m-0 p-0">
          <img class="animation-image" src="<?php echo base_url(); ?>assets/front/images/autoabo-gif-image.gif" alt="">
          </div>
        </div>
    </div>
  </div>
<form class="auto_submit_item" method="get" action="<?php echo base_url(); ?>auto-abo">
    <div class="container pb-5">
      <div class="row mb-4">
        <div class="col-lg-3 col-md-4"></div>
        <div class="col-lg-9 col-md-8">
      <h1 class="h2 violet-blue-text pb-3">Bestimme dein Abo</h1>
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
                    <select class="select2 form-control border-0 px-2" id="fuel" name="fuel">
                    <option <?php echo ($fuel == 'all') ? 'selected' : ''; ?> value="all">Alle</option>
                    <option <?php echo ($fuel == 'benzin') ? 'selected' : ''; ?> value="benzin">Benzin</option>
                    <option <?php echo ($fuel == 'diesel') ? 'selected' : ''; ?> value="diesel">Diesel</option>
                    <option <?php echo ($fuel == 'electro') ? 'selected' : ''; ?> value="electro">Elektro</option>
                    <option <?php echo ($fuel == 'hybrid') ? 'selected' : ''; ?> value="hybrid">Hybrid</option>
                    </select>
                  </div>
                </fieldset>
              </li>
              <li class="list-group-item border-0 p-0 pb-3 mb-1">
                <fieldset  class="br-blue">
                <legend class="small mb-0 text-muted"> &nbsp; <b>Getriebe</b> &nbsp; </legend>
                  <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" id="transmission" name="transmission">
                    <option <?php echo ($transmission == 'all') ? 'selected' : ''; ?> value="all">Alle</option>
                    <option <?php echo ($transmission == 'Automatik') ? 'selected' : ''; ?> value="Automatik">Automatik</option>
                    <option <?php echo ($transmission == 'Manuell') ? 'selected' : ''; ?> value="Manuell">Manuell</option>
                    </select>
                  </div>
                </fieldset>
              </li>
              <li class="list-group-item border-0 p-0 pb-3 mb-1">
                <fieldset  class="br-blue">
                <legend class="small mb-0 text-muted"> &nbsp; <b>Sortieren Nach</b> &nbsp; </legend>
                  <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" id="filter" name="sortby">
                    <option <?php echo ($sortby == 'priceasc') ? 'selected' : ''; ?> value="priceasc">Preise - aufsteigend</option>
                    <option <?php echo ($sortby == 'pricedesc') ? 'selected' : ''; ?> value="pricedesc">Preise - absteigend </option>
                    <?php /* ?>
                    <option <?php echo ($sortby == 'newest') ? 'selected' : ''; ?> value="newest">Schnellste Verfügbarkeit</option>
                    <?php */ ?>
                    </select>
                  </div>
                </fieldset>
              </li>
              <li class="list-group-item border-0 p-0 pb-3 mb-1">
                <fieldset  class="br-blue">
                  <div class="form-group mb-2 p-4">
                   <p class="violet-blue-text" style="font-weight:600">Haben wir kein passendes Auto im Abo? Dank klicken Sie hier und wir organisieren es für Sie!</p>
                   <button id="los" class="btn  btn-success custom-btn text-white rounded px-4">Los</button>                  
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
<?php */?>
            </ul>
          </form>
        </div>
        <div class="col-lg-9 col-md-8">
          <div class="row">
              <?php
$querystring = http_build_query($config);
?>
<?php foreach ($autoabos as $key => $autoabo): ?>
                      <?php
$images = explode(',', $autoabo['images']);
$image = $images[0];
?>
            <div class="col-lg-6 mb-2">
              <a class="mycardlink" href="<?php echo base_url() ?>auto-abo/<?php echo $autoabo['slug'] ?>?<?php echo trim($querystring) ?>">
              <div class="card card-custom text-center br-blue mb-4">
                <?php if ($autoabo['summer_special']) { ?>
                      <span class="badge badge-danger position-absolute p-2 right rounded-0">Sommeraktion</span>
                    <?php } else if ($autoabo['one_car_left']) {?>
                      <span class="badge badge-danger position-absolute p-2 right rounded-0">Nur noch 1 Auto übrig</span>
                      <?php } else if ($autoabo['winter_special']) {?>
                      <span class="badge badge-danger position-absolute p-2 right rounded-0">Winteraktion</span>
                    <?php } else if ($autoabo['brand_new']) {?>
                      <span class="badge badge-primary position-absolute p-2 right rounded-0">Brandneu</span>
                    <?php } else if ($autoabo['hybrid']) {?>
                      <span class="badge badge-primary position-absolute p-2 right rounded-0">Hybrid</span>
                    <?php } ?>
                <div class="card-body p-4">
                  <h4 class="card-title violet-blue-text text-capitalize" style="height: 74px;"> <b><?php echo $autoabo['vehicle_brand'] ?> <?php echo $autoabo['vehicle_name'] ?></b> </h4>
                  <img class="card-img-top my-4 lazy"  data-src="<?php echo base_url(); ?>uploads/autoabo/<?php echo $image ?>" src="<?php echo base_url(); ?>assets/front/images/image-loader.gif" alt="Image">
                  <ul class="list-group list-group-horizontal list-custom mb-2">
                    <li class="list-group-item">
                      <img src="<?php echo base_url(); ?>assets/front/images/646d5a2e-c825-47aa-a174-727c526e7488.jpg"  alt="" width="40">
                      <h6 class="card-title text-muted-dul mb-0"><?php echo $autoabo['vehicle_engine'] ?> </h6>
                    </li>
                    <li class="list-group-item">
                      <img src="<?php echo base_url(); ?>assets/front/images/00024160-9231-4e7a-a2d4-5077dd317185.jpg"  alt="" width="40">
                      <h6 class="card-title text-muted-dul mb-0"><?php echo $autoabo['transmision_type'] ?></h6>
                    </li>
                    <li class="list-group-item">
                      <img src="<?php echo base_url(); ?>assets/front/images/46b22966-3c9f-48b8-bb02-feb64db165df.jpg"  alt="" width="40">
                      <h6 class="card-title text-muted-dul mb-0"><?php echo $autoabo['vehicle_fuel_type'] ?></h6>
                    </li>
                  </ul>
                  <h5 class="card-title violet-blue-text mb-3"> <b> ab CHF <?php echo $autoabo[$select_price]; ?>.- / Monat </b> </h5>
                  <h5 class="card-title text-muted-dul"> <b> all Inclusive  </b> </h5>
                </div>
              </div>
              </a>
            </div>
<?php endforeach?>
          </div>
        </div>
      </div>
    </div>
  </section>
<form id="custom_request" method="post" action="<?php echo base_url() ?>Vhiclce_request/custom_autoabo">
<!-- Modal -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Anfrage für ein benutzerdefiniertes Abonnement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 p-0">
          <p class="h5 pl-1 pt-3 ">Persönliches Daten</p>
            </div>
          </div>
          <div class="row mt-0">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2"  required="" placeholder="Name" name="req_name">
                  </div>
                </fieldset>     
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" required="" name="req_voraname" placeholder="Vorname">
                  </div>
                </fieldset>  
            </div>
          </div>
             <div class="row mt-2">
            <div class="col-md-10 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" required="" name="req_adresse" placeholder="Adresse">
                  </div>
                </fieldset>     
              </div>
            <div class="col-md-2 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" name="req_nr" placeholder="Nr.">
                  </div>
                </fieldset>  
            </div>
          </div>
             <div class="row mt-2">
            <div class="col-md-2 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" required="" name="req_plz" placeholder="PLZ">
                  </div>
                </fieldset>     
              </div>
            <div class="col-md-10 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" placeholder="Ort" required="" name="req_ort">
                  </div>
                </fieldset>  
            </div>
          </div>
            <div class="row mt-2">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" placeholder="Geburtstag" name="req_geburtstag" required="">
                  </div>
                </fieldset>     
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" placeholder="Telefon"  name="req_telefon">
                  </div>
                </fieldset>  
            </div>
          </div>
            <div class="row mt-2">
            <div class="col-md-12 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="email" class="form-control border-0 px-2" name="email" required="" placeholder="E-Mail">
                  </div>
                </fieldset>     
              </div>
          </div>
              <div class="row">
                <div class="col-md-12 p-0">
                  <p class="h5 mt-2 pt-3 pl-1">Fahrezeugdaten</p>
                </div>
              </div>
               <div class="row ">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" name="marke" required="" placeholder="Marke">
                  </div>
                </fieldset>     
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" name="typ" required="" placeholder="Typ">
                  </div>
                </fieldset>  
            </div>
          </div>
               <div class="row mt-2">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                     <select class="form-control border-0 px-2 select2" name="jahrgang">
                      <option value="-1">Jahrgang</option>
                      <?php $till_year = date('Y');
                      for ($i=1960 ; $i <= $till_year ; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                      <?php } ?>
                      </select>
                    <!-- <input  type="text" class="form-control border-0 px-2" placeholder="Jahrgang ab."> -->
                  </div>
                </fieldset>     
                <p class="small text-danger val_field error_jahrgang">Dieses Feld muss ausgefüllt werden</p>
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                      <select class="form-control border-0 px-2 select2" name="req_treibstoff">
                      <option value="-1">Treibstoff</option>
                      <option value="diesel">Diesel</option>
                      <option value="benzin">Benzin</option>
                      <option value="electro">Elektro</option>
                      <option value="gas">Gas</option>
                      <option value="hybrid">Hybrid</option>
                      </select>
                  </div>
                </fieldset>  
                <p class="small text-danger val_field error_req_treibstoff">Dieses Feld muss ausgefüllt werden</p>
            </div>
          </div>
               <div class="row mt-2">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                        <select class="form-control border-0 px-2 select2" name="req_getriebeart">
                      <option value="-1">Getriebeart</option>
                      <option value="automatik-getriebe">Automatik-Getriebe</option>
                      <option value="schaltgetriebe">Schaltgetriebe</option>
                      </select>
                  </div>
                </fieldset>
                <p class="small text-danger val_field error_req_getriebeart">Dieses Feld muss ausgefüllt werden</p>
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                     <select class="form-control border-0 px-2 select2" name="raq_farbe">
                      <option value="-1">Farbe</option>
                      <option value="anthrazit">anthrazit</option>
                      <option value="beige">beige</option>
                      <option value="blau">blau</option>
                      <option value="bordeaux">bordeaux</option>
                      <option value="braun">braun</option>
                      <option value="gelb">gelb</option>
                      <option value="gold">gold</option>
                      <option value="grau">grau</option>
                      <option value="grün">grün</option>
                      <option value="orange">orange</option>
                      <option value="pink">pink</option>
                      <option value="rot">rot</option>
                      <option value="schwarz">schwarz</option>
                      <option value="silber">silber</option>
                      <option value="türkis">türkis</option>
                      <option value="violett">violett</option>
                      <option value="weis">weis</option>
                      </select>
                  </div>
                </fieldset>
                <p class="small text-danger val_field error_raq_farbe">Dieses Feld muss ausgefüllt werden</p>
            </div>
          </div>
            <div class="row">
                <div class="col-md-12 p-0">
                  <p class="h5 mt-2 pt-3 pl-1">Fahrezeugdaten</p>
                </div>
              </div>
               <div class="row">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                      <select class="form-control border-0 px-2 select2" name="req_mindestlaufzeit">
                      <option value="-1">Mindestlaufzeit</option>
                      <option value="3 Monate">3 Monate</option>
                      <option value="6 Monate">6 Monate</option>
                      <option value="12 Monate">12 Monate</option>
                      <option value="24 Monate">24 Monate</option>
                      <option value="36 Monate">36 Monate</option>
                      </select>
                  </div>
                </fieldset>
                <p class="small text-danger val_field error_raq_req_mindestlaufzeit">Dieses Feld muss ausgefüllt werden</p>
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <select class="form-control border-0 px-2 select2" name="req_kilometer_pro_monate">
                      <option value="-1">Kilometer pro Monate</option>
                      <option value="850 KM"> 850 KM </option>
                      <option value="1250 KM"> 1250 KM</option> 
                      <option value="1850 KM"> 1850 KM</option> 
                      <option value="3250 KM"> 3250 KM</option> 
                    </select>
                  </div>
                </fieldset>  
                <p class="small text-danger val_field error_req_kilometer_pro_monate">Dieses Feld muss ausgefüllt werden</p>
            </div>
          </div>
               <div class="row mt-2">
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input  type="text" class="form-control border-0 px-2" required="" placeholder="Wunschpreis pro Monat" name="req_wunschpreis_pro_monat">
                  </div>
                </fieldset>     
              </div>
            <div class="col-md-6 px-1">
               <fieldset  class="br-blue">
                  <div class="form-group mb-2">
                    <input required="" type="text" class="form-control border-0" id="datepic_2" autocomplete="off" name="wunschdatum" id="datepic" placeholder="Wunschdatum">
                  </div>
                </fieldset>  
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Schließen</button>
        <button type="submit" id="anfrage" class="btn  btn-success custom-btn text-white rounded">Anfrage</button>
      </div>
    </div>
  </div>
</div>
</form>
  <script>
    $(document).ready(function (){
      $('#los').click(function(e){
        e.preventDefault();
        $('#modal-1').modal('show');
      });
          $("#custom_request").submit(function(e) {
                e.preventDefault();
              var checker = false;
if($("[name='jahrgang'] option:selected").val() == '-1'){
  $(".error_jahrgang").show();
  checker = true;
  }else{
  $(".error_jahrgang").hide();
}
if($("[name='req_treibstoff'] option:selected").val() == '-1'){
  $(".error_req_treibstoff").show();
  checker = true;
  }else{
  $(".error_req_treibstoff").hide();
}
if($("[name='req_getriebeart'] option:selected").val() == '-1'){
  $(".error_req_getriebeart").show();
  checker = true;
  }else{
  $(".error_req_getriebeart").hide();
}
if($("[name='raq_farbe'] option:selected").val() == '-1'){
  $(".error_raq_farbe").show();
  checker = true;
  }else{
  $(".error_raq_farbe").hide();
}
if($("[name='raq_req_mindestlaufzeit'] option:selected").val() == '-1'){
  $(".error_raq_req_mindestlaufzeit").show();
  checker = true;
  }else{
  $(".error_raq_req_mindestlaufzeit").hide();
}
if($("[name='req_kilometer_pro_monate'] option:selected").val() == '-1'){
  $(".error_req_kilometer_pro_monate").show();
  checker = true;
  }else{
  $(".error_req_kilometer_pro_monate").hide();
}
if(checker){
  return false;
}
                var actionurl = e.currentTarget.action;
                $.ajax({
                        url: actionurl,
                        type: 'post',
                        dataType: 'application/json',
                        data: $("#custom_request").serialize(),
                        dataType: 'text',
                        success: function(data) {
                          if(data == 'requested'){
                            $('#modal-1 .container-fluid').html('');
                            $('#modal-1 .container-fluid').html('Wenn Sie das Fahrzeug angefordert haben, wird sich einer unserer Vertreter so schnell wie möglich mit Ihnen in Verbindung setzen');
                            $('#anfrage').hide();
                          }
                        }
                });
            });
    })
  </script>
