    <!-- Footer -->
    <footer class="py-4 violet-blue-bg text-white">
      <!-- Footer Links -->
      <div class="container text-center text-md-left">
        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
            <!-- Links -->
            <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Menu</h6>
            <ul class="list-unstyled small">
              <li>
                <a href="<?php echo base_url(); ?>">Home</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>about">Über Uns</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>dienstleistung">Dienstleistung</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>autos.php">Autos</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>kontakt">Kontakt</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>jobs">Jobs</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>impressum">Impressum</a>
              </li>
              <li>
                <a href="<?php echo base_url(); ?>kopie-von-impressum">AGB</a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
            <!-- Links -->
            <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Öffnungszeiten</h6>
            <ul class="list-unstyled small">
              <li>
                Montag - Freitag:<br>
                09:00 Uhr - 12:00 Uhr<br>
                13:00 Uhr - 20:00 Uhr
              </li>
              <li><br></li>
              <li>
                Samstag:<br>
                09:00 Uhr - 17:00 Uhr
              </li>
              <li><br></li>
              <li>
                Sonntag:<br>
                geschlossen
              </li>
            </ul>
          </div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none">
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
            <!-- Links -->
            <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Kontakt</h6>
            <ul class="list-unstyled small">
              <li>Heidmoosweg 15<br>3049 Säriswil<br>T: 031 503 10 12<br>M: info@automobile-wohlensee.ch</li>
            </ul>
          </div>
          <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none">
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
            <!-- Links -->
            <h6 class="font-weight-bold text-uppercase mt-3 mb-4">Soziale Medien</h6>
            <ul class="list-unstyled small">
              <li>
                <a target="_blank" href="https://www.google.com/search?source=hp&ei=Y3wUXvOfBYjIwALBs4mgBw&q=automobile+wohlensee.ch&oq=automobile+wohlensee.ch&gs_l=psy-ab.3..38.1449.4034..4126...0.0..0.79.1479.23......0....1..gws-wiz.......0j0i131j0i10j0i22i30.ytkoNSAjp8k&ved=0ahUKEwiz3fu3wfHmAhUIJFAKHcFZAnQQ4dUDCAU&uact=5"><img src="<?php echo base_url(); ?>assets/front/images/gplus-icon.png" alt="Gplus"></a> &nbsp; 
                <a target="_blank" href="https://www.facebook.com/automobile.wohlensee/"><img src="<?php echo base_url(); ?>assets/front/images/fb-icon.png" alt="Facebook"></a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
      <!-- Footer Links -->
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">&copy; <?php echo date('Y'); ?>  Erstellt von: ArCa-IT AG
     
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets/front/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/front/js/script.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
      $(function(){
        $('.lazy').unveil();
          var swiper = new Swiper('.swiper-container', {
      cssMode: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination'
      },
      mousewheel: true,
      keyboard: true,
    });
        // var minDate = new Date();
        $( "#datepic" ).datepicker({
          showAnim: 'drop', 
          numberOfMonth: 1,
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
          maxDate: '-18Y',
          changeMonth: true,
          changeYear: true,
          yearRange: "-100:+0"
        });
        $( "#datepic_2" ).datepicker({
          showAnim: 'drop', 
          numberOfMonth: 1,
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
          changeMonth: true,
          changeYear: true,
        });
       $(".auto_submit_item").change(function() {
         $(this).submit();
       });
       $('.select2').select2({
    minimumResultsForSearch: -1
});
     });
    </script>
  </body>
</html>