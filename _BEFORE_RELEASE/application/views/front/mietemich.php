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
    <div class="container py-5"> 
      <div class="row">
        
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
                  <h4 class="card-title violet-blue-text text-capitalize" style="height: 74px;"> <b><?php echo $mietemich['vehicle_brand'] ?> <?php echo $mietemich['vehicle_name'] ?></b> </h4>
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
                  <h5 class="card-title violet-blue-text mb-3"> <b> ab CHF <?php echo $mietemich[$select_price]; ?>.- / Tag </b> </h5>
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
