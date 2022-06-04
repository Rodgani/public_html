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
</style>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           		<div class="row mt-2 pt-5 pb-4 p-5 custom-form-row bg-white font-weight-light">
		          	<div class="col-md-12 mt-5">
		          	<h1 class="left-br font-weight-light fahrzeugdaten-heading">AUTOANKAUF - WIR KAUFEN IHR AUTO <br><span id="fahrzeugdaten-span" style="font-size: 22px; ">Fahrzeugdaten einreichen und unser Angebot abwarten</span></h1>
		         	 </div>	
		          	<div class="col-md-12 custom-pera  mt-5">
			          	<p>Sie wollen Ihr Auto verkaufen? Wir sind Ihr Ansprechpartner für Autoankauf</p>
			          	<p>Wir freuen uns auf ihren Besuch.</p>
			          	<p>Gerne erstellen wir Ihnen ein Angebot für Ihr aktuelles Auto ohne, dass sie sich dabei verpflichten bei uns ein Neues zu kaufen. Füllen Sie hierzu das untenstehende Kontaktformular aus oder vereinbaren Sie mit uns ein Termin. Anschliessend werden wir Ihnen schnellstmöglich ein Angebot unterbreiten.</p>
			​
						
          			</div>	
          			<a class="btn-btn-primary contact_page" href="<?php echo base_url(); ?>kontakt">Kontaktieren Sie uns</a>
        		</div>
		          		<form id="sale_form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>vhiclce_request/purchaserequests">
        		<div class="row pt-2  pb-4 bg-white font-weight-light p-5 custom-form-row ">

		          			<div class="col-md-6 form-group">
		          				<label for="Automarke">Automarke <span class="mandatory">*</span></label>
		          				<select required="" name="automarke" class="form-control"><option value="Bitte wählen" data-index="0">Bitte wählen</option><option value="Alfa Romeo" data-index="1">Alfa Romeo</option><option value="Aston Martin" data-index="2">Aston Martin</option><option value="Audi" data-index="3">Audi</option><option value="Bentley" data-index="4">Bentley</option><option value="BMW" data-index="5">BMW</option><option value="Cadillac" data-index="6">Cadillac</option><option value="Chevrolet" data-index="7">Chevrolet</option><option value="Chrysler" data-index="8">Chrysler</option><option value="Citroen" data-index="9">Citroen</option><option value="Dacia" data-index="10">Dacia</option><option value="Daewoo" data-index="11">Daewoo</option><option value="Daihatsu" data-index="12">Daihatsu</option><option value="Daimler" data-index="13">Daimler</option><option value="Dodge" data-index="14">Dodge</option><option value="DS Automobiles" data-index="15">DS Automobiles</option><option value="Ferrari" data-index="16">Ferrari</option><option value="Fiat" data-index="17">Fiat</option><option value="Ford" data-index="18">Ford</option><option value="Honda" data-index="19">Honda</option><option value="Hummer" data-index="20">Hummer</option><option value="Hyundai" data-index="21">Hyundai</option><option value="Infiniti" data-index="22">Infiniti</option><option value="Jaguar" data-index="23">Jaguar</option><option value="Jeep" data-index="24">Jeep</option><option value="Kia" data-index="25">Kia</option><option value="Lamborghini" data-index="26">Lamborghini</option><option value="Lancia" data-index="27">Lancia</option><option value="Land Rover" data-index="28">Land Rover</option><option value="Lexus" data-index="29">Lexus</option><option value="Lincoln" data-index="30">Lincoln</option><option value="Lotus" data-index="31">Lotus</option><option value="Maserati" data-index="32">Maserati</option><option value="Mazda" data-index="33">Mazda</option><option value="Mercedes-Benz" data-index="34">Mercedes-Benz</option><option value="MG" data-index="35">MG</option><option value="Mini" data-index="36">Mini</option><option value="Mitsubishi" data-index="37">Mitsubishi</option><option value="Nissan" data-index="38">Nissan</option><option value="Opel" data-index="39">Opel</option><option value="Peugeot" data-index="40">Peugeot</option><option value="Pontiac" data-index="41">Pontiac</option><option value="Porsche" data-index="42">Porsche</option><option value="Renault" data-index="43">Renault</option><option value="Rolls-Royce" data-index="44">Rolls-Royce</option><option value="Rover" data-index="45">Rover</option><option value="Saab" data-index="46">Saab</option><option value="Seat" data-index="47">Seat</option><option value="Skoda" data-index="48">Skoda</option><option value="Smart" data-index="49">Smart</option><option value="Subaru" data-index="50">Subaru</option><option value="Suzuki" data-index="51">Suzuki</option><option value="Tesla" data-index="52">Tesla</option><option value="Toyota" data-index="53">Toyota</option><option value="Triumph" data-index="54">Triumph</option><option value="Volvo" data-index="55">Volvo</option><option value="VW" data-index="56">VW</option></select>
		          			</div>
		          			<div class="col-md-6 form-group">
		          				<label for="Modell">Modell<span class="mandatory">*</span></label>
		          				<input  required="" type="text" class="form-control" name="modell">
		          			</div>

		          			<div class="col-md-6 form-group">
		          				<label for="Aufbau">Aufbau<span class="mandatory">*</span></label></label>
		          				<select required="" name="aufbau" class="form-control"><option value="Bitte wählen" data-index="0">Bitte wählen</option><option value="Bus" data-index="1">Bus</option><option value="Cabriolet" data-index="2">Cabriolet</option><option value="Coupé" data-index="3">Coupé</option><option value="Kleinwagen" data-index="4">Kleinwagen</option><option value="Kombi" data-index="5">Kombi</option><option value="Limousine" data-index="6">Limousine</option><option value="Pick-Up" data-index="7">Pick-Up</option><option value="SUV / Geländewagen" data-index="8">SUV / Geländewagen</option></select>
		          			</div>
		          			<div class="col-md-6 form-group">
		          				<label for="farbe">Farbe<span class="mandatory">*</span></label>
		          				<input required="" type="text" class="form-control" name="farbe">
		          			</div>

		          			<div class="form-group col-md-12">
		          				<label for="farbe">Inverkehrssetzung<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="inverkehrssetzung">
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="farbe">Kilometerstand<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="kilometerstand">
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="farbe">Treibstoff<span class="mandatory">*</span></label>
		          				<select name="treibstoff" required="" class="form-control"><option value="Bitte wählen" data-index="0">Bitte wählen</option><option value="Diesel" data-index="1">Diesel</option><option value="Benzin" data-index="2">Benzin</option><option value="Elektro" data-index="3">Elektro</option><option value="Gas" data-index="4">Gas</option></select>
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="farbe">Getriebeart<span class="mandatory">*</span></label>
		          				<select name="getriebeart" required="" class="form-control"><option value="Bitte wählen" data-index="0">Bitte wählen</option><option value="Automat" data-index="1">Automat</option><option value="Schaltgetriebe" data-index="2">Schaltgetriebe</option></select>
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="farbe">Typenschein<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="typenschein">
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="">Fahrzeug Bild 1</label>
		          				<label for="farbe" class="custom-file-upload "><i class="fa fa-upload"></i>Wählen Sie Dateien oder ziehen Sie hier </label>
		          				<input class="file-upload"  name="image[]" type="file"/>
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="">Fahrzeug Bild 2</label>
		          				<label for="farbe" class="custom-file-upload "><i class="fa fa-upload"></i>Wählen Sie Dateien oder ziehen Sie hier </label>
		          				<input class="file-upload"  name="image[]" type="file"/>
		          			</div>
		          			<div class="form-group col-md-6">
		          				<label for="">Fahrzeug Bild 3</label>
		          				<label for="farbe" class="custom-file-upload "><i class="fa fa-upload"></i>Wählen Sie Dateien oder ziehen Sie hier </label>
		          				<input class="file-upload"  name="image[]" type="file"/>
		          			</div>
		          			<div class="form-group col-md-6">
		          				<label for="">Fahrzeug Bild 4</label>
		          				<label for="farbe" class="custom-file-upload "><i class="fa fa-upload"></i>Wählen Sie Dateien oder ziehen Sie hier </label>
		          				<input class="file-upload"  name="image[]" type="file"/>
		          			</div>

		          			<div class="form-group col-md-12">
		          				<p>Bitte zählen Sie vorhandene Mängel auf und geben Sie zusätzliche Sonderausstattungen an.</p>
		          				
		          				<textarea class="form-control" name="fahrzeugzustand" rows="4"></textarea>
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="farbe">Name<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="name">
		          			</div>
		          			<div class="form-group col-md-6">
		          				<label for="farbe">Vorname<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="vorname">
		          			</div>

		          			<div class="form-group col-md-6">
		          				<label for="farbe">Adresse<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="Adresse">
		          			</div>
		          			<div class="form-group col-md-6">
		          				<label for="farbe">PLZ / Ort<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="plz_ort">
		          			</div>
		          			<div class="form-group col-md-6">
		          				<label for="farbe">E-Mail<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="email">
		          			</div>
		          			<div class="form-group col-md-6">
		          				<label for="farbe">Telefon<span class="mandatory">*</span></label>
		          				<input required=""  type="text" class="form-control" name="telefon">
		          			</div>
		          			<div class="form-group col-md-6">
		          				<input class="btn btn-primary btn-lg" id="submit" type="submit" value="Senden">
		          			</div>










		         </div><!--row ends  -->

		          	</form>
        		</div>
          </div>
        </div>
      </div>
    </section>

    <script>
   	$(document).ready(function(){
    	$('.custom-file-upload').on('click',function(e){
    		$(this).closest(".form-group").find(".file-upload").trigger('click');
    	});
    });
    </script>