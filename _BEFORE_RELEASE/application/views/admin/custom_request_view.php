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
    <h1>Anfragedetails</h1>

  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6  " style="margin-bottom: 40px;">
            <h2>Anfragedetails</h2>

            <div class="row">
              <div class="col-md-12">
                                  <div class="col-md-6 mt-3 p-4 text-heading">adresse</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_adresse'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">nr</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_nr'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">plz</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_plz'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">ort</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_ort'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">geburtstag</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_geburtstag'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">typ</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['typ'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">jahrgang</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['jahrgang'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">treibstoff</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_treibstoff'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">getriebeart</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_getriebeart'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">farbe</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['raq_farbe'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">mindestlaufzeit</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_mindestlaufzeit'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">kilometer pro monate</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_kilometer_pro_monate'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">wunschpreis pro monat</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['req_wunschpreis_pro_monat'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">wunschdatum</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['wunschdatum'] ?></div>
                <div class="col-md-6 mt-3 p-4 text-heading">created_at</div>
  <div class="col-md-6 mt-3 p-4 text-desc"><?php echo  $request[0]['created_at'] ?></div>
              </div>  

          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
  </div>
</div>
</div>
  </section>
  <!-- /.content -->
</div>