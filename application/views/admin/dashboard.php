  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Infos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $mietemich_pending_count ?></h3>

              <p>tägliche automatische Abonnementanfragen heute</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mehr Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


    </div>

      <div class="row">
         <div class="col-lg-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Neueste Anfragen für die tägliche Miete</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                  <th>Auftragsnummer</th>
                    <th>Kundenname</th>
                    <th>Kundenkontakt</th>
                    <th>Fahrzeugname</th>
                    <th>Anforderungsstatus</th>

                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($recent_mietemich_requests as $key => $value){   
                      $label = '';
                      $title = '';
                      if($value['status']  == 'pending'){
                        $label = 'danger';
                      }
                      if($value['status']  == 'connected'){
                        $label = 'info';
                      }
                      if($value['status']  == 'delivered'){
                        $label = 'success';
                      }
                      ?>

                    <tr>
                    <td><a href="<?php echo base_url() ?>Requests/requestview/mietemich/<?php echo $value['mietemich_request_id'] ?>">TAA <?php echo $value['mietemich_request_id'] ?></a></td>
                    <td><?php echo $value['vorname'] ?></td>
                    <td><?php echo $value['telefon_nummer'] ?></td>
                    <td><?php echo $value['vehicle_name'] ?></td>
                    <td><span class="label label-<?php echo $label; ?> text-capitalize">

                      <?php  
                       if($value['status'] == 'pending'){
                        echo "Offen";
                      }
                      if($value['status'] == 'connected'){
                        echo "In Kontakt";
                      }
                      if($value['status'] == 'delivered'){
                        echo "Abgeschlossen";
                      }

                      ?>
                      

                    </span>

                    </td>
                  </tr>


                      
                    <?php } ?>
              
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo base_url() ?>requests/get/mietemich/all" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
      </div>

      <div class="col-lg-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Kürzlich hinzugefügte Fahrzeuge zur täglichen Miete</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <?php foreach ($recent_mietemich as $key => $value): ?>
               <?php 
               $mietemich_images = explode(',', $value['images']);
               $mietemich_image = $mietemich_images[0];

                ?>   
               
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url();?>uploads/mietemich/<?php echo $mietemich_image; ?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"><?php echo $value['vehicle_name'] ?> </a>
                    <span class="product-description">
                         <?php echo $value['vehicle_engine']; ?>
                        </span>
                  </div>
                </li>
                 <?php endforeach ?>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="<?php echo base_url() ?>admin/mietemich" class="uppercase">Alle Fahrzeuge anzeigen</a>
            </div>
            <!-- /.box-footer -->
          </div>
      </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
