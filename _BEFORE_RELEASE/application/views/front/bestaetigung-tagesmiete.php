        <style type="text/css">
    	.flip-side-img{width: 350px}
    	  @media (max-width: 991px) {
    .flip-side-img{width: 200px;}
  }
    </style>

    <section id="main" class="bg-white">
      <div class="container p-5">
        <div class="row bg-white">
          <div class="col-md-8">
          	<h1 class="font-weight-bold">
          		<span style="color:#14cc00;">
								<svg style="margin-top:-5px" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> 
							</span> Herzlichen Glückwunsch, Ihre Anfrage zur Anmietung eines Fahrzeugs ist eingegangen.</h1>
							<ul class="list-left-br my-5">
								<li>
									<span class="bg-primary text-white rounded-circle p3"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									Wir haben eine Bestätigungsmail an <strong><?php echo $request[0]['email'] ?></strong> gesendet.
								</li>
								<li>
									<span class="bg-primary text-white rounded-circle p3"><i class="fa fa-phone" aria-hidden="true"></i></span>
									Wir rufen dich unter deiner Nummer <strong><?php echo $request[0]['telefon_nummer']; ?></strong> an, um die Autoübergabe zu koordinieren.
								</li>
								<?php /* ?>
								<li>
									<span class="bg-primary text-white rounded-circle p3"><i class="fa fa-inbox" aria-hidden="true"></i></span>
									Du erhältst von uns die ersten 2 Monatsrechnungen inkl. der Anfangspauschale und Heimlieferung. Du zahlst immer einen Monat im Voraus.
								</li>
								<?php */?> 
								<li>
									<span class="bg-primary text-white rounded-circle p3"><i class="fa fa-key" aria-hidden="true"></i></span>
									Nach deinem Zahlungseingang kannst du schnellstmöglich in deinem neuen Auto losfahren.
								</li>
							</ul>
							<h5 class="mt-5">Können wir helfen?</h5>
							<p>Unser Team hilft dir gerne unter <a href="mailto:autoabo@automobile-wohlensee.ch">autoabo@automobile-wohlensee.ch</a> oder <a href="tel:+41315031012">+41 (0)31 503 10 12</a>.</p>
<?php /*?>
							<button type="button" class="btn btn-primary btn-md my-4 rounded-0 px-4"> Häufige Fragen </button>
<?php */ ?>
          </div>
          <div class="col-md-4 text-center">
          	 <?php $images = explode(',', $request[0]['images']); ?>
          	 <?php if(count($images) > 0){ ?>
             <img class="flip-side-img" src="uploads/<?php echo $image_path ?>/<?php echo $images[0]; ?>" alt="Image">
             <?php } ?>
          </div>
        </div>
      </div>
    </section> 