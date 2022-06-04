<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dropzone/dist/dropzone.css">
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Alle Fahrzeuge zur täglichen Miete<small></small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Zuhause</a></li>
      <li><a href="#">Tägliche Miete   </a></li>
      <li class="active">Tagesmietfahrzeug bearbeiten</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
                            <div class="col-md-12">
        <?php if($this->session->flashdata('menu_added')) { ?>
        <div class="alert alert-success"  style="background-color: rgb(81, 181, 79,0.9) "> Fahrzeug wurden hinzugefügt </div> 
       <?php }?>
        <div class="alert alert-danger" style="display: none; background-color: rgba(217, 92, 92, 0.6) !important"> </div>
        <form id="add_menu_form" action=" <?php echo base_url(); ?>admin/mietemich_edit_process/<?php echo $mietemich[0]['id'] ?>" method="POST"  enctype="multipart/form-data" >

          <div class="form-group col-md-12">
            <div class="checkbox">
              <label>
                <input type="checkbox" <?php echo ($mietemich[0]['enabled'] == 1) ? 'checked': ''; ?> name="enabled">
                Eintrag aktiviert
              </label>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label>Fahrzeugmarke:</label>
            <input type="text"  required="" class="form-control" value="<?php echo $mietemich[0]['vehicle_brand'] ?>" id="vehicle_brand" name="vehicle_brand" value="">
          </div>
          
          <div class="form-group col-md-4">
            <label>Fahrzeugname:</label>
            <input type="text" required="" value="<?php echo $mietemich[0]['vehicle_name'] ?>" class="form-control" id="vehicle_name" name="vehicle_name" value="">
          </div>



          <div class="form-group col-md-4">
            <label>Fahrzeugmotor:</label>
            <input type="text" value="<?php echo $mietemich[0]['vehicle_engine'] ?>" required="" class="form-control" id="vehicle_engine" name="vehicle_engine" value="">
          </div>
          <div class="form-group col-md-4">
            <label>Slug</label>
            <input type="text" required="" value="<?php echo $mietemich[0]['slug'] ?>" class="form-control" id="slug" name="slug">
          </div>

          <div class="form-group col-md-4">
                          <label>Antreib:</label>
            <select required="" class="form-control" name="vehicle_drive_type" id="vehicle_drive_type"> 
                    <option <?php echo ($mietemich[0]['vehicle_drive_type'] == 'Alle' ) ? 'selected' : '' ; ?> value="Alle" >Alle</option>
                    <option <?php echo ($mietemich[0]['vehicle_drive_type'] == 'Allrad' ) ? 'selected' : '' ; ?> value="Allrad">Allrad</option>
                    <option <?php echo ($mietemich[0]['vehicle_drive_type'] == 'Hinterradantrieb' ) ? 'selected' : '' ; ?> value="Hinterradantrieb">Hinterradantrieb  </option>
                    <option <?php echo ($mietemich[0]['vehicle_drive_type'] == 'Vorderradantrieb' ) ? 'selected' : '' ; ?> value="Vorderradantrieb">Vorderradantrieb</option>
                  </select>
          </div>
           <div class="form-group col-md-4">
            <label>Fahrzeugkategorie:</label>
              <select  required="" class="form-control" name="vehicle_category" id="vehicle_category">
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Bus' ? 'selected' :'' ; ?> value="Bus">Bus</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Cabriolet' ? 'selected' :'' ; ?> value="Cabriolet">Cabriolet</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Coupé' ? 'selected' :'' ; ?> value="Coupé">Coupé </option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Kleinwagen' ? 'selected' :'' ; ?> value="Kleinwagen">Kleinwagen</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Kombi' ? 'selected' :'' ; ?> value="Kombi">Kombi</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Kompaktvan/Minivan' ? 'selected' :'' ; ?> value="Kompaktvan/Minivan">Kompaktvan/Minivan</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Limousine' ? 'selected' :'' ; ?> value="Limousine">Limousine</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'Pick-up' ? 'selected' :'' ; ?> value="Pick-up">Pick-up</option>
                <option <?php echo ($autoabo[0]['vehicle_category']) == 'SUV / Geländewagen' ? 'selected' :'' ; ?> value="SUV / Geländewagen">SUV / Geländewagen</option>
              </select>
          </div>
          <div class="form-group col-md-12">
              <label>Beschreibung:</label>
              <textarea required="" class="form-control" id="vehicle_description" name="vehicle_description" rows="4" placeholder="Enter ..."><?php echo $mietemich[0]['vehicle_description'] ?></textarea>
          </div>

          <div class="form-group col-md-12">
            <label>Kraftstoffdetails</label>
                  <div class="radio">
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio"  <?php echo ($mietemich[0]['vehicle_fuel_type'] == 'Benzin') ? 'checked' : '' ?> name="vehicle_fuel_type" id="vehicle_fuel_type" checked="" value="Benzin">
                      Benzin
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" <?php echo ($mietemich[0]['vehicle_fuel_type'] == 'diesel') ? 'checked' : '' ?> name="vehicle_fuel_type" id="vehicle_fuel_type" value="diesel">
                      Diesel
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" <?php echo ($mietemich[0]['vehicle_fuel_type'] == 'elektro') ? 'checked' : '' ?> name="vehicle_fuel_type" id="vehicle_fuel_type" value="elektro">
                      Elektro
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" <?php echo ($mietemich[0]['vehicle_fuel_type'] == 'hybrid') ? 'checked' : '' ?> name="vehicle_fuel_type" id="vehicle_fuel_type" value="hybrid">
                      Hybrid
                    </label>
                  </div>
                  
                </div>

                <div class="form-group col-md-12">

                <label>Übertragungsart</label>
                  <div class="radio">
                    <label>
                      <input type="radio"  name="transmision_type" id="transmision_type" <?php echo ($mietemich[0]['transmision_type'] == 'Automatik')? 'checked' : ''; ?> value="Automatik">
                      Automatik
                    </label>
                  </div>

                  <div class="radio">
                    <label>
                      <input type="radio" name="transmision_type" id="transmision_type"  <?php echo ($mietemich[0]['transmision_type'] == 'Manuell')? 'checked' : ''; ?> value="Manuell">
                      Manuell
                    </label>
                  </div>
                 </div>


                 
                 <div class="form-group col-md-12">
                  <label>Spezielle Tags</label>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"  <?php echo ($mietemich[0]['one_car_left'] == 1) ? 'checked': ''; ?> name="one_car_left">
                      Nur noch 1 Auto übrig
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" <?php echo ($mietemich[0]['summer_special'] == 1) ? 'checked': ''; ?> name="summer_special">
                      Sommeraktion
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" <?php echo ($mietemich[0]['winter_special'] == 1) ? 'checked': ''; ?> name="winter_special">
                      Winteraktion
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" <?php echo ($mietemich[0]['brand_new'] == 1) ? 'checked': ''; ?> name="brand_new">
                      Brandneu
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" <?php echo ($mietemich[0]['hybrid'] == 1) ? 'checked': ''; ?> name="hybrid">
                      Hybrid
                    </label>
                  </div>

                   <div class="checkbox">
                     <label>
                       <input type="checkbox" <?php echo ($mietemich[0]['elektro'] == 1) ? 'checked': ''; ?> name="elektro">
                       Elektro
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
      <?php foreach ($features as $key => $value): ?>
      
        <div class="form-group col-md-3 input_need"><div class="input-group"><input type="text" readonly="" class="form-control" name="features[]" value="<?php echo $value['freature'] ?>"><span class="input-group-btn"><button type="button" class="btn_delete btn btn-primary"> - </button></span></div></div>

      <?php endforeach ?>
    </div>

                <div class="form-group col-md-12" style="overflow: auto;">
 <label>Preiskonfiguration</label>
                  <table class="table table-responsive-sm">
                    <thead>
                      <tr>
                        <td>Dauer</td>
                        <td>100KM</td>
                        <td>200KM</td>
                        <td>300KM</td>
                        <td>400KM</td>
                        <td>500KM</td>
                      </tr>
                    </thead>
                    <tbody>
                <tr>
                  <td>3H</td>
                  <td><input type="number" required="" name="3h100km" value="<?php echo $mietemich[0]['3h100km'] ?>" placeholder="3H 100KM"></td>
                  <td><input type="number" required="" name="3h200km" value="<?php echo $mietemich[0]['3h200km'] ?>" placeholder="3H 200KM"></td>
                  <td><input type="number" required="" name="3h300km" value="<?php echo $mietemich[0]['3h300km'] ?>" placeholder="3H 300KM"></td>
                  
                  <td><input type="text" readonly="" value="Disabled"></td>
                  <td><input type="text" readonly="" value="Disabled"></td>
                </tr>
                <tr>
                  <td>6H</td>
                  <td><input type="number" required="" name="6h100km" value="<?php echo $mietemich[0]['6h100km'] ?>" placeholder="6H 100KM"></td>
                  <td><input type="number" required="" name="6h200km" value="<?php echo $mietemich[0]['6h200km'] ?>" placeholder="6H 200KM"></td>
                  <td><input type="number" required="" name="6h300km" value="<?php echo $mietemich[0]['6h300km'] ?>" placeholder="6H 300KM"></td>
                  <td><input type="number" required="" name="6h400km" value="<?php echo $mietemich[0]['6h400km'] ?>" placeholder="6H 400KM"></td>
                  <td><input type="number" required="" name="6h500km" value="<?php echo $mietemich[0]['6h500km'] ?>" placeholder="6H 500KM"></td>
                </tr>
                <tr>
                   <td>9H</td>
                  <td><input type="number" required="" name="9h100km" value="<?php echo $mietemich[0]['9h100km'] ?>" placeholder="9H 100KM"></td>
                  <td><input type="number" required="" name="9h200km" value="<?php echo $mietemich[0]['9h200km'] ?>" placeholder="9H 200KM"></td>
                  <td><input type="number" required="" name="9h300km" value="<?php echo $mietemich[0]['9h300km'] ?>" placeholder="9H 300KM"></td>
                  <td><input type="number" required="" name="9h400km" value="<?php echo $mietemich[0]['9h400km'] ?>" placeholder="9H 400KM"></td>
                  <td><input type="number" required="" name="9h500km" value="<?php echo $mietemich[0]['9h500km'] ?>" placeholder="9H 500KM"></td>
                </tr>
                <tr>
                   <td>12H</td>
                  <td><input type="number" required="" name="12h100km" value="<?php echo $mietemich[0]['12h100km'] ?>" placeholder="12H 100KM"></td>
                  <td><input type="number" required="" name="12h200km" value="<?php echo $mietemich[0]['12h200km'] ?>" placeholder="12H 200KM"></td>
                  <td><input type="number" required="" name="12h300km" value="<?php echo $mietemich[0]['12h300km'] ?>" placeholder="12H 300KM"></td>
                  <td><input type="number" required="" name="12h400km" value="<?php echo $mietemich[0]['12h400km'] ?>" placeholder="12H 400KM"></td>
                  <td><input type="number" required="" name="12h500km" value="<?php echo $mietemich[0]['12h500km'] ?>" placeholder="12H 500KM"></td>
                </tr>
                <tr>
                   <td>24H</td>
                  <td><input type="number" required="" name="24h100km" value="<?php echo $mietemich[0]['24h100km'] ?>" placeholder="24H 100KM"></td>
                  <td><input type="number" required="" name="24h200km" value="<?php echo $mietemich[0]['24h200km'] ?>" placeholder="24H 200KM"></td>
                  <td><input type="number" required="" name="24h300km" value="<?php echo $mietemich[0]['24h300km'] ?>" placeholder="24H 300KM"></td>
                  <td><input type="number" required="" name="24h400km" value="<?php echo $mietemich[0]['24h400km'] ?>" placeholder="24H 400KM"></td>
                  <td><input type="number" required="" name="24h500km" value="<?php echo $mietemich[0]['24h500km'] ?>" placeholder="24H 500KM"></td>
                </tr>
                <tr>
                   <td>48H</td>
                  <td><input type="number" required="" name="48h100km" value="<?php echo $mietemich[0]['48h100km'] ?>" placeholder="48H 100KM"></td>
                  <td><input type="number" required="" name="48h200km" value="<?php echo $mietemich[0]['48h200km'] ?>" placeholder="48H 200KM"></td>
                  <td><input type="number" required="" name="48h300km" value="<?php echo $mietemich[0]['48h300km'] ?>" placeholder="48H 300KM"></td>
                  <td><input type="number" required="" name="48h400km" value="<?php echo $mietemich[0]['48h400km'] ?>" placeholder="48H 400KM"></td>
                  <td><input type="number" required="" name="48h500km" value="<?php echo $mietemich[0]['48h500km'] ?>" placeholder="48H 500KM"></td>
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
      <div class="dz-default dz-message">Klicken Sie hier oder legen Sie Bilder zum Hochladen ab. Bitte laden Sie das Bild einzeln hoch</div>
        </div>
  </div>
          <div class="col-md-6">
            <input type="submit" class="btn btn-primary customer-profile" value='Submit'>
          </div>
        </form>
      </div>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>
<script src="<?php echo base_url(); ?>assets/custom/dropzone.js"></script>
  <?php 
$new_array = array();
$old_images = explode(',', $mietemich[0]['images']);

  foreach($old_images as $key => $value){ 
               
               $new_array[] =  "{ name: \"".$value."\", size: 12345 }";
            }
   ?>


  <script>
var uploaded =  false;
     Dropzone.autoDiscover = false;
  $(".dropzone").dropzone({
    url:"<?php echo base_url(); ?>admin/mietemich_image_upload",
    dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
    maxFilesize: 5,  //MB
    acceptedFiles: ".jpeg,.jpg,.png",
    paramName: "imagefile",
    addRemoveLinks: true,
        init: function() {
               myDropzone = this;
               let existingFiles = [
               <?php echo  implode(',', $new_array) ?>

               ];
                for (i = 0; i < existingFiles.length; i++) {
            myDropzone.emit("addedfile", existingFiles[i]);
            myDropzone.emit("thumbnail", existingFiles[i], "../../uploads/mietemich/" + existingFiles[i].name);
            myDropzone.emit("complete", existingFiles[i]);                
        }


// this.emit("addedfile", mockFile);
// this.emit("thumbnail", mockFile, "images/properties/");
               },
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
  url: '<?php echo base_url() ?>admin/mietemich_image_delete',
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

  $(document).on("click", ".btn_delete", function(){
    $(this).closest('.input_need').remove();
  });
  });
</script>
