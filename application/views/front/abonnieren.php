<?php
$images = explode(',', $vehicle_details[0]['images']);
$image = $images[0];
?>
<style>
  .form-part-down {
    margin-top: 73px !important;
  }

  #terms_condtions {
    vertical-align: text-top;
  }

  .checkbox-inline {
    text-align: justify;
  }

  .border-0 {
    border: 0px;
  }

  .vehcile_value {
    text-transform: capitalize;
  }


  .mcontroler {
    padding-left: 0 !important;
  }

  .mcontroler2 {
    padding-right: 16px;
  }

  @media (max-width: 767px) {
    .form-part-down {
      margin-top: 15px !important;
    }

    .flip-side {
      right: -175px;
    }

    #submitbtn {
      width: 268px !important;
    }

    .vehicle_image {
      margin-top: 55px !important;
    }

    .mcontroler {
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

  }

</style>

<link rel="stylesheet" href="/assets/front/css/stepper.css">
<style>
  #progressbar li {
    width: calc(100% / 4);
  }
</style>

<section id="main">
  <form class="stepperForm" id="aboForm" action="/<?php echo $method ?>/vehicle-request" method="post">
    <input type="hidden" name="km" value="<?php echo $km ?>">
    <input type="hidden" name="duration" value="<?php echo $duration ?>">
    <input type="hidden" name="price" value="<?php echo $vehicle_details[0][$select_price]; ?>">
    <input type="hidden" name="vehicle_id" value="<?php echo $vehicle_details[0]['id']; ?>">
    <div class="container mt-3">

      <div class="row">
        <div class="col mcontroler">
          <div class="bg-white text-center py-4 border-radius-1">
            <ul id="progressbar" style="margin-bottom: 0;">
              <a href="<?php echo base_url() . $request_for . '/' . $vehicle_details[0]['slug'] . '?km=' . $km . '&duration=' . $duration ?>">
                <li class="active" id="car"><strong class="d-none d-md-block">Konfiguration</strong></li>
              </a>
              <li class="active" id="personal"><strong class="d-none d-md-block">Persönliche Angaben</strong></li>
              <li id="overview"><strong class="d-none d-md-block">Übersicht</strong></li>
              <li id="confirm"><strong class="d-none d-md-block">Fertig</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

      <fieldset class="step" data-step="personal">
        <div class="container">
          <div class="row mt-3 mb-5 justify-content-between">
        <div class="col-md-7 mcontroler2 mcontroler">
          <div class="p-4 bg-white border-radius-1">
            <h1 class="h3 font-weight-bold mt-4">Persönliche Angaben</h1>
            <div class="redio-cn my-4">
              <input type="radio" value="Herr" name="gender" aria-label="Radio button for following text input"
                     id="gender" checked=""> &nbsp;<label class="mb-0" for="herr">Herr</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" value="Frau" aria-label="Radio button for following text input" id="gender"
                     name="gender"> &nbsp;<label class="mb-0" for="frau">Frau</label>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <fieldset class="my-2">
                  <legend class="small mb-0 text-muted">Vorname<span>*</span></legend>
                  <input type="text" class="form-control my-2 border-0" id="vorname" name="vorname"
                         aria-describedby="vorname">
                </fieldset>
                <p class="small text-danger val_field vorname_error">Dieses Feld muss ausgefüllt werden</p>
              </div>
              <div class="col-12 col-md-6">
                <fieldset class=" my-2 ">
                  <legend class="small mb-0 text-muted">Nachname <span>*</span></legend>
                  <input type="text" class="form-control my-2 border-0" id="nachname" name="nachname"
                         aria-describedby="nachname">
                </fieldset>
                <p class="small text-danger val_field vorname_nachname">Dieses Feld muss ausgefüllt werden</p>
              </div>
            </div>
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
              <input type="text" class="form-control my-2 border-0" id="telefon_nummer" name="telefon_nummer"
                     aria-describedby="telefon-nummer">
            </fieldset>
            <p class="small text-danger val_field vorname_telefon_nummer">Dieses Feld muss ausgefüllt werden</p>
            <fieldset class="my-2 mb-1">
              <legend class="small mb-0 text-muted">Geburtsdatum <span>*</span></legend>
              <input type="text" class="form-control my-2 border-0" id="birthday_pic" autocomplete="off" name="datepic">
            </fieldset>
            <p class="small text-danger val_field vorname_datepic">Dieses Feld muss ausgefüllt werden</p>
            <p class="small text-danger val_field vorname_datepic2">Das Mindestalter beträgt <?= $vehicle_details[0]['min_age']; ?> Jahre</p>
            <?php /* ?>
                     <div class="small"><i class="fa fa-exclamation-circle" aria-hnameden="true"></i> Für Fahrer unter 23 Jahren berechnen wir für deinen Fahrzeugtyp +42 CHF/Monat</div>
                     <?php */ ?>
            <div class="row">
              <div class="col-12 col-md-8">
                <fieldset class="my-2">
                  <legend class="small mb-0 text-muted">Strasse <span>*</span></legend>
                  <input type="text" class="form-control my-2 border-0" id="strasse" name="strasse" placeholder=""
                         aria-describedby="strasse">
                </fieldset>
              </div>
              <div class="col-12 col-md-4">
                <fieldset class="my-2">
                  <legend class="small mb-0 text-muted">Nr. <span>*</span></legend>
                  <input type="text" class="form-control my-2 border-0" id="nr" name="nr" placeholder=""
                         aria-describedby="nr">
                </fieldset>
              </div>
            </div>
            <p class="small text-danger val_field vorname_strasse">Dieses Feld muss ausgefüllt werden</p>
            <fieldset class="my-3">
              <legend class="small mb-0 text-muted">Adresszusatz</legend>
              <input type="text" class="form-control my-2 border-0" id="adresszusatz" name="adresszusatz" placeholder=""
                     aria-describedby="adresszusatz">
            </fieldset>
            <div class="row">
              <div class="col-12 col-md-4">
                <fieldset class=" my-2">
                  <legend class="small mb-0 text-muted">Postleitzahl <span>*</span></legend>
                  <input type="text" class="form-control my-2 border-0" id="postleitzahl" name="postleitzahl"
                         placeholder="" aria-describedby="postleitzahl">
                </fieldset>
              </div>
              <div class="col-12 col-md-8">
                <fieldset class="my-2">
                  <legend class="small mb-0 text-muted">Ort <span>*</span></legend>
                  <input type="text" class="form-control my-2 border-0" id="ort" name="ort" placeholder=""
                         aria-describedby="ort">
                </fieldset>
              </div>
            </div>
            <p class="small text-danger val_field vorname_ort">Dieses Feld muss ausgefüllt werden</p>

            <fieldset class="my-3">
              <legend class="small mb-0 text-muted">Wie wurdest du auf uns aufmerksam?</legend>

              <select class="form-control my-2 border-0" name="aufmerksam" id="aufmerksam">
                <option value="">bitte wählen</option>
                <option value="Google Werbung">Google Werbung</option>
                <option value="Instagram">Instagram</option>
                <option value="Facebook">Facebook</option>
                <option value="Zeitung">Zeitung</option>
                <option value="Flyer">Flyer</option>
                <option value="Bekannte / Freunde">Bekannte / Freunde</option>
                <option value="TV">TV</option>
                <option value="Radio">Radio</option>
                <option value="Andere">andere...</option>
              </select>
            </fieldset>
            <fieldset class="my-2 d-none" id="aufmerksam_detail_set">
              <legend class="small mb-0 text-muted">Andere</legend>
              <input type="text" class="form-control my-2 border-0"  name="aufmerksam_detail" id="aufmerksam_detail" placeholder="">
            </fieldset>
          </div>
          <div class="mt-3 p-4 bg-white border-radius-1">
            <h2 class="py-3 h4">Dein Wunschtermin zur Übergabe </h2>
            <fieldset class=" my-2 ">
              <legend class="small mb-0 text-muted">Gewünschter Übergabetermin<span>*</span></legend>
              <input type="text" class="form-control my-2 border-0" id="available_date" name="available_date"
                     autocomplete="off" placeholder="" aria-describedby="available_date">
            </fieldset>
            <p class="small text-danger val_field vorname_available_date">Dieses Feld muss ausgefüllt werden</p>
            <?php if (isset($vehicle_details[0]['date_from'])) { ?>
            <p class="small text-gray-dark"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>
              Dein <?php echo $vehicle_details[0]['vehicle_name'] ?> ist frühestens verfügbar am: <?php
              $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
              $german_months = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');

              $minDate = time() + 60 * 60 * 24 * $vehicle_details[0]['waiting_days'];
              $availableDate = strtotime($vehicle_details[0]['date_from']);

              if ($availableDate >= $minDate) {
                $minDate = $availableDate;
              }
              $date_to_show = date('d. F Y', $minDate);
              echo str_ireplace($english_months, $german_months, $date_to_show);
              }
              ?></p>
          </div>
          <div class="mt-3 p-4 bg-white border-radius-1">
            <h2 class="h4 py-3">Lieferung deines Autos</h2>
            <div class="redio-cn mb-4">
              <input type="radio" class="mb-3" value="delivery_not_included" id="redioIn" name="delivery"
                     aria-label="Radio button for following text input" id="delivery" checked=""> &nbsp;<label
                  class="mb-0"> Kostenlose Abholung in Säriswil </label>
              <br>
              <input type="radio" value="delivery_included" id="redioIn"
                     aria-label="Radio button for following text input" id="delivery" name="delivery"> &nbsp;<label
                  class="mb-0"> Heimlieferung (einmalig 180 CHF) </label>
            </div>
          </div>

          <?php if ($method == 'autoabo') { ?>
          <div class="mt-3 p-4 bg-white border-radius-1">
            <h2 class="h4 py-3">Gutschein-Code</h2>
            <div class="row">
              <div class="col-12 col-md-4">
                <fieldset class=" my-2">
                  <legend class="small mb-0 text-muted">Gutschein</legend>
                  <input type="text" class="form-control my-2 border-0" id="promocode" name="promocode"
                         placeholder="" aria-describedby="promocode">
                </fieldset>
                <p class="small text-success val_field" id="promocode_successful">Gutschein erfolgreich angewendet.</p>
                <p class="small text-danger val_field" id="promocode_error">Dieser Code ist nicht gültig.</p>
              </div>
              <div class="col-12 col-md-8 d-flex align-items-center">
                <input id="promocodebtn" type="button" class="btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                       style="text-align: center;" value="Prüfen">
              </div>
            </div>
          </div>
          <?php } ?>

          <div class="mt-3 p-4 bg-white border-radius-1">
            <div class="text-center">
              <input id="submitbtn" type="button" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                     style="width: 300px; text-align: center;" value="Angaben überprüfen" data-step="personal" data-next-step="overview">
            </div>
          </div>
        </div>
        <div class="col-md-5 mcontroler mt-3 mt-md-0 d-none d-md-block">
          <div class="bg-white p-4 border-radius-1">
            <h2 class="h3 font-weight-bold mt-4">Bestellübersicht</h2>
            <div class="row my-4 text-center vehicle_image">
              <div class="col pl-0"><img style="width: 280px; max-width: 100%;"
                                         src="<?php echo base_url(); ?>uploads/<?php echo $method ?>/<?php echo $image ?>"
                                         alt="Image"></div>
            </div>
            <div class="row mt-2">
              <div class="col">
                <p class="mb-0 text-capitalize">
                  <b><?php echo $vehicle_details[0]['vehicle_brand'] ?> <?php echo $vehicle_details[0]['vehicle_name'] ?> </b>
                </p>
              </div>
            </div>
            <?php if ($method == 'autoabo') { ?>
              <div class="row mt-2 mb-0">
                <div class="col-md-12">
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0 py-1">
                      Getriebe
                      <span
                          class="float-right vehcile_value"><?php echo $vehicle_details[0]['transmision_type']; ?></span>
                      <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item border-0 px-0 py-1 rounded-0">
                      Kraftstoffart
                      <span
                          class="float-right vehcile_value"><?php echo $vehicle_details[0]['vehicle_fuel_type']; ?></span>
                      <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item border-0 px-0 py-1">
                      Antrieb
                      <span
                          class="float-right vehcile_value"><?php echo $vehicle_details[0]['vehicle_drive_type']; ?></span>
                      <div class="clearfix"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <hr class="mt-2">
              <div class="row">
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0 py-0 rounded-0">
                      <b>Monatliche Rate</b>
                      <span
                          class="float-right vehcile_value"><?php echo number_format($vehicle_details[0][$select_price]) ?> CHF</span>
                      <div class="clearfix"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col">
                  <p class="mb-0 text-capitalize"><b>Laufleistung</b></p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0 py-2">
                      <?php echo $km ?> / Monat
                      <span class="float-right vehcile_value">Inklusive</span>
                      <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item border-0 px-0 py-1">
                      Dauer
                      <span class="float-right vehcile_value"><?php echo str_replace('month', '', $duration); ?> Monate</span>
                      <div class="clearfix"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <hr class="mt-2">
              <div class="row">
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0 py-2">
                      <b>Monatliche Gesamtkosten</b>
                      <span
                          class="float-right vehcile_value"><b><?php echo number_format($vehicle_details[0][$select_price]) ?> CHF</b></span>
                      <div class="clearfix"></div>
                    </li>
                  </ul>
                </div>
              </div>
            <hr class="mt-2">
            <div class="row">
              <div class="col">
                <p class="mb-0 text-capitalize"><b>Einmalige Kosten</b></p>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col">
                <ul class="list-group">
                  <li class="list-group-item border-0 px-0 py-1 anfangspauschale">
                    Anfangspauschale
                    <span class="float-right vehcile_value">349 CHF</span>
                    <div class="clearfix"></div>
                  </li>
                  <li class="list-group-item border-0 px-0 py-1 anfangspauschale_promo d-none">
                    Anfangspauschale (Gutschein)
                    <span class="float-right vehcile_value">0 CHF</span>
                    <div class="clearfix"></div>
                  </li>
                  <li class="list-group-item border-0 px-0 py-1 einmalig_delivery d-none">
                    Heimlieferung
                    <span class="float-right vehcile_value">180 CHF</span>
                    <div class="clearfix"></div>
                  </li>
                </ul>
                <p class="mt-3">inkl. MwSt.</p>
              </div>
            </div>
            <?php } ?>
            <?php if ($method == 'mietemich') { ?>
              <div class="row mt-2">
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item border-0 px-0 py-2">
                      Kilometer
                      <span class="float-right vehcile_value"> <?php echo $km ?></span>
                      <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item border-0 px-0 py-2">
                      Laufzeit
                      <span
                          class="float-right vehcile_value"> <?php echo str_replace('h', ' Stunden', $duration) ?></span>
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
                      <span
                          class="float-right vehcile_value"><b><?php echo number_format($vehicle_details[0][$select_price]) ?> CHF</b></span>
                      <div class="clearfix"></div>
                    </li>
                  </ul>
                  <p class="mt-3">Inkl. MwSt.</p>
                </div>
              </div>
              <div class="row ">
                <div class="col">
                  <p style="display:  block">Enthalten in deiner Miete:</p>
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
          <div class="text-center mt-3">
            <input id="submitbtn" type="button" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                   style="width: 300px; text-align: center;" value="Angaben überprüfen" data-step="personal" data-next-step="overview">
          </div>
        </div>
      </div>
        </div>
      </fieldset>

      <fieldset class="step" data-step="overview">
        <div class="container">
          <div class="row mt-3 mb-5 justify-content-between">
          <div class="col-md-7 mcontroler2 mcontroler mt-3 mt-md-0 order-1 order-md-0">
            <div class="p-4 bg-white border-radius-1">
              <h3 class="font-weight-bold mt-4">Deine Angaben</h3>
              <div class="mt-4">
                <strong>Adresse</strong><br />
                <div class="result_firma_container">
                  <span id="result_firma"></span>
                </div>
                <span id="result_gender"></span> <span id="result_vorname"></span> <span id="result_nachname"></span><br />
                <div class="result_adresszusatz_container">
                  <span id="result_adresszusatz"></span>
                </div>
                <span id="result_strasse"></span> <span id="result_nr"></span><br />
                <span id="result_postleitzahl"></span> <span id="result_ort"></span><br /><br />
                <strong>E-Mail: </strong><span id="result_email"></span><br />
                <strong>Telefon: </strong><span id="result_telefon_nummer"></span><br />
                <strong>Geburtsdatum: </strong><span id="result_datepic"></span><br /><br />

                <strong>Abholdatum: </strong><span id="result_available_date"></span><br />
                <strong>Abholung: </strong><span id="result_redioIn"></span><br /><br />

              </div>

              <input type="button" name="previous" data-step="overview" data-next-step="personal" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                     value="Bearbeiten"/>
            </div>

            <div class="p-4 bg-white mt-3 text-center border-radius-1">
              <label style="text-indent: -34px; padding-left: 34px;" for="terms_condtions p-4"
                     class="checkbox-inline radio_Label"><input style="width: 28px; height: 28px;" type="checkbox"
                                                                id="terms_condtions" name="terms_condtions" value="yes">
                Hiermit akzeptiere ich die <a target="_blank" class="violet-blue-accent-text"
                                              href="<?php echo base_url() ?>agb/agb-automobilewohlensee.html">AGB</a> und
                stimme diese zu. Weiterhin habe ich zur Kenntnis genommen, dass eine Bestellung aufgegeben wird, sobald
                ich auf "<?= $method == 'autoabo' ? 'Jetzt abonnieren' : 'Jetzt mieten' ?>" klicke und bestätige, dass ich mit dem von mir gewählten / konfigurierten
                Fahrzeug zufrieden bin und meine persönliche Daten korrekt ausgefüllt wurden.
              </label>
              <p class="small my-0 py-0 text-danger val_field terms_error">Die allgemeinen Geschäftsbedingungen müssen akzeptiert werden</p>

              <input
                  type="button" name="next" class="next btn btn-primary mt-3 px-4 py-2 rounded-pill violet-blue-bg"
                  value="<?= $method == 'autoabo' ? 'Jetzt abonnieren' : 'Jetzt mieten' ?>" data-step="overview" data-next-step="confirm" />

              <div id="form_submit_error" class="alert alert-danger mt-3" style="display:none;">Unbekannter Fehler - Das Formular konnte nicht abgesendet werden.</div>
            </div>
          </div>

          <div class="col-md-5 mcontroler order-0 order-md-1">
            <div class="bg-white p-4 border-radius-1">
              <h3 class="font-weight-bold mt-4">Fahrzeug</h3>
              <div class="row my-4 text-center vehicle_image">
                <div class="col pl-0"><img style="width: 280px; max-width: 100%;"
                                           src="<?php echo base_url(); ?>uploads/<?php echo $method ?>/<?php echo $image ?>"
                                           alt="Image"></div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <p class="mb-0 text-capitalize">
                    <b><?php echo $vehicle_details[0]['vehicle_brand'] ?> <?php echo $vehicle_details[0]['vehicle_name'] ?> </b>
                  </p>
                </div>
              </div>
              <?php if ($method == 'autoabo') { ?>
                <div class="row mt-2 mb-0">
                  <div class="col-md-12">
                    <ul class="list-group">
                      <li class="list-group-item border-0 px-0 py-1">
                        Getriebe
                        <span
                            class="float-right vehcile_value"><?php echo $vehicle_details[0]['transmision_type']; ?></span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-1 rounded-0">
                        Kraftstoffart
                        <span
                            class="float-right vehcile_value"><?php echo $vehicle_details[0]['vehicle_fuel_type']; ?></span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-1">
                        Antrieb
                        <span
                            class="float-right vehcile_value"><?php echo $vehicle_details[0]['vehicle_drive_type']; ?></span>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr class="mt-2">
                <div class="row">
                  <div class="col">
                    <ul class="list-group">
                      <li class="list-group-item border-0 px-0 py-0 rounded-0">
                        <b>Monatliche Rate</b>
                        <span
                            class="float-right vehcile_value"><?php echo number_format($vehicle_details[0][$select_price]) ?> CHF</span>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col">
                    <p class="mb-0 text-capitalize"><b>Laufleistung</b></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <ul class="list-group">
                      <li class="list-group-item border-0 px-0 py-2">
                        <?php echo $km ?> / Monat
                        <span class="float-right vehcile_value">Inklusive</span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-1">
                        Dauer
                        <span class="float-right vehcile_value"><?php echo str_replace('month', '', $duration); ?> Monate</span>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr class="mt-2">
                <div class="row">
                  <div class="col">
                    <ul class="list-group">
                      <li class="list-group-item border-0 px-0 py-2">
                        <b>Monatliche Kosten</b>
                        <span
                            class="float-right vehcile_value"><b><?php echo number_format($vehicle_details[0][$select_price]) ?> CHF</b></span>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <hr class="mt-2">
                <div class="row">
                  <div class="col">
                    <p class="mb-0 text-capitalize"><b>Einmalige Kosten</b></p>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <ul class="list-group">
                      <li class="list-group-item border-0 px-0 py-1 anfangspauschale">
                        Anfangspauschale
                        <span class="float-right vehcile_value">349 CHF</span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-1 anfangspauschale_promo d-none">
                        Anfangspauschale (Gutschein)
                        <span class="float-right vehcile_value">0 CHF</span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-1 einmalig_delivery d-none">
                        Heimlieferung
                        <span class="float-right vehcile_value">180 CHF</span>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                    <p class="mt-3">Inkl. MwSt.</p>
                  </div>
                </div>
              <?php } ?>
              <?php if ($method == 'mietemich') { ?>
                <div class="row mt-2">
                  <div class="col">
                    <ul class="list-group">
                      <li class="list-group-item border-0 px-0 py-1">
                        Kilometer
                        <span class="float-right vehcile_value"> <?php echo $km ?></span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-1">
                        Laufzeit
                        <span
                            class="float-right vehcile_value"> <?php echo str_replace('h', ' Stunden', $duration) ?></span>
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
                        <b>Fahrzeugkosten</b>
                        <span
                            class="float-right vehcile_value"><b><?php echo number_format($vehicle_details[0][$select_price]) ?> CHF</b></span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2 einmalig_delivery d-none">
                        Heimlieferung
                        <span
                            class="float-right vehcile_value">180 CHF</span>
                        <div class="clearfix"></div>
                      </li>
                      <li class="list-group-item border-0 px-0 py-2">
                        <b>Gesamtkosten</b>
                        <span
                            class="float-right vehcile_value"><b><?php echo number_format($vehicle_details[0][$select_price]+180) ?> CHF</b></span>
                        <div class="clearfix"></div>
                      </li>
                    </ul>
                    <p class="mt-3">Inkl. MwSt.</p>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>


        </div>
        </div>
      </fieldset>

  </form>
</section>
<script>
  const minAge = <?= $method == 'autoabo' ? $vehicle_details[0]['min_age'] : 18; ?>;

  $(document).ready(function () {

    loadUserData();

    const days = <?= $method == 'autoabo' ? $vehicle_details[0]['waiting_days'] : '1'; ?>;
    let minDate = new Date(new Date().getTime() + 1000 * 60 * 60 * 24 * days);
    <?php if(isset($vehicle_details[0]['date_from']) && $method == 'autoabo'  ){ ?>
    const dateFrom = new Date('<?php echo date('Y.m.d', strtotime($vehicle_details[0]['date_from'])) ?>');
    if (dateFrom.getTime() >= minDate.getTime()) {
      minDate = dateFrom;
    }
    <?php } ?>

    $("#available_date").datepicker({
      showAnim: 'drop',
      dateFormat: 'dd.mm.yy',
      prevText: '&#x3c;zurück', prevStatus: '',
      prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
      nextText: 'Vor&#x3e;', nextStatus: '',
      nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
      currentText: 'heute', currentStatus: '',
      todayText: 'heute', todayStatus: '',
      clearText: '-', clearStatus: '',
      closeText: 'schließen', closeStatus: '',
      monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
      monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
        'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
      dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
      dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      minDate: minDate,
      changeMonth: true,
      changeYear: true,
      firstDay: 1,
      beforeShowDay: function(date) {
        var day = date.getDay();
        return [(day !== 0), ''];
      }
    });

    $("#birthday_pic").datepicker({
      showAnim: 'drop',
      numberOfMonth: 1,
      dateFormat: 'dd.mm.yy',
      prevText: '&#x3c;zurück', prevStatus: '',
      prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
      nextText: 'Vor&#x3e;', nextStatus: '',
      nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
      currentText: 'heute', currentStatus: '',
      todayText: 'heute', todayStatus: '',
      clearText: '-', clearStatus: '',
      closeText: 'schließen', closeStatus: '',
      monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
      monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
        'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
      dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
      dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      firstDay: 1,
      dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      maxDate: '-' + minAge + 'Y',
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:-17"
    });

    $("#birthday_pic").on('change', function() {
      $(".vorname_datepic").fadeOut();
      $(".vorname_datepic2").fadeOut();
    });
  });

  function validate(step) {
    var error_flag = false;
    if ($('#vorname').val() == "") {
      $('.vorname_error').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_error').fadeOut();
    }
    if ($('#email').val() == "") {
      $('.vorname_email').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_email').fadeOut();
    }
    if ($('#birthday_pic').val() == "") {
      $('.vorname_datepic').fadeIn();
      error_flag = true;
    } else {
      const date = $('#birthday_pic').val()
      const parts = date.split(".");
      const birthday = new Date(parseInt(parts[2]),
          parseInt(parts[1]) - 1,
          parseInt(parts[0]));

      if (!(birthday instanceof Date && !isNaN(birthday))) {
        error_flag = true;
        $('.vorname_datepic').fadeIn();
      } else {
        const minDate = new Date();
        minDate.setFullYear(minDate.getFullYear() - minAge);

        $('.vorname_datepic').fadeOut();
        if (minDate.getTime() < birthday.getTime()) {
          error_flag = true;
          $('.vorname_datepic2').fadeIn();
        } else {
          error_flag = error_flag || false;
          $('.vorname_datepic2').fadeOut();
        }
      }
    }
    if ($('#nachname').val() == "") {
      $('.vorname_nachname').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_nachname').fadeOut();
    }
    if ($('#telefon_nummer').val() == "") {
      $('.vorname_telefon_nummer').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_telefon_nummer').fadeOut();
    }
    if ($('#strasse').val() == "" || $('#nr').val() == "") {
      $('.vorname_strasse').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_strasse').fadeOut();
    }
    /*if ($('#adresszusatz').val() == "") {
      $('.vorname_adresszusatz').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_adresszusatz').fadeOut();
    }*/
    if ($('#postleitzahl').val() == "" || $('#ort').val() == "") {
      $('.vorname_ort').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_ort').fadeOut();
    }
    if ($('#available_date').val() == "") {
      $('.vorname_available_date').fadeIn();
      error_flag = true;
    } else {
      error_flag = error_flag || false;
      $('.vorname_available_date').fadeOut();
    }
    console.log('error_flag', error_flag);
    if (error_flag) {
      $('.terms_error').fadeIn();
      $('html,body').animate({
        scrollTop: $("#vorname").offset().top - 40
      }, 'slow');
      return false;
    }
    console.log('step', step);
    if (step === 'overview' && !$('#terms_condtions').prop('checked')) {
      $('.terms_error').fadeIn();
      $('html, body').animate({
        scrollTop: $("#terms_condtions").offset().top
      });
      return false;
    } else {
      $('.terms_error').fadeOut();
    }

    console.log('error flag', error_flag);
    return true;
  }

  $(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function () {

      const btn = $(this);
      const nextStep = btn.data('next-step');
      const step = btn.data('step');

      current_fs = $('fieldset.step[data-step="' + step + '"]');

      $("#form_submit_error").css('display', 'none');

      if (!validate(step)) {
        return;
      }

      next_fs = $('fieldset.step[data-step="' + nextStep + '"]');

      //Add Class Active
      function showNextStep() {
        $('#progressbar li#' + nextStep).addClass("active");

        //show the next fieldset
        next_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
          step: function (now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
              'display': 'none',
              'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
          },
          duration: 600,
          complete: function() {
            window.scrollTo({top: $('#progressbar').offset().top - 40, behavior: 'smooth'});
          }
        });
      }

      function unsuccessfulCallback() {
        $("#form_submit_error").css('display', 'block');
        btn.removeAttr('disabled');
      }

      function redirectToConfirmation() {
        <?php if ($method == 'mietemich') { ?>
        window.location.href = '/bestaetigung-tagesmiete';
        <?php } else { ?>
        window.location.href = '/auto-abo/bestaetigung';
        <?php } ?>
      }

      if (nextStep === 'confirm') {
        btn.attr('disabled', 'true');
        submitRequest(redirectToConfirmation, unsuccessfulCallback);
      } else {
        if (nextStep === 'overview') {
          createOverview();
          saveUserData();
        }
        showNextStep();
      }
    });

    $(".previous").click(function () {

      const current_step = $(this).data('step');
      const previous_step = $(this).data('next-step');

      current_fs = $('fieldset.step[data-step="' + current_step + '"');
      previous_fs = $('fieldset.step[data-step="' + previous_step + '"');

//Remove class active
      $('#progressbar li#' + current_step).removeClass("active");

//show the previous fieldset
      previous_fs.show();

      window.scrollTo({top: $('#progressbar').offset().top - 40, behavior: 'smooth'});

//hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function (now) {
// for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            'display': 'none',
            'position': 'relative'
          });
          previous_fs.css({'opacity': opacity});
        },
        duration: 600
      });
    });
  });

  function loadUserData() {
    const fields = [
      'gender',
      'firma',
      'vorname',
      'nachname',
      'strasse',
      'nr',
      'adresszusatz',
      'postleitzahl',
      'ort',
      'email',
      'telefon_nummer',
      'datepic',
      'delivery',
    ];

    const userData = JSON.parse('<?= json_encode(isset($userdata) ? $userdata : null); ?>');
    if (!userData) {
      return;
    }
    for (let fff in fields) {
      const field = fields[fff];
      if (!field) {
        continue;
      }

      const inputField = $('input[name="' + field + '"]');
      if (inputField) {
        inputField.val([userData[field]]);
      }
    }
  }

  function createOverview() {
    const fields = [
      'gender',
      'firma',
      'vorname',
      'nachname',
      'strasse',
      'nr',
      'adresszusatz',
      'postleitzahl',
      'ort',
      'email',
      'telefon_nummer',
      'datepic',
      'available_date',
      'redioIn',
    ];

    for (let fff in fields) {
      let val;
      const field = fields[fff];

      if (field === 'gender') {
        val = $('input[name="gender"]:checked').val();
      } else
      if (field === 'redioIn') {
        val = $('input[name="delivery"]:checked').val();
      } else {
        val = $('#' + field).val();
      }

      const f = $('#result_' + field);
      const container = $('#result_' + field + '_container');
      if (container) {
        if (!val) {
          container.hide();
        } else {
          container.hide();
        }
      }

      if (field === 'redioIn') {
        if (val === 'delivery_not_included') {
          f.html('Kostenlose Abholung in Säriswil');
          $(".einmalig_delivery").hide();
        } else {
          f.html('Heimlieferung (einmalig 180 CHF)');
          $(".einmalig_delivery").show();
        }
      } else {
        f.html(val);
      }
    }
  }

  function saveUserData() {
    const form = $("#aboForm");
    const url = form.attr('action');
    const formData = new FormData(form[0]);

    $.ajax({
      type: "POST",
      url: url + '/save',
      data: formData,
      contentType: false,
      processData: false,
    });
  }

  function submitRequest(successCallback, unsuccessfulCallback) {
    const form = $("#aboForm");
    const url = form.attr('action');
    const formData = new FormData(form[0]);

    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        successCallback();
      },
      error: function(data) {
        unsuccessfulCallback();
      }
    });

  }

  $(document).ready(function() {

      $("#promocodebtn").click(function () {
          const btn = $(this);
          btn.attr('disabled', 'true');
          $("#promocode_successful").css('display', 'none');
          $("#promocode_error").css('display', 'none');

          const code = $("#promocode").val();
          const formData = new FormData();
          formData.set('promocode', code);

          $.ajax({
              type: "POST",
              url: '/abonnieren/promocode',
              data: formData,
              contentType: false,
              processData: false,
              success: function (data) {
                  btn.removeAttr('disabled');
                  $("#promocode_successful").css('display', 'block');
                  $(".anfangspauschale").addClass('d-none');
                  $(".anfangspauschale_promo").removeClass('d-none');
                  checkEinmaligeKosten();
              },
              error: function (data) {
                  btn.removeAttr('disabled');
                  $("#promocode_error").css('display', 'block');
                  $(".anfangspauschale").removeClass('d-none');
                  $(".anfangspauschale_promo").addClass('d-none');
                  checkEinmaligeKosten();
              }
          });
      });

      $('input[type=radio][name=delivery]').change(function () {
          if (this.value === 'delivery_included') {
              $(".einmalig_delivery").removeClass('d-none');
          } else if (this.value === 'delivery_not_included') {
              $(".einmalig_delivery").addClass('d-none');
          }
      });

      $('#aufmerksam').change(function () {
          if (this.value === 'Andere') {
              $("#aufmerksam_detail_set").removeClass('d-none');
          } else {
              $("#aufmerksam_detail_set").addClass('d-none');
          }
      });

  });

</script>

<script>
  document.title = "<?= $vehicle_details[0]['vehicle_brand'] . ' ' . $vehicle_details[0]['vehicle_name'] . TITLE_SUFFIX_SHORT . meta_data('abonnieren')['title']; ?>";
</script>
