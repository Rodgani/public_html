                <?php
                           $images = explode(',', $vehicle_details[0]['images']);
                           $image  = $images[0];  
                           ?>
<style>body{ background-color: #fff !important; }
   .form-part-down{margin-top: 73px !important;}
   #terms_condtions{vertical-align: text-top;}
   .checkbox-inline{text-align: justify;}
   .border-0{border: 0px;}
   .vehcile_value{ text-transform: capitalize; }



   @media (max-width: 780px) {
   .form-part-down{margin-top: 15px !important;}
   .flip-side{right: -175px;}
   #submitbtn{width: 268px !important;}
   }
</style>
<section id="main">
   <form action="<?php echo base_url() ?><?php echo $method ?>/vehilce-request" method="post">
      <input type="hidden" name="km" value="<?php echo $km ?>">
      <input type="hidden" name="duration" value="<?php echo $duration ?>">
      <input type="hidden" name="price" value="<?php echo $vehicle_details[0][$select_price]; ?>">
      <input type="hidden" name="vehicle_id" value="<?php echo $vehicle_details[0]['id'];  ?>">
      <div class="container">
         <div class="row">
            <div class="col">
               <nav class="navbar navbar-expand-lg navbar-light bg-light border my-4">
                  <div class="collapse navbar-collapse">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="<?php echo base_url() . $request_for .'/'. $vehicle_details[0]['slug'].'?km='.$km.'&duration='.$duration?>">
                              <span style="color:#14cc00">
                                 <svg style="color:rgba(59, 60, 149, 1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                 </svg>
                              </span>
                              &nbsp;Konfigurieren
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link active" href="#"><b>Deine Angaben</b></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link">Fertig</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>



         <div class="row mt-2 mb-5">
            <div class="col-md-5">
               <h3 class="font-weight-bold mt-4">Persönliche Angaben</h3>
               
               <div class="redio-cn my-4">
                        <input type="radio" value="Herr" name="gender" aria-label="Radio button for following text input" id="gender"  checked=""> &nbsp;<label class="mb-0" for="herr">Herr</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" value="Frau"  aria-label="Radio button for following text input" id="gender" name="gender"> &nbsp;<label class="mb-0" for="frau">Frau</label>
                     </div>
                     <fieldset class="my-2">
                        <legend class="small mb-0 text-muted">Vorname <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="vorname" name="vorname" aria-describedby="vorname">
                     </fieldset>
                     <p class="small text-danger val_field vorname_error">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class=" my-2 ">
                        <legend class="small mb-0 text-muted">Nachname <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="nachname" name="nachname" aria-describedby="nachname">
                     </fieldset>
                     <p class="small text-danger val_field vorname_nachname">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class="my-2 mb-1">
                        <legend class="small mb-0 text-muted">Geburtsdatum <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="datepic" autocomplete="off" name="datepic" id="datepic">
                     </fieldset>
                     <p class="small text-danger val_field vorname_datepic">Dieses Feld muss ausgefüllt werden</p>
                     <?php /* ?>
                     <div class="small"><i class="fa fa-exclamation-circle" aria-hnameden="true"></i> Für Fahrer unter 23 Jahren berechnen wir für deinen Fahrzeugtyp +42 CHF/Monat</div>
                     <?php */?>

                        <fieldset class="my-2">
                        <legend class="small mb-0 text-muted">Firma</legend>
                        <input type="text" class="form-control my-2 border-0" id="firma" name="firma" aria-describedby="firma">
                     </fieldset>
                     <p class="small text-danger val_field vorname_firma">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class="my-2 ">
                        <legend class="small mb-0 text-muted">E-Mail-Adresse <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="email" name="email" aria-describedby="email">
                     </fieldset>
                     <p class="small text-danger val_field vorname_email">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class=" my-2 ">
                        <legend class="small mb-0 text-muted">Telefon-Nummer <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="telefon_nummer" name="telefon_nummer" aria-describedby="telefon-nummer">
                     </fieldset>
                     <p class="small text-danger val_field vorname_telefon_nummer">Dieses Feld muss ausgefüllt werden</p>


                        <fieldset class=" my-2">
                           <legend class="small mb-0 text-muted">Strasse <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="strasse" name="strasse" placeholder="" aria-describedby="strasse">
                        </fieldset>
                        <fieldset class="my-2">
                           <legend class="small mb-0 text-muted">Nr. <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="nr" name="nr" placeholder="" aria-describedby="nr">
                        </fieldset>

                        <p class="small text-danger val_field vorname_strasse">Dieses Feld muss ausgefüllt werden</p>

                        <fieldset class="my-3">
                           <legend class="small mb-0 text-muted">Adresszusatz</legend>
                           <input type="text" class="form-control my-2 border-0" id="adresszusatz" name="adresszusatz" placeholder="" aria-describedby="adresszusatz">
                        </fieldset>

                        <fieldset class=" my-2">
                           <legend class="small mb-0 text-muted">Postleitzahl <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="postleitzahl" name="postleitzahl" placeholder="" aria-describedby="postleitzahl">
                        </fieldset>
                        <fieldset class=" my-2">
                           <legend class="small mb-0 text-muted">Ort <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="ort" name="ort" placeholder="" aria-describedby="ort">
                        </fieldset>
                        <p class="small text-danger val_field vorname_ort">Dieses Feld muss ausgefüllt werden</p>
                        <h3 class="p-2 h4">Dein Wunschtermin zur Übergabe </h3>
                           <fieldset class=" my-2 ">
                              <legend class="small mb-0 text-muted">Gewünschter Übergabetermin<span>*</span></legend>
                              <input type="text" class="form-control my-2 border-0" id="available_date" name="available_date" autocomplete="off" placeholder="" aria-describedby="available_date" id="available_date">
                           </fieldset>
                           <p class="small text-danger val_field vorname_available_date">Dieses Feld muss ausgefüllt werden</p>
                           <?php if (isset($vehicle_details[0]['date_from'])) {?>
                           <p class="small text-gray-dark"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Dein <?php echo $vehicle_details[0]['vehicle_name'] ?> ist frühestens verfügbar am: <?php 
                              $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                                    $german_months = array('Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember');
                                    $date_to_show = date('d. F Y', strtotime($vehicle_details[0]['date_from']));
                              
                              echo  str_ireplace($english_months, $german_months, $date_to_show);
                              }
                              ?></p>




                           <h3 class="h4">Lieferung deines Autos</h3>
                           <div class="redio-cn my-4">
                              <input type="radio" class="mb-3" value="delivery_not_included" id="redioIn" name="delivery" aria-label="Radio button for following text input" id="delivery" checked=""> &nbsp;<label class="mb-0" for="herr"> Kostenlose Abholung in Säriswil </label>
                              <br>
                              <input type="radio" value="delivery_included" id="redioIn" aria-label="Radio button for following text input" id="delivery" name="delivery"> &nbsp;<label class="mb-0" for="frau"> Heimlieferung (einmalig 180 CHF) </label>
                           </div>
                               <p class="text-danger">Die Allgemeinen Geschäftsbedingungen müssen akzeptiert werden.</p>

                              
                              <label for="terms_condtions p-4" class="checkbox-inline radio_Label"><input  style="width: 28px; height: 28px;" type="checkbox" id="terms_condtions" name="terms_condtions" value="yes"> Hiermit akzeptiere ich die AGB und stimme diese zu. Weiterhin habe ich zur Kenntnis genommen, dass eine Bestellung aufgegeben wird, sobald ich auf „Jetzt abonnieren" klicke und bestätige, das ich mit dem von mir gewählten / konfigurierten Fahrzeug zufrieden bin und meine persönliche Daten korrekt ausgefüllt wurden. 
                              </label>
                              <p class="small my-0 py-0 text-danger val_field  terms_error">Dieses Feld muss ausgefüllt werden</p>



                              <input  id="submitbtn" type="submit" class="mt-4 btn btn-primary text-center" style="width: 300px; text-align: center;" value="Jetzt abonnieren">






            </div>
            <div class="col-md-4 offset-md-2">
               <div class="row mt-4 text-center">
                   <div class="col pl-0"><img width="280" src="<?php echo base_url(); ?>uploads/<?php echo $method ?>/<?php echo $image ?>" alt="Image"></div>
               </div>
               <div class="row mt-2">
                  <div class="col">
                  <p class="mb-0 text-capitalize"><b><?php echo $vehicle_details[0]['vehicle_brand'] ?> <?php echo $vehicle_details[0]['vehicle_name'] ?> </b></p>
                  </div>
               </div>

<?php if ($method == 'autoabo') { ?>
               <div class="row mt-2 mb-0">
                  <div class="col-md-12">
                     <ul class="list-group">
                       <li class="list-group-item border-0 px-0 py-2">
                         Getriebe
                         <span class="float-right vehcile_value"><?php echo $vehicle_details[0]['transmision_type']; ?></span>
                         <div class="clearfix"></div>
                       </li>
                        <li class="list-group-item border-0 px-0 rounded-0">
                         Kraftstoffart
                         <span class="float-right vehcile_value"><?php echo $vehicle_details[0]['vehicle_fuel_type']; ?></span>
                         <div class="clearfix"></div>
                       </li>  
                       <li class="list-group-item border-0 px-0 py-2">
                         Antrieb
                         <span class="float-right vehcile_value"><?php echo $vehicle_details[0]['vehicle_drive_type']; ?></span>
                         <div class="clearfix"></div>
                       </li>
                      
                     </ul> 
                  </div>
               </div>
               <hr class="mt-0">
               <div class="row">
                  <div class="col">
                  <p class="mb-0 text-capitalize"><b>Monatlieche Rate</b></p>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                  <p class="mb-0 text-right"><?php echo number_format( $vehicle_details[0][$select_price]) ?> CHF</p>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col">
                  <p class="mb-0 text-capitalize"><b>laufleistung</b></p>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                      <ul class="list-group">
                       <li class="list-group-item border-0 px-0 py-2">
                         1000km/Jahr
                         <span class="float-right vehcile_value">Inklusive</span>
                         <div class="clearfix"></div>
                       </li>
                    </ul>
                  </div>
               </div>

               <hr>
               <div class="row mb-4">
                  <div class="col">
                      <ul class="list-group">
                       <li class="list-group-item border-0 px-0 py-2">
                         <b>Monatlieche Gesamtkosten</b>
                         <span class="float-right vehcile_value"><b><?php echo number_format( $vehicle_details[0][$select_price]) ?> CHF</b></span>
                         <div class="clearfix"></div>
                       </li>
                    </ul>
                    <p>Inklusive MwSt</p>
                  </div>
               </div>

               <div class="row">
                  <div class="col">
                  <p style="display:  block"><b>In Dienem Abo Enthantel</b></p><br>
                  </div>
               </div>
               <div class="row ">
                  <div class="col">
                  <p style="display:  block">Enthantel in Dienem Abo: </p>

                  <ul>
                     <li>Versicherung</li>
                     <li>Zulassung</li>
                     <li>Service und Wartung</li>
                     <li>Bereifung</li>
                     <li>Steuern</li>
                     <li>Vignette</li>
                  </ul>
                  </div>
               </div>

            <?php } ?>

     <?php if($method == 'mietemich') { ?>

                     <div class="row mt-2">
                  <div class="col">
                      <ul class="list-group">
                       <li class="list-group-item border-0 px-0 py-2">
                         Kilometer
                         <span class="float-right vehcile_value"> <?php echo  $km ?></span>
                         <div class="clearfix"></div>
                       </li>
                       <li class="list-group-item border-0 px-0 py-2">
                         Laufzeit
                         <span class="float-right vehcile_value"> <?php echo str_replace('h', ' Stunden', $duration) ?></span>
                         <div class="clearfix"></div>
                       </li>  
                    </ul>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col">
                      <ul class="list-group">
                       <li class="list-group-item border-0 px-0 py-2">
                         <b>Gesamtkosten</b>
                         <span class="float-right vehcile_value"><b><?php echo number_format( $vehicle_details[0][$select_price]) ?> CHF</b></span>
                         <div class="clearfix"></div>
                       </li>
                    </ul>
                    <p>Inklusive MwSt</p>
                  </div>
               </div>

                  <div class="row ">
                  <div class="col">
                  <p style="display:  block">Enthantel in Diener Miete: </p>

                  <ul>
                     <li>Versicherung</li>
                     <li>Zulassung</li>
                     <li>Service und Wartung</li>
                     <li>Bereifung</li>
                     <li>Steuern</li>
                     <li>Vignette</li>
                  </ul>
                  </div>
               </div>





     <?php } ?>





            </div>
         </div>







































         <div class="row mt-2 mb-5">
            <div class="col-md-8">
               <h3 class="font-weight-bold mt-4">Persönliche Angaben</h3>
               <div class="row">
                  <div class="col-md-6">
                     <div class="redio-cn my-4">
                        <input type="radio" value="Herr" name="gender" aria-label="Radio button for following text input" id="gender"  checked=""> &nbsp;<label class="mb-0" for="herr">Herr</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" value="Frau"  aria-label="Radio button for following text input" id="gender" name="gender"> &nbsp;<label class="mb-0" for="frau">Frau</label>
                     </div>
                     <fieldset class="my-2">
                        <legend class="small mb-0 text-muted">Vorname <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="vorname" name="vorname" aria-describedby="vorname">
                     </fieldset>
                     <p class="small text-danger val_field vorname_error">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class=" my-2 ">
                        <legend class="small mb-0 text-muted">Nachname <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="nachname" name="nachname" aria-describedby="nachname">
                     </fieldset>
                     <p class="small text-danger val_field vorname_nachname">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class="my-2 mb-1">
                        <legend class="small mb-0 text-muted">Geburtsdatum <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="datepic" autocomplete="off" name="datepic" id="datepic">
                     </fieldset>
                     <p class="small text-danger val_field vorname_datepic">Dieses Feld muss ausgefüllt werden</p>
                     <?php /* ?>
                     <div class="small"><i class="fa fa-exclamation-circle" aria-hnameden="true"></i> Für Fahrer unter 23 Jahren berechnen wir für deinen Fahrzeugtyp +42 CHF/Monat</div>
                     <?php */?> 



                  </div>
                  <div class="col-md-6">




                     <fieldset class="my-2 form-part-down">
                        <legend class="small mb-0 text-muted">Firma</legend>
                        <input type="text" class="form-control my-2 border-0" id="firma" name="firma" aria-describedby="firma">
                     </fieldset>
                     <p class="small text-danger val_field vorname_firma">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class="my-2 ">
                        <legend class="small mb-0 text-muted">E-Mail-Adresse <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="email" name="email" aria-describedby="email">
                     </fieldset>
                     <p class="small text-danger val_field vorname_email">Dieses Feld muss ausgefüllt werden</p>
                     <fieldset class=" my-2 ">
                        <legend class="small mb-0 text-muted">Telefon-Nummer <span>*</span></legend>
                        <input type="text" class="form-control my-2 border-0" id="telefon_nummer" name="telefon_nummer" aria-describedby="telefon-nummer">
                     </fieldset>
                     <p class="small text-danger val_field vorname_telefon_nummer">Dieses Feld muss ausgefüllt werden</p>






                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <h2 class="mt-2 h4">Adresse</h2>
                     

                     <div class="row px-3">
                        <fieldset class=" my-2  col-md-8">
                           <legend class="small mb-0 text-muted">Strasse <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="strasse" name="strasse" placeholder="" aria-describedby="strasse">
                        </fieldset>
                        <fieldset class=" my-2  col-md-4">
                           <legend class="small mb-0 text-muted">Nr. <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="nr" name="nr" placeholder="" aria-describedby="nr">
                        </fieldset>
                        <p class="small text-danger val_field vorname_strasse">Dieses Feld muss ausgefüllt werden</p>
                     </div>
                     <div class="row px-3">
                        <fieldset class="my-3  col-md-12">
                           <legend class="small mb-0 text-muted">Adresszusatz</legend>
                           <input type="text" class="form-control my-2 border-0" id="adresszusatz" name="adresszusatz" placeholder="" aria-describedby="adresszusatz">
                        </fieldset>
                     </div>
                     <div class="row px-3">
                        <fieldset class=" my-2  col-md-4">
                           <legend class="small mb-0 text-muted">Postleitzahl <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="postleitzahl" name="postleitzahl" placeholder="" aria-describedby="postleitzahl">
                        </fieldset>
                        <fieldset class=" my-2  col-md-8">
                           <legend class="small mb-0 text-muted">Ort <span>*</span></legend>
                           <input type="text" class="form-control my-2 border-0" id="ort" name="ort" placeholder="" aria-describedby="ort">
                        </fieldset>
                        <p class="small text-danger val_field vorname_ort">Dieses Feld muss ausgefüllt werden</p>
                     </div>
                     <div class="row px-3">
                        <div class="col-md-12">
                           <h2 class="h4">Dein Wunschtermin zur Übergabe</h2>
                        </div>
                        <div class="col-md-6">
                           <fieldset class=" my-2 ">
                              <legend class="small mb-0 text-muted">Gewünschter Übergabetermin<span>*</span></legend>
                              <input type="text" class="form-control my-2 border-0" id="available_date" name="available_date" autocomplete="off" placeholder="" aria-describedby="available_date" id="available_date">
                           </fieldset>
                           <p class="small text-danger val_field vorname_available_date">Dieses Feld muss ausgefüllt werden</p>
                           <?php if (isset($vehicle_details[0]['date_from'])) {?>
                           <p class="small text-gray-dark"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Dein <?php echo $vehicle_details[0]['vehicle_name'] ?> ist frühestens verfügbar am: <?php 
                              $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
                                    $german_months = array('Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember');
                                    $date_to_show = date('d. F Y', strtotime($vehicle_details[0]['date_from']));
                              
                              echo  str_ireplace($english_months, $german_months, $date_to_show);
                              }
                              ?></p>
                        </div>
                        <div class="col-md-6"></div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <h3 class="h4">Lieferung deines Autos</h3>
                           <div class="redio-cn my-4">
                              <input type="radio" class="mb-3" value="delivery_not_included" id="redioIn" name="delivery" aria-label="Radio button for following text input" id="delivery" checked=""> &nbsp;<label class="mb-0" for="herr"> Kostenlose Abholung in Säriswil </label>
                              <br>
                              <input type="radio" value="delivery_included" id="redioIn" aria-label="Radio button for following text input" id="delivery" name="delivery"> &nbsp;<label class="mb-0" for="frau"> Heimlieferung (einmalig 180 CHF) </label>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <p class="text-danger">Die Allgemeinen Geschäftsbedingungen müssen akzeptiert werden.</p>
                        <div class="card w-100 p-3 border-0" >
                           <div class="card-body"  style="background-color: rgba(0,0,0,.05);">
                              <input  style="width: 28px; height: 28px;" type="checkbox" id="terms_condtions" name="terms_condtions" value="yes">
                              <label for="terms_condtions" class="radio_Label"><a style="color: #000" href="#" target="_blank" aria-label="Allgemeinen Geschäftsbedingungen">Allgemeinen Geschäftsbedingungen</a> gelesen und akzeptiere diese.</label>
                              <p class="small my-0 py-0 text-danger val_field  terms_error">Dieses Feld muss ausgefüllt werden</p>
                              <input  id="submitbtn" type="submit" class="mt-4 btn btn-primary text-center" style="width: 300px; text-align: center;" value="Jetzt abonnieren">
                           </div>
                        </div>
                     </div>



                  </div>
               </div>
            </div>
            <div class="col-md-4 mt-2nd akzeptiere diese.">
               <div class="card card-o-hidden bg-light rounded-0">
                  <div class="card-body">
                     <h3 class="font-weight-bold">Bestellübersicht</h3>
                     <div class="row mt-5">
                        <div class="col">
                           <p class="mb-0 text-capitalize"><?php echo $vehicle_details[0]['vehicle_brand'] ?></p>
                           <p class="mb-0 text-capitalize"><b><?php echo $vehicle_details[0]['vehicle_name'] ?> </b></p>
                           <!-- <p class="mb-0 text-primary">Fahrzeugseite</p> -->
                        </div>
        
                     </div>
                     <div class="row mt-4">
                        <div class="col pr-0 w-100">
                           <ul class="list-group">
                              <?php if ($method == 'autoabo') { ?>
                              <li class="list-group-item d-flex justify-content-between align-items-start border-0 p-0 rounded-0 bg-transparent"> • <?php echo $km ?>/Monat </li>
                              <li class="list-group-item d-flex justify-content-between align-items-start border-0 p-0 rounded-0 bg-transparent">• <?php echo str_replace('month', '', $duration) ?> Monate </li>
                              <li class="list-group-item d-flex justify-content-between align-items-start border-0 p-0 rounded-0 bg-transparent">• 1000 CHF Selbstbehalt </li>
                              <span class="badge badge-light pl-2 pr-0"></span>
                              <?php } elseif ($method == 'mietemich') { ?>

                              <li class="list-group-item d-flex justify-content-between align-items-start border-0 p-0 rounded-0 bg-transparent"> • <?php echo  $km ?> </li>


                              <li class="list-group-item d-flex justify-content-between align-items-start border-0 p-0 rounded-0 bg-transparent"> • <?php echo str_replace('h', 'Stunden', $duration) ?> </li>
                                 <span class="badge badge-light pl-2 pr-0"></span>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                        <div class="col pl-0"><img class="flip-side" width="180" src="<?php echo base_url(); ?>uploads/<?php echo $method ?>/<?php echo $image ?>" alt="Image"></div>
                     </div>
                     <ul class="list-group">
                        <?php /* ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start   border-left-0 border-right-0 border-top-0 px-0 py-2 rounded-0 bg-transparent">
                           Fahrer unter 23
                           <span class="badge badge-light pl-2 pr-0">
                              <h6 class="mb-0"> 42 </h6>
                           </span>
                        </li>
                        <?php */ ?>
                        <li class=" mt-4 list-group-item d-flex justify-content-between align-items-start border-left-0 border-right-0 border-top-0 px-0 py-2 rounded-0 bg-transparent">
                           <span class="text-primary font-weight-bold">
                           <i class="fa fa-car " aria-hidden="true"></i> Autoabo services
                           </span>
                           <span class="badge badge-light pl-2 pr-0">
                              <h6 class="mb-0"> inkl. </h6>
                           </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start border-0 px-0 py-2 rounded-0 bg-transparent">
                           <span class="font-weight-bold">Total</span>
                           <span class="badge badge-light font-weight-bold pl-2 pr-0">
                              <h6 class="mb-0"> CHF <?php echo $vehicle_details[0][$select_price] ?> </h6>
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
   </form>
   </div>
   </div>
   </div>
</section>
<script>
   $(document).ready(function(){
      $( "#available_date" ).datepicker({
        showAnim: 'drop', 
         dateFormat: 'dd/mm/yy',
          prevText: '&#x3c;zurück', prevStatus: '',
      prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
      nextText: 'Vor&#x3e;', nextStatus: '',
      nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
      currentText: 'heute', currentStatus: '',
      todayText: 'heute', todayStatus: '',
      clearText: '-', clearStatus: '',
      closeText: 'schließen', closeStatus: '',
      monthNames: ['Januar','Februar','März','April','Mai','Juni',
      'Juli','August','September','Oktober','November','Dezember'],
      monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
      'Jul','Aug','Sep','Okt','Nov','Dez'],
      dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
      dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
      dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa'],
   
         <?php if(isset($vehicle_details[0]['date_from']) && $method == 'autoabo'  ){ ?>
   
         minDate: new Date('<?php echo date('Y,m,d',strtotime($vehicle_details[0]['date_from'])) ?>'),
      <?php }else{ ?>
         minDate: new Date('<?php echo date('Y,m,d') ?>'),
      <?php } ?>  
   
         changeMonth: true,
         changeYear: true
       });
   
       $('form').on('submit',function(){
   
     
   
   
   var error_flag = true;
   if($('#vorname').val() == ""){
   $('.vorname_error').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_error').fadeOut();
   }
   if($('#email').val() == ""){
   $('.vorname_email').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_email').fadeOut();
   }
   if($('#datepic').val() == ""){
   $('.vorname_datepic').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_datepic').fadeOut();
   }
   if($('#firma').val() == ""){
   $('.vorname_firma').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_firma').fadeOut();
   }
   if($('#nachname').val() == ""){
   $('.vorname_nachname').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_nachname').fadeOut();
   }
   if($('#telefon_nummer').val() == ""){
   $('.vorname_telefon_nummer').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_telefon_nummer').fadeOut();
   }
   if($('#strasse').val() == "" || $('#nr').val() == ""){
   $('.vorname_strasse').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_strasse').fadeOut();
   }
   if($('#adresszusatz').val() == ""){
   $('.vorname_adresszusatz').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_adresszusatz').fadeOut();
   }
   if($('#postleitzahl').val() == "" || $('#ort').val() == ""){
   $('.vorname_ort').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_ort').fadeOut();
   }
   if($('#available_date').val() == ""){
   $('.vorname_available_date').fadeIn();
   error_flag = true; 
   }else{
   error_flag = false;
   $('.vorname_available_date').fadeOut();
   }
   
   if(error_flag){
      $('.terms_error').fadeIn();
                  $('html,body').animate({
           scrollTop: $("#vorname").offset().top
       }, 'slow');
   return false;
   }
      if( ! $('#terms_condtions').prop('checked')){
            $('.terms_error').fadeIn();
               $('html, body').animate({
           scrollTop: $("#terms_condtions").offset().top
       });
            return false;
         }
         else{
            $('.terms_error').fadeOut();
         }
   
   
       });
   });
</script>