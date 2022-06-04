<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dropzone/dist/dropzone.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Alle Fahrzeuge im Monatsabonnement<small></small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Zuhause</a></li>
      <li><a href="#">monatliches Abo </a></li>
      <li class="active">Alle monatliches Abo</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">

        <div class="box">
          <div class="box-body">
                      <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#all_cities" data-toggle="tab" aria-expanded="true">monatliche Fahrzeugliste</a></li>
              <li class=""><a href="#add_city" data-toggle="tab" aria-expanded="false">neues Fahrzeug hinzufügen</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="all_cities">
                <h3>Alle Fahrzeuge sind monatlich abonniert</h3>
            <table id="all_menu" class="table table-bordered table-striped">
              <thead>
                  <tr>
                      <th>Bild</th>
                      <th>Fahrzeugname</th>
                      <th>Fahrzeugmarke</th>
                      <th>Slug</th>
                      <th>Aktionen</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($autoabo as $auto):?>
                  <tr id="<?php echo $auto['id']  ?>">
                    <?php 
                    $images = explode(',', $auto['images']);
                    $image  = $images[0]; 

                     ?>

                      <td><img style="width: 100px" src="<?php echo base_url() ?>uploads/autoabo/<?php echo $image ?>" alt="<?php echo $auto['vehicle_name'] ?>"></td>
                      <td> <?php echo $auto['vehicle_name'] ?> </td>
                      <td> <?php echo $auto['vehicle_brand'] ?> </td>
                      <td><?php echo $auto['slug'] ?></td>
                      

                      <td>
                      <a class="btn btn-primary" href="<?php echo base_url();?>admin/autoabo_edit/<?php echo $auto['id']  ?>"> Bearbeiten </a>
                      <a  href="<?php echo base_url();?>admin/autoabo_delete/<?php echo $auto['id']  ?>" class="btn btn-danger"> Löschen </a> </td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
            </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="add_city">

            <div class="row">
      <div class="col-md-12">
        <?php if($this->session->flashdata('menu_added')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> Menu have been added </div> 
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="add_menu_form" action="<?php echo base_url(); ?>admin/autoabo_add" method="POST"  enctype="multipart/form-data">

          <div class="form-group col-md-4">
            <label>Fahrzeugmarke:</label>
            <input type="text"  required="" class="form-control" id="vehicle_brand" name="vehicle_brand" value="">
          </div>
          
          <div class="form-group col-md-4">
            <label>Fahrzeugname:</label>
            <input type="text" required="" class="form-control" id="vehicle_name" name="vehicle_name" value="">
          </div>



          <div class="form-group col-md-4">
            <label>Fahrzeugmotor:</label>
            <input type="text" required="" class="form-control" id="vehicle_engine" name="vehicle_engine" value="">
          </div>
          <div class="form-group col-md-6">
            <label>Slug</label>
            <input type="text" required="" class="form-control" id="slug" name="slug">
          </div>

          <div class="form-group col-md-6">
            <label>Antreib:</label>
            <select required="" class="form-control" name="vehicle_drive_type" id="vehicle_drive_type"> 
                    <option value="Alle">Alle</option>
                    <option value="Allrad">Allrad</option>
                    <option value="Hinterradantrieb">Hinterradantrieb  </option>
                    <option value="Vorderradantrieb">Vorderradantrieb</option>
                  </select>
          </div>
           <div class="form-group col-md-6">
            <label>Fahrzeugkategorie:</label>
              <select  required="" class="form-control" name="vehicle_category" id="vehicle_category">
                  <option value="Bus">Bus</option>
                  <option value="Cabriolet">Cabriolet</option>
                  <option value="Coupé">Coupé </option>
                  <option value="Kleinwagen">Kleinwagen</option>
                  <option value="Kombi">Kombi</option>
                  <option value="Kompaktvan / Minivan">Kompaktvan / Minivan</option>
                  <option value="Limousine">Limousine</option>
                  <option value="Pick-up">Pick-up</option>
                  <option value="SUV / Geländewagen">SUV / Geländewagen</option>
              
              </select>
          </div>
           <div class="form-group col-md-6">
            <label>Wann das Fahrzeug verfügbar sein wird</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text"  autocomplete="off" name="date_from" class="form-control pull-right" id="datepicker3"> 
                </div>
          </div>
          <div class="form-group col-md-12">
              <label>Beschreibung:</label>
              <textarea required="" class="form-control" id="vehicle_description" name="vehicle_description" rows="4" placeholder="Enter ..."></textarea>
          </div>

          <div class="form-group col-md-12">
            <label>Kraftstoffdetails</label>
                  <div class="radio">
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="vehicle_fuel_type" id="vehicle_fuel_type" checked="" value="Benzin">
                      Benzin
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="vehicle_fuel_type" id="vehicle_fuel_type" value="diesel">
                      Diesel
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="vehicle_fuel_type" id="vehicle_fuel_type" value="electro">
                      Electro
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="vehicle_fuel_type" id="vehicle_fuel_type" value="hybrid">
                      Hybrid
                    </label>
                  </div>
                  
                </div>

                <div class="form-group col-md-12">

                <label>Übertragungsart</label>
                  <div class="radio">
                    <label>
                      <input type="radio" checked="" name="transmision_type" id="transmision_type" value="Automatik">
                      Automatik 
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="transmision_type" id="transmision_type" value="Manuell">
                      Manuell
                    </label>
                  </div>
                 </div>


                 
                 <div class="form-group col-md-12">
                  <label>Spezielle Tags</label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"  name="one_car_left">
                      Nur noch 1 Auto übrig
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="summer_special">
                      Sommeraktion
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="winter_special">
                      Winteraktion
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="brand_new">
                      Brandneu
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="hybrid">
                      Hybrid
                    </label>
                  </div>
                </div>

            <div class="col-md-12">
                <div class="form-group col-md-3">
                  <label>  Ausstattung: </label>
                  <div class="input-group input-group">
                    <input type="text" id="add_need"  name="add_need" class="form-control">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-primary add_new_need"> + </button>
                        </span>
                  </div>
                </div>
                <div class="col-md-9"></div>
            </div>
          <div class='col-md-12' id="you_need_fields">
          </div>



                <div class="form-group col-md-12" style="overflow: auto;">
 <label>Preiskonfiguration</label>
                  <table class="table table-responsive-sm">
                    <thead>
                      <tr>
                        <td>Monates</td>
                        <td>850km</td>
                        <td>1250km</td>
                        <td>1850km</td>
                        <td>3250km</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3 Monate</td>
                        <td><input type="number" required="" name="3m850km" placeholder="3m 850km"></td>
                        <td><input type="number" required="" name="3m1250km" placeholder="3m 1250km"></td>
                        <td><input type="number" required="" name="3m1850km" placeholder="3m 1850km"></td>
                        <td><input type="number" required="" name="3m3250km" placeholder="3m 3250km"></td>
                      </tr>
                      <tr>
                        <td>6 Monate</td>
                        <td><input type="number" required="" name="6m850km" placeholder="6m 850km"></td>
                        <td><input type="number" required="" name="6m1250km" placeholder="6m 1250km"></td>
                        <td><input type="number" required="" name="6m1850km" placeholder="6m 1850km"></td>
                        <td><input type="number" required="" name="6m3250km" placeholder="6m 3250km"></td>
                      </tr>
                      <tr>
                        <td>12 Monate</td>
                        <td><input type="number" required="" name="12m850km" placeholder="12m 850km"></td>
                        <td><input type="number" required="" name="12m1250km" placeholder="12m 1250km"></td>
                        <td><input type="number" required="" name="12m1850km" placeholder="12m 1850km"></td>
                        <td><input type="number" required="" name="12m3250km" placeholder="12m 3250km"></td>
                      </tr>
                      <tr>
                        <td>24 Monate</td>
                        <td><input type="number" required="" name="24m850km" placeholder="24m 850km"></td>
                        <td><input type="number" required="" name="24m1250km" placeholder="24m 1250km"></td>
                        <td><input type="number" required="" name="24m1850km" placeholder="24m 1850km"></td>
                        <td><input type="number" required="" name="24m3250km" placeholder="24m 3250km"></td>
                      </tr>
                      <tr>
                        <td>36 Monate</td>
                       <td><input  type="number" required="" name="36m850km" placeholder="36m 850km"></td>
                        <td><input type="number" required="" name="36m1250km" placeholder="36m 1250km"></td>
                        <td><input type="number" required="" name="36m1850km" placeholder="36m 1850km"></td>
                        <td><input type="number" required="" name="36m3250km" placeholder="36m 3250km"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

<div class="form-group col-md-12">
      <ul>
        <li><p>Maximal 5 MB für jedes Foto</p></li>
        <li><p>Das erste Foto, das Sie hochladen, ist das Hauptfoto</p></li>
      </ul>
        <div id="dZUpload" class="dropzone">
      <div class="dz-default dz-message">Klicken Sie hier oder legen Sie Bilder zum Hochladen ab</div>
        </div>
  </div>
          <div class="col-md-6">
            <input type="submit" class="btn btn-primary customer-profile" value='Fahrzeug hinzufügen'>
          </div>
        </form>
      </div>
      <!-- /.col -->
    </div>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
<script src="<?php echo base_url(); ?>assets/custom/dropzone.js"></script>
  
  <script>
var uploaded =  false;
     Dropzone.autoDiscover = false;
  $(".dropzone").dropzone({ 
    url:"<?php echo base_url(); ?>admin/autoabo_image_upload",
    dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Klicken Sie hier oder legen Sie Bilder zum Hochladen ab",
    maxFilesize: 5,  //MB
    acceptedFiles: ".jpeg,.jpg,.png",
    paramName: "imagefile",
    addRemoveLinks: true,
    queuecomplete: function (file) {
            uploaded = false;
    },
    addedfiles: function (file) {
            uploaded = true;
    },
removedfile: function(file) {
var name = file.name; 
$.ajax({
  type: 'POST',
  url: '<?php echo base_url() ?>admin/autoabo_image_delete',
  data: {name: name},
  sucess: function(data){
    console.log('success: ' + data);
  }
});
  var _ref = file.previewElement;
//return (_ref = file.previewElement) != null _ref.parentNode.removeChild(file.previewElement) : void 0;
if(file.previewElement){
return _ref.parentNode.removeChild(file.previewElement)
}
}
  });
</script>
<script>
   

$('#vehicle_brand,#vehicle_name').on('keyup',function(){
  var str = $('#vehicle_brand').val() +'-'+ $('#vehicle_name').val();
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '');

  $('#slug').val($slug.toLowerCase());
})


</script>
<script>
  $(document).ready(function(){
      $('.add_new_need').click(function(){
    var need  = $('#add_need').val();
    $('#you_need_fields').append ("<div class='form-group col-md-3 input_need'><div class='input-group'><input type='text' readonly class='form-control' name='features[]' value='"+

      need+"'><span class='input-group-btn'><button type='button' class='btn_delete btn btn-primary'> - </button></span></div></div>");

    $('#add_need').val('');
  });

      (function($){
  $.fn.datepicker.dates['de'] = {
    days: ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"],
    daysShort: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
    daysMin: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
    months: ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"],
    monthsShort: ["Jan", "Feb", "Mär", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"],
    today: "Heute",
    monthsTitle: "Monate",
    clear: "Löschen",
    weekStart: 1,
    format: "dd/mm/yyyy"
  };
}(jQuery));




$('#datepicker3').datepicker({
    language: 'de'
});


  $(document).on("click", ".btn_delete", function(){
    $(this).closest('.input_need').remove();
  });
  });
</script>