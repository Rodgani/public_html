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
    .registraion_vehicle_sec,
    .manually_data_vehicle_sec,
    .registraion_vehicle_sec_preview,
    .manually_data_vehicle_sec_preview{
        display: none;
    }
    .image-case-2 .registraion_vehicle_sec {
        display: block;
    }
    .show-DIV {
      display: block;
    }
    ul#progressbar ~ #images_2 {
        display: none !important;
    }
    .newform-design + .image-case-2, 
    .newform-design ~ .other-details-box,
    .newform-design ~ .manually_data_vehicle_sec,
    .newform-design ~ .registraion_vehicle_sec {
        display: none !important;
    }
</style>
<link rel="stylesheet" href="/assets/front/css/stepper.css">
<link rel="stylesheet" href="/assets/front/css/datepicker.css">
<script src="/assets/front/js/bootstrap-datepicker.js" type="text/javascript"></script>
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
                            <form class="stepperForm newform-design" id="offerForm" method="post" enctype="multipart/form-data"
                                action="/vehicle_request/purchaserequests">
                                <!-- progressbar -->
                                <ul id="progressbar" class="new-design">
                                    <li class="active" id="car"><strong class="d-none d-md-block">Fahrzeugdaten</strong></li>
                                    <li id="further-details"><strong class="d-none d-md-block">Zustand & Ausstattung</strong></li>
                                    <li id="images"><strong class="d-none d-md-block">Bilder</strong></li>
                                    <li id="personal"><strong class="d-none d-md-block">Angaben des Verkäufers</strong></li>
                                    <li id="overview"><strong class="d-none d-md-block">Einsenden</strong></li>
                                    <!-- <li id="confirm"><strong class="d-none d-md-block">Einsenden</strong></li> -->
                                </ul>

                                <li id="images_2" style="display:none;"><strong class="d-none d-md-block">Bilder</strong></li>
                                <!-- fieldsets -->
                                <fieldset class="step first-step-fieldset">
                                    <div class="form-card pb-0">
                                        <div class="first-vehicle-select">
                                            <div class="first-step-selection">
                                                <h3 class="primarycolor">Angaben zum Auto</h3>
                                                <div class="form-heading-inner">Bitte wählen Sie die wünschte Methode zur Einreichung der Fahrzeugdaten</div>
                                                <div class="form-group first-selection-group">
                                                    <label class="control control--radio col-sm-6 left-label" for="input_registraion_vehicle">
                                                        <input id="input_registraion_vehicle" name="vehicle_method" type="radio" value="Fahrzeugausweis hochladen" checked="checked"> 
                                                        <div class="control__indicator"></div>
                                                        <div class="highlight_indicator"></div>
                                                        <div class="label-title"> Fahrzeugausweis <br><span>hochladen</span></div>
                                                        <div class="label-desc"> Übermitteln Sie uns ein Foto/Scan des Fahrzeugausweises.</div>
                                                    </label>
                                                    <label class="control control--radio col-sm-6" for="input_manually_data_vehicle">
                                                        <input id="input_manually_data_vehicle" name="vehicle_method" type="radio" value="Auto-Daten manuell erfassen"> 
                                                        <div class="control__indicator"></div>
                                                        <div class="highlight_indicator"></div>
                                                        <div class="label-title"> Auto-Daten manuell<br><span>erfassen</span></div>
                                                        <div class="label-desc"> Hinterlegen Sie die wichtigsten Angaben zum Fahrzeug.</div>
                                                    </label>
                                                </div>
                                                <div class="first-step-next m-auto text-center" style="margin-top:50px !important;">
                                                    <input type="button" class="btn btn-primary px-4 py-2 rounded-pill violet-blue-bg mt-4 mt-2 slide-next" value="Weiter" />
                                                </div>
                                            </div>
                                            <div class="upload-car-document" style="display:none;">
                                                <h3 class="primarycolor">Angaben zum Auto</h3>
                                                <div class="form-heading-inner">Fahrzeugausweis hinaufladen <span>(Scan oder Foto)</span></div>
                                                <div class="upload-inner-content">
                                                    <div class="form-group" >
                                                        <div class="custom-file-upload">
                                                            <div>
                                                                <span class="file-hint"><i class="fa fa-upload"></i> Hier klicken und Bild auswählen</span>
                                                                <button type="button" class="file-upload-preview-delete"><i class="fa fa-times"></i></button>
                                                            </div>
                                                            <div class="file-upload-preview-container">
                                                                <img class="file-upload-preview" alt="" />
                                                            </div>
                                                        </div>
                                                        <input class="file-upload" name="image[]" type="file" data-image-no="5"   />
                                                    </div>
                                                    <div class="form-group col-md-12 mb-0 mt-5 text-center">
                                                        <div class="heading-title">Eigentumsrechte Dritter</div>
                                                    </div>
                                                    <div class="form-group col-md-12 mt-4 mb-4 text-center">
                                                        <label>Besteht ein offenes Leasing für dieses Fahrzeug? <span class="mandatory primarycolor">*</span></label>
                                                        <div class="radio-select-box">
                                                            <div class="radio-select">
                                                                <input id="input_thirdparty_firststep_yes" required name="thirdparty-ownership-firststep" type="radio" value="Ja"> 
                                                                <label for="input_thirdparty_firststep_yes">Ja</label>
                                                            </div>
                                                            <div class="radio-select">
                                                                <input id="input_thirdparty_firststep_no" required name="thirdparty-ownership-firststep" type="radio" value="Nein"> 
                                                                <label for="input_thirdparty_firststep_no">Nein</label>
                                                            </div>
                                                        </div>
                                                        <div class="field-set-1 mt-4" style="display:none;">
                                                            <div class="row">
                                                                <div class="col-sm-7 text-left">
                                                                    <label>Um welche Leasinggesellschaft handelt es sich? <span class="mandatory primarycolor">*</span></label>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="leasing_company" id="input_leasing_company">
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-sm-7 text-left">
                                                                    <label>Wie hoch ist der Restwert des Leasing? <span class="mandatory primarycolor">*</span></label>
                                                                </div>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="residual_lease" id="input_residual_lease">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="first-step-prev m-auto text-center" style="margin-top:42px !important;">
                                                    <input type="button" class="btn btn-secondary px-4 py-2 rounded-pill mr-3 mt-4 slide-prev" value="Zurück" style="display:none;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next btn btn-primary px-4 py-2 next-first-step rounded-pill violet-blue-bg"
                                        value="Weiter" data-step="vehicle_selection" style="display:none;" />
                                </fieldset>
                                <fieldset class="step fahrzeugdaten-details">
                                    <div class="form-card">
                                        <h3 class="primarycolor">Angaben zum Auto</h3>
                                        <div class="manually_data_vehicle_sec">
                                            <div class="form-heading-inner">Bitte geben Sie weitere Details zum Fahrzeug an</div>
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
                                                    <label for="input_version">Version <span class="mandatory primarycolor">*</span></label>
                                                    <input data-required="true" type="text" class="form-control" name="version" id="input_version">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="input_aufbau">Aufbau <span class="mandatory primarycolor">*</span></label>
                                                    <div class="select-box">
                                                        <select name="aufbau" data-required="true" class="form-control" id="input_aufbau">
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
                                                    <label for="input_inverkehrssetzung">Inverkehrssetzung <span class="mandatory primarycolor">*</span></label>
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
                                                    <label for="input_fahrgestellnummer_num">Fahrgestellnummer/VIN Nummer <span class="mandatory primarycolor">*</span></label>
                                                    <input type="text" class="form-control" data-required="true" name="fahrgestellnummer_num" id="input_fahrgestellnummer_num">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input_preisvorstellung">Preisvorstellung <span class="mandatory primarycolor">*</span></label>
                                                    <div class="amount-field">
                                                        <input type="text" class="form-control" data-required="true" name="preisvorstellung" id="input_preisvorstellung">
                                                        <span>CHF</span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input_hubraum">Hubraum cm3</label>
                                                    <input type="text" class="form-control" name="hubraum" placeholder="z.B 1997 cm3" id="input_hubraum">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input_leistung">Leistung in KW oder PS</label>
                                                    <input type="text" class="form-control" name="leistung" placeholder="125kw /125PS" id="input_leistung">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input_türen">Türen <span class="mandatory primarycolor">*</span></label>
                                                    <div class="select-box">
                                                        <select name="türen" data-required="true" class="form-control" id="input_türen">
                                                            <option value="2" data-index="0">2</option>
                                                            <option value="3" data-index="1">3</option>
                                                            <option value="4" data-index="2">4</option>
                                                            <option value="5" data-index="3">5</option>
                                                            <option value="etc." data-index="4">etc.</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-heading-inner hidden-case-2">Bitte geben Sie weitere Details zum Fahrzeug an</div>
                                        <div class="case-2-manually"></div>
                                        <div class="row font-weight-light mt-4 other-details-box hidden-case-2">
                                            <div class="form-group col-md-6">
                                                <label for="input_kilometerstand_2">Kilometerstand <span class="mandatory primarycolor">*</span></label>
                                                <div class="amount-field">
                                                    <input required="required" type="text" class="form-control" name="kilometerstand_2" id="input_kilometerstand_2">
                                                    <span>KM</span>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="input_treibstoff_2">Treibstoff <span class="mandatory primarycolor">*</span></label>
                                                <div class="select-box">
                                                    <select name="treibstoff_2" data-required="true" class="form-control" id="input_treibstoff_2">
                                                        <option value="" data-index="0">Bitte wählen</option>
                                                        <option value="Diesel" data-index="1">Diesel</option>
                                                        <option value="Benzin" data-index="2">Benzin</option>
                                                        <option value="Elektro" data-index="3">Elektro</option>
                                                        <option value="Gas" data-index="4">Gas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="input_getriebeart_2">Getriebeart <span class="mandatory primarycolor">*</span></label>
                                                <div class="select-box">
                                                    <select name="getriebeart_2" data-required="true" class="form-control" id="input_getriebeart_2">
                                                        <option value="" data-index="0">Bitte wählen</option>
                                                        <option value="Automat" data-index="1">Automat</option>
                                                        <option value="Schaltgetriebe" data-index="2">Schaltgetriebe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="input_preisvorstellung_2">Preisvorstellung <span class="mandatory primarycolor">*</span></label>
                                                <div class="amount-field">
                                                    <input data-required="true" type="text" class="form-control" name="preisvorstellung_2" id="input_preisvorstellung_2">
                                                    <span>CHF</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row font-weight-light mt-4 conditions-box">
                                            <div class="form-group col-md-12 mb-0 hidden-case-1">
                                                <div class="heading-title">Eigentumsrechte Dritter</div>
                                            </div>
                                            <div class="form-group col-md-12 mt-4 mb-4 hidden-case-1">
                                                <label>Besteht ein offenes Leasing für dieses Fahrzeug?</label>
                                                <div class="radio-select-box">
                                                    <div class="radio-select">
                                                        <input id="input_thirdparty_yes" name="thirdparty-ownership" type="radio" value="Ja"> 
                                                        <label for="input_thirdparty_yes">Ja</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_thirdparty_no" name="thirdparty-ownership" type="radio" value="Nein"> 
                                                        <label for="input_thirdparty_no">Nein</label>
                                                    </div>
                                                </div>
                                                <div class="field-set-1 mt-4" style="display:none;">
                                                    <div class="row">
                                                        <div class="col-sm-7 text-left">
                                                            <label>Um welche Leasinggesellschaft handelt es sich?</label>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="leasing_company" id="input_leasing_company">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-sm-7 text-left">
                                                            <label>Wie hoch ist der Restwert des Leasing?</label>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="residual_lease" id="input_residual_lease">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 m-0">
                                                <hr class="seprator">
                                            </div>
                                            <div class="form-group col-md-12 mb-0">
                                                <div class="heading-title">Zustand Fahrzeug</div>
                                            </div>
                                            <div class="form-group col-md-12 mt-4">
                                                <label>Hat oder hatte das Fahrzeug erhebliche Schäden oder einen Unfall? <span class="mandatory primarycolor">*</span></label>
                                                <div class="radio-select-box mb-2">
                                                    <div class="radio-select">
                                                        <input id="input_damage_yes" data-required="true" name="damage-checkbox" type="radio" value="Ja"> 
                                                        <label for="input_damage_yes">Ja</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_damage_no" data-required="true" name="damage-checkbox" type="radio" value="Nein"> 
                                                        <label for="input_damage_no">Nein</label>
                                                    </div>
                                                </div>
                                                <div class="damage-desc-box mt-3 mb-3" style="display:none;">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6">
                                                            <label for="" class="mb-0">Bitte beschreibe den Schaden: <span class="mandatory primarycolor">*</span></label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" data-required="true" name="damage_desc" placeholder="z.B. Motorschaden, Getriebeschaden, Problem Turbo etc..." id="input_damage_desc">
                                                        </div>
                                                        <div class="col-sm-12 mt-3">
                                                            <label for="input_damage_repaired">Wurde der Schaden behoben? <span class="mandatory primarycolor">*</span></label>
                                                            <div class="radio-select-box mb-2">
                                                                <div class="radio-select">
                                                                    <input id="input_damage_repaired_yes" data-required="true" name="damage-repaired-checkbox" type="radio" value="Ja"> 
                                                                    <label for="input_damage_repaired_yes">Ja</label>
                                                                </div>
                                                                <div class="radio-select">
                                                                    <input id="input_damage_repaired_no" data-required="true" name="damage-repaired-checkbox" type="radio" value="Nein"> 
                                                                    <label for="input_damage_repaired_no">Nein</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label >Beschreiben Sie den Zustand der Carrosserie <span class="mandatory primarycolor">*</span></label>
                                                <div class="radio-select-box mb-2">
                                                    <div class="radio-select">
                                                        <input id="input_good" data-required="true" name="bodywork-checkbox" type="radio" value="Gut bis sehr gut"> 
                                                        <label for="input_good">Gut bis sehr gut</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_average" data-required="true" name="bodywork-checkbox" type="radio" value="Durchschnittlich"> 
                                                        <label for="input_average">Durchschnittlich</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_bad" data-required="true" name="bodywork-checkbox" type="radio" value="Schlecht"> 
                                                        <label for="input_bad">Schlecht</label>
                                                    </div>
                                                </div>
                                                <div class="body-condition-text-box" style="display:none;">
                                                    <input type="text" class="form-control" name="body_condition" id="input_body_condition" placeholder="z.b kleine Kratzer, grosse Beule">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="input_mechanical_condition">Wie ist der mechanische Zustand und Servicebedarf? <span class="mandatory primarycolor">*</span></label>
                                                <input type="text" class="form-control"  data-required="true" name="mechanical_condition" placeholder="z.B. Bremsen oder Kupplung bald fällig, kleiner Ölverlust,…" id="input_mechanical_condition">
                                            </div>
                                            <div class="form-group col-md-12 mt-2">
                                                <label>Leuchten dauerhaft Warnlampen auf?</label>
                                                <div class="radio-select-box">
                                                    <div class="radio-select">
                                                        <input id="input_warning_lights_checkbox_yes" name="warning-lights-checkbox" type="radio" value="Ja"> 
                                                        <label for="input_warning_lights_checkbox_yes">Ja</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_warning_lights_checkbox_no" name="warning-lights-checkbox" type="radio" value="Nein"> 
                                                        <label for="input_warning_lights_checkbox_no">Nein</label>
                                                    </div>
                                                </div>
                                                <div class="warning-lights-text-box mt-3" style="display:none;">
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-6 text-left">
                                                            <label>Um welche Warnlampe handelt es sich? <span class="mandatory primarycolor">*</span></label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" data-required="true" class="form-control" name="warning_lamp" id="input_warning_lamp" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 mt-2">
                                                <label>Wurden alle Services planmässig ausgeführt und im Serviceheft eingetragen? <span class="mandatory primarycolor">*</span></label>
                                                <div class="radio-select-box">
                                                    <div class="radio-select">
                                                        <input id="input_service_checkbox_yes" data-required="true" name="services-checkbox" type="radio" value="Ja"> 
                                                        <label for="input_service_checkbox_yes">Ja</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_service_checkbox_no" data-required="true" name="services-checkbox" type="radio" value="Nein"> 
                                                        <label for="input_service_checkbox_no">Nein</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_service_checkbox_dont_know" data-required="true" name="services-checkbox" type="radio" value="Weiss ich nicht"> 
                                                        <label for="input_service_checkbox_dont_know">Weiss ich nicht</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="input_last_service">In welchem Jahr wurde der letzte Service gemacht?</label>
                                                <input type="text" class="form-control" name="last_service" id="input_last_service">
                                            </div>
                                            <div class="form-group col-md-12 mt-2">
                                                <label>Wurde im Auto regelmässig geraucht? <span class="mandatory primarycolor">*</span></label>
                                                <div class="radio-select-box">
                                                    <div class="radio-select">
                                                        <input id="input_smoking_yes" data-required="true" name="smoking" type="radio" value="Ja"> 
                                                        <label for="input_smoking_yes">Ja</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_smoking_no" data-required="true" name="smoking" type="radio" value="Nein"> 
                                                        <label for="input_smoking_no">Nein</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 mt-2">
                                                <label>Wurden im Auto regelmässig Tiere mitgeführt? <span class="mandatory primarycolor">*</span></label>
                                                <div class="radio-select-box">
                                                    <div class="radio-select">
                                                        <input id="input_animals_carried_yes" data-required="true" name="animals-carried" type="radio" value="Ja"> 
                                                        <label for="input_animals_carried_yes">Ja</label>
                                                    </div>
                                                    <div class="radio-select">
                                                        <input id="input_animals_carried_no" data-required="true" name="animals-carried" type="radio" value="Nein"> 
                                                        <label for="input_animals_carried_no">Nein</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 m-0">
                                                <hr class="seprator">
                                            </div>
                                            <div class="form-group col-md-12 mb-0">
                                                <div class="heading-title">Ausstattung</div>
                                            </div>
                                            <div class="form-group col-md-6 mt-4">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-6 m-0">2 Schlüssel</label>
                                                    <div class="radio-select-box col-sm-6 m-0 text-right">
                                                        <div class="radio-select">
                                                            <input id="input_keys_yes" name="keys" type="radio" value="0"> 
                                                            <label for="input_keys_yes">Ja</label>
                                                        </div>
                                                        <div class="radio-select">
                                                            <input id="input_keys_no" name="keys" type="radio" value="0"> 
                                                            <label for="input_keys_no">Nein</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-4">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-6 m-0">8-fach bereift</label>
                                                    <div class="col-sm-6 text-right">
                                                        <div class="row align-items-center m-0">
                                                            <div class="custom-control custom-switch switcher-design ml-auto">
                                                                <input type="checkbox" class="custom-control-input" name="tyres" id="input_tyres">
                                                                <label class="custom-control-label" for="input_tyres"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tyres-sub-field col-sm-12 mt-4" style="display:none;">
                                                        <input type="text" class="form-control" name="involved_modification" placeholder="Mit oder ohne Felgen" id="input_involved_modification">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 m-0 hidden-case-1">
                                                <hr class="seprator">
                                            </div>
                                            <div class="form-group col-md-12 mb-0 hidden-case-1">
                                                <div class="heading-title">weitere Ausstattungen</div>
                                            </div>
                                            <div class="form-group col-md-6 mt-4">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Anhängerkupplung</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="anhängerkupplung" id="input_anhängerkupplung">
                                                            <label class="custom-control-label" for="input_anhängerkupplung"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-4 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Bluetooth-Schnittstelle</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="bluetooth_schnittstelle" id="input_bluetooth_schnittstelle">
                                                            <label class="custom-control-label" for="input_bluetooth_schnittstelle"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Elektrische Sitzverstellung</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="elektrische_sitzverstellung" id="input_elektrische_sitzverstellung">
                                                            <label class="custom-control-label" for="input_elektrische_sitzverstellung"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Navigation</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="navigation" id="input_navigation">
                                                            <label class="custom-control-label" for="input_navigation"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Parksensoren hinten</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="parksensoren_hinten" id="input_parksensoren_hinten">
                                                            <label class="custom-control-label" for="input_parksensoren_hinten"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Parksensoren vorne</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="parksensoren_vorne" id="input_parksensoren_vorne">
                                                            <label class="custom-control-label" for="input_parksensoren_vorne"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Rückfahrkamera</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="rückfahrkamera" id="input_rückfahrkamera">
                                                            <label class="custom-control-label" for="input_rückfahrkamera"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Schiebedach / Panoramadach</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" id="input_schiebedach">
                                                            <label class="custom-control-label" for="input_schiebedach"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Sitzbelüftung</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="sitzbelüftung" id="input_sitzbelüftung">
                                                            <label class="custom-control-label" for="input_sitzbelüftung"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Sitzbezug Leder</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="sitzbezug_leder" id="input_sitzbezug_leder">
                                                            <label class="custom-control-label" for="input_sitzbezug_leder"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Sitzheizung</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="sitzheizung" id="input_sitzheizung">
                                                            <label class="custom-control-label" for="input_sitzheizung"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 hidden-case-1">
                                                <div class="row align-items-center">
                                                    <label class="col-sm-9 m-0">Tempomat</label>
                                                    <div class="col-sm-3 text-right">
                                                        <div class="custom-control custom-switch switcher-design">
                                                            <input type="checkbox" class="custom-control-input" name="tempomat" id="input_tempomat">
                                                            <label class="custom-control-label" for="input_tempomat"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 mt-3">
                                                <label for="input_fahrzeugzustand">Mehr Details</label>
                                                <div class="amount-field">
                                                    <textarea class="form-control" id="input_fahrzeugzustand" name="fahrzeugzustand" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                                        value="Zurück"/>
                                    <input
                                        type="button" name="next" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                                        value="Weiter" data-step="fahrzeugdaten" />
                                </fieldset>
                                <fieldset class="step image-block">
                                    <div class="form-card">
                                        <h3 class="primarycolor">Fotos Ihres Autos</h3>
                                        <div class="registraion_vehicle_sec">
                                            <div class="form-heading-inner">Bitte übermitteln Sie uns einige Fotos des Fahrzeugs.</span></div>
                                            <div class="file-upload-section row">
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
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                                        value="Zurück"/>
                                    <input
                                        type="button" name="next" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                                        value="Weiter" data-step="images" />
                                </fieldset>
                                <fieldset class="step image-case-2" style="display:none;">
                                    <div class="form-card">
                                        <h3 class="primarycolor">Angaben zum Auto</h3>
                                    </div>
                                    <input type="button" name="previous" class="previous btn btn-secondary px-4 py-2 rounded-pill mr-3"
                                        value="Zurück"/>
                                    <input
                                        type="button" name="next" id="create_overview" class="next btn btn-primary px-4 py-2 rounded-pill violet-blue-bg"
                                        value="Weiter" data-step="images" />
                                </fieldset>
                                <fieldset class="step person-details">
                                    <div class="form-card">
                                        <h3 class="primarycolor">Angaben zum Verkäufer</h3>
                                        <div class="form-heading-inner">Bitte geben Sie Ihre Kontaktdaten ein.</div>
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
                                    <div class="registraion_vehicle_sec_preview show-DIV">
                                        <div class="form-card">
                                            <h3 class="primarycolor">Zusammenfassung</h3>
                                            <h4 class="mt-4 form-header">Fahrzeugdaten</h4>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-6 font-weight-bold">
                                                    <!-- <span id="result_registraion_vehicle"></span> -->
                                                    Fahrzeugausweis hinaufgeladen
                                                </div>
                                                <div class="col-12 col-md-6 mb-2 mb-md-0">
                                                    <div class="document-img no-image">
                                                        <img class="result-image" id="result_image_5" />
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Besteht ein offenes Leasing für dieses Fahrzeug?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_thirdparty-ownership-firststep">
                                                </div>
                                            </div>
                                            <h4 class="mt-4 form-header">Bilder</h4>
                                            <div class="font-weight-light mt-4 preview-field">
                                                <img class="result-image" id="result_image_1" />
                                                <img class="result-image" id="result_image_2" />
                                                <img class="result-image" id="result_image_3" />
                                                <img class="result-image" id="result_image_4" />
                                            </div>
                                            <h4 class="mt-4 form-header">Weitere Details</h4>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Kilometerstand
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_kilometerstand_2">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Treibstoff
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_treibstoff_2">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold mt-3">
                                                    Getriebeart
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_getriebeart_2">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold mt-3">
                                                    Preisvorstellung
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_preisvorstellung_2">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h3 class="subheading-preview">Zustand Fahrzeug</h3>
                                            </div>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-12 font-weight-bold">
                                                    Hat oder hatte das Fahrzeug erhebliche Schäden oder einen Unfall?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_damage-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Beschreiben Sie den Zustand der Carrosserie
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_bodywork-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_body_condition">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wie ist der mechanische Zustand und Servicebedarf?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_mechanical_condition">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Leuchten dauerhaft Warnlampen auf?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_warning-lights-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_warning_lamp">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurden alle Services planmässig ausgeführt und im Serviceheft eingetragen?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_services-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurden alle Services planmässig ausgeführt und im Serviceheft eingetragen?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_services-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    In welchem Jahr wurde der letzte Service gemacht?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_last_service">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurde im Auto regelmässig geraucht?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_smoking">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurden im Auto regelmässig Tiere mitgeführt?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_animals-carried">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h3 class="subheading-preview">Ausstattung</h3>
                                            </div>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-6 font-weight-bold">
                                                    2 Keys
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_keys">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    8-fach bereift
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_input_tyres">
                                                </div>
                                                <div class="col-12 text-right col-md-12 mb-2 mb-md-0" id="result_involved_modification">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Anhängerkupplung
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_input_anhängerkupplung">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Mehr Details
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_fahrzeugzustand">
                                                </div>
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
                                                <div class="col-12 col-md-3 font-weight-bold mt-3">
                                                    Adresse
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0 mt-3" id="result_adresse">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold mt-3">
                                                    PLZ / Ort
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0 mt-3" id="result_plz_ort">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold mt-3">
                                                    E-Mail
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0 mt-3" id="result_email">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold mt-3">
                                                    Telefon
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0 mt-3" id="result_telefon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="manually_data_vehicle_sec_preview">
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
                                                    Version
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_version">
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
                                                    Fahrgestellnummer/VIN Nummer
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_fahrgestellnummer_num">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Preisvorstellung
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_preisvorstellung">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Hubraum cm3
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_hubraum">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Leistung in KW oder PS
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_leistung">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Türen
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_türen">
                                                </div>
                                            </div>
                                            <h4 class="mt-4 form-header">Zustand & Ausstattung</h4>
                                            <div class="col-sm-12">
                                                <h3 class="subheading-preview">Eigentumsrechte Dritter</h3>
                                            </div>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Besteht ein offenes Leasing für dieses Fahrzeug?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_thirdparty-ownership-firststep">
                                                </div>
                                                <div class="col-12 col-md-3 font-weight-bold">
                                                    Tyres
                                                </div>
                                                <div class="col-12 col-md-3 mb-2 mb-md-0" id="result_input_tyres">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h3 class="subheading-preview">Zustand Fahrzeug</h3>
                                            </div>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-12 font-weight-bold">
                                                    Hat oder hatte das Fahrzeug erhebliche Schäden oder einen Unfall?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_damage-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Beschreiben Sie den Zustand der Carrosserie
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_bodywork-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_body_condition">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wie ist der mechanische Zustand und Servicebedarf?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_mechanical_condition">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Leuchten dauerhaft Warnlampen auf?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_warning-lights-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_warning_lamp">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurden alle Services planmässig ausgeführt und im Serviceheft eingetragen?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_services-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurden alle Services planmässig ausgeführt und im Serviceheft eingetragen?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_services-checkbox">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    In welchem Jahr wurde der letzte Service gemacht?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_last_service">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurde im Auto regelmässig geraucht?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_smoking">
                                                </div>
                                                <div class="col-12 col-md-12 font-weight-bold mt-3">
                                                    Wurden im Auto regelmässig Tiere mitgeführt?
                                                </div>
                                                <div class="col-12 col-md-12 mb-2 mb-md-0" id="result_animals-carried">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h3 class="subheading-preview">Ausstattung</h3>
                                            </div>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-6 font-weight-bold">
                                                    2 Keys
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_keys">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    8-fach bereift
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_input_tyres">
                                                </div>
                                                <div class="col-12 text-right col-md-12 mb-2 mb-md-0" id="result_involved_modification">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h3 class="subheading-preview">weitere Ausstattungen</h3>
                                            </div>
                                            <div class="row font-weight-light mt-4 preview-field">
                                                <div class="col-12 col-md-6 font-weight-bold">
                                                    Anhängerkupplung
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mb-md-0" id="result_input_anhängerkupplung">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Bluetooth-Schnittstelle
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2  mt-3 mb-md-0" id="result_input_bluetooth_schnittstelle">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Elektrische Sitzverstellung
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_elektrische_sitzverstellung">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Navigation
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_navigation">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Parksensoren hinten
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_parksensoren_hinten">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Parksensoren vorne
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_parksensoren_vorne">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Rückfahrkamera
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_rückfahrkamera">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Schiebedach / Panoramadach
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_schiebedach">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Sitzbelüftung
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_sitzbelüftung">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Sitzbezug Leder
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_sitzbezug_leder">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Sitzheizung
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_sitzheizung">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Tempomat
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_input_tempomat">
                                                </div>
                                                <div class="col-12 col-md-6 font-weight-bold mt-3">
                                                    Mehr Details
                                                </div>
                                                <div class="col-12 text-right col-md-6 mb-2 mt-3 mb-md-0" id="result_fahrzeugzustand">
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
                                                    <p>Besten Dank für Ihr Vertrauen und dass Sie unseren Online-Ankaufsdienst nutzen. Sie erhalten in den nächsten 24 Stunden eine Antwort von uns.</p>
                                                    <p>Gerne stehen wir Ihnen zwischenzeitlich auch telefonisch unter <b>031 503 10 12</b> sowie per E-mail an <b>info@automobile-wohlensee.ch</b> zur Verfügung.</p>
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
        vehicle_selection: [
            'registraion_vehicle',
            'manually_data_vehicle',
        ],
        fahrzeugdaten: [
            'automarke',
            'modell',
            'version',
            'aufbau',
            'farbe',
            'inverkehrssetzung',
            'kilometerstand',
            'treibstoff',
            'getriebeart',
            'typenschein',
            'fahrgestellnummer_num',
            'preisvorstellung',
            'hubraum',
            'leistung',
            'türen',
        ],
        personal: [
            'name',
            'vorname',
            'adresse',
            'plz_ort',
            'email',
            'telefon',
        ],
        case1fields: [
            'leasing_company',
            'residual_lease',
            'body_condition',
            'mechanical_condition',
            'last_service',
            'involved_modification',
            'kilometerstand_2',
            'preisvorstellung_2',
            'lastservice_2',
            'fahrzeugzustand',
            'treibstoff_2',
            'getriebeart_2',
        ],
        vehicle_details_radio: [
            'thirdparty-ownership',
            'thirdparty-ownership-firststep',
            'damage-checkbox',
            'bodywork-checkbox',
            'warning-lights-checkbox',
            'services-checkbox',
            'smoking',
            'animals-carried',
            'keys',
        ],
        vehicle_details_switcher: [
            'input_tyres',
            'input_anhängerkupplung',
            'input_bluetooth_schnittstelle',
            'input_elektrische_sitzverstellung',
            'input_navigation',
            'input_parksensoren_hinten',
            'input_parksensoren_vorne',
            'input_rückfahrkamera',
            'input_schiebedach',
            'input_sitzbelüftung',
            'input_sitzbezug_leder',
            'input_sitzheizung',
            'input_tempomat',
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

            if($.trim($("#result_image_5").attr('src')) != ""){
                $('.document-img').removeClass('no-image');
            }
            else{
                $('.document-img').addClass('no-image');
            }

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
      //const allFields = fields.fahrzeugdaten.concat(fields.personal);
      const allFields = [...fields.vehicle_selection, ...fields.fahrzeugdaten, ...fields.case1fields, ...fields.personal];
      
      for (let field in allFields) {
        $('#result_' + allFields[field]).html($('#input_' + allFields[field]).val());
      }
      
      const vehicleDetailsRadioFields =  [...fields.vehicle_details_radio];
      for (let field in vehicleDetailsRadioFields) {
        $('#result_' + vehicleDetailsRadioFields[field]).html($('input[name="'+vehicleDetailsRadioFields[field]+'"]:checked').val());
      }

      const vehicleDetailsSwitcherFields =  [...fields.vehicle_details_switcher];
      for (let field in vehicleDetailsSwitcherFields) {
        let YesOrNo = $('input[name="'+vehicleDetailsSwitcherFields[field]+'"]').is(":checked") ? 'Ja' : 'Nein';
        $('#result_' + vehicleDetailsSwitcherFields[field]).html(YesOrNo);
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
    
      if (step === 'vehicle_selection') {
        fieldset = fields.vehicle_selection;
        return $('#input_image_5').val() !== '';
      } else if (step === 'fahrzeugdaten') {
        fieldset = fields.fahrzeugdaten;
      } else if (step === 'personal') {
        fieldset = fields.personal;
      } else if (step === 'images') {
        return $('#input_image_1').val() !== '';
      } else if (step === 'vehicle_details_radio') {
        fieldset = fields.vehicle_details_radio;
      } else if (step === 'vehicle_details_switcher') {
        fieldset = fields.vehicle_details_switcher;
      } else if (step === 'case1fields') {
        fieldset = fields.case1fields;
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
    
    //$('.datepicker').datepicker();
    
    //$("fieldset.condition-step").insertAfter('.newform-design');
    // $(".conditions-box").insertAfter('.other-details-box');
    $(".image-case-2 ").insertAfter('.newform-design');
    $(".manually_data_vehicle_sec").insertAfter('.newform-design');
    $(".thirdparty-hide, .hidden-case-1").hide();
    $(".hidden-case-2").show();
    $(".registraion_vehicle_sec").addClass("show-DIV");
    $(".upload-car-document .file-upload").attr('id', 'input_image_5');

    $('.fahrzeugdaten-details input.next').attr('data-step', 'case1fields');
    $('.first-vehicle-select').removeClass('mannual-selection');

    $(function() {
        $("input[name='vehicle_method']").click(function() {
          if ($("#input_registraion_vehicle").is(":checked")) {
            $(".registraion_vehicle_sec").addClass("show-DIV");
            $(".registraion_vehicle_sec_preview").addClass("show-DIV");
            $(".manually_data_vehicle_sec").removeClass("show-DIV")
            $(".manually_data_vehicle_sec_preview").removeClass("show-DIV");
            $("#progressbar #images").html('<strong>Bilder</strong>');
            $("#progressbar #images").removeClass('vehicle-details');
            $("#progressbar").removeClass('item-6');
            $("#progressbar #images").after('<li id="further-details"><strong class="d-none d-md-block">Weitere Details</strong></li>');
            $("#progressbar #further-details + #further-details").remove();
            $(".thirdparty-hide, .hidden-case-1").hide();
            $(".first-step-next").show();
            $(".next-first-step").hide();
            $(".first-step-fieldset .form-card").addClass('pb-0');
            $("#images_2").hide();
            $("#images_2").insertAfter("#progressbar");
            $('.next-images').attr('data-step', 'images');
            $(".image-case-2 ").insertAfter('.newform-design');
            $(".hidden-case-2").show();

            $(".upload-car-document .file-upload").attr('id', 'input_image_5');

            $(".registraion_vehicle_sec").insertBefore(".manually_data_vehicle_sec");

            $(".manually_data_vehicle_sec").insertAfter('.newform-design');

            $('.fahrzeugdaten-details input.next').attr('data-step', 'case1fields');
            
            $('.first-vehicle-select').removeClass('mannual-selection');
            // $('.next-images').attr('data-step', 'images');
            // $("fieldset.other-details").insertBefore('.person-details');
            // $(".upload-car-document .file-upload").attr('id', 'input_image_5');
            // $("fieldset.condition-step").insertAfter('.newform-design');
            // $(".conditions-box").insertAfter('.other-details-box');
            //$(".image-case-2 ").remove();
            
          } else {
            $(".manually_data_vehicle_sec").addClass("show-DIV");
            $(".registraion_vehicle_sec").removeClass("show-DIV");
            $(".manually_data_vehicle_sec_preview").addClass("show-DIV");
            $(".registraion_vehicle_sec_preview").removeClass("show-DIV");
            $("#progressbar #images").html('<strong>Fahrzeugdetails</strong>');
            $("#progressbar #images").addClass('vehicle-details');
            $("#progressbar").addClass('item-6');
            $("#progressbar #further-details").remove();
            $(".first-step-next").hide();
            $(".next-first-step").show();
            $('.first-vehicle-select').addClass('mannual-selection');
            $("#images_2").show();
            $("#images_2").insertAfter('#further-details');
            $('.next-images').attr('data-step', 'fahrzeugdaten');

            $("#progressbar #images").after('<li id="further-details"><strong class="d-none d-md-block">Zustand & Ausstattung</strong></li>');
            $("#progressbar #personal").before('<li id="images_2"><strong class="d-none d-md-block">Bilder</strong></li>');
            $(".registraion_vehicle_sec").insertAfter(".image-case-2 .form-card h3");
            $(".image-case-2 ").insertBefore('.step.person-details');

            $(".thirdparty-hide, .hidden-case-1").show();
            $(".hidden-case-2").hide();

            $(".onlyshow-case1").hide();
            

            $(".upload-car-document .file-upload").attr('id', '');
            $(".conditions-box").insertAfter('.image-block .form-card h3');
            $(".other-details-box").insertAfter('.newform-design');

            $(".manually_data_vehicle_sec").appendTo('.case-2-manually');

            $('.fahrzeugdaten-details input.next').attr('data-step', 'fahrzeugdaten');

            $('.image-block input.next').attr('data-step', '');
            
            $('#progressbar #images_2 + #images_2 ').remove();
            // $('.next-images').attr('data-step', 'fahrzeugdaten');
            // $("fieldset.other-details").insertAfter('.newform-design');
            // $(".first-step-fieldset .form-card").removeClass('pb-0');
            // $(".upload-car-document .file-upload").attr('id', '');
            // $("fieldset.condition-step").insertBefore('.image-case-2');
            // $("#progressbar #images").after('<li id="further-details"><strong class="d-none d-md-block">Zustand & Ausstattung</strong></li>');
            // 
            // $(".next-images").click(function() {
            //     $(this).attr('data-step', '');
            // });
            // $(".registraion_vehicle_sec").insertAfter(".image-case-2 .form-card h3")
          }
        });

        $("input[name='damage-checkbox']").click(function() {
            if ($("#input_damage_yes").is(":checked")) {
                $(".damage-desc-box").show();
            } else {
                $(".damage-desc-box").hide();
            }
        });

        $("input[name='car-modify-checkbox']").click(function() {
            if ($("#car-modify-yes").is(":checked")) {
                $(".involved-modification-box").show();
            } else {
                $(".involved-modification-box").hide();
            }
        });

        $("input[name='tyres']").click(function() {
            if ($(this).is(":checked")) {
                $(".tyres-sub-field").show();
            } else {
                $(".tyres-sub-field").hide();
            }
        });

        $("input[name='thirdparty-ownership-firststep']").click(function() {
            if ($('#input_thirdparty_firststep_yes').is(":checked")) {
                $(".field-set-1").show();
            } else {
                $(".field-set-1").hide();
            }
        });
        $("input[name='thirdparty-ownership']").click(function() {
            if ($('#input_thirdparty_yes').is(":checked")) {
                $(".field-set-1").show();
            } else {
                $(".field-set-1").hide();
            }
        });
        $("input[name='bodywork-checkbox']").click(function() {
            if ($('#input_average, #input_bad').is(":checked")) {
                $(".body-condition-text-box").show();
            } else {
                $(".body-condition-text-box").hide();
            }
        });
        $("input[name='warning-lights-checkbox']").click(function() {
            if ($('#input_warning_lights_checkbox_yes').is(":checked")) {
                $(".warning-lights-text-box").show();
            } else {
                $(".warning-lights-text-box").hide();
            }
        });

        $(".first-step-next .slide-next").click(function() {
            $(".upload-car-document").addClass('open');
            $(".next-first-step").show();
            setTimeout(function() {$(".next-first-step").addClass("active-next-btn"); }, 30);
            $(".first-step-prev .slide-prev").show('3000');
            $(".upload-car-document").show('1000');
            $(".first-step-selection").hide('1000');
        });
        $(".first-step-prev .slide-prev").click(function() {
            $(".upload-car-document").removeClass('open');
            $(".next-first-step").hide();
            setTimeout(function() {$(".next-first-step").removeClass("active-next-btn"); }, 30);
            $(this).hide('3000');
            $(".upload-car-document").hide('1000');
            $(".first-step-selection").show('1000');
        });

        $(".upload-car-document .file-upload-preview-delete").click(function() {
            $('.document-img').addClass('no-image');
        });
    });

</script>