<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style type="text/css">
    * { margin: 0; padding: 0; font-size: 100%; font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; line-height: 1.65; }
    img { max-width: 100%; margin: 0 auto; display: block; }
    body, .body-wrap { width: 100% !important; height: 100%; background: #f8f8f8; }
    a { color: #3B3C95; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .text-center { text-align: center; }
    .text-right { text-align: right; }
    .text-left { text-align: left; }
    .button { display: inline-block; color: white; background: #3B3C95; border: solid #3B3C95; border-width: 10px 20px 8px; font-weight: bold; border-radius: 4px; }
    .button:hover { text-decoration: none; }
    h1, h2, h3, h4, h5, h6 { margin-bottom: 20px; line-height: 1.25; }
    h1 { font-size: 32px; }
    h2 { font-size: 28px; }
    h3 { font-size: 24px; }
    h4 { font-size: 20px; }
    h5 { font-size: 16px; }
    p, ul, ol { font-size: 16px; font-weight: normal; margin-bottom: 20px; }
    .container { display: block !important; clear: both !important; margin: 0 auto !important; max-width: 580px !important; }
    .container table { width: 100% !important; border-collapse: collapse; }
    .container .masthead { padding: 60px 0; background: #3B3C95; color: white; }
    .container .masthead h1 { margin: 0 auto !important; max-width: 90%; text-transform: uppercase; }
    .container .content { background: white; padding: 30px 35px; }
    .container .content.footer { background: none; }
    .container .content.footer p { margin-bottom: 0; color: #888; text-align: center; font-size: 14px; }
    .container .content.footer a { color: #888; text-decoration: none; font-weight: bold; }
    .container .content.footer a:hover { text-decoration: underline; }
    td, th {
      font-size: 16px;
      font-weight: normal;
    }
  </style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #FFFFFF;">
<!--[if IE]><div class="ie-browser"><![endif]-->
<table class="body-wrap">
  <tr>
    <td class="container">

      <!-- Message start -->
      <table>
        <tr>
          <td align="center" class="masthead">

            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>assets/front/images/logo/automobile-wohlensee-mail.png" alt="Logo" height="70"></a>

          </td>
        </tr>
        <tr>
          <td class="content">

            <h3>Liebes AWAG-Team</h3>

            <p>Soeben hat ein Besucher das Online-Ankaufsformular eingesendet.</p>


            <h4>Fahrzeugdaten</h4>
            <table>
              <tr>
                <td style="width:40%;">Marke</td>
                <td><?= $automarke; ?></td>
              </tr>
              <tr>
                <td>Modell</td>
                <td><?= $modell; ?></td>
              </tr>
              <tr>
                <td>Aufbau</td>
                <td><?= $aufbau; ?></td>
              </tr>
              <tr>
                <td>Farbe</td>
                <td><?= $farbe; ?></td>
              </tr>
              <tr>
                <td>Inverkehrssetzung</td>
                <td><?= $inverkehrssetzung; ?></td>
              </tr>
              <tr>
                <td>Kilometerstand</td>
                <td><?= $kilometerstand; ?></td>
              </tr>
              <tr>
                <td>Treibstoff</td>
                <td><?= $treibstoff; ?></td>
              </tr>
              <tr>
                <td>Getriebeart</td>
                <td><?= $getriebeart; ?></td>
              </tr>
              <tr>
                <td>Typenschein</td>
                <td><?= $typenschein; ?></td>
              </tr>
              <tr>
                <td>Fahrzeugzustand</td>
                <td><?= $fahrzeugzustand; ?></td>
              </tr>
              <tr>
                <td>Preisvorstellung</td>
                <td><?= $preisvorstellung; ?></td>
              </tr>
            </table>
            <br />

            <h4>Persönliche Angaben</h4>
            <table>
              <tr>
                <td style="width:40%;" valign="top">Adresse</td>
                <td>
                  <?= $vorname; ?> <?= $name; ?><br />
                  <?= $adresse; ?><br />
                  <?= $plz_ort; ?><br />
                </td>
              </tr>
              <tr>
                <td>E-Mail</td>
                <td><?= $email; ?></td>
              </tr>
              <tr>
                <td>Telefon</td>
                <td><?= $telefon; ?></td>
              </tr>
            </table>
            <br />


            <p>Der Kunde freut sich über eine rasche Kontaktaufnahme.</p>

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
            <p>Gesendet von <a href="https://www.automobile-wohlensee.ch/">Automobile Wohlensee AG</a>, Heidmoosweg 15, 3049 Säriswil</p>
            <p><a href="mailto:info@automobile-wohlensee.ch">info@automobile-wohlensee.ch</a></p>
          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>
