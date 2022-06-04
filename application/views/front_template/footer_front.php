<!-- Footer -->
<footer class="py-4 violet-blue-bg text-white">
  <!-- Footer Links -->
  <div class="container text-center text-md-left">
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-3 mx-auto d-none d-md-block">
        <!-- Links -->
        <span class="font-weight-bold text-uppercase mt-3 mb-4">Links</span>
        <ul class="list-unstyled small">
          <li>
            <a href="/autos" title="Autos zu verkaufen">Unsere Autos</a>
          </li>
          <li>
            <a href="/autoverkauf" title="Auto verkaufen Bern">Wir verkaufen</a>
          </li>
          <li>
            <a href="/autoankauf" title="Autoankauf Bern">Wir kaufen</a>
          </li>
          <li>
            <a href="/ueber-uns" title="Auto Werkstatt Bern">Unsere Werkstatt</a>
          </li>
          <li>
            <a href="/ueber-uns" title="Automobile Wohlensee bei Bern">Über uns</a>
          </li>
          <li>
            <a href="/kontakt" title="Kontaktieren Sie uns">Kontakt</a>
          </li>
          <hr style="border-color: white;">
          <li>
            <a href="/jobs">Jobs</a>
          </li>
          <li>
            <a href="/impressum">Impressum</a>
          </li>
          <li>
            <a href="/terms">Allgemeine Geschäftsbedigungen</a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
      <div class="col-md-3 mx-auto">
        <!-- Links -->
        <span class="font-weight-bold text-uppercase mt-3 mb-4">Öffnungszeiten</span>
        <ul class="list-unstyled small">
          <li>
            <strong>Montag — Freitag</strong><br>
            <p class="line-height-1">08:00 Uhr — 12:00 Uhr<br>
              13:00 Uhr — 19:00 Uhr</p>
          </li>
          <li>
            <strong>Samstag</strong><br>
            09:00 Uhr — 15:30 Uhr
          </li>
          <!--<li>
            <strong>Sonntag</strong><br>
            geschlossen
          </li>-->
        </ul>
      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-3 mx-auto">
        <!-- Links -->
        <span class="font-weight-bold text-uppercase mt-3 mb-4">Kontakt</span>
        <ul class="list-unstyled small">
          <li>
            <p class="line-height-1">
              Automobile Wohlensee AG<br />
              Heidmoosweg 15<br>
              3049 Säriswil</p>
          </li>
          <li>
            <a class="line-height-1" href="tel:+41315031012">031 503 10 12</a><br>
            <a href="mailto:info@automobile-wohlensee.ch">info@automobile-wohlensee.ch</a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-3 mx-auto">
        <!-- Links -->
        <span class="font-weight-bold text-uppercase mt-3 mb-4">Soziale Medien</span>
        <ul class="list-unstyled small">
          <li>
            <a target="_blank" href="https://www.instagram.com/automobile_wohlensee/" rel="nofollow noreferrer"
               title="Instagram"><i class="fa fa-instagram" style="font-size: 32px;"></i></a>
            <a class="ml-3" target="_blank" href="https://www.facebook.com/automobile.wohlensee/"
               rel="nofollow noreferrer" title="Facebook"><i class="fa fa-facebook" style="font-size: 32px;"></i></a>
            <a class="ml-3" target="_blank" href="https://www.linkedin.com/company/automobile-wohlensee-ag/"
               rel="nofollow noreferrer" title="Linkedin"><i class="fa fa-linkedin-square" style="font-size: 32px;"></i></a>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; <?php echo date('Y'); ?> Automobile Wohlensee AG</div>
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
  $(function () {
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
    $("#datepic").datepicker({
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
      maxDate: '-18Y',
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:-17"
    });
    $("#datepic_2").datepicker({
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
      monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
      monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
        'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
      dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
      dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      firstDay: 1,
      dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      changeMonth: true,
      changeYear: true,
      minDate: '+14D',
    });
    $(".auto_submit_item").change(function () {
      $(this).submit();
    });
    $('.select2').select2({
      minimumResultsForSearch: -1
    });
  });
</script>
</body>
</html>
