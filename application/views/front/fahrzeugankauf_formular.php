<style>
  input[type="file"] {
    display: none;
  }

  .custom-file-upload {
    border: 1px solid #ccc !important;
    display: inline-block;
    padding: 20px;
    width: 100%;
    cursor: pointer;
    text-align: center;
  }

  .icon {
    width: 6%;
    margin-bottom: 17px;
  }

  .primarycolor {
    color: #6667ac;
  }

</style>

<link rel="stylesheet" href="/assets/front/css/stepper.css">

<section id="main">
  <!-- <div class="banner"
       style="background-image: url('/assets/front/images/headers/fahrzeugverkauf.jpg'); background-position: center;">
    <div class="container h-100">
      <div class="d-flex h-100 align-items-end pb-5">
        <div class="banner-content">
          <h1>Fahrzeugankauf Formular</h1>
        </div>
      </div>
    </div>
  </div> -->

  <div class="bg-grey purchase-form-section">
    <div class="container">
      <div class="text-center">
        <div class="card px-0 pt-5 pb-5">
        <div class="text-center">
                <img class="icon" src="/assets/front/images/autoankauf/formular/auto-ankauf-offerte.png" title="Auto Ankauf Offerte" alt="Auto Ankauf Offerte">
            </div>
          <h2 class="primarycolor">Offerte für Ihr Auto erhalten</h2>
          <p>Bitte füllen Sie alle benötigten Felder aus.</p>
          <div class="row">
            <div class="col-md-12 mx-0">
              <form class="stepperForm" id="offerForm" method="post" enctype="multipart/form-data"
                    action="/vehicle_request/purchaserequests">
                <!-- progressbar -->
                <ul id="progressbar">
                  <li class="active" id="car"><strong class="d-none d-md-block">Fahrzeugdaten</strong></li>
                  <li id="images"><strong class="d-none d-md-block">Bilder</strong></li>
                  <li id="personal"><strong class="d-none d-md-block">Persönliche Angaben</strong></li>
                  <li id="overview"><strong class="d-none d-md-block">Einsenden</strong></li>
                  <!-- <li id="confirm"><strong class="d-none d-md-block">Einsenden</strong></li> -->
                </ul> <!-- fieldsets -->
                <fieldset class="step">
                  <div class="form-card">
                    <h3 class="primarycolor">Angaben zum Auto</h3>

                    <div class="row font-weight-light mt-4">

                      <div class="col-md-6 form-group">
                        <label for="input_automarke">Automarke <span class="mandatory primarycolor">*</span></label>
                        <div class="select-box">
                          <select data-required="true" name="automarke" id="input_automarke" class="form-control">
                            <option value="" data-index="0">Bitte wählen</option>
                            <option value="Alfa Romeo" data-index="1">Alfa Romeo</option>
                            <option value="Aston Martin" data-index="2">Aston Martin</option>
                            <option value="Audi" data-index="3">Audi</option>
                            <option value="Bentley" data-index="4">Bentley</option>
                            <option value="BMW" data-index="5">BMW</option>
                            <option value="Cadillac" data-index="6">Cadillac</option>
                            <option value="Chevrolet" data-index="7">Chevrolet</option>
                            <option value="Chrysler" data-index="8">Chrysler</option>
                            <option value="Citroen" data-index="9">Citroen</option>
                            <option value="Dacia" data-index="10">Dacia</option>
                            <option value="Daewoo" data-index="11">Daewoo</option>
                            <option value="Daihatsu" data-index="12">Daihatsu</option>
                            <option value="Daimler" data-index="13">Daimler</option>
                            <option value="Dodge" data-index="14">Dodge</option>
                            <option value="DS Automobiles" data-index="15">DS Automobiles</option>
                            <option value="Ferrari" data-index="16">Ferrari</option>
                            <option value="Fiat" data-index="17">Fiat</option>
                            <option value="Ford" data-index="18">Ford</option>
                            <option value="Honda" data-index="19">Honda</option>
                            <option value="Hummer" data-index="20">Hummer</option>
                            <option value="Hyundai" data-index="21">Hyundai</option>
                            <option value="Infiniti" data-index="22">Infiniti</option>
                            <option value="Jaguar" data-index="23">Jaguar</option>
                            <option value="Jeep" data-index="24">Jeep</option>
                            <option value="Kia" data-index="25">Kia</option>
                            <option value="Lamborghini" data-index="26">Lamborghini</option>
                            <option value="Lancia" data-index="27">Lancia</option>
                            <option value="Land Rover" data-index="28">Land Rover</option>
                            <option value="Lexus" data-index="29">Lexus</option>
                            <option value="Lincoln" data-index="30">Lincoln</option>
                            <option value="Lotus" data-index="31">Lotus</option>
                            <option value="Maserati" data-index="32">Maserati</option>
                            <option value="Mazda" data-index="33">Mazda</option>
                            <option value="Mercedes-Benz" data-index="34">Mercedes-Benz</option>
                            <option value="MG" data-index="35">MG</option>
                            <option value="Mini" data-index="36">Mini</option>
                            <option value="Mitsubishi" data-index="37">Mitsubishi</option>
                            <option value="Nissan" data-index="38">Nissan</option>
                            <option value="Opel" data-index="39">Opel</option>
                            <option value="Peugeot" data-index="40">Peugeot</option>
                            <option value="Pontiac" data-index="41">Pontiac</option>
                            <option value="Porsche" data-index="42">Porsche</option>
                            <option value="Renault" data-index="43">Renault</option>
                            <option value="Rolls-Royce" data-index="44">Rolls-Royce</option>
                            <option value="Rover" data-index="45">Rover</option>
                            <option value="Saab" data-index="46">Saab</option>
                            <option value="Seat" data-index="47">Seat</option>
                            <option value="Skoda" data-index="48">Skoda</option>
                            <option value="Smart" data-index="49">Smart</option>
                            <option value="Subaru" data-index="50">Subaru</option>
                            <option value="Suzuki" data-index="51">Suzuki</option>
                            <option value="Tesla" data-index="52">Tesla</option>
                            <option value="Toyota" data-index="53">Toyota</option>
                            <option value="Triumph" data-index="54">Triumph</option>
                            <option value="Volvo" data-index="55">Volvo</option>
                            <option value="VW" data-index="56">VW</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="input_modell">Modell <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="modell" id="input_modell">
                      </div>

                      <div class="col-md-6 form-group">
                        <label for="input_aufbau">Aufbau <span class="mandatory primarycolor">*</span></label></label>
                        <div class="select-box">
                          <select data-required="true" name="aufbau" class="form-control" id="input_aufbau">
                            <option value="" data-index="0">Bitte wählen</option>
                            <option value="Bus" data-index="1">Bus</option>
                            <option value="Cabriolet" data-index="2">Cabriolet</option>
                            <option value="Coupé" data-index="3">Coupé</option>
                            <option value="Kleinwagen" data-index="4">Kleinwagen</option>
                            <option value="Kombi" data-index="5">Kombi</option>
                            <option value="Limousine" data-index="6">Limousine</option>
                            <option value="Pick-Up" data-index="7">Pick-Up</option>
                            <option value="SUV / Geländewagen" data-index="8">SUV / Geländewagen</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="input_farbe">Farbe <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="farbe" id="input_farbe">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="input_inverkehrssetzung">Inverkehrssetzung <span class="mandatory">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="inverkehrssetzung" id="input_inverkehrssetzung">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="input_kilometerstand">Kilometerstand <span class="mandatory primarycolor">*</span></label>
                        <div class="amount-field">
                            <input data-required="true" type="text" class="form-control" name="kilometerstand" id="input_kilometerstand">
                            <span>KM</span>
                        </div>
                        
                      </div>

                      <div class="form-group col-md-6">
                        <label for="input_treibstoff">Treibstoff <span class="mandatory primarycolor">*</span></label>
                        <div class="select-box">
                          <select name="treibstoff" data-required="true" class="form-control" id="input_treibstoff">
                            <option value="" data-index="0">Bitte wählen</option>
                            <option value="Diesel" data-index="1">Diesel</option>
                            <option value="Benzin" data-index="2">Benzin</option>
                            <option value="Elektro" data-index="3">Elektro</option>
                            <option value="Gas" data-index="4">Gas</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="input_getriebeart">Getriebeart <span class="mandatory primarycolor">*</span></label>
                        <div class="select-box">
                          <select name="getriebeart" data-required="true" class="form-control" id="input_getriebeart">
                            <option value="" data-index="0">Bitte wählen</option>
                            <option value="Automat" data-index="1">Automat</option>
                            <option value="Schaltgetriebe" data-index="2">Schaltgetriebe</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="input_typenschein">Typenschein</label>
                        <input type="text" class="form-control" name="typenschein" id="input_typenschein">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="input_preisvorstellung">Preisvorstellung</label>
                        <div class="amount-field">
                            <input type="text" class="form-control" name="preisvorstellung" id="input_preisvorstellung">
                            <span>CHF</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <input type="button" name="next" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                         value="Weiter" data-step="fahrzeugdaten" />
                </fieldset>

                <fieldset class="step">
                  <div class="form-card">
                    <h3 class="primarycolor">Fotos Ihres Autos</h3>

                    <div class="row font-weight-light mt-4">

                      <div class="form-group col-md-6">
                        <label>Fahrzeug Bild 1 <span class="mandatory primarycolor">*</span></label>
                        <div class="custom-file-upload">
                          <div>
                            <span class="file-hint"><i class="fa fa-upload"></i> Hier klicken und Bild auswählen</span>
                            <button type="button" class="file-upload-preview-delete"><i class="fa fa-times"></i></button>
                          </div>
                          <div class="file-upload-preview-container">
                            <img class="file-upload-preview" alt="" />
                          </div>
                        </div>
                        <input class="file-upload" name="image[]" type="file" data-image-no="1" id="input_image_1" />
                      </div>

                      <div class="form-group col-md-6">
                        <label>Fahrzeug Bild 2</label>
                        <div class="custom-file-upload">
                          <div>
                            <span class="file-hint"><i class="fa fa-upload"></i> Hier klicken und Bild auswählen</span>
                            <button type="button" class="file-upload-preview-delete"><i class="fa fa-times"></i></button>
                          </div>
                          <div class="file-upload-preview-container">
                            <img class="file-upload-preview" alt="" />
                          </div>
                        </div>
                        <input class="file-upload" name="image[]" type="file" data-image-no="2" />
                      </div>

                      <div class="form-group col-md-6">
                        <label>Fahrzeug Bild 3</label>
                        <div class="custom-file-upload">
                          <div>
                            <span class="file-hint"><i class="fa fa-upload"></i> Hier klicken und Bild auswählen</span>
                            <button type="button" class="file-upload-preview-delete"><i class="fa fa-times"></i></button>
                          </div>
                          <div class="file-upload-preview-container">
                            <img class="file-upload-preview" alt="" />
                          </div>
                        </div>
                        <input class="file-upload" name="image[]" type="file" data-image-no="3" />
                      </div>

                      <div class="form-group col-md-6">
                        <label>Fahrzeug Bild 4</label>
                        <div class="custom-file-upload">
                          <div>
                            <span class="file-hint"><i class="fa fa-upload"></i> Hier klicken und Bild auswählen</span>
                            <button type="button" class="file-upload-preview-delete"><i class="fa fa-times"></i></button>
                          </div>
                          <div class="file-upload-preview-container">
                            <img class="file-upload-preview" alt="" />
                          </div>
                        </div>
                        <input class="file-upload" name="image[]" type="file" data-image-no="4" />
                      </div>

                      <div class="form-group col-md-12">
                        <p>Bitte zählen Sie vorhandene Mängel auf und geben Sie zusätzliche Sonderausstattungen an.</p>

                        <textarea class="form-control" name="fahrzeugzustand" rows="4"></textarea>
                      </div>

                    </div>

                  </div>
                  <input type="button" name="previous" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                         value="Zurück"/>
                  <input
                      type="button" name="next" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                      value="Weiter" data-step="images" />
                </fieldset>
                <fieldset class="step">
                  <div class="form-card">
                    <h3 class="primarycolor">Ihre Kontaktdaten</h3>

                    <div class="row font-weight-light mt-4">

                      <div class="form-group col-md-6">
                        <label for="input_name">Name <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="name" id="input_name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="input_vorname">Vorname <span class="mandatory  primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="vorname" id="input_vorname">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="input_adresse">Adresse <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="Adresse" id="input_adresse">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="input_plz_ort">PLZ / Ort <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="plz_ort" id="input_plz_ort">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="input_email">E-Mail <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="email" class="form-control" name="email" id="input_email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="input_telefon">Telefon <span class="mandatory primarycolor">*</span></label>
                        <input data-required="true" type="text" class="form-control" name="telefon" id="input_telefon">
                      </div>
                    </div>

                  </div>
                  <input type="button" name="previous" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                         value="Zurück"/>
                  <input
                      type="button" name="next" id="create_overview" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                      value="Weiter" data-step="personal" />
                </fieldset>
                <fieldset class="step">
                  <div class="form-card">
                    <h3 class="primarycolor">Zusammenfassung</h3>

                    <h4 class="mt-4 form-header">Fahrzeugdaten</h4>

                    <div class="row font-weight-light mt-4 preview-field">

                      <div class="col-12 col-md-3 font-weight-bold">
                        Automarke
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_automarke">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Modell
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_modell">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Aufbau
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_aufbau">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Farbe
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_farbe">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Inverkehrssetzung
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_inverkehrssetzung">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Kilometerstand
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_kilometerstand">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Treibstoff
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_treibstoff">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Getriebeart
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_getriebeart">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Typenschein
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_typenschein">
                      </div>
                      
                      <div class="col-12 col-md-3 font-weight-bold">
                        Preisvorstellung
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_preisvorstellung">
                      </div>
                    </div>

                    <h4 class="mt-4 form-header">Bilder</h4>
                    <div class="font-weight-light mt-4 preview-field">
                      <img class="result-image" id="result_image_1" />
                      <img class="result-image" id="result_image_2" />
                      <img class="result-image" id="result_image_3" />
                      <img class="result-image" id="result_image_4" />
                    </div>

                    <h4 class="mt-4 form-header">Persönliche Angaben</h4>

                    <div class="row font-weight-light mt-4 preview-field">

                      <div class="col-12 col-md-3 font-weight-bold">
                        Name
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_name">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Vorname
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_vorname">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Adresse
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_adresse">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        PLZ / Ort
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_plz_ort">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        E-Mail
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_email">
                      </div>

                      <div class="col-12 col-md-3 font-weight-bold">
                        Telefon
                      </div>
                      <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_telefon">
                      </div>
                    </div>


                  </div>
                  <input type="button" name="previous" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                         value="Zurück"/>
                  <input
                      type="button" name="make_request" data-step="request"
                      class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg" value="Abschicken"/>
                </fieldset>
                <fieldset class="step">
                    <div class="confirm-modal">
                        <div class="confirm-modal-container">
                            <div class="close-modal">
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="form-card">
                                <div class="message-icon">
                                    <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path class="st0" d="M512,481.4c0,7.3-5.8,13.1-13.1,13.1l-485.4,0.7c0,0,0,0,0,0c-3.5,0-6.8-1.4-9.3-3.8c-2.5-2.5-3.8-5.8-3.9-9.3
                                        L0,197.8c0-0.1,0-0.1,0-0.2c0.1-4.1,2-8.1,5.7-10.6l73.7-50.9v-54c0-7.2,5.9-13.1,13.1-13.1h83.9l72.2-49.9c4.5-3.1,10.5-3.1,14.9,0
                                        L335.3,69h84.3c7.3,0,13.1,5.9,13.1,13.1v54.6l73.3,51c2.6,1.8,4.4,4.4,5.2,7.3c0.3,0.7,0.5,1.8,0.5,2.6L512,481.4z M485.7,455.3
                                        l-0.3-233.1l-158.3,110L485.7,455.3z M432.7,226.9l41.9-29.1l-41.9-29.1V226.9z M51.9,468.9l407.9-0.6L256.2,310.4L51.9,468.9z
                                        M406.5,245.2V95.3H105.5v150.5l101.1,69.9l41.5-32.2c4.8-3.7,11.3-3.6,15.9-0.1c0.1,0.1,0.1,0.1,0.2,0.1l41.2,32L406.5,245.2z
                                        M222.5,69h66.8L256,45.9L222.5,69z M26.6,455.3l158.3-122.8L26.3,222.9L26.6,455.3z M79.3,227.6V168l-43.2,29.8L79.3,227.6z" fill="#1E0478" />
                                        <polygon class="st1" points="485.4,222.2 485.7,455.3 327.1,332.3 " fill="#9B8CCC" />
                                        <polygon class="st2" points="474.6,197.8 432.7,226.9 432.7,168.7 " fill="#94E7EF" />
                                        <polygon class="st1" points="459.8,468.4 51.9,468.9 256.2,310.4 " fill="#9B8CCC" />
                                        <path class="st3" d="M406.5,95.3v149.9l-101,70.2l-41.2-32c-0.1-0.1-0.1-0.1-0.2-0.1c-4.6-3.4-11.1-3.6-15.9,0.1l-41.5,32.2
                                        l-101.1-69.9V95.3H406.5z M357.9,160.8c0-7.2-5.9-13.1-13.1-13.1H167.2c-7.2,0-13.1,5.9-13.1,13.1s5.9,13.1,13.1,13.1h177.5
                                        C352,173.9,357.9,168.1,357.9,160.8z M357.9,229c0-7.2-5.9-13.1-13.1-13.1H167.2c-7.2,0-13.1,5.9-13.1,13.1s5.9,13.1,13.1,13.1
                                        h177.5C352,242.1,357.9,236.2,357.9,229z" fill="#FFFFFF" />
                                        <g>
                                        <path class="st0" d="M344.8,147.7c7.2,0,13.1,5.9,13.1,13.1s-5.9,13.1-13.1,13.1H167.2c-7.2,0-13.1-5.9-13.1-13.1
                                        s5.9-13.1,13.1-13.1H344.8z" fill="#1E0478" />
                                        <path class="st0" d="M344.8,215.9c7.2,0,13.1,5.9,13.1,13.1s-5.9,13.1-13.1,13.1H167.2c-7.2,0-13.1-5.9-13.1-13.1
                                        s5.9-13.1,13.1-13.1H344.8z" fill="#1E0478" />
                                        </g>
                                        <polygon class="st2" points="289.3,69 222.5,69 256,45.9 " fill="#94E7EF" />
                                        <polygon class="st1" points="184.9,332.5 26.6,455.3 26.3,222.9 " fill="#9B8CCC" />
                                        <polygon class="st2" points="79.3,168 79.3,227.6 36.2,197.8 " fill="#94E7EF" />
                                    </svg> -->
                                    <img src="/assets/front/images/autoankauf-formular-gesendet.png" alt="">
                                </div>
                                <h2 class="fs-title text-center">Auto erfolgreich übermittelt</h2>
                                <div class="message-content">
                                    <p>Besten Dank für Ihr Vertrauen und dass Sie unseren Online-Ankaufsdienst nutzen. Sie erhalten in den nächsten 24 Stunden eine Antwort von uns.</p><p>Gerne stehen wir Ihnen zwischenzeitlich auch telefonisch unter <b>031 503 10 12</b> sowie per E-mail an <b>info@automobile-wohlensee.ch</b> zur Verfügung.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="confirm-modal-overlay"></div>
                </fieldset>


                <div class="form_error_container">
                  <div id="form_validation_error" class="alert alert-danger" style="display:none;">Es müssen alle obligatorischen Felder ausgefüllt werden.</div>
                  <div id="form_submit_error" class="alert alert-danger" style="display:none;">Unbekannter Fehler (Bitte geben Sie eine gültige E-Mail-Adresse ein) - Das Formular konnte nicht abgeschickt werden.</div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<script>
  const fields = {
    fahrzeugdaten: [
      'automarke',
      'modell',
      'aufbau',
      'farbe',
      'inverkehrssetzung',
      'kilometerstand',
      'treibstoff',
      'getriebeart',
      'typenschein',
      'preisvorstellung',
    ],
    personal: [
      'name',
      'vorname',
      'adresse',
      'plz_ort',
      'email',
      'telefon',
    ],
  };

  $(document).ready(function () {

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;

    $(".next").click(function () {

      const btn = $(this);
      const step = btn.data('step');
      current_fs = btn.parent();

      $("#form_validation_error").css('display', 'none');
      $("#form_submit_error").css('display', 'none');

      if (!validate(step)) {
        $("#form_validation_error").css('display', 'block');
        return;
      }

      next_fs = btn.parent().next();

      //Add Class Active
      function showNextStep() {
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

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
          duration: 600
        });
      }

      function unsuccessfulCallback() {
        $("#form_submit_error").css('display', 'block');
        btn.removeAttr('disabled');
      }

      if (step === 'request') {
        btn.attr('disabled', 'true');
        submitRequest(showNextStep, unsuccessfulCallback);
      } else {
        showNextStep();
      }
    });

    $(".previous").click(function () {

      $("#form_validation_error").css('display', 'none');

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

//Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
      previous_fs.show();

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

    $('.radio-group .radio').click(function () {
      $(this).parent().find('.radio').removeClass('selected');
      $(this).addClass('selected');
    });

  });

  $(document).ready(function () {
    $('.custom-file-upload').on('click', function (e) {
      $(this).closest(".form-group").find(".file-upload").trigger('click');
    });

    $('#btn-submit').click(function() {  
      
    });

    $('button.file-upload-preview-delete').on('click', function (e) {
      const field = $(this).closest(".form-group").find(".file-upload");
      field.val('');
      field.change();
      e.stopPropagation();
      e.preventDefault();
    });

    $("input.file-upload").change(function() {
      const field = $(this);
      const input = field[0];
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          const img = field.parent().find('img.file-upload-preview');
          img.attr('src', e.target.result);

          const imageNo = field.data('image-no');
          $('#result_image_' + imageNo).attr('src', e.target.result).css('display', 'inline-block');

          // img.css('display', 'block');
          field.parent().find('.file-upload-preview-container').css('display', 'block');
          field.parent().find('.file-upload-preview-delete').css('display', 'inline-block');
        }.bind(this);

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      } else {
        const img = field.parent().find('img.file-upload-preview');
        img.removeAttr('src');
        field.parent().find('.file-upload-preview-container').css('display', 'none');
        field.parent().find('.file-upload-preview-delete').css('display', 'none');

        const imageNo = field.data('image-no');
        $('#result_image' + imageNo).removeAttr().css('display', 'none');
      }
    });
  });

  $("#create_overview").on('click', function() {
    // const allFields = [...fields.fahrzeugdaten, ...fields.personal];
    const allFields = fields.fahrzeugdaten.concat(fields.personal);
    
    for (let field in allFields) {
      $('#result_' + allFields[field]).html($('#input_' + allFields[field]).val());
    }

    $(".error").hide();
    var hasError = false;
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var emailaddressVal = $("#input_email").val();
    if(emailaddressVal == '') {
        $("#input_email").after('<span class="error">Bitte geben Sie Ihre E-Mail Adresse ein.</span>');
        hasError = true;
    }
    else if(!emailReg.test(emailaddressVal)) {
        $("#input_email").after('<span class="error">Geben Sie eine gültige E-Mail Adresse ein.</span>');
        hasError = true;
    }
    if(hasError == true) { return false; }
  });

  function validate(step) {
    let fieldset;

    if (step === 'fahrzeugdaten') {
      fieldset = fields.fahrzeugdaten;
    } else if (step === 'personal') {
      fieldset = fields.personal;
    } else if (step === 'images') {
      return $('#input_image_1').val() !== '';
    }

    if (!fieldset) {
      return true;
    }

    for (let field in fieldset) {
      const f = $('#input_' + fieldset[field]);
      if (f.data('required')) {
        if (!f.val()) {
          return false;
        }
      }
    }

    return true;
  }
  
  function submitRequest(successCallback, unsuccessfulCallback) {
    const form = $("#offerForm");
    const url = form.attr('action');
    const formData = new FormData(form[0]);

    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        if (data['success'] === 'ok') {
          successCallback();
        } else {
          unsuccessfulCallback();
        }
      },
      error: function(data) {
        unsuccessfulCallback();
      }
    });

  }
  
  $('.close-modal').click(function(){
     $('.confirm-modal').hide();
     $('.confirm-modal-overlay').hide();
     window.location.href="/autoankauf/formular";
  });
</script>
