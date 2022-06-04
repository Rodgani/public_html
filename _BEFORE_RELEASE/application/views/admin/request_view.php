  <?php
  $images = explode(',', $request[0]['images']);
 $image  = $images[0];  
                       ?>

[0]
<div class="content-wrapper">
  <style>
    .text-desc{
    font-size: 16px;
    font-style: italic;
    text-transform: capitalize;
    }
    .text-heading{
    font-size: 16px;
    font-weight: bold;
    text-transform: capitalize;

    }
  </style>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>All Testimonial<small> Detail</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Menu</a></li>
      <li class="active">All Menu</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6  " style="margin-bottom: 40px;">
            <h2>Kundendetails</h2>

            <div class="row">
              <div class="col-md-8">
              <div class="row">




  <div class="col-md-6 mt-3 p-4 text-heading">KM</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['km'] ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">duration</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['duration']?></div>


  <div class="col-md-6 mt-3 p-4 text-heading">Preis </div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['price'] ?></div>

  <?php if(isset($request[0]['delivery'])) { 
          
          if($request[0]['delivery'] == "delivery_included") { ?>
            <div class="col-md-6 mt-3 p-4 text-heading">Lieferpreis</div>
            <div class="col-md-6 mt-3 p-4 text-desc">180 chf für die Lieferung</div>

          <?php } elseif ($request[0]['delivery'] == "delivery_not_included") { ?>
            <div class="col-md-6 mt-3 p-4 text-heading">Lieferpreis</div>
            <div class="col-md-6 mt-3 p-4 text-desc">Selbstabholung </div>
         <?php }
        } 

       ?>

  <div class="col-md-6 mt-3 p-4 text-heading">erforderliches Datum</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo date('d. F , Y',strtotime($request[0]['available_date'])) ?></div>


  <div class="col-md-6 mt-3 p-4 text-heading">Auftragsdatum</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo date('d. F , Y',strtotime($request[0]['created_at'])) ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">vorname</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['vorname'] ?></div>

    <div class="col-md-6 mt-3 p-4 text-heading">nachname</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['nachname'] ?></div>

      <div class="col-md-6 mt-3 p-4 text-heading">gender</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['gender'] ?></div>

      <div class="col-md-6 mt-3 p-4 text-heading">email</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['email'] ?></div>

      <div class="col-md-6 mt-3 p-4 text-heading">telefon_nummer</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['telefon_nummer'] ?></div>

      <div class="col-md-6 mt-3 p-4 text-heading">strasse</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['strasse'] ?></div>

      <div class="col-md-6 mt-3 p-4 text-heading">nr</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['nr'] ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">adresszusatz</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['adresszusatz'] ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">adresszusatz</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['adresszusatz'] ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">postleitzahl</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['postleitzahl'] ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">ort</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['ort'] ?></div>
   <div class="col-md-6 mt-3 p-4 text-heading">Geburtsdatum</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo date('d. F , Y',strtotime($request[0]['datepic'])) ?></div>


              </div>
            </div>
              <div class="col-md-4"></div>
            </div>
                
              </div>
              <div class="col-md-6">
            <h2>Fahrzeugangaben</h2>
            <div class="row">
            
              <div class="col-md-7">
                <div class="row">
  <div class="col-md-6 mt-3 p-4 text-heading">Fahrzeugname</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['vehicle_name'] ?></div>
  
    <div class="col-md-6 mt-3 p-4 text-heading">Fahrzeugmarke</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['vehicle_brand'] ?></div>

  <div class="col-md-6 mt-3 p-4 text-heading">Fahrzeugmotor</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['vehicle_engine'] ?></div>

<?php if (isset($request[0]['date_from'])) { ?>
      <div class="col-md-6 mt-3 p-4 text-heading">verfügbares Datum</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo date('d. F Y',strtotime($request[0]['date_from'])) ?></div>
<?php } ?>


    <div class="col-md-6 mt-3 p-4 text-heading">Kraftstoffart des Fahrzeugs</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['vehicle_fuel_type'] ?></div>

    <div class="col-md-6 mt-3 p-4 text-heading">Übertragungsart</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['transmision_type'] ?></div>

    <div class="col-md-6 mt-3 p-4 text-heading">Fahrzeugantriebsart</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo $request[0]['vehicle_drive_type'] ?></div>
    
                </div>
              </div>
                <div class="col-md-5">
                <img style="width: 250px" class="card-img-top mt-4" src="<?php echo base_url(); ?>uploads/<?php echo $request_type?>/<?php echo $image ?> ">
                </div>
            </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </section>
  <!-- /.content -->
</div>