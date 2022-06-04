<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width"/>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
      font-size: 100%;
      font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
      line-height: 1.65;
    }

    img {
      max-width: 100%;
      margin: 0 auto;
      display: block;
    }

    body, .body-wrap {
      width: 100% !important;
      height: 100%;
      background: #f8f8f8;
    }

    a {
      color: #3B3C95;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .text-center {
      text-align: center;
    }

    .text-right {
      text-align: right;
    }

    .text-left {
      text-align: left;
    }

    .button {
      display: inline-block;
      color: white;
      background: #3B3C95;
      border: solid #3B3C95;
      border-width: 10px 20px 8px;
      font-weight: bold;
      border-radius: 4px;
    }

    .button:hover {
      text-decoration: none;
    }

    h1, h2, h3, h4, h5, h6 {
      margin-bottom: 20px;
      line-height: 1.25;
    }

    h1 {
      font-size: 32px;
    }

    h2 {
      font-size: 28px;
    }

    h3 {
      font-size: 24px;
    }

    h4 {
      font-size: 20px;
    }

    h5 {
      font-size: 16px;
    }

    p, ul, ol {
      font-size: 16px;
      font-weight: normal;
      margin-bottom: 20px;
    }

    td, th {
      font-size: 16px;
      font-weight: normal;
    }

    .container {
      display: block !important;
      clear: both !important;
      margin: 0 auto !important;
      max-width: 580px !important;
    }

    .container table {
      width: 100% !important;
      border-collapse: collapse;
    }

    .container .masthead {
      padding: 80px 0;
      background: #3B3C95;
      color: white;
    }

    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      text-transform: uppercase;
    }

    .container .content {
      background: white;
      padding: 30px 35px;
    }

    .container .content.footer {
      background: none;
    }

    .container .content.footer p {
      margin-bottom: 0;
      color: #888;
      text-align: center;
      font-size: 14px;
    }

    .container .content.footer a {
      color: #888;
      text-decoration: none;
      font-weight: bold;
    }

    .container .content.footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
<table class="body-wrap">
  <tr>
    <td class="container">

      <!-- Message start -->
      <table>
        <tr>
          <td align="center" class="masthead">

            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img
                  src="<?php echo base_url() ?>assets/front/images/logo/autoabo-logo-2.jpg" alt="Logo"></a>
            <h4>Automobile Wohlensee AG</h4>

          </td>
        </tr>
        <tr>
          <td class="content">

            <h2>Hi <?php echo $vorname ?></h2>

            <p>Vielen Dank, dass du dich für das Auto Abo der Automobile Wohlensee AG entschieden hast. Wir haben deine Anfrage erhalten. Wir werden dich so schnell wie möglich kontaktieren, um die Fahrzeugabgabe individuell auf deine Bedürfnisse abzustimmen.</p>

            <h4><?= $vehicle_data['vehicle_brand'] . " " . $vehicle_data['vehicle_name']; ?></h4>
            <table>
              <tr>
                <td style="width:40%;">Kategorie</td>
                <td><?= $vehicle_data['vehicle_category']; ?></td>
              </tr>
              <tr>
                <td>Getriebe</td>
                <td><?= $vehicle_data['transmision_type']; ?></td>
              </tr>
              <tr>
                <td>Kraftstoffart</td>
                <td><?= ucfirst($vehicle_data['vehicle_fuel_type']); ?></td>
              </tr>
              <tr>
                <td>Antrieb</td>
                <td><?= $vehicle_data['vehicle_drive_type']; ?></td>
              </tr>
              <tr>
                <td>Leistung</td>
                <td><?= $vehicle_data['vehicle_engine']; ?></td>
              </tr>
              <tr>
                <td>Dauer</td>
                <td><?= str_replace('month', '', $duration); ?> Monate</td>
              </tr>
              <tr>
                <td>Kilometer</td>
                <td><?= $km; ?> / Monat</td>
              </tr>
              <tr>
                <td>Abholdatum</td>
                <td>
                  <?php if ($available_date != '') {
                    $adate = DateTime::createFromFormat('Y-m-d', $available_date);
                    if (! is_bool($adate)) {
                      echo $adate->format('d.m.Y');
                    }
                  } ?>
                </td>
              </tr>
              <?php if (strlen($promocode) > 0) { ?>
              <tr>
                <td>Gutschein-Code</td>
                <td><?= $promocode; ?></td>
              </tr>
              <?php } ?>
            </table>

            <br/>
            <h4>Monatliche Kosten</h4>
            <table>
              <tr>
                <td style="width:40%;">Monatliche Rate</td>
                <td><?= $price; ?> CHF</td>
              </tr>
            </table>
            <br/>
            <h4>Einmalige Kosten</h4>
            <table>
              <?php if (strtolower($promocode) == strtolower("HERBST2021")) { ?>
                <tr>
                  <td style="width:40%;">Anfangspauschale (Gutschein)</td>
                  <td>0 CHF</td>
                </tr>
              <?php } else { ?>
              <tr>
                <td style="width:40%;">Anfangspauschale</td>
                <td>349 CHF</td>
              </tr>
              <?php } ?>

              <?php if($delivery == "delivery_included") { ?>
              <tr>
                <td style="width:40%;">Heimlieferung</td>
                <td>180 CHF</td>
              </tr>
              <?php } else { ?>
              <tr>
                <td style="width:40%;">Selbstabholung</td>
                <td>0 CHF</td>
              </tr>
              <?php } ?>
            </table>
            <br />
            (inkl. MwSt.)
            <br/><br />
            <h4>Angaben</h4>
            <table>
              <tr>
                <td style="width:40%;">Adresse</td>
                <td>
                  <?= $gender; ?> <?= $vorname; ?> <?= $nachname; ?><br />
                  <?php if (strlen($firma) > 0) {
                    echo $firma . '<br />';
                  } ?>
                  <?php if (strlen($adresszusatz) > 0) {
                    echo $adresszusatz . '<br />';
                  } ?>
                  <?= $strasse; ?> <?= $nr; ?><br />
                  <?= $postleitzahl; ?> <?= $ort; ?><br />
                </td>
              </tr>
              <tr>
                <td>E-Mail</td>
                <td><?= $email; ?></td>
              </tr>
              <tr>
                <td>Telefon</td>
                <td><?= $telefon_nummer; ?></td>
              </tr>
              <tr>
                <td>Geburtsdatum</td>
                <td>
                  <?php if ($datepic != '') {
                    $bdate = DateTime::createFromFormat('Y-m-d', $datepic);
                    if (! is_bool($bdate)) {
                      echo $bdate->format('d.m.Y');
                    }
                  } ?>
                </td>
              </tr>
            </table>
            <br/>

            <p>Bei Fragen oder Unklarheiten stehen wir Ihnen jederzeit per Mail: <a
                  href="mailto:autoabo@automobile-wohlensee.ch">autoabo@automobile-wohlensee.ch</a> oder per Telefon: <a
                  href="tel:0315031012">031 503 10 12</a> zur Verfügung.</p>

            <p><em>Freundliche Grüsse</em></p>
            <p><em>Automobile Wohlensee AG</em></p>

          </td>
        </tr>
      </table>

    </td>
  </tr>
  <tr>
    <td class="container">

      <!-- Message start -->
      <table>
        <tr>
          <td class="content footer" align="center">
            <p>Gesendet von <a href="https://www.automobile-wohlensee.ch/">Automobile Wohlensee AG</a>, Heidmoosweg 15,
              3049 Säriswil</p>
            <p><a href="mailto:info@automobile-wohlensee.ch">info@automobile-wohlensee.ch</a></p>
          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
</body>
</html>
