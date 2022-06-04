    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">  
        <?php 

          $current_url = get_instance()->uri->segment_array();
if (isset($request_for)) {

    if($request_for == "auto-abo") {?>
      <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>assets/front/images/autoabo-logo-2.jpg" alt="Logo"></a>
            <?php }else { ?>
      <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>assets/front/images/logo-2.jpg" alt="Logo"></a> 
            <?php } 




} else {

      if(isset($current_url['1']) && $current_url['1'] == 'auto-abo') {?>
      <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>assets/front/images/autoabo-logo-2.jpg" alt="Logo"></a>
            <?php }else { ?>
      <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>assets/front/images/logo-2.jpg" alt="Logo"></a> 
            <?php } 



} ?>




        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-5">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>about">Über Uns</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>automiete">
                Automiete
                <span class="d-none show-arrow-in-mobile" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <svg width="17" class="ml-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.2828 4.89817"><path class="style-jt322lel1_noLink" d="M4.64116,4.89817a.5001.5001,0,0,1-.34277-.13574L.15727.86448A.50018.50018,0,0,1,.84282.136L4.64116,3.71165,8.44.136a.50018.50018,0,0,1,.68555.72852L4.98393,4.76243A.5001.5001,0,0,1,4.64116,4.89817Z"></path></svg>

                </span>
              </a>
              <div class="dropdown-menu border-0 rounded-0 text-lg-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>auto-abo">Auto Abo</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>miete-mich-taeglich">Miete mich täglich</a>
              </div>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="<?php echo base_url()?>dienstleistung">
                Dienstleistung
                <span class="d-none show-arrow-in-mobile" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg width="17" class="ml-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.2828 4.89817"><path class="style-jt322lel1_noLink" d="M4.64116,4.89817a.5001.5001,0,0,1-.34277-.13574L.15727.86448A.50018.50018,0,0,1,.84282.136L4.64116,3.71165,8.44.136a.50018.50018,0,0,1,.68555.72852L4.98393,4.76243A.5001.5001,0,0,1,4.64116,4.89817Z"></path></svg>
                </span>
              </a>
              <div class="dropdown-menu border-0 rounded-0 text-lg-right" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="<?php echo base_url() ?>reparaturservice">Reparaturservice</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>finanzierung">Finanzierung</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>garantie">Garantie</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>autoversicherung">Autoversicherung</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>fahrzeugankauf">Fahrzeugankauf</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>autos">Autos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>kontakt">Kontakt</a>
            </li>
            
          </ul>
        </div>
      </div>  
    </nav>